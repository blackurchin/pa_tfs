<p class="c">COUNTDOWN</p>
<div id="clockdiv">
    <div>
        <span class="days" id="day"></span>
        <div class="smalltext">Days</div>
    </div>
    <div>
        <span class="hours" id="hour"></span>
        <div class="smalltext">Hours</div>
    </div>
    <div>
        <span class="minutes" id="minute"></span>
        <div class="smalltext">Minutes</div>
    </div>
    <div>
        <span class="seconds" id="second"></span>
        <div class="smalltext">Seconds</div>
    </div>
</div>

<p id="demo"></p>

<style>

    /*body{*/
    /*text-align: center;*/
    /*background: #00ECB9;*/
    /*font-family: sans-serif;*/
    /*font-weight: 100;*/
    /*}*/

    .c{
        color: #396;
        font-weight: 100;
        font-size: 80px;
        /*margin: 40px 0px 40px;*/
        margin-top: 100px;

    }

    #clockdiv{
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 20px;
        margin-left: 20px ;
    }

    #clockdiv > div{
        padding: 8px;
        border-radius: 3px;
        background: #00BF96;
        display: inline-block;
    }

    #clockdiv div > span{
        padding: 13px;
        border-radius: 0px;
        background: #00816A;
        display: inline-block;
    }

    .smalltext{
        padding-top: 5px;
        font-size: 14px;
    }
</style>
<script>

    var deadline = new Date("aug 24, 2020 08:00:00").getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("day").innerHTML =days ;
        document.getElementById("hour").innerHTML =hours;
        document.getElementById("minute").innerHTML = minutes;
        document.getElementById("second").innerHTML =seconds;
        if (t < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "TIME UP";
            document.getElementById("day").innerHTML ='0';
            document.getElementById("hour").innerHTML ='0';
            document.getElementById("minute").innerHTML ='0' ;
            document.getElementById("second").innerHTML = '0'; }
    }, 1000);
</script>