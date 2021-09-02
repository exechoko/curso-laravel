<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    // Relacion de Muchos a Uno
    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
