<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>University Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel=" stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet"/>
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet"/>
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="css/xcharts.min.css" rel=" stylesheet">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                    class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.php" class="logo"><span class="lite">Admin</span></a>
        <!--logo end-->

<!--        <div class="nav search-row" id="top_menu">-->
<!--            <!--  search form start -->
<!--            <ul class="nav top-menu">-->
<!--                <li>-->
<!--                    <form class="navbar-form">-->
<!--                        <input class="form-control" placeholder="Search" type="text">-->
<!--                    </form>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->

<!---->
<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                    <li class=""><i class="fa fa-university"></i></li>-->
<!--                    <li class="">Add Department</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-pencil"></i></li>-->
<!--                        <li class="">Add Course</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-user"></i></li>-->
<!--                        <li class="">Add Teacher</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-users"></i></li>-->
<!--                        <li class="">Add Student</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-briefcase"></i></li>-->
<!--                        <li class="">Assign Course</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-home"></i></li>-->
<!--                        <li class="">Allocate Room</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->

<!--        <div class="nav search-row header-comp" id="top_menu">-->
<!--            <ul class="nav top-menu">-->
<!--                <div class="text-center"><a style="color:#fff" href="#">-->
<!--                        <li class=""><i class="fa fa-book"></i></li>-->
<!--                        <li class="">Enroll A Course</li> </a>-->
<!--                </div>-->
<!--            </ul>-->
<!--        </div>-->


        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">



                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
<!--                            <span class="profile-ava">-->
<!--                                <img alt="" src="img/avatar1_small.jpg">-->
<!--                            </span>-->
                        <span class="username">Admin</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li>
                            <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>


    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.php">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Forms</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_component.php">Form Elements</a></li>
                        <li><a class="" href="saveDepartment.php">Add Department</a></li>
                        <li><a class="" href="saveCourse.php">Add Course</a></li>
                        <li><a class="" href="teacher.php">Add Teacher</a></li>
                        <li><a class="" href="student.php">Register Student</a></li>
                        <li><a class="" href="assignCourse.php">Assign Course</a></li>
                        <li><a class="" href="allocateClassroom.php">Allocate Classrooms</a></li>
                        <li><a class="" href="enroll.php">Enroll A Course</a></li>
                        <li><a class="" href="form_validation.php">Form Validation</a></li>
                    </ul>
                </li>



                <li>
                    <a class="" href="allDepartment.php">
                        <i class="icon_genius"></i>
                        <span>View Departments</span>
                    </a>
                </li>

                <li>
                    <a class="" href="viewCourses.php">
                        <i class="icon_genius"></i>
                        <span>View Courses</span>
                    </a>
                </li>

                <li>
                    <a class="" href="courseStatics.php">
                        <i class="icon_genius"></i>
                        <span>View Course Statics</span>
                    </a>
                </li>

                <li>
                    <a class="" href="viewClass&AlloRoom.php">
                        <span>Schedule & Room Allocation</span>
                    </a>
                </li>

                <li>
                    <a class="" href="ViewRoomAllocation.php">
                        <i class="icon_genius"></i>
                        <span>View Class Schedule</span>
                    </a>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>