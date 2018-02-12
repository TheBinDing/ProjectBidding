var tpoly = {
    project: new Object()
};

(function ( $ ) {
    tpoly.project.TurnPages = function() {
        window.location = ("../Progress/progress2.php");
    }

    tpoly.StartClock24 = function() {
        TheTime = new Date;
        m = TheTime.getMonth();
        y = TheTime.getFullYear();
        m = (parseInt(m)+1);
        y = (parseInt(y)+543);
        document.getElementById("showTime").innerHTML = 'อัพเดท : '+TheTime.getDate()+' / '+m+' / '+y+'  '+tpoly.showFilled(TheTime.getHours()) + ":" +
        tpoly.showFilled(TheTime.getMinutes()) + ":" + tpoly.showFilled(TheTime.getSeconds());
        setTimeout("tpoly.StartClock24()",1000)
    }

    tpoly.showFilled = function(Value) {
        return (Value > 9) ? "" + Value : "0" + Value;
    }
} (jQuery));