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
        
        .scoreA,
        .scoreB {
            font-size: 40px;
            width: 50px;
            margin: 0px 30px 0px 30px;
        }
        
        #shotClock,
        #gameTime,
        .big {
            font-size: 40px;
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
<?php for($i = 1; $i <= 20; $i++): ?>
<li class="nav-item">
  <a class="nav-link <?= $i == 1 ? 'active' : ''?>" id="tab<?= $i; ?>" data-toggle="tab" href="#game<?= $i; ?>" role="tab" aria-selected="true">Game <?= $i; ?></a>
</li>
<?php endfor; ?>


</ul>
<div class="tab-content" id="myTabContent">
<?php for($i = 1; $i <= 20; $i++): ?>
<div class="tab-pane fade show <?= $i == 1 ? 'active' : ''?>" id="game<?= $i; ?>" role="tabpanel" aria-labelledby="home-tab">
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
                        <button class="fgDownA">-</button>
                        <span class="scoreA">0</span>
                        <button class="fgUpA">+</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <button class="fgDownB">-</button>
                        <span class="scoreB">0</span>
                        <button class="fgUpB">+</button>
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
                <ul id="sortable<?= $i; ?>A" class="sortable">
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
                <ul id="sortable<?= $i; ?>B" class="sortable">
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
    <?php endfor; ?>
</div>
   
    <span id="onlineStatus"></span>
    <script>
    
        $(document).ready(function() {
            checkNetConnection();
            var gameData = localStorage.getItem('gameData');
            var playerData = localStorage.getItem('playerData');
            var playerRoster = localStorage.getItem('playerRoster');
            
            if (gameData != null && playerData != null && playerRoster != null) {
                gameData = JSON.parse(gameData);
                playerData = JSON.parse(playerData);
                playerRoster = JSON.parse(playerRoster);
                // $(".sortable").html('');
                $.each(playerRoster, function(iIndex, oObj){
                    // $("#" + iIndex).html(oObj);
                });
                $(".sortable").sortable();
                $(".sortable").disableSelection();
                $(".sortable").on("sortchange", function(event, ui) {
                    fnStoreStats();
                });
            } else {
                $(".sortable").sortable();
                $(".sortable").disableSelection();
                $(".sortable").on("sortchange", function(event, ui) {
                    fnStoreStats();
                });
            }
            $(".fgUpA").click(function(e) {
                var TeamAScore = parseInt($(e.target).prev(".scoreA").text());
                var NewTeamAScore = TeamAScore + 1;
                $(e.target).prev(".scoreA").text(NewTeamAScore);
                fnStoreStats();
            });
            $(".fgDownA").click(function(e) {
                var TeamAScore = parseInt($(e.target).next(".scoreA").text());
                var NewTeamAScore = TeamAScore - 1;
                $(e.target).next(".scoreA").text(NewTeamAScore);
                fnStoreStats();
            });

            $(".fgUpB").click(function(e) {
                var TeamBScore = parseInt($(e.target).prev(".scoreB").text());
                var NewTeamBScore = TeamBScore + 1;
                $(e.target).prev(".scoreB").text(NewTeamBScore);
                fnStoreStats();
            });
            $(".fgDownB").click(function(e) {
                var TeamBScore = parseInt($(e.target).next(".scoreB").text());
                var NewTeamBScore = TeamBScore - 1;
                $(e.target).next(".scoreB").text(NewTeamBScore);
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
            oPlayerData.teamb = {};

            $.each($(".sortable li"), function(iIndex, oObj) {
                var oTempData = $(oObj).data();
                delete oTempData.sortableItem;
                if ($(oObj).parent().attr("id") == "sortableA") {
                    oPlayerData.teama[iIndex] = oTempData;
                } else if ($(oObj).parent().attr("id") == "sortableB") {
                    oPlayerData.teamb[iIndex] = oTempData;
                }
            });

            var sHtml = {};
            $.each($(".sortable"), function(iIndex, oObj){
                sHtml[$(oObj).attr("id")] = $(oObj).html();
            });

            var oGameData = {};
            oGameData.gameTime = $("#gameTime").text();
            oGameData.shotClock = $("#shotClock").text();
            oGameData.teamAScore = $("#scoreA").text();
            oGameData.teamBScore = $("#scoreB").text();
            // oGameData['teamBFouls'] = $("#foulA").val();
            // oGameData['teamBFouls'] = $("#foulB").val();
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem('gameData', JSON.stringify(oGameData));
                localStorage.setItem('playerData', JSON.stringify(oPlayerData));
                localStorage.setItem('playerRoster', JSON.stringify(sHtml));

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