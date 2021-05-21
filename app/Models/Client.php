<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //RELACION UNO A MUCHOS

    public function medicals(){
        return $this->hasMany(Medical::class);
    }
}
