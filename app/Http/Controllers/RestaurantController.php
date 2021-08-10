<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Session;

class RestaurantController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function list(){
        $data = Restaurant::all();
        return view('list',['data'=>$data]);
    }

    function add(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->address = $request->address;
        $resto->email = $request->email;;
        $resto->save();

        $request->session()->flash('status','Restaurant entered successfully!');

        return redirect('list');
    }

    function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('status','Restaurant has been deleted successfully');
        return redirect('list');
    }

    function edit($id){
        $data = Restaurant::find($id);
        return view('edit',['data' => $data]);
    
    }

    function update(Request $request){
        $data = Restaurant::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        Session::flash('status','Restaurant has been updated successfully');
        return redirect('list'); 
    }
}
