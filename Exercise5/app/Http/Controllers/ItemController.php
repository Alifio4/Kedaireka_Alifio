<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(){
    	$items = DB::table('items')->get();
        
 
    	return view('index', ['items' => $items]);
        // $items = Item::get();
        
        // return view("items.index", compact($items));
    }

    public function create(){
        return view ("create");
    }

    public function store(request $request){
        DB::table('items')->insert([
			'name' => $request->name,
			'type' => $request->type,
			'price' => $request->price,
			
		]);
		
		return redirect('/');
    }

    public function update(request $request){
    // $item = DB::table('items')->where('id',$id)->get();

    DB::table('items')->where('id',$request->id)->update([
		'name' => $request->name,
		'type' => $request->type,
		'price' => $request->price
	]);
   

	
	return redirect('/');
    }
    
    Public function edit($id){
        // $items = DB::table('items')->where('id',$id)->get();
        // DB::table('items')->where('id',$id)->update([
        //     'name' => 'macan'
        // ]);
        // return redirect('/');
        $items= Item::FindorFail($id);
        return view ('edit',compact('items'));
    
 
    	// $items = DB::table('items')->where('id',$id)->get();
        // return view('edit', ['items' => $items]);
        

    }

    public function delete($id)
{
	DB::table('items')->where('id',$id)->delete();
		
	return redirect('/');
}
}
