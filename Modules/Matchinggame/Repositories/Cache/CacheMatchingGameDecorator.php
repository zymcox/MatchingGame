<?php

namespace Modules\Matchinggame\Repositories\Cache;

use Modules\Matchinggame\Repositories\MatchingGameRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheMatchingGameDecorator extends BaseCacheDecorator implements MatchingGameRepository
{
    public function __construct(MatchingGameRepository $matchinggame)
    {
        parent::__construct();
        $this->entityName = 'matchinggame.matchinggames';
        $this->repository = $matchinggame;
    }
}
