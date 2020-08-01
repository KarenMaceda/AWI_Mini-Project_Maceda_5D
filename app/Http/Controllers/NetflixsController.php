<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class NetflixsController extends Controller
{
    public function NetflixsStore() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflixCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $netflixs = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Netflixs.Index', ['netflixs' => $netflixs, 'netflixCount' => $netflixCount]);
    }

    public function AddComment() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $netflix= $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('netflixid')) ]);
        $Comments = $netflix->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('netflixid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/netflixs/".request('netflixid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Netflixs.Details', [ "netflix" => $netflix]);
    }

    //ADMIN

    public function Index() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflixs = $collection->find();  
        return view('Admin.Netflixs.Index', ['netflixs' => $netflixs]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = $collection->find();
        return view('Admin.Netflixs.Create', [ "netflixs" => $netflix ]);
    }

    public function Store() {
        $netflix = [
            "type" => request("type"),
            "title" => request("title"),
            "country" => request("country"),
            "release_year" => request("release_year"),
            "description" => request("description"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $insertOneResult = $collection->insertOne($netflix);
        return redirect("/admin/netflixs");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflixs.Edit', [ "netflix" => $netflix ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = [
            "type" => request("type"),
            "title" => request("title"),
            "country" => request("country"),
            "release_year" => request("release_year"),
            "description" => request("description"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("netflixid"))
        ], [
            '$set' => $netflix
        ]);
        return redirect('/admin/netflixs/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflixs.Delete', [ "netflix" => $netflix ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("netflixid"))
        ]);
        return redirect('/admin/netflixs/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Netflixs;
        $netflix = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Netflixs.Details', [ "netflix" => $netflix ]);
    }

}