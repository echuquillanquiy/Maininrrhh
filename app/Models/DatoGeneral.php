<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoGeneral extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //RELACION UNO A UNO

    public function collaborator(){
        return $this->hasOne(Collaborator::class);
    }

    //RELACION UNO A MUCHOS INVERSA

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function amount(){
        return $this->belongsTo(Amount::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }
}
