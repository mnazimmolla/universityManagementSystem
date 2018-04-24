$(document).ready(function () {
    //get teacher
    $("#department").change(function () {
        var deptid = $(this).val();
        console.log(deptid);
        $.ajax({
            url: '../Auth/assignNewCourse.php',
            type: 'post',
            data: {depart: deptid},
            dataType: 'json',
            success: function (response) {
                console.log(response);
                var len = response.length;

                $("#teacher").empty();

                $("#teacher").append("<option value=''>" + 'Select Teacher' + "</option>");
                console.log(response);
                for (var i = 0; i < len; i++) {
//                        var id = response[i]['id'];
                    var name = response[i]['name'];

                    $("#teacher").append("<option value='" + name + "'>" + name + "</option>");

                }
            }
        });
    });
    //get teacher end here

    // get Course To Be Taken
    $("#teacher").change(function () {
        var ctbt = $(this).val();
        console.log(ctbt);
        $.ajax({
            url: '../Auth/assignNewCourse.php',
            type: 'post',
            data: {ctbt: ctbt},
            dataType: 'json',
            success: function (response) {
                console.log(response['data1']);
                console.log(response['data2']);
                var crd = response['data1']['courseBtaken'];
                var crd2 = response['data2']['total'];
                var remain = crd - crd2;

                $("#ctbt").empty();
                $("#ctbt").val(crd);

                $("#rc").empty();
                $("#rc").val(remain);
            }
        });
    });
    //Course To Be Taken ends here


    // get course code here
    $("#department").change(function () {
        var courseCode = $(this).val();
        $.ajax({
            url: '../Auth/assignNewCourse.php',
            type: 'post',
            data: {courseCode: courseCode},
            dataType: 'json',
            success: function (response) {

                $("#cc").empty();
                $("#cc").append("<option value=''>" + 'Select Course Code' + "</option>");

                var len = response.length;

                for (i = 0; i < len; i++) {
                    var code = response[i]['code'];
                    $("#cc").append("<option value='" + code + "'>" + code + "</option>");
                }
            }
        });
    });
    // get course code here

    //


    // $("#cc").change(function () {
    //     var courseCode = $(this).val();
    //     console.log(courseCode);
    //     $.ajax({
    //         url: '../Auth/assignNewCourse.php',
    //         type: 'post',
    //         data: {courseName: courseCode},
    //         dataType: 'json',
    //         success: function (response) {
    //
    //             var cname = response['name'];
    //             var cCredit = response['credit'];
    //             var remain = $("#rc").val();
    //
    //             console.log(remain);
    //             $("#msg").empty();
    //             $("#c_name").empty();
    //             $("#credit").empty();
    //
    //             $("#c_name").val(cname);
    //             $("#credit").val(cCredit);
    //             if (remain > cCredit) {
    //                 //here must a pop up window.
    //                 var con = $("#msg").html('<div class="alert-danger"  style="border: 2px solid red; padding: 5px;">Credit Wrong</div>');
    //                 //console.log(con);
    //             }
    //         }
    //     });
    // });

    //Assign Course. Check Remaining Credit.
    $("#cc").change(function () {
        var courseCode = $(this).val();
console.log(courseCode);
        $.ajax({
            url: '../Auth/assignNewCourse.php',
            type: 'post',
            data: {courseName: courseCode},
            dataType: 'json',
            success: function (response) {
                console.log(response);
                var cname = response['name'];
                var cCredit = response['credit'];
                var remain = $("#rc").val();
                console.log(remain);
                var check = remain - cCredit;
                var checkTrue = (check < 0);

                 // $("#c_name").val(cname);
                 // $("#credit").val(cCredit);

                console.log(checkTrue);
                if (checkTrue==true) {

                     // $("#c_name").val(cname);
                     // $("#credit").val(cCredit);
                    var retVal = confirm("Course Credit is Overlaping. Do you want to continue?");
                    console.log(retVal);
                    if (retVal == true) {
                        $("#c_name").val(cname);
                        $("#credit").val(cCredit);
                    }
                    if(retVal == false) {
                        $("#c_name").empty();
                        $("#credit").empty();
                    }

                }

                //
                // if (checkTrue) {
                //     //here must a pop up window.
                //     var con = $("#msg").html("<script>alert('Credit Access!')</script>");
                //     //console.log(con);
                // }

            }
        });
    });
    //Assign Course. Check Remaining Credit.

    //save department
    $('#saveNewDpt').click(function (event) {
        event.preventDefault();
        var check = $('#saveDpt').serializeArray();

        $.post(
            $('#saveDpt').attr('action'),
            check,

            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //save department

    //Edit department
    $('#editNewDpt').click(function (event) {
        event.preventDefault();
        var check = $('#editDpt').serializeArray();
        $.post(
            $('#editDpt').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                $('#department_code').val();
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Edit department

    //save course
    $('#saveNewCourse').click(function (event) {
        event.preventDefault();
        var check = $('#saveCourse').serializeArray();

        $.post(
            $('#saveCourse').attr('action'),
            check,

            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //save course

    //edit course
    $('#editCourseByID').click(function (event) {
        event.preventDefault();
        var check = $('#editCourse').serializeArray();

        $.post(
            $('#editCourse').attr('action'),
            check,

            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //edit course


    //Save Teacher
    $('#saveNewTeacher').click(function (event) {
        event.preventDefault();
        var check = $('#saveTeacher').serializeArray();
        $.post(
            $('#saveTeacher').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Save Teacher

    //Course Assign To Teacher
    $('#assignNewCourse').click(function (event) {
        event.preventDefault();
        var check = $('#assignCourse').serializeArray();
        $.post(
            $('#assignCourse').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Course Assign To Teacher

    //get course statics
    $("#dpt").change(function () {
        var courseCode = $(this).val();
        // console.log(courseCode);
        $.ajax({
            url: 'getCourseStatics.php',
            type: 'post',
            data: {courseCode: courseCode},
            dataType: 'json',
            success: function (response) {
                var len = response.length;
                var a = $("#msg").empty();
                var d = 1;
                for (var i = 0; i < len; i++) {

                    var code = response[i]['code'];
                    var name = response[i]['name'];
                    var semester = response[i]['semester'];
                    var teacher = response[i]['Teacher_name'];

                    if (teacher == null) {
                        var a = $("#msg").append("<tr><td>" + d++ + "</td><td>" + code + "</td><td>" + name + "</td><td>" + semester + "</td><td>" + "<p class='text-danger'>Not Assigned Yet</p>" + "</td></tr><br/>");
                    } else {
                        var a = $("#msg").append("<tr><td>" + d++ + "</td><td>" + code + "</td><td>" + name + "</td><td>" + semester + "</td><td>" + teacher + "</td></tr><br/>");
                    }
                }
            }
        });
    });
    //get course statics

    //get course Schedule and Room Allocation
    $("#viewSchedulAlloRoom").change(function () {
        var courseCode = $(this).val();
        // console.log(courseCode);
        $.ajax({
            url: 'getCourseStatics.php',
            type: 'post',
            data: {courseCode: courseCode},
            dataType: 'json',
            success: function (response) {
                var len = response.length;
                var a = $("#msg").empty();
                var d = 1;
                for (var i = 0; i < len; i++) {
                    console.log(response);
                    var code = response[i]['code'];
                    var name = response[i]['name'];
                    var semester = response[i]['semester'];
                    var room = response[i]['room'];
                    var day = response[i]['day'];
                    var teacher = response[i]['Teacher_name'];

                    if (teacher == null) {
                        var a = $("#msg").append("<tr><td>" + d++ + "</td><td>" + code + "</td><td>" + name + "</td><td>" + semester + "</td><td>" + "<p class='text-danger'>Not Assigned Yet</p>" + "</td></tr><br/>");
                    } else {
                        var a = $("#msg").append("<tr><td>" + d++ + "</td><td>" + code + "</td><td>" + name + "</td><td>" + semester + "</td><td>" + teacher + "</td><td>" + day + "</td></tr><br/>");
                    }
                }
            }
        });
    });
    //get course Schedule and Room Allocation

    //get course statics for room allocation
    $("#department").change(function () {
        var courseCode = $(this).val();
        // console.log(courseCode);
        $.ajax({
            url: 'getCourseforAllocateRoom.php',
            type: 'post',
            data: {courseCode: courseCode},
            dataType: 'json',
            success: function (response) {
                var len = response.length;
                $("#CourseName").empty();
                var d = 1;
                for (var i = 0; i < len; i++) {

                    var code = response[i]['course_code'];
                    $("#CourseName").append("<option>" + code + "</option>");
                }
            }
        });
    });
    //get course statics for room allocation

    //Edit Courses
    $("#editDpt").change(function () {
        var courseCode = $(this).val();
        // console.log(courseCode);
        $.ajax({
            url: 'editCourse.php',
            type: 'post',
            data: {courseCode: courseCode},
            dataType: 'json',
            success: function (response) {
                var len = response.length;
                var a = $("#msg").empty();
                var d = 1;
                for (var i = 0; i < len; i++) {
                    var id = response[i]['id'];
                    var href = 'editMyCourse.php?id=';
                    var link = href + id;
                    var code = response[i]['code'];
                    var name = response[i]['name'];
                    var credit = response[i]['credit'];
                    var department = response[i]['department'];
                    var semester = response[i]['semester'];
                    var a = $("#msg").append("<tr><td>" + d++ + "</td><td>" + code + "</td><td>" + name + "</td><td>" + credit + "</td><td>" + department + "</td><td>" + semester + "</td><td><a href=" + link + ">" + 'Edit' + "</a></td></tr><br/>");
                }
            }
        });
    });
    //Edit Courses

    //Save Student
    $('#saveNewStudent').click(function (event) {
        event.preventDefault();
        var check = $('#saveStudent').serializeArray();
        $.post(
            $('#saveStudent').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Save Student

    //Enroll New Course
    $('#enrollNewCourse').click(function (event) {
        event.preventDefault();
        var check = $('#enrollCourse').serializeArray();
        $.post(
            $('#enrollCourse').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Enroll New Course

    //Allocate Class Room
    $('#allocateNewRoom').click(function (event) {
        event.preventDefault();
        var check = $('#allocateRoom').serializeArray();
        $.post(
            $('#allocateRoom').attr('action'),
            check,
            function (data) {
                $('#msg').html(data);
                // $('#msg').fadeOut(6000);
                $('input').val("");
            }
        )
    })
    //Allocate Class Room

    //Get Student for Enroll Course
    $("#studentReg").change(function () {
        var regNum = $(this).val();
        $.ajax({
            url: 'getStudentforEnroll.php',
            type: 'post',
            data: {regNum: regNum},
            dataType: 'json',
            success: function (response) {
                console.log(response);
                var len = response.length;
                var a = $("#StdName").empty();
                for (var i=0; i <len; i++) {
                    var name = response[i]['name'];
                    var email = response[i]['email'];
                    var dept = response[i]['department'];
                    var courese = response[i]['c_name'];

                    $("#StdName").val(name);
                    $("#email").val(email);
                    $("#department").val(dept);
                    $("#department").val();
                    $("#StdCourse").append("<option value='" + courese + "'>" + courese + "</option>");
                }
            }
        });
    });
    //Get Student for Enroll Course

    //getStuDetails
    // $('#getStuDetails').click(function (event) {
    //     event.preventDefault();
    //     var check = $('#myModal').serializeArray();
    //     $.post(
    //         $('#myModal').attr('action'),
    //         check,
    //         function (data) {
    //             $('#myModal').html(data);
    //             // $('#msg').fadeOut(6000);
    //             $('input').val("");
    //         }
    //     )
    // })
    //

});
