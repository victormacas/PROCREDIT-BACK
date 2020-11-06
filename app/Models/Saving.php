<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    public function  get_saving(){
        $result = Saving::get();
        return $result;
    }

    public function get_flex(){
        $result=Saving::where('name',"flex")->get();
        return $result;
    }
    public function get_dpf(){
        $result=Saving::where('name',"dpf")->get();
        return $result;
    }
}
