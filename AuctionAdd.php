<?php
    @session_start();
    // require("inc/connect.php");
    // require("inc/function.php");
    // require("progressSearchAdd.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <title>จัดการข้อมูลประมูลงาน</title>
</head>
<body>
    <div class="row">
        <div id="page-wrapper" class="gray-bg" style="background-color: #064c89;">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1>
                    <p class="text-heads-manage"><i class="fa fa-cogs"></i>  จัดการข้อมูลประมูลงาน</p>
                </h1>
                <div class="ibox-content" style="background-color: #064c89;">
                    <a style="margin-bottom: 20px;" class="btn btn-primary pull-right" id="create-site" role="button" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-plus"></span> เพิ่มประมูลงาน</a>
                    <br>
                    <br>
                    <br>
                    <span class="label label-warning pull-right" style="font-size: 14px;background-color: #FF6A6A;color: #000000;margin-bottom: 20px;margin-right: 10px;">ผลการประมูลไม่ได้</span>
                    <span class="label label-warning pull-right" style="font-size: 14px;background-color: #FFE4B5;color: #000000;margin-right: 10px;">ผลการประมูลได้</span>
                    <table class="footable table table-stripped toggle-arrow-tiny" border="1" bordercolor="#064c89">
                        <thead>
                            <tr>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">ลำดับ</th>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">ชื่อโครงการ</th>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">เจ้าของโครงการ</th>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">มูลค่าโครงการ</th>
                                <th class="text-head-manage" colspan="4" style="background-color: #001f59;vertical-align: middle;">ขั้นตอนกระบวนการ</th>
                                <th class="text-head-manage" colspan="2" style="background-color: #001f59;vertical-align: middle;">ผลการประมูลงาน</th>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">สรุปมูลค่าโครงการที่ได้</th>
                                <th class="text-head-manage" rowspan="2" style="background-color: #001f59;vertical-align: middle;">หมายเหตุ : (ต้องจบราคาเท่าไหร่)</th>
                            </tr>
                            <tr>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">คิดราคา</th>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">เสนอราคา</th>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">รอประกาศผล</th>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">ต่อรองราคา</th>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">ได้</th>
                                <th class="text-head-manage" style="background-color: #001f59;vertical-align: middle;">ไม่ได้</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">1</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            </tr>
                            <tr>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">2</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            </tr>
                            <tr>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">3</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">อาคารวิจัยทางการแพทย์ คณะแพทยศาสตร์ ม.บูรพา</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">นายวัชรชัย สมบุญยิ่ง</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">12/02/2018</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;"><div style="color:green;"><i class="fa fa-circle" aria-hidden="true"></i></div></td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                                <td class="text-center-manage" style="vertical-align: middle;color: #000000;background-color: #E6E6FA;">999.99</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title">เพิ่มข้อมูลโครงการ</h4>
                                </div>
                                <form action="progressSave.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="modal-detail">
                                        <div style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-3 col-md-3"></div>
                                                    <div class="col-lg-3 col-md-3">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS1" value="1">
                                                                <label for="inlineRadio1"> ก่อสร้างโรงไฟฟ้า </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS2" value="2" checked>
                                                                <label for="inlineRadio1"> ก่อสร้างทั่วไป </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS3" value="3">
                                                                <label for="inlineRadio1"> โครงการก่อสร้างจบแล้ว </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <strong><p>โครงการ</p></strong><hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">รหัสโครงการ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="code" id="code">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ชื่อโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="name" id="name" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <strong><p>งานสัญญา</p></strong><hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">มูลค่างาน(ก่อน Vat)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_auction" id="mise_auction" placeholder="999.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ยอดสะสม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_elite" id="mise_elite" placeholder="999.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่เริ่ม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_start" id="mise_start" placeholder="99/99/99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่สิ้นสุด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_end" id="mise_end" placeholder="99/99/99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ทั้งหมด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_total" id="mise_total" placeholder="99.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">เบิกแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_widen" id="mise_widen" placeholder="99.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">งวดที่เบิก</label>
                                                        <i class="fa fa-plus-square-o" role="button" style="margin-left: 10px;" id="inUPs"></i>
                                                        <i style="display: none;margin-left: 10px;" class="fa fa-minus-square-o" role="button" id="inDown"></i>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_widen_period" id="mise_widen_period" placeholder="99.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <label class="control-label">รายละเอียดงวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="description_mise" id="description_mise" placeholder="" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">ตรวจรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_check" id="mise_check" placeholder="99/99/99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">วางบิล</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_bill" id="mise_bill" placeholder="99/99/99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">นัดรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_appointment" id="mise_appointment" placeholder="99/99/99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">ยอดรับ (Net)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_receipt" id="mise_receipt" placeholder="99.99">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">เสร็จแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_complete" id="mise_complete" placeholder="100" onblur="Calnumber()">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">คงเหลือ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_balance" id="mise_balance" placeholder="100">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">P/N</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_pn" id="mise_pn" placeholder="">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <strong><p>งานเพิ่ม<i class="fa fa-plus-square-o" role="button" style="margin-left: 10px;" id="UPs"></i><i style="display: none;margin-left: 10px;" class="fa fa-minus-square-o" role="button" id="Down"></i></p></strong>
                                                <hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">มูลค่างาน(ก่อน Vat)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_auction" id="work_auction" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ยอดสะสม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_elite" id="work_elite" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่เริ่ม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_start" id="work_start" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่สิ้นสุด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_end" id="work_end" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ทั้งหมด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_total" id="work_total" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">เบิกแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_widen" id="work_widen" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">งวดที่เบิก</label>
                                                        <i class="fa fa-plus-square-o" role="button" style="margin-left: 10px;" id="inUPs2"></i>
                                                        <i style="display: none;margin-left: 10px;" class="fa fa-minus-square-o" role="button" id="inDown2"></i>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_widen_period" id="work_widen_period" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <label class="control-label">รายละเอียดงวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="description_work" id="description_work" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">ตรวจรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_check" id="work_check" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">วางบิล</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_bill" id="work_bill" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">นัดรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_appointment" id="work_appointment" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">ยอดรับ (Net)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_receipt" id="work_receipt" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">เสร็จแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_complete" id="work_complete" onblur="Calnumber()" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">คงเหลือ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_balance" id="work_balance" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">P/N</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_pn" id="work_pn" disabled>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" name="Again" id="Again">บันทึก</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal inmodal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title">แก้ไขข้อมูลโครงการ</h4>
                                </div>
                                <form action="progressSave.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="modal-detail">
                                        <div style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-3 col-md-3"></div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">ลำดับ</label>
                                                        <input style="width: 35%;height: 30px;text-align: center;" type="text" name="codeFiled" id="codeFileds" value="<?php echo $row_one['codeFiled']; ?>">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS1s" value="1">
                                                                <label for="inlineRadio1"> ก่อสร้างโรงไฟฟ้า </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS2s" value="2">
                                                                <label for="inlineRadio1"> ก่อสร้างทั่วไป </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="radio" name="g_id" id="GS3s" value="3">
                                                                <label for="inlineRadio1"> โครงการก่อสร้างจบแล้ว </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <strong><p>โครงการ</p></strong><hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">รหัสโครงการ</label>
                                                        <input type="text" class="input-sm form-control" name="code" id="codes" maxlength="15">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ชื่อโครงการ</label>
                                                            <input type="text" class="input-sm form-control" name="name" id="names" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <strong><p>งานสัญญา</p></strong><hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">มูลค่างาน(ก่อน Vat)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_auction" id="mise_auctions">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ยอดสะสม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_elite" id="mise_elites">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่เริ่ม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_start" id="mise_starts">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่สิ้นสุด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_end" id="mise_ends">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ทั้งหมด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_total" id="mise_totals">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">เบิกแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_widen" id="mise_widens">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">งวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_widen_period" id="mise_widen_periods">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <label class="control-label">รายละเอียดงวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="description_mise" id="description_mises">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">ตรวจรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_check" id="mise_checks">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">วางบิล</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_bill" id="mise_bills">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">นัดรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_appointment" id="mise_appointments">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">ยอดรับ (Net)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_receipt" id="mise_receipts">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">เสร็จแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_complete" id="mise_completes" onblur="Calnumber()">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">คงเหลือ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_balance" id="mise_balances">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">P/N</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="mise_pn" id="mise_pns">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <strong><p>งานเพิ่ม<i class="fa fa-plus-square-o" role="button" style="margin-left: 10px;" id="UPsTo"></i><i style="display: none;margin-left: 10px;" class="fa fa-minus-square-o" role="button" id="DownTo"></i></p></strong>
                                                <hr />
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">มูลค่างาน(ก่อน Vat)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_auction" id="work_auctions">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ยอดสะสม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_elite" id="work_elites">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่เริ่ม</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_start" id="work_starts">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">วันที่สิ้นสุด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_end" id="work_ends">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">ทั้งหมด</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_total" id="work_totals">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label class="control-label">เบิกแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_widen" id="work_widens">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">งวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_widen_period" id="work_widen_periods">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <label class="control-label">รายละเอียดงวดที่เบิก</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="description_work" id="description_works">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">ตรวจรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_check" id="work_checks">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">วางบิล</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_bill" id="work_bills">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <label class="control-label">นัดรับ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_appointment" id="work_appointments">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">ยอดรับ (Net)</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_receipt" id="work_receipts">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">เสร็จแล้ว</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_complete" id="work_completes" onblur="Calnumber()">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">คงเหลือ</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_balance" id="work_balances">
                                                        <div class="help-block"></div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <label class="control-label">P/N</label>
                                                        <input style="text-align: center;" type="text" class="input-sm form-control" name="work_pn" id="work_pns">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="pro_id" id="pro_ids">
                                    <button type="submit" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" name="Again" id="Again">บันทึก</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal inmodal fade" id="myModal3" tabindex="-1" role="dialog"    aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <h2><p><center>โปรดยืนยันการลบข้อมูล</center></p></h2>
                                    <input type="hidden" id="KAKA" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" name="trash" id="trash">ลบ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-1"></div>
    </div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/project.js"></script>
<script type="text/javascript">
<!--

    jQuery(function( $ ) {
        tpoly.project.Criteria = {};
        tpoly.project.auctionList();
    });

//-->
</script>
<html>