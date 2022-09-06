<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(){
    	$items = DB::table('items')->paginate(2);
        $items= DB::table("items") 
    ->join ("type", "items.type_id","=","type.id")
    ->select (DB::raw('items.id, items.name, items.qty, items.price,type.name as jenis, 
    (items.qty * items.price) as jumlah'))
    ->orderBy("items.price", "asc")->paginate(2);
        
 
    	return view('index', ['items' => $items]);
        // $items = Item::get();
        
        // return view("items.index", compact($items));
    }

    public function index_d(){
    	// $items = DB::table('items')->paginate(2);
        $items= DB::table("items") 
    ->join ("type", "items.type_id","=","type.id")
    ->select (DB::raw('items.id, items.name, items.qty, items.price,type.name as jenis, 
    (items.qty * items.price) as jumlah'))
    ->orderBy("items.price", "desc")->paginate(2);

    $types = DB::table('type')->paginate(2);
 
    	return view('index',['items' => $items], ['types'=> $types]);
        // $items = Item::get();
        
        // return view("items.index", compact($items));
    }

    public function create(){
        return view ("create");
    }

    public function store(request $request){
        $validated = $request->validate([
            
            'name' => 'required|max:20',
            'qty' => 'required|max:20',
            'price' => 'required|max:8',
            'type_id' => 'required|max:8'
        ]);
        
        if($request->hasFile('image'))
        {
            $destination_path = 'public/assets/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request -> file('image')->storeAs($destination_path,$image_name);

            DB::table('items')->insert([
                'name' => $request->name,
                'qty' => $request->qty,
                'price' => $request->price,
                "type_id"=> $request ->type_id,
                'image'=> $image_name
                
                
            ]);

        }
        
        
		
		return redirect('/');
    }

    public function update(request $request){
        $validated = $request->validate([
            
            'name' => 'required|max:20',
            'qty' => 'required|max:20',
            'price' => 'required|max:8',
            'type_id' => 'required|max:8'
            
        ]);

    DB::table('items')->where('id',$request->id)->update([
		'name' => $request->name,
		'qty' => $request->qty,
		'price' => $request->price,
        "type_id"=> $request ->type_id 
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
    public function cari(Request $request)
	{
		
		$search = $request->search;
 
    	
		$items= DB::table('items')
		->where('name','like',"%".$search."%")
		->paginate(5);
 
    		
		return view('index',['items' => $items]);
 
	}
}
