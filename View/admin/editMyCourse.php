<?php require_once 'lib/header.php';

require_once "../../vendor/autoload.php";
use App\Auth\connect;

$newObj = new connect();
$course =  $newObj->getCoursebyID($_GET);
?>


<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row " style="background-color: #fff">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="text-bold text-info"><strong>Edit Course Course</strong></h2>
                    </header>
                    <div class="panel-body" style="background-color: #eeeeee">
                        <form id="editCourse" action="../Auth/editCourseByid.php" method="post" class="form-horizontal">


                            <div class="form-group">
                                <label for="code"
                                       class="text-info col-md-4  control-label"><strong>Code</strong></label>
                                <div class="col-md-4">
                                    <input name="code" value="<?php echo $course['code'];?>" type="text" class="form-control" id="code" placeholder="Code">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="text-info col-md-4 control-label"><strong>Name</strong></label>
                                <div class="col-md-4">
                                    <input name="name" value="<?php echo $course['name'];?>" type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="credit"
                                       class="text-info col-md-4 control-label"><strong>Credit</strong></label>
                                <div class="col-md-4">
                                    <input name="credit" value="<?php echo $course['credit'];?>" type="text" class="form-control" id="credit"
                                           placeholder="Credit">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="desc"
                                       class="text-info col-md-4 control-label"><strong>Description<strong></label>
                                <div class="col-md-4">
                                    <textarea name="desc" id="desc" class="form-control" placeholder="Description"><?php echo $course['description'];?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="department"
                                       class="text-info col-md-4 control-label"><strong>Department</strong></label>
                                <div class="col-md-4">

                                    <select name="department" class="form-control">
                                        <option value="">Select Department</option>

                                        <?php
                                        $allDpt = new connect;
                                        $data = $allDpt->getDepartment();
                                        foreach ($data as $key => $value) { ?>

                                            <option value="<?php echo $value['code']; ?>"><?php echo $value['name']; ?></option>

                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="semester" class="text-info col-md-4 control-label"><strong>Semester</strong></label>

                                <div class="col-md-4">
                                    <select name="semester" class="form-control">
                                        <option value="">Select Semester</option>

                                        <?php

                                        $getSemester = new connect();
                                        $semester =  $getSemester->semester();
                                        foreach ($semester as $item=>$value) { ?>

                                            <option value="<?php echo $value['semester'];?>"><?php echo $value['semester'];?></option>

                                        <?php }  ?>
                                    </select>
                                </div>
                            </div>

                            <input name="department_id" type="hidden" class="form-control" value="<?php echo $course['id'];?>">

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="form-group col-sm-6 col-sm-push-4">
                                <button name="saveCourse" id="editCourseByID" type="submit" class="btn btn-info btn-default ">
                                    <strong>Submit</strong></button>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!-- jquery ui -->
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom checkbox & radio-->
<script type="text/javascript" src="js/ga.js"></script>
<!--custom switch-->
<script src="js/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="js/jquery.tagsinput.js"></script>

<!-- colorpicker -->

<!-- bootstrap-wysiwyg -->
<script src="js/jquery.hotkeys.js"></script>
<script src="js/bootstrap-wysiwyg.js"></script>
<script src="js/bootstrap-wysiwyg-custom.js"></script>
<!-- ck editor -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<!-- custom form component script for this page-->
<script src="js/form-component.js"></script>
<!-- custome script for all page -->
<script src="js/scripts.js"></script>
<script src="js/ajax.js"></script>


</body>
</html>
