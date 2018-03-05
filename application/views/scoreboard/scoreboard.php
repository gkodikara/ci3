<!DOCTYPE html>
<!-- <html manifest="./manifest.mf"> -->
<html>

<head>
    <script src="<?= base_url(); ?>assets/libraries/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/libraries/easytimer.min.js"></script>
    <script src="<?= base_url(); ?>assets/libraries/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/libraries/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/libraries/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/libraries/bootstrap.css">
    <style>
        li {
            list-style: none;
        }
        
        ul {
            padding-left: 0px;
        }
        
        .col {
            text-align: center;
        }
        
        #scoreA,
        #scoreB {
            font-size: 50px;
            width: 50px;
            margin: 0px 30px 0px 30px;
        }
        
        #shotClock,
        #gameTime,
        .big {
            font-size: 50px;
        }
        
        .medium {
            font-size: 30px;
        }
        
        #onlineStatus {
            position: fixed;
            bottom: 0px;
            right: 0px;
        }
    </style>


</head>

<body>
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
  <a class="nav-link active" id="tab1" data-toggle="tab" href="#game1" role="tab" aria-controls="home" aria-selected="true">Game 1</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab2" data-toggle="tab" href="#game2" role="tab" aria-controls="profile" aria-selected="false">Game 2</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab3" data-toggle="tab" href="#game3" role="tab" aria-controls="contact" aria-selected="false">Game 3</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab4" data-toggle="tab" href="#game4" role="tab" aria-controls="contact" aria-selected="false">Game 4</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab5" data-toggle="tab" href="#game5" role="tab" aria-controls="contact" aria-selected="false">Game 5</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab6" data-toggle="tab" href="#game6" role="tab" aria-controls="contact" aria-selected="false">Game 6</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab7" data-toggle="tab" href="#game7" role="tab" aria-controls="contact" aria-selected="false">Game 7</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab8" data-toggle="tab" href="#game8" role="tab" aria-controls="contact" aria-selected="false">Game 8</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab9" data-toggle="tab" href="#game9" role="tab" aria-controls="contact" aria-selected="false">Game 9</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab10" data-toggle="tab" href="#game10" role="tab" aria-controls="contact" aria-selected="false">Game 10</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab11" data-toggle="tab" href="#game11" role="tab" aria-controls="contact" aria-selected="false">Game 11</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab12" data-toggle="tab" href="#game12" role="tab" aria-controls="contact" aria-selected="false">Game 12</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab13" data-toggle="tab" href="#game13" role="tab" aria-controls="contact" aria-selected="false">Game 13</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab14" data-toggle="tab" href="#game14" role="tab" aria-controls="contact" aria-selected="false">Game 14</a>
</li>
<li class="nav-item">
  <a class="nav-link" id="tab15" data-toggle="tab" href="#game15" role="tab" aria-controls="contact" aria-selected="false">Game 15</a>
</li>

