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
                        <h2 class="text-bold text-info"><strong>Register New Student</strong></h2>
                    </header>
                    <div class="panel-body">
                        <form id="saveStudent" action="../Auth/saveStudent.php" method="post" class="form-horizontal">

                            <div class="form-group">
                                <label for="name" class="col-md-4 text-info control-label"><strong>Name</strong></label>
                                <div class="col-md-4">
                                    <input name="name" id="name" type="text" placeholder="Name" class="form-control">
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
                                <label for="date"
                                       class="col-md-4 text-info control-label"><strong>Date</strong></label>
                                <div class="col-md-4">
                                    <input name="date" class="datepicker form-control" id="date" type="text"
                                           placeholder="Date">
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

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="col-sm-5 col-sm-push-4">
                                <button name="saveCourse" id="saveNewStudent" type="submit"
                                        class="btn btn-info btn-default">
                                    <strong>Save</strong></button>
                                <button id="getStuDetails" type="button" class="btn btn-info btn-default" data-toggle="modal" data-target="#myModal">
                                    <strong>View Student Details</strong></button>

                                </button>

                            </div>
                        </form>
                    </div>
                </section>

                <section>



                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><strong>Details of Student</strong></h4>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    $getStu = new connect();
                                    $student = $getStu->getStudentDetails();
                                    ?>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label"><strong>Registration
                                                    No:</strong></div>
                                            <div class="col-md-4"><?php echo $student['id']; ?></div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label">
                                                <strong>Name:</strong></div>
                                            <div class="col-md-4"><?php echo $student['name']; ?></div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label"><strong>Email:</strong>
                                            </div>
                                            <div class="col-md-4"><?php echo $student['email']; ?></div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label"><strong>Contact:</strong>
                                            </div>
                                            <div class="col-md-4">0<?php echo $student['contact']; ?></div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label"><strong>Address:</strong>
                                            </div>
                                            <div class="col-md-4"><?php echo $student['address']; ?></div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div for="department" class="col-md-4 text-info control-label"><strong>Department:</strong>
                                            </div>
                                            <div class="col-md-4"><?php echo $student['department']; ?></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Modal -->


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
