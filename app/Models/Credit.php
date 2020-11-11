<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    public function get_credits(){
        $result=Credit::get();
        return $result;
    }

    public function get_credito_educativo(){
        $result= Credit::where('nombre','educativo')->get();
        return $result;
    }
    public function get_credito_inmobiliario(){
        $result= Credit::where('nombre','inmobiliario')->get();
        return $result;
    }
    public function get_credito_inversion(){
        $result= Credit::where('nombre','inversion')->get();
        return $result;
    }
}
