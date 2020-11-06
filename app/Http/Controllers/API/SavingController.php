<?php

namespace App\Http\Controllers\API;

use App\Models\Saving;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavingController extends Controller
{

    public function index()
    {
        $saving = new Saving;
        $savings= $saving->get_saving();
        return $savings;
    }
    public function get_flex(){
        $flex_saving= new Saving;
        $flex_savings=$flex_saving->get_flex();
        return $flex_savings;
    }
    public function get_dpf(){
        $flex_saving= new Saving;
        $flex_savings=$flex_saving->get_dpf();
        return $flex_savings;
    }


}
