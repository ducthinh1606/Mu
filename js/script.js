/* Event 1 */
let time1;
var second1;
function baodanh1() {
    document.getElementById("clock_1").innerHTML = "Đang báo danh";
    setTimeout("dienra1()",300000);
}

function dienra1() {
    document.getElementById("clock_1").innerHTML = "Đang diễn ra";
    setTimeout("event1()",600000);
}

function countdown1() {
    second1--;
    if (second1 != 0){
        document.getElementById("clock_1").innerHTML = parseInt(second1/3600) + " Giờ" + parseInt((second1/60)%60) + " phút" + parseInt(second1%60) + " giây";
        setTimeout("countdown1()",1000);
    }else {
        baodanh1();
    }
}

function event1() {
    var now = new Date();
    time1 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time1 < 300){
        second1 = 300-time1;
        countdown1(second1);
    } else if(time1 < 2100){
        second1 = 2100-time1;
        countdown1(second1);
    } else if(time1 < 3900){
        second1 = 3900-time1;
        countdown1(second1);
    } else if(time1 < 5700){
        second1 = 5700-time1;
        countdown1(second1);
    } else if(time1 < 7500){
        second1 = 7500-time1;
        countdown1(second1);
    } else if(time1 < 9300){
        second1 = 9300-time1;
        countdown1(second1);
    } else if(time1 < 14700){
        second1 = 14700-time1;
        countdown1(second1);
    } else if(time1 < 21900){
        second1 = 21900-time1;
        countdown1(second1);
    } else if(time1 < 29100){
        second1 = 29100-time1;
        countdown1(second1);
    } else if(time1 < 36300){
        second1 = 36300-time1;
        countdown1(second1);
    } else if(time1 < 43500){
        second1 = 43500-time1;
        countdown1(second1);
    } else if(time1 < 50700){
        second1 = 50700-time1;
        countdown1(second1);
    } else if(time1 < 57900){
        second1 = 57900-time1;
        countdown1(second1);
    } else if(time1 < 65100){
        second1 = 65100-time1;
        countdown1(second1);
    } else if(time1 < 72300){
        second1 = 72300-time1;
        countdown1(second1);
    } else if(time1 < 74100){
        second1 = 74100-time1;
        countdown1(second1);
    } else if(time1 < 75900){
        second1 = 75900-time1;
        countdown1(second1);
    } else if(time1 < 77700){
        second1 = 77700-time1;
        countdown1(second1);
    } else if(time1 < 79500){
        second1 = 79500-time1;
        countdown1(second1);
    } else if(time1 < 83100){
        second1 = 83100-time1;
        countdown1(second1);
    } else if(time1 < 84900){
        second1 = 84900-time1;
        countdown1(second1);
    } else {
        second1 = 86400 - time1 + 300;
        countdown1(second1);
    }
}
event1();

/* Event 2 */
let time2;
var second2;
function baodanh2() {
    document.getElementById("clock_2").innerHTML = "Đang báo danh";
    setTimeout("dienra2()",300000);
}

function dienra2() {
    document.getElementById("clock_2").innerHTML = "Đang diễn ra";
    setTimeout("event2()",900000);
}

function countdown2() {
    second2--;
    if (second2 != 0){
        document.getElementById("clock_2").innerHTML = parseInt(second2/3600) + " Giờ " + parseInt((second2/60)%60) + " phút " + parseInt(second2%60) + " giây";
        setTimeout("countdown2()",1000);
    }else {
        baodanh2();
    }
}

function event2() {
    var now = new Date();
    time2 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time2 < 900){
        second2 = 900-time2;
        countdown2(second2);
    } else if(time2 < 2700){
        second2 = 2700-time2;
        countdown2(second2);
    } else if(time2 < 4500){
        second2 = 4500-time2;
        countdown2(second2);
    } else if(time2 < 6300){
        second2 = 6300-time2;
        countdown2(second2);
    } else if(time2 < 8100){
        second2 = 8100-time2;
        countdown2(second2);
    } else if(time2 < 9900){
        second2 = 9900-time2;
        countdown2(second2);
    } else if(time2 < 15300){
        second2 = 15300-time2;
        countdown2(second2);
    } else if(time2 < 22500){
        second2 = 22500-time2;
        countdown2(second2);
    } else if(time2 < 29700){
        second2 = 29700-time2;
        countdown2(second2);
    } else if(time2 < 36900){
        second2 = 36900-time2;
        countdown2(second2);
    } else if(time2 < 44100){
        second2 = 44100-time2;
        countdown2(second2);
    } else if(time2 < 51300){
        second2 = 51300-time2;
        countdown2(second2);
    } else if(time2 < 58500){
        second2 = 58500-time2;
        countdown2(second2);
    } else if(time2 < 65700){
        second2 = 65700-time2;
        countdown2(second2);
    } else if(time2 < 72900){
        second2 = 72900-time2;
        countdown2(second2);
    } else if(time2 < 74700){
        second2 = 74700-time2;
        countdown2(second2);
    } else if(time2 < 76500){
        second2 = 76500-time2;
        countdown2(second2);
    } else if(time2 < 78300){
        second2 = 78300-time2;
        countdown2(second2);
    } else if(time2 < 80100){
        second2 = 80100-time2;
        countdown2(second2);
    } else if(time2 < 83700){
        second2 = 83700-time2;
        countdown2(second2);
    } else if(time2 < 85500){
        second2 = 85500-time2;
        countdown2(second2);
    } else {
        second2 = 86400 - time2 + 900;
        countdown2(second2);
    }
}
event2();

/* Event 3 */

