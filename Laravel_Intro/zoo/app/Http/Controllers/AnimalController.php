<?php

namespace Zoo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Zoo\Animal as Animal;

class AnimalController extends Controller
{
    public function display($id){

    	$animals = DB::select("SELECT * FROM animal where id = ?", [$id]);
    	//print_r($animals) ;

    	return view('Animal', ['name' => $animals[0]->name, 'type' => $animals[0]->type, 'gender' => $animals[0]->gender, 'age' => $animals[0]->age, 'height' => $animals[0]->height]);
    }

    public function show(){

    	return view('animal.Add');
    }

    public function add(Request $request){

    	$type = $request->input('type');
    	$name = $request->input('name');
    	$gender = $request->input('gender');
    	$age = $request->input('age');
    	$height = $request->input('height');

    	$animals = DB::table('animal')->insert([
    		['type' => $type, 
    		 'name' => $name,
    		 'gender' => $gender,
    		 'age' => $age,
    		 'height' => $height]
    	]);

    	if($request){
    		return view('animal.Add');
    		echo "A new animal has been created";
    	}else{
    		return view('animal.Add');
    	}
    	
    }

    public function list(){

    	$animals = Animal::orderBy('id', 'ASC')->get();

    	return view('animal.List')->with('animals', $animals);
    	
    }

    public function delete($id){

    	$animal = Animal::find($id);
    	$animal->delete();

    	echo $animal->name . "has been deleted";

    	//return back()->with('info', 'The animal has been deleted');

    	return redirect()->route('list');

    }

    public function edit($id){

        $animal = Animal::find($id);

        return view('animal.Edit')->with('animal', $animal);

    }

    public function update($id, Request $request){

        $animal = Animal::find($id);

        $animal->type = $request->input('type');
        $animal->name = $request->input('name');
        $animal->gender = $request->input('gender');
        $animal->age = $request->input('age');
        $animal->height = $request->input('height');

        $animal->save();

        return redirect()->route('list');

    }


}