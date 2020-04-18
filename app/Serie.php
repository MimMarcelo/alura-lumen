<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * Description of Serie
 *
 * @author marcelo
 */
class Serie extends Model{
    protected $fillable = ['nome'];
    protected $appends = ['links'];

    public function episodios() {
        return $this->hasMany(Episodio::class);
    }
    
    public function getLinksAttribute(): array
    {
        return [
            "self" => "/api/series/{$this->id}",
            "episodios" => "/api/series/{$this->id}/episodios",
        ];
    }
}
