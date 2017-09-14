<?php

namespace Modules\Matchinggame\Entities;

//use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;
//use Modules\Router\Traits\Routable;

class MatchingGame extends Model
{
    //use Translatable;
    use MediaRelation;
    //use Routable;
   
    protected $table = 'matchinggame__matchinggames';
    public $translatedAttributes = [];
    protected $fillable = [
        'theme_active',
        'prio',
        'name',
        'description',
        'bkg_image',
        'match_image_0',
        'match_image_1',
        'match_image_2',
        'match_image_3',
        'match_image_4',
        'match_image_5',
        'match_image_6',
        'match_image_7',
        'match_image_8',
        'match_image_9',
        'cover_image',
        'video',
        'from_date',
        'to_date',
    ];

    public function getFile()
    {
        return $this->filesByZone('bkg_image')->first();
    }
}

