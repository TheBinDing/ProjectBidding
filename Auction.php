<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
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
    <title>ความคืบหน้าโครงการ</title>
</head>
<body>
    <div class="row">
        <div id="page-wrapper" class="gray-bg" style="background-color: #064c89;">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                    <p class="text-heads" style="font-size: 25px;">
                        ประมูลงาน
                    </p>
                    <p class="text-heads" style="font-size: 25px;color: yellow;">
                        บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)
                    </p>
                <div style="padding-bottom: 20px;">
                    <div class="radio radio-info radio-inline">
                        <button class="open-sendname btn-white btn btn-xs" id="turnPages" onClick="tpoly.project.TurnPages();">สถานะโครงการ</button>
                    </div>
                    <div class="pull-right" style="color: yellow;" id="showTime"></div>
                </div>
                <table class="footable table table-stripped toggle-arrow-tiny" border="1" bordercolor="#064c89">
                    <thead>
                        <tr>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">ลำดับ</th>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">ชื่อโครงการ</th>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">เจ้าของโครงการ</th>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">มูลค่าโครงการ</th>
                            <th class="text-heads" colspan="4" style="background-color: #001f59;vertical-align: middle;">ขั้นตอนกระบวนการ</th>
                            <th class="text-heads" colspan="2" style="background-color: #001f59;vertical-align: middle;">ผลการประมูลงาน</th>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">สรุปมูลค่าโครงการที่ได้</th>
                            <th class="text-heads" rowspan="2" style="background-color: #001f59;vertical-align: middle;">หมายเหตุ : (ต้องจบราคาเท่าไหร่)</th>
                        </tr>
                        <tr>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">คิดราคา</th>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">เสนอราคา</th>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">รอประกาศผล</th>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">ต่อรองราคา</th>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">ได้</th>
                            <th class="text-heads" style="background-color: #001f59;vertical-align: middle;">ไม่ได้</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">1</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                        </tr>
                        <tr>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">2</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                        </tr>
                        <tr>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">3</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-star" aria-hidden="true"></i></div></td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            <td class="text-centers" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                        </tr>
                    </tbody>
                </table>
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
        tpoly.StartClock24();
    });

//-->
</script>
</body>
<html>