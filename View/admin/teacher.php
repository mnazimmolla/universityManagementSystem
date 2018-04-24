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
                        <h2 class="text-bold text-info"><strong>Add New Teacher</strong></h2>
                    </header>
                    <div class="panel-body">
                        <form id="saveTeacher" action="../Auth/saveTeacher.php" method="post" class="form-horizontal">

                            <div class="form-group">
                                <label for="name" class="col-md-4 text-info control-label"><strong>Name</strong></label>
                                <div class="col-md-4">
                                    <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="addr"
                                       class="col-md-4 text-info control-label"><strong>Address</strong></label>
                                <div class="col-md-4">
                                    <textarea name="addr" id="addr" class="form-control"
                                              placeholder="Address"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email"
                                       class="col-md-4 text-info control-label"><strong>E-mail</strong></label>
                                <div class="col-md-4">
                                    <input name="email" id="name" type="text" placeholder="E-mail" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contact"
                                       class="col-md-4 text-info control-label"><strong>Contact</strong></label>
                                <div class="col-md-4">
                                    <input name="contact" id="contact" type="text" placeholder="Contact"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="designation"
                                       class="col-md-4 text-info control-label"><strong>Designation</strong></label>
                                <div class="col-md-4">
                                    <select name="designation" id="designation" placeholder="Designation"
                                            class="form-control">
                                        <option value="">Select Designation</option>

                                        <?php
                                        $newDesign = new connect();
                                        $Designation = $newDesign->designation();

                                        foreach ($Designation as $key => $value) { ?>

                                            <option
                                                value="<?php echo $value['designation']; ?>"><?php echo $value['designation']; ?></option>

                                        <?php } ?>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="department"
                                       class="col-md-4 text-info control-label"><strong>Department</strong></label>
                                <div class="col-md-4">
                                    <select name="department" id="department" placeholder="Department"
                                            class="form-control">
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
                                <label for="courseBtaken" class="col-md-4 text-info control-label"><strong>Course to be
                                        Taken</strong></label>
                                <div class="col-md-4">
                                    <input name="courseBtaken" id="courseBtaken" type="text"
                                           placeholder="Course to be Taken" class="form-control">
                                </div>
                            </div>

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="col-sm-5 col-sm-push-4">
                                <button id="saveNewTeacher" name="saveCourse" type="submit"
                                        class="btn btn-info btn-default">
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
