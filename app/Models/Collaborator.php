<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{

    protected $guarded = ['id', 'estado'];
    use HasFactory;

    const ACEPTADO = 1;
    const RECHAZADO = 2;

    //RELACION UNO A MUCHOS INVERSA
    public function departament(){
        return $this->belongsTo(Departament::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function ubigee(){
        return $this->belongsTo(Ubigee::class);
    }

    //RELACION MUCHOS A MUCHOS
    public function trainings(){
        return $this->hasMany(Training::class);
    }

    public function datogenerals(){
        return $this->hasMany(DatoGeneral::class);
    }

    public function medicals(){
        return $this->hasMany(Medical::class);
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
