@extends('layouts.master')

@section('content')

    <div class="container" ng-app="MatchingGame">
        <div class="row" ng-controller="MatchinggameController">
            <div class="col-lg-12">                
                <div class="parent">
                <img id="opac" class="hiddenimage" src="{{ asset('assets/media/bigpic.jpg') }}" style="opacity: 0.0" height="680" width="850">
                    <table class="gameboard" border="0">
                        <tr ng-repeat="row in gameboard.rows">
                            <td ng-repeat="square in row.squares" ng-mousedown="handlesquare($event, square)">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #000000" ng-if=" square.isCovered"                         src="{{ asset('assets/media/cover.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 0" src="{{ asset('assets/media/b1.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 1" src="{{ asset('assets/media/b2.png ') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 2" src="{{ asset('assets/media/b3.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 3" src="{{ asset('assets/media/b4.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 4" src="{{ asset('assets/media/b5.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 5" src="{{ asset('assets/media/b6.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 6" src="{{ asset('assets/media/b7.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 7" src="{{ asset('assets/media/b8.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 8" src="{{ asset('assets/media/b9.png') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="background-color: #dfdfdf" ng-if="!square.isCovered && square.content === 9" src="{{ asset('assets/media/b10.png ') }}" height="170" width="170">
                                <img class="imagepos{!{ square.num }!}" style="opacity: 0.0"              ng-if="!square.isCovered && square.content === false" src="{{ asset('assets/media/cover.png') }}" height="170" width="170">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
