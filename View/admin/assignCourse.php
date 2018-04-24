<?php require_once 'lib/header.php';

require_once "../../vendor/autoload.php";
use App\Auth\connect;


?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row " style="background-color: #fff">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="text-bold text-info"><strong>Assign A Course</strong></h2>
                    </header>
                    <div class="panel-body" style="background-color: #eeeeee">
                        <form id="assignCourse" action="../Auth/assingNewCourseValidate.php" class="form-horizontal">

                            <div class="form-group">
                                <label for="department"
                                       class="text-info col-md-4 control-label"><strong>Department</strong></label>
                                <div class="col-md-4">

                                    <select name="department" id="department" class="form-control">
                                        <option value="">Select Department</option>

                                        <?php
                                        $allDpt = new connect;
                                        $data = $allDpt->getDepartment();

                                        foreach ($data as $key => $value) { ?>

                                            <option
                                                value="<?php echo $value['code']; ?>"><?php echo $value['name']; ?></option>

                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="teacher"
                                       class="text-info col-md-4 control-label"><strong>Teacher</strong></label>
                                <div class="col-md-4">

                                    <select name="teacher" id="teacher" class="form-control">
                                        <option value="">Select Teacher</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ctbt"
                                       class="text-info col-md-4  control-label"><strong>Course To Be
                                        Taken</strong></label>
                                <div class="col-md-4">
                                    <input name="ctbt" type="text" class="form-control" id="ctbt"
                                           placeholder="Course To Be Taken">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="rc"
                                       class="text-info col-md-4  control-label"><strong>Remaining
                                        Credit</strong></label>
                                <div class="col-md-4">
                                    <input name="rc" type="text" class="form-control" id="rc"
                                           placeholder="Remaining Credit">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cc"
                                       class="text-info col-md-4 control-label"><strong>Course Code</strong></label>
                                <div class="col-md-4">

                                    <select name="cc" id="cc" class="form-control">
                                        <option value="">Select Course Code</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="c_name" class="text-info col-md-4 control-label"><strong>Course
                                        Name</strong></label>
                                <div class="col-md-4">
                                    <input name="c_name" type="text" class="form-control" id="c_name"
                                           placeholder="Course Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="credit"
                                       class="text-info col-md-4 control-label"><strong>Credit</strong></label>
                                <div class="col-md-4">
                                    <input name="credit" type="text" class="form-control" id="credit"
                                           placeholder="Credit">
                                </div>
                            </div>

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="form-group col-sm-6 col-sm-push-4">
                                <button name="saveCourse" id="assignNewCourse" type="button"
                                        class="btn btn-info btn-default ">
                                    <strong>Assign</strong></button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.hotkeys.js"></script>
<script src="js/bootstrap-wysiwyg.js"></script>
<script src="js/bootstrap-wysiwyg-custom.js"></script>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<script src="js/form-component.js"></script>
<script src="js/scripts.js"></script>
<script src="js/ajax.js"></script>



</body>
</html>
