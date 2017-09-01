<?php

namespace Modules\Matchinggame\Entities;

use Illuminate\Database\Eloquent\Model;

class MatchingGameTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'matchinggame__matchinggame_translations';
}