let time3;
var second3;
function baodanh3() {
    document.getElementById("clock_3").innerHTML = "Đang báo danh";
    setTimeout("dienra3()",300000);
}

function dienra3() {
    document.getElementById("clock_3").innerHTML = "Đang diễn ra";
    setTimeout("event3()",900000);
}

function countdown3() {
    second3--;
    if (second3 != 0){
        document.getElementById("clock_3").innerHTML = parseInt(second3/3600) + " Giờ " + parseInt((second3/60)%60) + " phút " + parseInt(second3%60) + " giây";
        setTimeout("countdown3()",1000);
    }else {
        baodanh3();
    }
}

function event3() {
    var now = new Date();
    time3 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time3 < 83700){
        if(time3 < 82500) {
            second3 = 82500-time3;
            countdown3(second3);
        }else if(time3 < 82800){
            baodanh3();
        }else if(time3 < 83700){
            dienra3();
        }
    }else{
        second3 = 86400 - time3 + 82500;
        countdown3(second3);
    }
}

event3();

/* Event 4 */

let time4;
var second4;
function baodanh4() {
    document.getElementById("clock_4").innerHTML = "Đang báo danh";
    setTimeout("dienra4()",300000);
}

function dienra4() {
    document.getElementById("clock_4").innerHTML = "Đang diễn ra";
    setTimeout("event4()",900000);
}

function countdown4() {
    second4--;
    if (second4 != 0){
        document.getElementById("clock_4").innerHTML = parseInt(second4/3600) + " Giờ " + parseInt((second4/60)%60) + " phút " + parseInt(second4%60) + " giây";
        setTimeout("countdown4()",1000);
    }else {
        baodanh4();
    }
}

function event4() {
    var now = new Date();
    time4 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time4 < 78300){
        if(time4 < 77100) {
            second4 = 77100-time4;
            countdown4(second4);
        }else if(time4 < 77400){
            baodanh4();
        }else if(time4 < 78300){
            dienra4();
        }
    }else{
        second4 = 86400 - time4 + 77100;
        countdown4(second4);
    }
}

event4();

/* Event 5 */

let time5;
var second5;
function baodanh5() {
    document.getElementById("clock_5").innerHTML = "Đang báo danh";
    setTimeout("dienra5()",300000);
}

function dienra5() {
    document.getElementById("clock_5").innerHTML = "Đang diễn ra";
    setTimeout("event5()",600000);
}

function countdown5() {
    second5--;
    if (second5 != 0){
        document.getElementById("clock_5").innerHTML = parseInt(second5/3600) + " Giờ " + parseInt((second5/60)%60) + " phút " + parseInt(second5%60) + " giây";
        setTimeout("countdown5()",1000);
    }else {
        baodanh5();
    }
}

function event5() {
    var now = new Date();
    time5 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time5 < 42900){
        second5 = 42900 - time5;
        countdown5(second5);
    }else if (time5 < 50100){
        second5 = 50100 - time5;
        countdown5(second5);
    }else if (time5 < 57300){
        second5 = 57300 - time5;
        countdown5(second5);
    }else if (time5 < 64500){
        second5 = 64500 - time5;
        countdown5(second5);
    }else if (time5 < 71700){
        second5 = 71700 - time5;
        countdown5(second5);
    }else if (time5 < 86100){
        second5 = 86100 - time5;
        countdown5(second5);
    }
}

event5();

/* Event 6 */

let time6;
var second6;

function dienra6() {
    document.getElementById("clock_6").innerHTML = "Đang diễn ra";
    setTimeout("event6()",600000);
}

function countdown6() {
    second6--;
    if (second6 != 0){
        document.getElementById("clock_6").innerHTML = parseInt(second6/3600) + " Giờ" + parseInt((second6/60)%60) + " phút" + parseInt(second6%60) + " giây";
        setTimeout("countdown6()",1000);
    }else {
        dienra6();
    }
}

function event6() {
    var now = new Date();
    time6 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time6 < 3600){
        second6 = 3600 - time6;
        countdown6(second6);
    }else if (time6 < 46800){
        second6 = 46800 - time6;
        countdown6(second6);
    }else if (time6 < 57600){
        second6 = 57600 - time6;
        countdown6(second6);
    }else if (time6 < 61200){
        second6 = 61200 - time6;
        countdown6(second6);
    }else if (time6 < 72000){
        second6 = 72000 - time6;
        countdown6(second6);
    }else if (time6 < 75600){
        second6 = 75600 - time6;
        countdown6(second6);
    }else{
        second6 = 86400 - time6 + 3600;
        countdown6(second6);
    }
}

event6();

/* Event 7 */

let time7;
var second7;

function dienra7() {
    document.getElementById("clock_7").innerHTML = "Đang diễn ra";
    setTimeout("event7()",600000);
}

function countdown7() {
    second7--;
    if (second7 != 0){
        document.getElementById("clock_7").innerHTML = parseInt(second7/3600) + " Giờ" + parseInt((second7/60)%60) + " phút" + parseInt(second7%60) + " giây";
        setTimeout("countdown7()",1000);
    }else {
        dienra7();
    }
}

function event7() {
    var now = new Date();
    time7 = now.getSeconds() + now.getMinutes()*60 + now.getHours()*3600;
    if(time7 < 47400){
        if(time7 < 46800) {
            second7 = 46800-time7;
            countdown7(second7);
        }else if(time7 < 47400){
            dienra7();
        }
    }else if (time7 < 69000){
        if(time7 < 68400){
            second7 = 68400-time7;
            countdown7(second7);
        }else if (time7 < 69000){
            dienra7();
        }
    }
    else{
        second7 = 86400 - time7 + 46800;
        countdown7(second7);
    }
}

event7();


/* Click Button */

