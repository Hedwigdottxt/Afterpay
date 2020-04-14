<!DOCTYPE html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    body { 
      background-color:#A7F3AF;
    }
    #countholder .link{
      margin-top: 40px;
    }
    
    #countholder a{
      display: inline-block;
      color: black;
      font-size: 20px;
      padding: 20px;
      background-color: black;
      border-radius: 10px;
      text-decoration: none;
    }
    
    #countholder a:hover{
      background: black;
    }
    
    #countholder{
    font-family: 'Poppins';
    color: black;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 64px;
    background-color: #A7F3AF;;
    padding:20px;
    border-radius: 6px;
    margin-bottom:30px;
    line-height: 1.4;
    }
    
    
    #countholder > div{
    padding: 4px 10px;
    border-radius: 3px;
    background: white;
    display: inline-block;
    }
    
    #countholder div > span{
    border-radius: 3px;
    background: white;
    display: inline-block;
    }
    
    #countholder .smalltext{
    padding-top: 5px;
    font-size: 22px;
    }
  </style>
</head>
<body onload="getSeconds();">
  <script>
    var curday;
    var secTime;
    var ticker;
    
    function getSeconds() {
    var nowDate = new Date();
    var dy = 4; //Sunday through Saturday, 0 to 6
    var countertime = new Date(nowDate.getFullYear(),nowDate.getMonth(),nowDate.getDate(),15,0,0); //20 out of 24 hours = 8pm
    
    var curtime = nowDate.getTime(); //current time
    var atime = countertime.getTime(); //countdown time
    var diff = parseInt((atime - curtime)/1000);
    if (diff > 0) { curday = dy - nowDate.getDay() }
    else { curday = dy - nowDate.getDay() -1 } //after countdown time
    if (curday < 0) { curday += 7; } //already after countdown time, switch to next week
    if (diff <= 0) { diff += (86400 * 7) }
    startTimer (diff);
    }
    
    function startTimer(secs) {
    secTime = parseInt(secs);
    ticker = setInterval("tick()",1000);
    tick(); //initial count display
    }
    
    function tick() {
    var secs = secTime;
    if (secs>0) {
      secTime--;
    }
    else {
      clearInterval(ticker);
      getSeconds(); //start over
    }
    
    var days = Math.floor(secs/86400);
    secs %= 86400;
    var hours= Math.floor(secs/3600);
    secs %= 3600;
    var mins = Math.floor(secs/60);
    secs %= 60;
    
    //update the time display
    document.getElementById("days").innerHTML = curday;
    document.getElementById("hours").innerHTML = ((hours < 10 ) ? "0" : "" ) + hours;
    document.getElementById("minutes").innerHTML = ( (mins < 10) ? "0" : "" ) + mins;
    document.getElementById("seconds").innerHTML = ( (secs < 10) ? "0" : "" ) + secs;
    }
  </script>
  <div id="countholder">
    <div><span class="days" id="days"></span><div class="smalltext">Days</div></div>
    <div><span class="hours" id="hours"></span><div class="smalltext">Hours</div></div>
    <div><span class="minutes" id="minutes"></span><div class="smalltext">Minutes</div></div>
    <div><span class="seconds" id="seconds"></span><div class="smalltext">Seconds</div></div>
  </div>
</body> 