</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="game1" role="tabpanel" aria-labelledby="home-tab">
<div class="container gameboard">
        <div class="row justify-content-md-center">
            <div class="col medium">
                Period 1/4
            </div>
            <div id="chronoGame" class="col">
                <div class="row">
                    <div class="col">Time</div>
                    <div class="values col" id="gameTime">00:10:00</div>
                </div>
                <div>
                    <button class="startButton">Start</button>
                    <button class="pauseButton">Pause</button>
                    <!-- <button class="stopButton">Stop</button> -->
                    <!-- <button class="resetButton">Reset</button> -->
                </div>
            </div>
            <div id="chronoShot" class="col">
                <div class="row">
                    <div class="col">Shot</div>
                    <div class="values col" id="shotClock">00:00:35</div>
                </div>
                <div>
                    <button class="resetButton">Reset</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col big">Team A</div>
                    <div class="col">
                        <button id="fgDownA">-</button>
                        <span id="scoreA">0</span>
                        <button id="fgUpA">+</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <button id="fgDownB">-</button>
                        <span id="scoreB">0</span>
                        <button id="fgUpB">+</button>
                    </div>
                    <div class="col big">Team B</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">Number</div>
                    <div class="col">Name</div>
                    <div class="col">Time</div>
                    <div class="col">Fouls</div>
                    <div class="col">Points</div>
                </div>
                <ul id="sortable1A" class="sortable">
                    <li class="ui-state-default" data-player-id="100" data-player-number="24" data-player-name="Kobe" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">24</div>
                            <div class="col">Kobe</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="0" data-player-name="Westbrook" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">0</div>
                            <div class="col">Westbrook</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="3" data-player-name="Dwayne Wade" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">3</div>
                            <div class="col">Dwayne Wade</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="23" data-player-name="Micheal Jordan" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">23</div>
                            <div class="col">His Airness</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="33" data-player-name="Scottie Pippen" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">33</div>
                            <div class="col">Scottie Pippen</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <hr/>
                    <li class="ui-state-default" data-player-id="100" data-player-number="55" data-player-name="Dikembe" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">55</div>
                            <div class="col">Dikembe</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="42" data-player-name="Vin Baker" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">42</div>
                            <div class="col">Vin Baker</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="32" data-player-name="Shaq" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">32</div>
                            <div class="col">Shaq Diesel</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="22" data-player-name="Drexler" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">22</div>
                            <div class="col">Clyde the Glyde</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="40" data-player-name="Kemp" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">40</div>
                            <div class="col">Shawn Kemp</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">Number</div>
                    <div class="col">Name</div>
                    <div class="col">Time</div>
                    <div class="col">Fouls</div>
                    <div class="col">Points</div>
                </div>
                <ul id="sortable1B">
                    <li class="ui-state-default" data-player-id="100" data-player-number="24" data-player-name="Kobe" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">24</div>
                            <div class="col">Kobe</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="0" data-player-name="Westbrook" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">0</div>
                            <div class="col">Westbrook</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="3" data-player-name="Dwayne Wade" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">3</div>
                            <div class="col">Dwayne Wade</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="23" data-player-name="Micheal Jordan" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">23</div>
                            <div class="col">His Airness</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="33" data-player-name="Scottie Pippen" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">33</div>
                            <div class="col">Scottie Pippen</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <hr/>
                    <li class="ui-state-default" data-player-id="100" data-player-number="55" data-player-name="Dikembe" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">55</div>
                            <div class="col">Dikembe</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="42" data-player-name="Vin Baker" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">42</div>
                            <div class="col">Vin Baker</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="32" data-player-name="Shaq" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">32</div>
                            <div class="col">Shaq Diesel</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="22" data-player-name="Drexler" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">22</div>
                            <div class="col">Clyde the Glyde</div>
                            <div class="col gametime">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                    <li class="ui-state-default" data-player-id="100" data-player-number="40" data-player-name="Kemp" data-player-game-time="00:00" data-player-fouls="0" data-player-points="0">
                        <div class="row">
                            <div class="col">40</div>
                            <div class="col">Shawn Kemp</div>
                            <div class="col">00:00</div>
                            <div class="col">0</div>
                            <div class="col">0</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <button>Confirm Game</button>
    </div>
