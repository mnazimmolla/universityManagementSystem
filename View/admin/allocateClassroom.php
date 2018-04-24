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
                        <h2 class="text-bold text-info"><strong>Allocate Classroom</strong></h2>
                    </header>
                    <div class="panel-body">
                        <form id="allocateRoom" action="../Auth/allocateNewClassroom.php" method="post" class="form-horizontal">

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

                                            <option value="<?php echo $value['code']; ?>"><?php echo $value['name']; ?></option>

                                        <?php } ?>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="courses"
                                       class="col-md-4 text-info control-label"><strong>Courses</strong></label>
                                <div class="col-md-4">
                                    <select name="courses" id="CourseName" class="form-control">
                                        <option value="">Select Course</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="room"
                                       class="col-md-4 text-info control-label"><strong>Room No:</strong></label>
                                <div class="col-md-4">
                                    <select name="room" id="room" class="form-control">
                                        <option value="">Select Room</option>
                                        <?php
                                        $allroom = new connect;
                                        $room = $allroom->getRoom();
                                        foreach ($room as $key => $value) { ?>
                                            <option
                                                value="<?php echo $value['room']; ?>"><?php echo $value['room']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="day"
                                       class="col-md-4 text-info control-label"><strong>Day</strong></label>
                                <div class="col-md-4">
                                    <select name="day" id="day" class="form-control">
                                        <option value="">Select Day</option>

                                        <option value="sat">Saturday</option>
                                        <option value="sun">Sunday</option>
                                        <option value="mon">Monday</option>
                                        <option value="tue">Tuesday</option>
                                        <option value="wed">Wednesday</option>
                                        <option value="thu">Thursday</option>
                                        <option value="fri">Friday</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="from" class="col-md-4 text-info control-label"><strong>From</strong></label>
                                <div class="col-md-4">
                                    <input name="fromHour" id="fromHour" type="text" placeholder="Hour" class="from"/>&nbsp; : &nbsp;
                                    <input name="fromMinute" id="fromMinute" type="text" placeholder="Minute" class="from"/> &nbsp;
                                    <input type="radio" name="fromAmPm" id="fromAM" value="am"> AM &nbsp; &nbsp; &nbsp;
                                    <input type="radio" name="fromAmPm" id="fromPM" value="pm"> PM

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="from" class="col-md-4 text-info control-label"><strong>To</strong></label>
                                <div class="col-md-4">
                                    <input name="toHour" id="toHour" type="text" placeholder="Hour" class="from"/>&nbsp; : &nbsp;
                                    <input name="toMinute" id="toMinute" type="text" placeholder="Minute" class="from"/> &nbsp;
                                    <input type="radio" name="toAmPm" id="toAM" value="am"> AM &nbsp; &nbsp; &nbsp;
                                    <input type="radio" name="toAmPm" id="toPM" value="pm"> PM

                                </div>
                            </div>

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="col-sm-5 col-sm-push-4">
                                <button id="allocateNewRoom" name="allocate" type="submit" class="btn btn-info btn-default">
                                    <strong>Allocate</strong></button>
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
