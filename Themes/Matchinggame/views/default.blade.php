@extends('layouts.master')

@section('content')
    <div class="container" ng-app="MatchingGame">
        <div class="row" ng-controller="MatchinggameController">
            <div class="col-lg-12">                
                <div class="parent">
                <img id="opac" class="hiddenimage" src="{{ asset('assets/media/default-bkg-image.jpg') }}" style="opacity: 0.0" height="680" width="850">
                    <table class="gameboard" border="0">
                        <tr ng-repeat="row in gameboard.rows">
                            <td ng-repeat="square in row.squares" ng-mousedown="handlesquare($event, square)">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #000000" ng-if=" square.isCovered"                        src="{{ asset('assets/media/default-cover-image.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 0" src="{{ asset('assets/media/default-candy.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 1" src="{{ asset('assets/media/default-super-man.png ') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 2" src="{{ asset('assets/media/default-beachball.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 3" src="{{ asset('assets/media/default-smiley.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 4" src="{{ asset('assets/media/default-sun.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 5" src="{{ asset('assets/media/default-silhouette.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 6" src="{{ asset('assets/media/default-mouth.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 7" src="{{ asset('assets/media/default-panda.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 8" src="{{ asset('assets/media/default-dog.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 9" src="{{ asset('assets/media/default-avatar.png ') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="opacity: 0.0"              ng-if="!square.isCovered && square.content === false" src="{{ asset('assets/media/default-cover-image.png') }}" height="170" width="170">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
