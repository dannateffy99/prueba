<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $id_curso
 * @property $notas3
 * @property $notas2
 * @property $notas1
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'id_curso' => 'required',
		'notas3' => 'required',
		'notas2' => 'required',
		'notas1' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_curso','notas3','notas2','notas1','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'id_curso');
    }
    

}
