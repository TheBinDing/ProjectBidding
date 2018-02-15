<?php
    @session_start();
    // require("inc/connect.php");
    // require("inc/function.php");
    // require("progressSearch.php");

    // $row_time = mssql_fetch_assoc($query_time);

    // $time_update = new datetime($row_time['pro_update']);
    // $time_update = $time_update->format('d-m-Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="900" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/Prompt.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <title>ความคืบหน้างานประมูลโครงการ</title>
</head>
<body>
    <div class="row">
        <div id="page-wrapper" class="gray-bg" style="background-color: #064c89;">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <div class="ibox-content3 fix-header" style="background-color: #064c89;">
                    <div class="col-xs-6">
                        <p class="text-heads" style="margin-left: 286px;margin-top: 35px;font-size: 25px;">
                            ความคืบหน้าสถานะงานประมูลโครงการ
                        </p>
                        <p class="text-heads" style="margin-left: 286px;font-size: 25px;color: yellow;">
                            บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p class="text-heads" style="margin-right: 68px;margin-top: 45px;font-size: 17px;" id="goals"></p>
                        <p class="text-heads" style="margin-right: 68px;font-size: 17px;">
                            3,300 ลบ.
                        </p>
                    </div>
                </div>
                <div class="ibox-content4" style="background-color: #064c89;">
                    <div class="col-xs-9">
                        <p class="text-heads" style="margin-left: 10em;font-size: 25px;">
                            ความคืบหน้าสถานะงานประมูลโครงการ
                        </p>
                        <p class="text-heads" style="margin-left: 10em;font-size: 25px;color: yellow;">
                            บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p class="text-heads" style="margin-top: 10px;font-size: 17px;" id="goal"></p>
                        <p class="text-heads" style="font-size: 17px;">
                            3,300 ลบ.
                        </p>
                    </div>
                    <br><br><br><br><br>
                    <div style="padding-bottom: 20px;">
                        <button class="open-sendname btn-white btn btn-xs" id="turnPages" onClick="tpoly.project.TurnPages();"><i class="fa fa-link"></i> สถานะโครงการ</button>
                        <div class="pull-right" style="color: yellow;" id="showTime"></div>
                    </div>
                    <div id="AuctionList"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-1"></div>
    </div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/projectAE.js"></script>
<script type="text/javascript">
<!--

    jQuery(function( $ ) {
        tpoly.project.Criteria = {};
        tpoly.project.auctionList();
        tpoly.StartClock24();
    });

//-->
</script>
<html>