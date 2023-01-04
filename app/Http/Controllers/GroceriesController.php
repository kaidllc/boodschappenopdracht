<?php

namespace App\Http\Controllers;
use App\Models\Grocery;
use App\Models\Category;
use Illuminate\Http\Request;


class GroceriesController extends Controller {
    public function index() {
        $groceries = Grocery::all();

        return view("groceries.index", compact("groceries"));
    }

    public function create() {
        $categories = Category::all();
        return view("groceries.create", compact("categories"));
    }

    public function store() {
        echo "You called the store method on the GroceriesController";

        $attributes = request()->validate([
            'name' => 'required|min:2|unique:groceries,name',
            'category_id' => 'required',
            'price' => 'required|decimal:0,2',
            'amount' => 'required|gt:0|integer',
        ]);

        Grocery::create($attributes);

        return redirect('groceries')->with('succes', 'Product Saved');
    }

    public function edit($id) {
        $grocery = Grocery::findOrFail($id);
        return view("groceries.edit", compact('grocery'));
    }

    public function update($id) {
        $attributes = request()->validate([
            'name' => 'required|min:2|unique:groceries,name',
            'category_id' => 'required',
            'price' => 'required|decimal:0,2',
            'amount' => 'required|gt:0|integer',
        ]);

        $grocery = Grocery::findOrFail($id);

        $grocery->name =  $request->get('name');
        $grocery->category_id =  $request->get('category_id');
        $grocery->price = $request->get('price');
        $grocery->amount = $request->get('amount');
        $grocery->save();

        return redirect('groceries')->with('succes', 'Product Updated');
    }

    public function destroy($id) {
        $grocery = Grocery::findOrFail($id);
        $grocery->delete();

        return redirect('groceries')->with('succes', 'Product Deleted');
    }
}


//http://estebanpayret.com/laravel-crud-create-read-update-and-delete/