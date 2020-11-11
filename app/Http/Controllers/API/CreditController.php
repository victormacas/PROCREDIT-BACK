<?php

namespace App\Http\Controllers\API;

use App\Models\Credit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $credit= new Credit;
        $credits=$credit->get_credits();
        return $credits;
    }

    public function get_educativo(){
        $credit= new Credit;
        $credits=$credit->get_credito_educativo();
        return $credits;
    }

    public function get_inversion(){
        $credit= new Credit;
        $credits=$credit->get_credito_inversion();
        return $credits;
    }

    public function get_inmobiliario(){
        $credit= new Credit;
        $credits=$credit->get_credito_inmobiliario();
        return $credits;
    }


}
