<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 *
 * @property $id
 * @property $comentario
 * @property $cancion_id
 * @property $artista_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Artista $artista
 * @property Cancion $cancion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comentario extends Model
{
    
    static $rules = [
		'comentario' => 'required',
		'cancion_id' => 'required',
		'artista_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comentario','cancion_id','artista_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artista()
    {
        return $this->hasOne('App\Models\Artista', 'id', 'artista_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cancion()
    {
        return $this->hasOne('App\Models\Cancion', 'id', 'cancion_id');
    }
    

}
