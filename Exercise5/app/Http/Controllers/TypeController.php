<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function store_type(request $request){
        $validated = $request->validate([
            
            'name' => 'required|max:20',
            'description' => 'required|max:2000',
            
        ]);
        DB::table('type')->insert([
			'name' => $request->name,
			'description' => $request->description,
			
			
		]);
		
		return redirect('/');
    }
}
