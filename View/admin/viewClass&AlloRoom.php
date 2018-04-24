<?php
require_once 'lib/header.php';
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
                        <ul class="list-inline">
                            <li style="border: none; margin-top: 10px;"><h2 class="text-info"><strong>Course
                                        Statics</strong></h2></li>
                            <li style="border: none; margin-top: 10px;" class="pull-right"><h2><strong><a
                                            href="assignCourse.php" class="text-info">Assign A Course</a></strong>
                                </h2></li>
                        </ul>
                    </header>

                    <br/>

                    <div class="form-group">

                        <label for="department"
                               class="col-md-4 col-md-push-2 text-info control-label"
                               style="margin-top: 5px;"><strong>Department</strong></label>
                        <div class="col-md-4">
                            <select name="department" id="viewSchedulAlloRoom" placeholder="Department"
                                    class="form-control">
                                <option value="">Select Department</option>
                                <?php
                                $allDpt = new connect;
                                $data = $allDpt->getDepartment();
                                foreach ($data as $key => $value) { ?>

                                    <option value="<?php echo $value['code']; ?>"><?php echo $value['name'] ?></option>


                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <hr/>

                    <header class="panel-heading">
                        <ul class="list-inline">
                            <li style="border: none; margin-top: 10px;"><h2 class="text-info"><strong>Course
                                        Information</strong></h2></li>
                        </ul>
                    </header>


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-info"><strong>Serial</strong></th>
                            <th class="text-info"><strong>Course Code</strong></th>
                            <th class="text-info"><strong>Name</strong></th>
                            <th class="text-info"><strong>Schedule Info</strong></th>
                            <th class="text-info"><strong>Action</strong></th>
                        </tr>
                        </thead>
                        <tbody id="msg">

                        <tr id="">
                        </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

</section>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/scripts.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>
