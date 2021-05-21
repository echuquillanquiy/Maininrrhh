<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded = ['id', 'estado'];
    use HasFactory;

    const PUBLICADO = 1;
    const TERMINADO = 2;

    //RELACION UNO A MUCHOS INVERSA
    public function interviewer(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(Type::class);
    }


    //RELACION UNO A MUCHOS

    public function requirements(){
        return $this->hasMany(Requirement::class);
    }

    //RELACION MUCHOS A MUCHOS
    public function applicants(){
        return $this->belongsToMany(User::class);
    }

    //RELACION UNO A UNO POLIMORFICA

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
