<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;
use Illuminate\Validation\Rules;

class MonsterController extends Controller
{
    public function index()
    {
        $data = Monster::all();

        return view('monsters.index', compact('data'));
    }

    /* ---------------- */
    


    public function show(Monster $monster){

        

        return view('monsters.show', compact('monster'));
    }

    /* ---------------- */

    public function create(){

        return view('monsters.create');
        
    }
    
    public function store(Request $request)
    {
        /* $request->validate($this->validation) */;

        $monsterForm = $request->all();

        $monster = new Monster();
        $monster->fill($monsterForm);
        $monster->save();

        return redirect()->route('monsters.index');
    }
    
    /* ---------------- */
    
    public function edit(Monster $monster)
    {
        return view('monsters.edit', compact('monster'));
    }

    /* ---------------- */
    
    public function update(Request $request, Monster $monster)
    {
        $data = $request->all();
        //$request->validate($this->validationData);
        $monster->update($data);
        return redirect()->route('monsters.show', $monster->id);
    }

    /* ---------------- */
    
    public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect()->route('monsters.index');
    }
}