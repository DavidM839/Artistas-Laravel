<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artista
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancion[] $cancions
 * @property Comentario[] $comentarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Artista extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancions()
    {
        return $this->hasMany('App\Models\Cancion', 'artista_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'artista_id', 'id');
    }
    

}
