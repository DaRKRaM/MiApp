<?php

namespace App\Http\Controllers;
use App\Models\Escort;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEscort;

class EscortController extends Controller
{
    public function index(){

        $escorts = Escort::paginate();

        return view('escorts.index', compact('escorts'));

    }
    public function create(){

        return view('escorts.create');

    }
    public function store(StoreEscort $request){

        /* $escort = new Escort();
        $escort->name  = $request->name;
        $escort->description  = $request->description;
        $escort->category  = $request->category;
        $escort->save(); */

        $escort = Escort::create($request->all());

        return redirect()->route('escorts.escort', $escort);

    }
    public function category($category){

        return view('escorts.category', compact('category'));

    }
    public function show(Escort $escort){

           
        return view('escorts.escort',compact('escort'));

    }
    public function edit(Escort $escort){

     
        return view('escorts.edit',compact('escort'));


    }
    public function update(StoreEscort $request, Escort $escort){




        /* $escort->name = $request->name;
        $escort->category = $request->category;
        $escort->category = $request->category;

        $escort->save(); */
        $escort->update($request->all());

       return redirect()->route('escorts.escort', $escort);
     
     


    }
    public function destroy(Escort $escort){

        $escort->delete();

        return redirect()->route('escorts.index', $escort);


    }
    
}
