<?php
    @session_start();
    $Today = new Datetime();
    $Today = $Today->format('d/m');
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
    <title>จัดการข้อมูลความคืบหน้างานประมูลโครงการ</title>
</head>
<style>
    .showImg {
        width:50%;
        height:100px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #fff;
        background-image: url('loader.gif');
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
                <h1>
                    <div class="col-xs-12">
                        <p class="text-heads-manage"><i class="fa fa-cogs"></i>  จัดการข้อมูลความคืบหน้างานประมูลโครงการ</p>
                    </div>
                </h1>
                <div class="ibox-content" style="background-color: #064c89;">
                    <a style="margin-bottom: 20px;" class="btn btn-primary pull-right" id="create-site" role="button" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-plus"></span> เพิ่มประมูลงาน</a>
                    <br><br><br>
                    <div id="AuctionList"></div>
                    <div class="modal inmodal fade" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title">เพิ่มข้อมูลโครงการ</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-detail">
                                        <div style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ชื่อโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="site" id="site" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">เจ้าของโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="owner" id="owner" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">มูลค่าโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="value" id="value" maxlength="50" placeholder="999.99">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <!-- <strong><p>ขั้นตอนกระบวนการ</p></strong><hr/> -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">คิดราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="thinks" id="thinks" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">เสนอราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="offer" id="offer" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">รอประกาศผล</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="announce" id="announce" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ต่อรองราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="bargain" id="bargain" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <!-- <strong>ผลการประมูลงาน</strong><hr/> -->
                                                    <div class="col-lg-2 col-md-2">
                                                        <label class="control-label" for="projectprogress-name">ผลการประมูลงาน</label>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="hidden" id="result_y" />
                                                                <input type="radio" name="results" id="yes" onclick="tpoly.projectAdd.setresults(1);">
                                                                <label for="inlineRadio1"> ได้ </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <label class="control-label" for="projectprogress-name">&nbsp;</label>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="hidden" id="result_n" />
                                                                <input type="radio" name="results" id="no" onclick="tpoly.projectAdd.setresults(2);">
                                                                <label for="inlineRadio1"> ไม่ได้ </label>
                                                            </div>
                                                        </div></div>
                                                    <div class="col-lg-8 col-md-8"></div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">สรุปมูลค่าโครงการที่ได้</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="couclude" id="couclude" maxlength="50" placeholder="999.99">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">หมายเหตุ: (ต้องจบราคาเมื่อไหร่)</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" name="annotation" id="annotation" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" data-dismiss="modal" onclick="tpoly.projectAdd.addAuction();">
                                        <span aria-hidden="true">บันทึก</span>
                                    </button>
                                </div>
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
                                    <h4 class="modal-title">เพิ่มข้อมูลโครงการ</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-detail">
                                        <div style="padding: 20px;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ชื่อโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="sites" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">เจ้าของโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="owners" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">มูลค่าโครงการ</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="values" maxlength="50" placeholder="999.99">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <!-- <strong><p>ขั้นตอนกระบวนการ</p></strong><hr/> -->
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">คิดราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="thinkss" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">เสนอราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="offers" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">รอประกาศผล</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="announces" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">ต่อรองราคา</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="bargains" maxlength="50" placeholder="<?php echo $Today.'/61'?>">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <!-- <strong>ผลการประมูลงาน</strong><hr/> -->
                                                    <div class="col-lg-2 col-md-2">
                                                        <label class="control-label" for="projectprogress-name">ผลการประมูลงาน</label>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="hidden" id="result_y" />
                                                                <input type="radio" name="results" id="yess" onclick="tpoly.projectAdd.setresults(1);">
                                                                <label for="inlineRadio1"> ได้ </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <label class="control-label" for="projectprogress-name">&nbsp;</label>
                                                        <div class="form-group">
                                                            <div class="radio radio-info radio-inline">
                                                                <input type="hidden" id="result_n" />
                                                                <input type="radio" name="results" id="nos" onclick="tpoly.projectAdd.setresults(2);">
                                                                <label for="inlineRadio1"> ไม่ได้ </label>
                                                            </div>
                                                        </div></div>
                                                    <div class="col-lg-8 col-md-8"></div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">สรุปมูลค่าโครงการที่ได้</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="coucludes" maxlength="50" placeholder="999.99">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group field-projectprogress-name required">
                                                            <label class="control-label" for="projectprogress-name">หมายเหตุ: (ต้องจบราคาเมื่อไหร่)</label>
                                                            <input style="text-align: center;" type="text" class="input-sm form-control" id="annotations" maxlength="50">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="codes" />
                                    <button type="submit" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" data-dismiss="modal" onclick="tpoly.projectAdd.updateAuction();">
                                        <span aria-hidden="true">บันทึก</span>
                                    </button>
                                </div>
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
                                    <input type="hidden" id="delete" />
                                    <button type="button" class="btn btn-white" data-dismiss="modal">ยกเลิก</button>
                                    <button class="btn btn-primary" data-dismiss="modal" onClick="tpoly.projectAdd.deleteAuction();">
                                        <span aria-hidden="true">ลบ</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-1"></div>
    </div>
    <div id="block" class="sweet-overlay">
        <div id="loading" class="shows" style="display:none;">
            <div style="margin:20% auto;width: 250px;">
                <div class="showImg"></div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/projectAdd.js"></script>
<script type="text/javascript">
<!--

    jQuery(function( $ ) {
        tpoly.projectAdd.Criteria = {};
        tpoly.projectAdd.auctionList();
    });

//-->
</script>
<html>