<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    //

    public $table = 'vcs';
    


    public $fillable = [ 'image', 'nom', 'prenom', 'disponiblite', 'cour', 'education', 'technologie', 'language','motivation'];


}
