<?php require_once 'lib/header.php';
require_once "../../vendor/autoload.php";
use App\Auth\connect;

?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="text-bold text-info"><strong>Enroll A Course</strong></h2>
                    </header>
                    <div class="panel-body">
                        <form id="enrollCourse" action="../Auth/enrollCourse.php" method="post" class="form-horizontal">

                            <div class="form-group">
                                <label for="studentReg"
                                       class="col-md-4 text-info control-label"><strong>Student Reg.
                                        No.</strong></label>
                                <div class="col-md-4">
                                    <select name="studentReg" id="studentReg" class="form-control">
                                        <option value="">Select Student Registration No</option>

                                        <?php
                                            $allstd = new connect;
                                            $student = $allstd->getStudent();
                                            foreach ($student as $key => $value) { ?>
                                               <option><?php echo $value['id'];?></option>
                                         <?php   }
                                        ?>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 text-info control-label"><strong>Name</strong></label>
                                <div class="col-md-4">
                                    <input id="StdName" name="name"  placeholder="Name" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="email"
                                       class="col-md-4 text-info control-label"><strong>E-mail</strong></label>
                                <div class="col-md-4">
                                    <input name="email" id="email" placeholder="E-mail" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="department"
                                       class="col-md-4 text-info control-label"><strong>Department</strong></label>
                                <div class="col-md-4">
                                    <input name="department" id="department" type="text" placeholder="Department"
                                           class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="course"
                                       class="col-md-4 text-info control-label"><strong>Select Course</strong></label>
                                <div class="col-md-4">
                                    <select id="StdCourse" class="form-control">

                                        <option>Select Course</option>
                                        

                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="date"
                                       class="col-md-4 text-info control-label"><strong>Date</strong></label>
                                <div class="col-md-4">
                                    <input name="date" class="datepicker form-control" id="date" type="text"
                                           placeholder="Date">
                                </div>
                            </div>

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="col-sm-5 col-sm-push-4">
                                <button id="enrollNewCourse" name="saveCourse" type="submit" class="btn btn-info btn-default">
                                    <strong>Save</strong></button>
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
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scripts.js"></script>
<script src="js/ajax.js"></script>

<script>
    $(function () {
        $(".datepicker").datepicker();
    });
</script>

</body>
</html>
