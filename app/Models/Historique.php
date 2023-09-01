<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    public function utilisateur(){

        return $this->belongsTo(User::class);

    }

    public function equipes(){

        return $this->belongsTo(Equipe::class);

    }

    public function clients(){
        return $this->belongsTo(Client::class);
    }
}