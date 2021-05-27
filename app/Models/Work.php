<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'estado'];
    protected $withCount = ['applicants'];

    const PUBLICADO = 1;
    const TERMINADO = 2;

    //Qeury scoopes

    public function scopeType($query, $type_id){
        if ($type_id){
            return $query->where('type_id', $type_id);
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    //RELACION UNO A MUCHOS INVERSA
    public function interviewer(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function type(){
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

}
