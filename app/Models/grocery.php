<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\grocery;

class grocery extends Model
{
    use HasFactory;

    public function printGroceries(){
        foreach (grocery::all() as $grocery) {
            echo $grocery->name;
        };
    }
}
