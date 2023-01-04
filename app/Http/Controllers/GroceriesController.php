<?php

namespace App\Http\Controllers;
use App\Models\Grocery;
use Illuminate\Http\Request;


class GroceriesController extends Controller {
    public function index() {
        $groceries = Device::all();
        return view("groceries/index");
    }

    public function create() {
        return view("groceries/create");
    }

    public function store() {
        echo "You called the store method on the GroceriesController";

        $attributes = request()->validate([
            'name' => 'required|min:2|unique:groceries,name',
            'price' => 'required|numeric',
            'amount' => 'required|gt:0|integer',
        ]);

        Grocery::create($attributes);

        return redirect('groceries/index')->with('succes', 'Product Saved');
    }

    public function edit($id) {
        //pass correct data to edit page
        $grocery = Grocery::findOrFail('id');
        return view("groceries/edit");
    }

    public function update($id) {
        $attributes = request()->validate([
            'name' => 'required|min:2|unique:groceries,name',
            'price' => 'required|numeric',
            'amount' => 'required|gt:0|integer',
        ]);

        $grocery = Grocery::findOrFail($id);

        $grocery->name =  $request->get('name');
        $grocery->price = $request->get('price');
        $grocery->amount = $request->get('amount');
        $grocery->save();

        return redirect('groceries/index')->with('succes', 'Product Updated');
    }

    public function destroy($id) {
        $grocery = Grocery::findOrFail('id');
        $grocery->delete();

        return redirect('groceries/index')->with('succes', 'Product Deleted');
    }
}


//http://estebanpayret.com/laravel-crud-create-read-update-and-delete/