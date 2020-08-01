<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class ToysController extends Controller
{
    public function ToysStore() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toyCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $toys = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Toys.Index', ['toys' => $toys, 'toyCount' => $toyCount]);
    }

    //User

    public function AddComment() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $toy= $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('toyid')) ]);
        $Comments = $toy->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('toyid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/toys/".request('toyid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Toys.Details', [ "toy" => $toy]);
    }

    //ADMIN

    public function Index() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toys = $collection->find();  
        return view('Admin.Toys.Index', ['toys' => $toys]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = $collection->find();
        return view('Admin.Toys.Create', [ "toys" => $toy ]);
    }

    public function Store() {
        $toy = [
            "product_name" => request("product_name"),
            "manufacturer" => request("manufacturer"),
            "price" => request("price"),
            "description" => request("description"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $insertOneResult = $collection->insertOne($toy);
        return redirect("/admin/toys");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Toys.Edit', [ "toy" => $toy ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = [
            "product_name" => request("product_name"),
            "manufacturer" => request("manufacturer"),
            "price" => request("price"),
            "description" => request("description"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("toyid"))
        ], [
            '$set' => $toy
        ]);
        return redirect('/admin/toys/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Toys.Delete', [ "toy" => $toy ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("toyid"))
        ]);
        return redirect('/admin/toys/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->AWI_Database_Miniproject->Toys;
        $toy = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Toys.Details', [ "toy" => $toy ]);
    }

}