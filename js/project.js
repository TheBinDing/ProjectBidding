var tpoly = {
    project: new Object()
};

(function ( $ ) {
    var d = new Date();
    document.getElementById("goal").innerHTML = 'เป้าหมายประมูลงานปี '+ (d.getFullYear() + 543);

    tpoly.project.TurnPages = function() {
        window.location = ("../Progress/progress2.php");
    }

    tpoly.project.auctionList = function() {
        tpoly.project.Criteria['mode'] = 'load_auction_list';

        var ajax_config = {
            url: "",
            dataType: "",
            type: "POST",
            data: tpoly.project.Criteria,
        }
        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            console.log(response);
        });
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