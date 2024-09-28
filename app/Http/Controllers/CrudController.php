<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
class CrudController extends Controller{
    public function show(){
        $clients = Client::all();
        return view('show', ['clients'=>$clients]);
    }
    public function create(){
        return view("create");
    }
    public function store(){
        $client = new Client();
        $client->name = request()->name;
        $client->email = request()->email;
        $client->save();
        return to_route('show');
    }
    public function edit($clientId){
        $client = Client::find($clientId);
        return view("edit", ["client"=>$client, "clientId"=>$clientId]);
    }
    public function update($clientId){
        $name = request()->name;
        $email = request()->email;
        $client = Client::find($clientId);
        $client->update([
            "name"=>$name,
            "email"=>$email
        ]);
        return to_route("show");
    }
}
