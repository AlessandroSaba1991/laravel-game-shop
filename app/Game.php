<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    /* per assegnare valori in massa */
    protected $fillable = ['title','description','thumb','cover_image'];
}
