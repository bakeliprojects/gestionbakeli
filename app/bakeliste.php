<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bakeliste extends Model
{
   


    //
    protected $table = 'bakelistes';

        protected $fillable = [
        'image','nom', 'prenom', 'disponiblite', 'cour', 'education','technologie', 'languages', 'motivation'
    ];

} //
