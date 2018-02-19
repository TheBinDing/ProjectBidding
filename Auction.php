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
                    <div class="col-xs-9">
                        <p class="text-heads" style="margin-left: 286px;margin-top: 35px;font-size: 57px;">
                            ความคืบหน้าสถานะงานประมูลโครงการ
                        </p>
                        <p class="text-heads" style="margin-left: 286px;font-size: 57px;color: yellow;">
                            บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p class="text-heads" style="margin-right: 68px;margin-top: 45px;font-size: 49px;" id="goals"></p>
                        <p class="text-heads" style="margin-right: 68px;font-size: 49px;">
                            3,300 ลบ.
                        </p>
                    </div>
                    <div style="padding-bottom: 20px;">
                        <button class="open-sendname btn-white btn btn-xs" style="font-size: 28px;" id="turnPages" onClick="tpoly.project.TurnPages();"><i class="fa fa-link"></i> สถานะโครงการ</button>
                        <div class="pull-right" style="color: yellow;font-size: 28px;" id="showTime"></div>
                    </div>
					<table class="footable table table-stripped toggle-arrow-tiny" border="1" bordercolor="#064c89">
						<thead>
							<tr>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:85px;background-color: #001f59;vertical-align: middle;">ลำดับ</th>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:330px;background-color: #001f59;vertical-align: middle;">ชื่อโครงการ</th>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:150px;background-color: #001f59;vertical-align: middle;">เจ้าของโครงการ</th>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:95px;background-color: #001f59;vertical-align: middle;">มูลค่า</th>
								<th class="text-head" colspan="4" style="font-size: 25px;width:200px;background-color: #001f59;vertical-align: middle;">ขั้นตอนกระบวนการ</th>
								<th class="text-head" colspan="2" style="font-size: 25px;width:80px;background-color: #001f59;vertical-align: middle;">ผลการประมูล</th>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:90px;background-color: #001f59;vertical-align: middle;">มูลค่างาน<br>ที่ได้</th>
								<th class="text-head" rowspan="2" style="font-size: 25px;width:315px;background-color: #001f59;vertical-align: middle;">หมายเหตุ :<br> (ต้องจบราคาเมื่อไหร่)</th>
							</tr>
							<tr>
								<th class="text-head" style="font-size: 25px;width:140px;background-color: #001f59;vertical-align: middle;">คิดราคา</th>
								<th class="text-head" style="font-size: 25px;width:140px;background-color: #001f59;vertical-align: middle;">เสนอ</th>
								<th class="text-head" style="font-size: 25px;width:140px;background-color: #001f59;vertical-align: middle;">รอประกาศ</th>
								<th class="text-head" style="font-size: 25px;width:140px;background-color: #001f59;vertical-align: middle;">ต่อรอง</th>
								<th class="text-head" style="font-size: 25px;width:10px;background-color: #001f59;vertical-align: middle;">Y</th>
								<th class="text-head" style="font-size: 25px;width:10px;background-color: #001f59;vertical-align: middle;">N</th>
							</tr>
						</thead>
					</table>
                </div>
                <div class="ibox-content4" style="background-color: #064c89;">
                    <div class="col-xs-9">
                        <p class="text-heads" style="margin-left: 10em;font-size: 44px;">
                            ความคืบหน้าสถานะงานประมูลโครงการ
                        </p>
                        <p class="text-heads" style="margin-left: 10em;font-size: 30px;color: yellow;">
                            บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p class="text-heads" style="margin-top: 10px;font-size: 20px;" id="goal"></p>
                        <p class="text-heads" style="">
                            3,300 ลบ.
                        </p>
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