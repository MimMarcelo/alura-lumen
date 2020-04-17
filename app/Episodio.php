<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Description of Episodio
 *
 * @author marcelo
 */
class Episodio extends Model{
    
    protected $fillable = ['temporada', 'numero', 'assistido'];
    
    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
