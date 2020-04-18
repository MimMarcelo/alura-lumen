<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Serie;
/**
 * Description of SeriesController
 *
 * @author marcelo
 */
class SeriesController extends Controller 
{
    public function __construct() {
        parent::__construct(Serie::class);
    }    
}
