<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $name
 * @property $estado
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Nota[] $notas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'name' => 'required',
		'estado' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','estado','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notas()
    {
        return $this->hasMany('App\Models\Nota', 'id_curso', 'id');
    }
    

}
