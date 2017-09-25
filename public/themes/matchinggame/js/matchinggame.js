app = angular.module('MatchingGame', []);

app.config(function ($interpolateProvider, $httpProvider) {
    $interpolateProvider.startSymbol('{!{');
    $interpolateProvider.endSymbol('}!}');
    $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest"
});

app.controller('MatchinggameController', ['$scope', '$interval', function ($scope, $interval) {
    $scope.gameboard = createGameboard();
    $scope.haswon = false;
    $scope.stopgame = false;
    $scope.par = false;
    $scope.two = false;
    $scope.squarenum1 = null;
    $scope.squarenum2 = null;


    $scope.handlesquare = function (event, square) {

        var s;
        var notCovered = 0;
        var c;
        var r;
        var donotopenyet = false;

        if ($scope.stopgame !== true) {
            if ($scope.haswon === true) $scope.stopgame = true;
           

            if ($scope.par === true) {
                c = $scope.squarenum1 % $scope.gameboard.gamecols;
                r = Math.floor($scope.squarenum1 / $scope.gameboard.gamecols);
                s = getSquare($scope.gameboard, c, r);
                s.content = false;
                c = $scope.squarenum2 % $scope.gameboard.gamecols;
                r = Math.floor($scope.squarenum2 / $scope.gameboard.gamecols);
                s = getSquare($scope.gameboard, c, r);
                s.content = false;
                donotopenyet = true;
            }
            if ($scope.two === true && $scope.par === false) {
                c = $scope.squarenum1 % $scope.gameboard.gamecols;
                r = Math.floor($scope.squarenum1 / $scope.gameboard.gamecols);
                s = getSquare($scope.gameboard, c, r);
                s.isCovered = true;
                c = $scope.squarenum2 % $scope.gameboard.gamecols;
                r = Math.floor($scope.squarenum2 / $scope.gameboard.gamecols);
                s = getSquare($scope.gameboard, c, r);
                s.isCovered = true;
                donotopenyet = true;
            }

            $scope.par = false;
            $scope.two = false;
            if (donotopenyet === false) {
                square.isCovered = false;
                for (var row = 0; row < $scope.gameboard.gamerows; row++) {
                    for (var column = 0; column < $scope.gameboard.gamecols; column++) {
                        s = getSquare($scope.gameboard, column, row);
                        //kolla inte rutan jag just klickade i
                        if (s.num !== square.num) {
                            //Kolla om det finns ett par
                            if (s.isCovered === false && s.content == square.content && s.content !== false) {
                                $scope.par = true;
                                $scope.squarenum1 = square.num;
                                $scope.squarenum2 = s.num;
                            }
                            // kolla om det finns två öppna rutor
                            if (s.isCovered === false && s.content != square.content && s.content !== false) {
                                $scope.par = false;
                                $scope.two = true;
                                $scope.squarenum1 = square.num;
                                $scope.squarenum2 = s.num;
                            }
                            if (s.isCovered === false) notCovered++;
                        }
                    }
                }
            }
            //Vunnit spelet?
            if (notCovered == $scope.gameboard.gamerows * $scope.gameboard.gamecols - 1) {
                $scope.haswon = true;
            }
        }
    };
}]);

function createGameboard() {
    var gameboard = {};
    gameboard.rows = [];
    gameboard.gamerows = 4;
    gameboard.gamecols = 5;


    var randomPairs = createRandomPairs(gameboard);

    for (var i = 0; i < gameboard.gamerows; i++) {  //row
        var row = {};
        row.squares = [];
        for (var j = 0; j < gameboard.gamecols; j++) {  //col
            var square = {};
            square.isCovered = true;
            square.num = j + i * gameboard.gamecols;
            square.content = randomPairs[square.num];
            row.squares.push(square);
        }
        gameboard.rows.push(row);
    }
    //visa inte bakgrundsbilden förrän den är övertäckt
    document.getElementById('opac').style.opacity = "1.0";

    return gameboard;
};

function createRandomPairs(gameboard) {
    var images = [];

    for (var i = 0; i < (gameboard.gamerows * gameboard.gamecols) / 2; i++) {
        images[i * 2] = i;
        images[i * 2 + 1] = i;
    }

    for (var i = 0; i < 100; i++) {
        var a = Math.round(Math.random() * (gameboard.gamerows * gameboard.gamecols - 1));
        var b = Math.round(Math.random() * (gameboard.gamerows * gameboard.gamecols - 1));
        var t;
        t = images[a];
        images[a] = images[b];
        images[b] = t;
    }
    return images;
};

function getSquare(gameboard, column, row) {
    return gameboard.rows[row].squares[column];
};
