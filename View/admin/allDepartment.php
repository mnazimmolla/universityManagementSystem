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

                        <li style="border: none"> <h2 class="text-info"><strong>All Departments</strong></h2></li>
                      <li style="border: none" class="pull-right">  <h2><strong><a href="saveDepartment.php" class="text-info">Add New Department</a></strong></h2></li>
                        </ul>
                    </header>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-info"><strong>Serial</strong></th>
                                <th class="text-info"><strong>Department Code</strong></th>
                                <th class="text-info"><strong>Department Name</strong></th>
                                <th class="text-info"><strong>Actions</strong></th>
                            </tr>
                            </thead>
                            <tbody>

                        <?php
                        $allDpt = new connect;
                        $data = $allDpt->getDepartment();

                        $i=1;
                        foreach ($data as $key => $value) { ?>



                                <tr>
                                    <td> <?php  echo $i++; ?></td>
                                    <td><?php  echo $value['code']; ?></td>
                                    <td> <?php  echo $value['name']; ?></td>
                                    <td><a href="editDept.php?id=<?php  echo $value['id']; ?>">Edit</a></td>
                                </tr>



                       <?php  }  ?>


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
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery knob -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>
</html>
