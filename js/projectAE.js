var tpoly = {
    project: new Object()
};

(function ( $ ) {
    var d = new Date();
    document.getElementById("goal").innerHTML = 'เป้าหมายประมูลงานปี '+ (d.getFullYear() + 543);
    document.getElementById("goals").innerHTML = 'เป้าหมายประมูลงานปี '+ (d.getFullYear() + 543);

    tpoly.popup = function(value) {
        if(value == 'loading'){
            $('#block').css('display','block');
            $('#loading').fadeIn();
            $('html').css('overflow','hidden');
            $('body').css('overflow','hidden');
        }
        else if(value == 'close'){
            $('#block').css('display','none');
            $('#loading').css('display','none');
            $('html').css('overflow','auto');
            $('body').css('overflow','auto');
        }
    }

    tpoly.project.TurnPages = function() {
        window.location = ("../Progress/progress.php");
    }

    tpoly.project.auctionList = function() {
        tpoly.project.Criteria['mode'] = 'load_auction_list';

        var ajax_config = {
            url: "func/ProjectBiddingSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.project.Criteria,
            beforeSend: function() {
                tpoly.popup('loading');
            }
        }

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            tpoly.auction = response;
            var AuctionList = $('#AuctionList');
            resultSearch = tpoly.auction;
            var html = '';
            html += '<table class="footable table table-stripped toggle-arrow-tiny" border="1" bordercolor="#064c89">';
            html += '<thead>';
            html += '<tr>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:20px;background-color: #001f59;vertical-align: middle;">ลำดับ</th>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:800px;background-color: #001f59;vertical-align: middle;">ชื่อโครงการ</th>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:170px;background-color: #001f59;vertical-align: middle;">เจ้าของโครงการ</th>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:80px;background-color: #001f59;vertical-align: middle;">มูลค่าโครงการ</th>';
            html += '<th class="text-head" colspan="4" style="font-size: 25px;width:300px;background-color: #001f59;vertical-align: middle;">ขั้นตอนกระบวนการ</th>';
            html += '<th class="text-head" colspan="2" style="font-size: 25px;width:80px;background-color: #001f59;vertical-align: middle;">ผลการประมูลงาน</th>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:80px;background-color: #001f59;vertical-align: middle;">สรุปมูลค่าโครงการที่ได้</th>';
            html += '<th class="text-head" rowspan="2" style="font-size: 25px;width:800px;background-color: #001f59;vertical-align: middle;">หมายเหตุ : (ต้องจบราคาเมื่อไหร่)</th>';
            html += '</tr>';
            html += '<tr>';
            html += '<th class="text-head" style="font-size: 25px;width:50px;background-color: #001f59;vertical-align: middle;">คิดราคา</th>';
            html += '<th class="text-head" style="font-size: 25px;width:50px;background-color: #001f59;vertical-align: middle;">เสนอราคา</th>';
            html += '<th class="text-head" style="font-size: 25px;width:50px;background-color: #001f59;vertical-align: middle;">รอประกาศผล</th>';
            html += '<th class="text-head" style="font-size: 25px;width:50px;background-color: #001f59;vertical-align: middle;">ต่อรองราคา</th>';
            html += '<th class="text-head" style="font-size: 25px;width:30px;background-color: #001f59;vertical-align: middle;">ได้</th>';
            html += '<th class="text-head" style="font-size: 25px;width:30px;background-color: #001f59;vertical-align: middle;">ไม่ได้</th>';
            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';
			html += '<tr>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999991</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">โครงการพัฒนาที่ดินราชพัสดุ   (ที่พัก บนเกาะสีชัง)</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">Thaipolycons<br>Thaipolycons</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">99/99/9999</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">99/99/9999</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">99/99/9999</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">99/99/9999</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:red;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>';
			html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">Waiting for auction</td>';
			html += '</tr>';
            for(var i in resultSearch) {
                s = parseInt(i);
                m = (s+1);

                lengthCheck = resultSearch[i]['owner'].length;
                if(lengthCheck <=12) {
                    value = resultSearch[i]['owner'];
                }
                if(lengthCheck > 12 || lengthCheck <= 24) {
                    test1 = resultSearch[i]['owner'].slice(0, 12);
                    test2 = resultSearch[i]['owner'].slice(12, 24);
                    value = test1+'<br>'+test2;
                }
                if(lengthCheck > 24) {
                    test1 = resultSearch[i]['owner'].slice(0, 12);
                    test2 = resultSearch[i]['owner'].slice(12, 24);
                    test3 = resultSearch[i]['owner'].slice(24, 36);
                    value = test1+'<br>'+test2+'<br>'+test3;
                }

                if(resultSearch[i]['yes'] == 1) {
                    yes = '<div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div>';
                    no = '';
                    couclude = resultSearch[i]['couclude'];
                }
                if(resultSearch[i]['no'] == 1) {
                    yes = '';
                    no = '<div style="color:red;"><i class="fa fa-circle" aria-hidden="true"></i></div>';
                    couclude = '';
                }
                if(resultSearch[i]['yes'] == 0 && resultSearch[i]['no'] == 0) {
                    yes = '';
                    no = '';
                    couclude = '';
                }
                html += '<tr>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+ m +'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['site']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+value+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['value']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['thinks']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['offer']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['announce']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['bargain']+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+yes+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+no+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+couclude+'</td>';
                html += '<td class="text-center" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['annotation']+'</td>';
                html += '</tr>';
            }
            html += '</tbody>';
            html += '</table>';

            AuctionList.html(html);
            tpoly.popup('close');
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
