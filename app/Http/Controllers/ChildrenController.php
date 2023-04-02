<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
    public function indexChildren() {

        $children = Child::paginate(10);
        return view('children.index', compact('children'));
    }

    public function createChildren() {

        return view('children.create');
    }

    public function storeChildren(Request $request) {

        $children = new Child();

        $children->user_id = auth()->user()->id;
        $children->name = $request->post('name');
        $children->surname = $request->post('surname');
        $children->birth_date = $request->post('birth_date');
        $children->school_year = $request->post('school_year');

        $children->save();

        return redirect()->route('children.index')->with('success', 'Children created successfully!!');
    }

    public function showChildren(Child $child) {
        
        return view('children.show', compact('child'));
    }

    public function editChildren($id) {

        $children = Child::findOrFail($id);
        return view('children.edit', compact('children'));
    }

    public function updateChildren(Request $request, $id) {

        $children = Child::findOrFail($id);
        $children->name = $request->input('name');
        $children->surname = $request->input('surname');
        $children->birth_date = $request->input('birth_date');
        $children->school_year = $request->input('school_year');
        
        $children->save();

        return redirect()->route('children.index')->with('success', 'Children updated successfully!!');
    }

    public function destroyChildren($id) {

        $children = Child::findOrFail($id);

        if($children->user_id != Auth::user()->id) {
            return redirect()->back()->withErrors('message', 'No tienes permiso para eliminar este niño');
        }

        $children->delete();
        return redirect()->route('children.index');
    }
}
