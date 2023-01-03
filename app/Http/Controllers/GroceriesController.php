<?php

namespace App\Http\Controllers;
use App\Models\grocery;
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
        
        //$grocery = new Grocery();

        $grocery->name = request('name');
        $grocery->price = request('price');
        $grocery->amount = request('amount');

        $grocery->save();

        return redirect('groceries/index');
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}