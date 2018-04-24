<?php require_once 'lib/header.php';
require_once "../../vendor/autoload.php";
use App\Auth\connect;

echo $_GET['id'];
$allDpt = new connect;
$data = $allDpt->getDeptByID($_GET);

?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="text-bold text-info"><strong>Edit Department</strong></h2>
                    </header>
                    <div class="panel-body">
                        <form  id="editDpt" action="../Auth/editDepartment.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 text-info control-label"><strong>Department Code</strong></label>
                                <div class="col-md-4">
                                    <input id="department_code" name="department_code" type="text" class="form-control" value="<?php echo $data['code'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 text-info control-label"><strong>Department Name</strong></label>
                                <div class="col-md-4">
                                    <input name="department_name" type="text" class="form-control" value="<?php echo $data['name'];?>">
                                </div>
                            </div>

                            <input name="department_id" type="hidden" class="form-control" value="<?php echo $data['id'];?>">

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>

                            <div class="container">
                                <div id="msg" style="margin-bottom: 10px" class="col-md-offset-4 col-md-4"></div>
                            </div>
                            <div class="col-sm-5 col-sm-push-4">
                                <button id="editNewDpt" name="save_department" type="submit" class="btn btn-info btn-default"><strong>Save</strong></button>
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
