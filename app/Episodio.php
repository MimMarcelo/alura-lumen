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
    
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];
//    protected $perPage = 0;
    public function serie() {
        return $this->belongsTo(Serie::class);
    }
    
    public function getTemporadaAttribute($temporada): int
    {
        return $temporada;
    }
    
    public function getNumeroAttribute($numero): int
    {
        return $numero;
    }
    
    public function getAssistidoAttribute($assistido): bool
    {
        return $assistido;
    }
    
    public function getSerieIdAttribute($serieId): int
    {
        return $serieId;
    }
    
    public function getLinksAttribute(): array
    {
        return [
            "self" => "/api/episodios/{$this->id}",
            "serie" => "/api/series/{$this->serie_id}",
        ];
    }
}
