<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function collaborator(){
        return $this->belongsTo(Collaborator::class);
    }
}
