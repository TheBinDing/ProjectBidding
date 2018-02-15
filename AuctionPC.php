<?php
    @session_start();
    // require("inc/connect.php");
    // require("inc/function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/Prompt.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <title>ความคืบหน้างานประมูลโครงการ</title>
</head>
<style>
    .showImg {
        width:50%;
        height:100px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        background-image: url('img/loader.gif');
        background-repeat: no-repeat;
        background-position:center 50%;
    }

    .shows {
        position:fixed;
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        z-index:99;
        display: none;
    }
</style>
<body>
    <div class="row">
        <div id="page-wrapper" class="gray-bg" style="background-color: #064c89;">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <div class="col-xs-10">
                    <p class="text-heads" style="margin-left: 10em;font-size: 25px;">
                        ความคืบหน้าสถานะงานประมูลโครงการ
                    </p>
                    <p class="text-heads" style="margin-left: 10em;font-size: 25px;color: yellow;">
                        บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                    </p>
                </div>
                <div class="col-xs-2">
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
        <div class="col-xs-6 col-sm-1"></div>
    </div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/project.js"></script>
<script type="text/javascript">
<!--

    jQuery(function( $ ) {
        tpoly.project.Criteria = {};
        // tpoly.project.auctionList();
        tpoly.StartClock24();
    });

//-->
</script>
</body>
<html>