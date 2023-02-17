<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BreweryController extends Controller
{
    //creamos una funcion public para retornar nuestra página.
    public function todas(){

        $breweries = Brewery::all();
        return view("cervecerias",["breweries"=>$breweries]);

        
    }

    public function formInput(Request $request){

        $request = $request->validate([
            'name' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'imagen' => '',
            'map' => 'required'
        ]);

        $brewery = $request;

        $user = Auth::user();
        
        if($user == null){
            return back();
        }

        $user->breweries()->create($brewery);

        return redirect()->route("cervecerias");
    }

    public function update(Request $request, $id){
    
        
        $user = Auth::user();

        if (!$user)
            return back();
        

            $request = $request->validate([
               'name' => 'required',
               'capacity' => 'required',
               'description' => 'required',
               'imagen' => '',
               'map' => 'required',
           ]);
           
   
           $brewery = Brewery::findOrFail($id);

           if($user->id != $brewery->user_id)
                return back();
           
           $brewery->name = $request['name'];
           $brewery->capacity = $request['capacity'];
           $brewery->description = $request['description'];
           $brewery->imagen = $request['imagen'];
           $brewery->map = $request['map'];
           $brewery->save();
           return back();
        
    }

    public function delete($id){
        $user = Auth::user();

        if (!$user)
            return back();

        $brewery = Brewery::findOrFail($id);

        if($user->id != $brewery->user_id)
        return back();

        $brewery->delete();

        return redirect('cervecerias');
    }
    

    public function one($id){

        $brewery = Brewery::findOrFail($id);
        //dd($brewery);
        return view('cerveceria', ["brewery"=>$brewery]);
    }
}

