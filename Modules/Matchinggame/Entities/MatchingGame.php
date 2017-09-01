<?php

namespace Modules\Matchinggame\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class MatchingGame extends Model
{
    use Translatable;

    protected $table = 'matchinggame__matchinggames';
    public $translatedAttributes = [];
    protected $fillable = [];
}