</div>
<div class="tab-pane fade" id="game2" role="tabpanel" aria-labelledby="profile-tab">
</div>
<div class="tab-pane fade" id="game4" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game5" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game6" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game7" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game8" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game9" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game10" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game11" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game12" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game13" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game14" role="tabpanel" aria-labelledby="contact-tab">...</div>
<div class="tab-pane fade" id="game15" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
   
    <span id="onlineStatus"></span>
    <script>
        $(document).ready(function() {
            checkNetConnection();
            var gameData = localStorage.getItem('gameData');
            var playerData = localStorage.getItem('playerData');
            var pageHtml = localStorage.getItem('pageHtml');
            if (gameData != null && playerData != null) {
                gameData = JSON.parse(gameData);
                playerData = JSON.parse(playerData);

                $(".gameboard").html(pageHtml);

                console.log(gameData);
                console.log(playerData);
                // console.log(pageHtml);
            } else {

            }
            $(".sortable").sortable();
                $(".sortable").disableSelection();
                $(".sortable").on("sortchange", function(event, ui) {
                    fnStoreStats();
                });

            $("#fgUpA").click(function() {
                var TeamAScore = parseInt($("#scoreA").text());
                var NewTeamAScore = TeamAScore + 1;
                $("#scoreA").text(NewTeamAScore);
                fnStoreStats();
            });
            $("#fgDownA").click(function() {
                var TeamAScore = parseInt($("#scoreA").text());
                var NewTeamAScore = TeamAScore - 1;
                $("#scoreA").text(NewTeamAScore);
                fnStoreStats();
            });

            $("#fgUpB").click(function() {
                var TeamBScore = parseInt($("#scoreB").text());
                var NewTeamBScore = TeamBScore + 1;
                $("#scoreB").text(NewTeamBScore);
                fnStoreStats();
            });
            $("#fgDownB").click(function() {
                var TeamBScore = parseInt($("#scoreB").text());
                var NewTeamBScore = TeamBScore - 1;
                $("#scoreB").text(NewTeamBScore);
                fnStoreStats();
            });


            var timer = new Timer();
            $('#chronoGame .startButton').click(function() {
                console.log(timer.getTimeValues().seconds);
                timer.start({
                    countdown: true,
                    startValues: {
                        seconds: 600
                    }
                });
                timerShot.start({
                    countdown: true,
                    startValues: {
                        seconds: 35
                    }
                });
            });
            $('#chronoGame .pauseButton').click(function() {
                timer.pause();
                timerShot.pause();
                fnStoreStats();
            });
            timer.addEventListener('secondsUpdated', function(e) {
                $('#chronoGame .values').html(timer.getTimeValues().toString());
                // console.log(timer.getTimeValues());
                checkNetConnection();
            });
            timer.addEventListener('started', function(e) {
                $('#chronoGame .values').html(timer.getTimeValues().toString());
            });
            timer.addEventListener('reset', function(e) {
                $('#chronoGame .values').html(timer.getTimeValues().toString());
            });

            var timerShot = new Timer();
            $('#chronoShot .startButton').click(function() {
                timerShot.start({
                    countdown: true,
                    startValues: {
                        seconds: 35
                    }
                });
            });

            $('#chronoShot .resetButton').click(function() {
                timerShot.reset();
                fnStoreStats();
            });
            timerShot.addEventListener('secondsUpdated', function(e) {
                $('#chronoShot .values').html(timerShot.getTimeValues().toString());
            });
            timerShot.addEventListener('started', function(e) {
                $('#chronoShot .values').html(timerShot.getTimeValues().toString());
            });
            timerShot.addEventListener('reset', function(e) {
                $('#chronoShot .values').html(timerShot.getTimeValues().toString());
            });
        });

        function fnStoreStats() {
            var oPlayerData = {};
            oPlayerData.teama = {};
            oPlayerData.teamb = {}

            $.each($(".sortable li"), function(iIndex, oObj) {
                var oTempData = $(oObj).data();
                delete oTempData.sortableItem;
                if ($(oObj).parent().attr("id") == "sortableA") {
                    oPlayerData.teama[iIndex] = oTempData;
                } else if ($(oObj).parent().attr("id") == "sortableB") {
                    oPlayerData.teamb[iIndex] = oTempData;
                }
            });

            var sHtml = $(".gameboard").html();

            var oGameData = {};
            oGameData.gameTime = $("#gameTime").text();
            oGameData.shotClock = $("#shotClock").text();
            oGameData.teamAScore = $("#scoreA").text();
            oGameData.teamBScore = $("#scoreB").text();
            // oGameData['teamBFouls'] = $("#foulA").val();
            // oGameData['teamBFouls'] = $("#foulB").val();
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem('gameData', JSON.stringify(oGameData));
                console.log(oPlayerData);
                localStorage.setItem('playerData', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml', sHtml);

                localStorage.setItem('gameData2', JSON.stringify(oGameData));
                localStorage.setItem('playerData2', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml2', sHtml);

                localStorage.setItem('gameData3', JSON.stringify(oGameData));
                localStorage.setItem('playerData3', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml3', sHtml);

                localStorage.setItem('gameData4', JSON.stringify(oGameData));
                localStorage.setItem('playerData4', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml4', sHtml);

                localStorage.setItem('gameData5', JSON.stringify(oGameData));
                localStorage.setItem('playerData5', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml5', sHtml);

                localStorage.setItem('gameData6', JSON.stringify(oGameData));
                localStorage.setItem('playerData6', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml6', sHtml);

                localStorage.setItem('gameData7', JSON.stringify(oGameData));
                localStorage.setItem('playerData7', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml7', sHtml);

                localStorage.setItem('gameData8', JSON.stringify(oGameData));
                localStorage.setItem('playerData8', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml8', sHtml);

                localStorage.setItem('gameData9', JSON.stringify(oGameData));
                localStorage.setItem('playerData9', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml9', sHtml);

                localStorage.setItem('gameData10', JSON.stringify(oGameData));
                localStorage.setItem('playerData10', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml10', sHtml);

                localStorage.setItem('gameData11', JSON.stringify(oGameData));
                localStorage.setItem('playerData11', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml11', sHtml);

                localStorage.setItem('gameData12', JSON.stringify(oGameData));
                localStorage.setItem('playerData12', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml12', sHtml);

                localStorage.setItem('gameData13', JSON.stringify(oGameData));
                localStorage.setItem('playerData13', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml13', sHtml);

                localStorage.setItem('gameData14', JSON.stringify(oGameData));
                localStorage.setItem('playerData14', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml14', sHtml);

                localStorage.setItem('gameData15', JSON.stringify(oGameData));
                localStorage.setItem('playerData15', JSON.stringify(oPlayerData));
                localStorage.setItem('pageHtml15', sHtml);
            } else {
                console.log('No Web Storage Support');
            }
        }

        function checkNetConnection() {
            if (navigator.onLine == true) {
                $("#onlineStatus").html("Online");
                return true;
            } else {
                $("#onlineStatus").html("Offline");
                console.log('Offline');
                return false;
            }
        }
    </script>

    <script>
    </script>
</body>

</html>