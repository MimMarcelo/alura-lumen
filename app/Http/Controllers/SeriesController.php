<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of SeriesController
 *
 * @author marcelo
 */
class SeriesController extends Controller 
{
    public function index()
    {   
        return [
            "Lost in the Space",
            "Van Hellsing",
            "Once Upon a Time"
        ];
    }
}
