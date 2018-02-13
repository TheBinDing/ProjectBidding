var tpoly = {
    projectAdd: new Object()
};

(function ( $ ) {
    // var d = new Date();
    // document.getElementById("goal").innerHTML = 'เป้าหมายประมูลงานปี '+ (d.getFullYear() + 543);

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

    tpoly.projectAdd.setresults = function(int) {
        if(int == 1) {
            $('#result_y').val(1);
            $('#result_n').val(0);
        }
        if(int == 2) {
            $('#result_y').val(0);
            $('#result_n').val(1);
        }
    }

    tpoly.projectAdd.auctionList = function() {
        tpoly.projectAdd.Criteria['mode'] = 'load_auction_list';

        var ajax_config = {
            url: "func/ProjectBiddingSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.projectAdd.Criteria,
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
            html += '<th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">ลำดับ</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:300px;background-color: #001f59;vertical-align: middle;">ชื่อโครงการ</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:170px;background-color: #001f59;vertical-align: middle;">เจ้าของโครงการ</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:80px;background-color: #001f59;vertical-align: middle;">มูลค่าโครงการ</th>';
            html += '<th class="text-head-manage" colspan="4" style="width:300px;background-color: #001f59;vertical-align: middle;">ขั้นตอนกระบวนการ</th>';
            html += '<th class="text-head-manage" colspan="2" style="width:80px;background-color: #001f59;vertical-align: middle;">ผลการประมูลงาน</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:80px;background-color: #001f59;vertical-align: middle;">สรุปมูลค่าโครงการที่ได้</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:200px;background-color: #001f59;vertical-align: middle;">หมายเหตุ : (ต้องจบราคาเท่าไหร่)</th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:25px;background-color: #001f59;vertical-align: middle;"></th>';
            html += '<th class="text-head-manage" rowspan="2" style="width:25px;background-color: #001f59;vertical-align: middle;"></th>';
            html += '</tr>';
            html += '<tr>';
            html += '<th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">คิดราคา</th>';
            html += '<th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">เสนอราคา</th>';
            html += '<th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">รอประกาศผล</th>';
            html += '<th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">ต่อรองราคา</th>';
            html += '<th class="text-head-manage" style="width:30px;background-color: #001f59;vertical-align: middle;">ได้</th>';
            html += '<th class="text-head-manage" style="width:30px;background-color: #001f59;vertical-align: middle;">ไม่ได้</th>';
            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';
            for(var i in resultSearch) {
                s = parseInt(i);
                m = (s+1);
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
                html += '<tr>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+ m +'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['site']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['owner']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['value']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['thinks']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['offer']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['announce']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['bargain']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+yes+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+no+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+couclude+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">'+resultSearch[i]['annotation']+'</td>';
                html += '<td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">';
                html += '<a class="edits" data-toggle="modal" data-target="#myModal2" onclick="tpoly.projectAdd.loadAuctionAE('+resultSearch[i]['id']+');">';
                html += '<a class="edits" data-toggle="modal" data-target="#myModal3" onclick="tpoly.projectAdd.deleteAuctionAE('+resultSearch[i]['id']+');">';
                html += '<i class="fa fa-pencil-square-o"></i></a></td>';
                html += '</tr>';
            }
            html += '</tbody>';
            html += '</table>';

            AuctionList.html(html);
            tpoly.popup('close');
        });
    }

    tpoly.projectAdd.loadAuctionAE = function(id) {
        tpoly.projectAdd.Criteria['mode'] = 'load_auction_ae';
        tpoly.projectAdd.Criteria['id'] = id;

        var ajax_config = {
            url: "func/ProjectBiddingSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.projectAdd.Criteria,
            beforeSend: function() {
                tpoly.popup('loading');
            }
        }

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            tpoly.popup('close');
            $('#sites').val(response[0]['site']);
            $('#owners').val(response[0]['owner']);
            $('#values').val(response[0]['value']);
            $('#thinkss').val(response[0]['thinks']);
            $('#offers').val(response[0]['offer']);
            $('#announces').val(response[0]['announce']);
            $('#bargains').val(response[0]['bargain']);
            $('#coucludes').val(response[0]['couclude']);
            $('#annotations').val(response[0]['annotation']);
            $('#codes').val(response[0]['id']);
            if(response[0]['yes'] == 1) {
                document.getElementById("yess").checked = true;
                $('#result_y').val(1);
                $('#result_n').val(0);
            }
            if(response[0]['no'] == 1) {
                document.getElementById("nos").checked = true;
                $('#result_y').val(0);
                $('#result_n').val(1);
            }
        });
    }

    tpoly.projectAdd.addAuction = function() {
        tpoly.projectAdd.Criteria['mode'] = 'add_auction';
        tpoly.projectAdd.Criteria['site'] = $('#site').val();
        tpoly.projectAdd.Criteria['owner'] = $('#owner').val();
        tpoly.projectAdd.Criteria['value'] = $('#value').val();
        tpoly.projectAdd.Criteria['thinks'] = $('#thinks').val();
        tpoly.projectAdd.Criteria['offer'] = $('#offer').val();
        tpoly.projectAdd.Criteria['announce'] = $('#announce').val();
        tpoly.projectAdd.Criteria['bargain'] = $('#bargain').val();
        tpoly.projectAdd.Criteria['yes'] = $('#result_y').val();
        tpoly.projectAdd.Criteria['no'] = $('#result_n').val();
        tpoly.projectAdd.Criteria['couclude'] = $('#couclude').val();
        tpoly.projectAdd.Criteria['annotation'] = $('#annotation').val();

        var ajax_config = {
            url: "func/ProjectBiddingSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.projectAdd.Criteria,
            beforeSend: function() {
                tpoly.popup('loading');
            }
        }

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            tpoly.projectAdd.auctionList();
        });
    }

    tpoly.projectAdd.updateAuction = function() {
        tpoly.projectAdd.Criteria['mode'] = 'update_auction';
        tpoly.projectAdd.Criteria['id'] = $('#codes').val();
        tpoly.projectAdd.Criteria['site'] = $('#sites').val();
        tpoly.projectAdd.Criteria['owner'] = $('#owners').val();
        tpoly.projectAdd.Criteria['value'] = $('#values').val();
        tpoly.projectAdd.Criteria['thinks'] = $('#thinkss').val();
        tpoly.projectAdd.Criteria['offer'] = $('#offers').val();
        tpoly.projectAdd.Criteria['announce'] = $('#announces').val();
        tpoly.projectAdd.Criteria['bargain'] = $('#bargains').val();
        tpoly.projectAdd.Criteria['yes'] = $('#result_y').val();
        tpoly.projectAdd.Criteria['no'] = $('#result_n').val();
        tpoly.projectAdd.Criteria['couclude'] = $('#coucludes').val();
        tpoly.projectAdd.Criteria['annotation'] = $('#annotations').val();

        var ajax_config = {
            url: "func/ProjectBiddingSearch.php",
            dataType: "json",
            type: "POST",
            data: tpoly.projectAdd.Criteria,
            beforeSend:function() {
                tpoly.popup('loading');
            }
        }

        var get_ajax = $.ajax(ajax_config);
        get_ajax.done(function(response) {
            tpoly.projectAdd.auctionList();
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
