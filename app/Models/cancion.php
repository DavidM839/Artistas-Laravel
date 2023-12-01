<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cancion
 *
 * @property $id
 * @property $nombre
 * @property $album
 * @property $artista_id
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Artista $artista
 * @property Comentario[] $comentarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cancion extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'album' => 'required',
		'artista_id' => 'required',
		'precio' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','album','artista_id','precio','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artista()
    {
        return $this->hasOne('App\Models\Artista', 'id', 'artista_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'cancion_id', 'id');
    }
    
}
