<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //RELACION UNO A UNO
    public function collaborator(){
        return $this->belongsTo(Collaborator::class);
    }

    //RELACION UNO A MUCHOS INVERSA

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
