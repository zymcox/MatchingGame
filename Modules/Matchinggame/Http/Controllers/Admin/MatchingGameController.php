<?php

namespace Modules\Matchinggame\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Matchinggame\Entities\MatchingGame;
use Modules\Matchinggame\Http\Requests\CreateMatchingGameRequest;
use Modules\Matchinggame\Http\Requests\UpdateMatchingGameRequest;
use Modules\Matchinggame\Repositories\MatchingGameRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class MatchingGameController extends AdminBaseController
{
    /**
     * @var MatchingGameRepository
     */
    private $matchinggame;

    public function __construct(MatchingGameRepository $matchinggame)
    {
        parent::__construct();

        $this->matchinggame = $matchinggame;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$matchinggames = $this->matchinggame->all();

        return view('matchinggame::admin.matchinggames.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('matchinggame::admin.matchinggames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateMatchingGameRequest $request
     * @return Response
     */
    public function store(CreateMatchingGameRequest $request)
    {
        $this->matchinggame->create($request->all());

        return redirect()->route('admin.matchinggame.matchinggame.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('matchinggame::matchinggames.title.matchinggames')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  MatchingGame $matchinggame
     * @return Response
     */
    public function edit(MatchingGame $matchinggame)
    {
        return view('matchinggame::admin.matchinggames.edit', compact('matchinggame'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MatchingGame $matchinggame
     * @param  UpdateMatchingGameRequest $request
     * @return Response
     */
    public function update(MatchingGame $matchinggame, UpdateMatchingGameRequest $request)
    {
        $this->matchinggame->update($matchinggame, $request->all());

        return redirect()->route('admin.matchinggame.matchinggame.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('matchinggame::matchinggames.title.matchinggames')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MatchingGame $matchinggame
     * @return Response
     */
    public function destroy(MatchingGame $matchinggame)
    {
        $this->matchinggame->destroy($matchinggame);

        return redirect()->route('admin.matchinggame.matchinggame.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('matchinggame::matchinggames.title.matchinggames')]));
    }
}
