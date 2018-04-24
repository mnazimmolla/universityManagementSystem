<?php

namespace App\Auth;

use PDO;

class connect
{
    private $username;
    private $password;
    private $departmentCode;
    private $departmentName;
    private $date;
    private $name;
    private $email;
    private $contact;
    private $address;
    private $department;
    private $ctbt;
    private $rc;
    private $cc;
    private $c_name;
    private $credit;


    public function setData($data = '')
    {
        $this->username = $data['username'];
        $this->password = $data['password'];
    }

    public function login()
    {
        $username = "'" . $this->username . "'";
        $password = "'" . $this->password . "'";

        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();

        }
        $query = "SELECT * FROM users WHERE username = $username AND password = $password";

        $stmt = $handler->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();

        if (!empty($data)) {
            session_start();
            $_SESSION['userdata'] = $data;
            // $_SESSION['userdata']['username'];
            header('location: ../../../university/View/admin/index.php');
        } else {
            echo "Invalid Username or Password";
        }
    }


    public function setDepartment($data = '')
    {
        $departmentCode = "'" . $data['department_code'] . "'";
        $departmentName = "'" . $data['department_name'] . "'";
        $date = date('Y-m-d m:i:s');
        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();
        }

        $query = "INSERT INTO departments (`code`, `name`, creted_at) VALUES ($departmentCode , $departmentName, '$date')";

        $codeExist = "SELECT * FROM departments WHERE code=$departmentCode";
        $nameExist = "SELECT * FROM departments WHERE name=$departmentName";

        $codeExist = $handler->prepare($codeExist);
        $codeExist->execute();

        $nameExist = $handler->prepare($nameExist);
        $nameExist->execute();

        if ($codeExist->rowCount() == 1) {
            echo "Department Code Already Exist";
            return;
        }

        if ($nameExist->rowCount() == 1) {
            echo "Department Name Already Exist";
            return;
        }

        $stmt = $handler->prepare($query);
        $dataSave = $stmt->execute();
        if ($dataSave) {
            echo "Department Saved";
        } else {
            echo "Data Not Saved";
        }
    }


    public function getDepartment()
    {
        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();

        }
        $query = "SELECT * FROM departments";
        $stmt = $handler->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getDeptByID($data = '')
    {
        $id = $data['id'];

        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();

        }
        $query = "SELECT * FROM departments WHERE id = $id";

        $stmt = $handler->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function editDepartment($data = '')
    {
        $department_code = $data['department_code'];
        $department_name = $data['department_name'];
        $id = $data['department_id'];
        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();
        }
        $date = date('Y-m-d');
        $query = "UPDATE departments SET code='$department_code', name='$department_name', updated_at='$date' WHERE id=$id";

        $stmt = $handler->prepare($query);
        $dataSave = $stmt->execute();
        if ($dataSave) {
            echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Department Saved Successfully</div>";
        } else {
            echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Department Saved Failed</div>";
        }
    }

    public function getCoursebyID($data = '')
    {

        $id = $data['id'];

        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();

        }
        $query = "SELECT * FROM courses WHERE id = $id";

        $stmt = $handler->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function editCourse($data = '')
    {
        $course_code = $data['code'];
        $course_name = $data['name'];
        $course_credit = $data['credit'];
        $course_desc = $data['desc'];
        $course_dept = $data['department'];
        $course_seme = $data['semester'];
        $id = $data['department_id'];

        try {
            $handler = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Database Connection Failed";
            echo $e->getMessage();
        }
        $date = date('Y-m-d');
        $query = "UPDATE courses SET code='$course_code', name='$course_name', credit='$course_credit', description='$course_desc', department='$course_dept', semester='$course_seme', updated_at='$date' WHERE id=$id";
        $stmt = $handler->prepare($query);
        $dataSave = $stmt->execute();
        if ($dataSave) {
            echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Course Edit Success.</div>";
        } else {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Course Edit Failed</div>";
        }
    }

    public function setCourses($data = '')
    {
        $this->code = $data['code'];
        $this->name = $data['name'];
        $this->credit = $data['credit'];
        $this->description = $data['desc'];
        $this->department = $data['department'];
        $this->semester = $data['semester'];

        $date = date('Y-m-d h:i:sa');

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "INSERT INTO courses (code, name, credit, description, department, semester, created_at) VALUES  (:c, :n, :cre, :d, :dept, :s, '$date')";

        $codeExist = "SELECT code FROM courses WHERE code='$this->code'";
        $nameExist = "SELECT name FROM courses WHERE name='$this->name'";

        $codeExist = $conn->prepare($codeExist);
        $nameExist = $conn->prepare($nameExist);
        $codeExist->execute();
        $nameExist->execute();


        if ($codeExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Code Already Exist</div>";
            return;
        }
        if ($nameExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Name Already Exist</div>";
            return;
        }

        $query = $conn->prepare($query);
        $sendData = $query->execute(array(
            ':c' => $this->code,
            ':n' => $this->name,
            ':cre' => $this->credit,
            ':d' => $this->description,
            ':dept' => $this->department,
            ':s' => $this->semester
        ));
        if ($sendData) {
            echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Course Saved Successfully.</div>";
        }
    }

    public function allocateRoom($data = '')
    {
        $department = $data['department'];
        $courses = $data['courses'];
        $room = $data['room'];
        $day = $data['day'];
        $fromHour = $data['fromHour'];
        $fromMinute = $data['fromMinute'];
        $fromAmPm = $data['fromAmPm'];
        $toHour = $data['toHour'];
        $toMinute = $data['toMinute'];
        $toAmPm = $data['toAmPm'];

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $RoomExist = "SELECT * FROM allocationroom WHERE course='$courses' AND room='$room' AND day='$day' AND h_from='$fromHour' AND from_am_pm='$fromAmPm' AND h_to='$toHour' AND to_am_pm='$toAmPm'";
        $RoomExist = $conn->prepare($RoomExist);
        $RoomExist->execute();


        if ($RoomExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Room Already Allocated!!</div>";
            return;
        } else {
            $query = "INSERT INTO allocationroom (dept, course, room, day, h_from, m_from, from_am_pm, h_to, m_to, to_am_pm) VALUES  ('$department', '$courses', '$room', '$day', '$fromHour', '$fromMinute', '$fromAmPm', '$toHour', '$toMinute', '$toAmPm')";
            $query = $conn->prepare($query);
            $sendData = $query->execute();
            if ($sendData) {
                echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Allocation Class Room Success.</div>";
            }
        }
    }

    public function getCourses()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "SELECT * FROM courses";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getRoom()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "SELECT * FROM rooms";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

//    public function getCourseStatics($data='')
//    {
//        $q= "'" . $data . "'";
//
//        try {
//            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
//            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        } catch (PDOException $e) {
//            echo 'ERROR: ' . $e->getMessage();
//        }
//        $query = "SELECT courseassigntoteachers.course_code, courseassigntoteachers.name, courseassigntoteachers.Teacher_name, courses.semester FROM courseassigntoteachers
//LEFT JOIN courses ON courseassigntoteachers.course_code = courses.code WHERE courseassigntoteachers.department =" .$q;
//        $stmt = $conn->prepare($query);
//        $stmt->execute();
//        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//
//    }

    public function semester($data = '')
    {

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        $query = "SELECT semester FROM semester";


        $query = $conn->prepare($query);
        $query->execute();
        $data = $query->fetchAll();

        return $data;

    }

    public function setTeacher($data = '')
    {
        $this->name = $data['name'];
        $this->address = $data['addr'];
        $this->email = $data['email'];
        $this->contact = $data['contact'];
        $this->designation = $data['designation'];
        $this->department = $data['department'];
        $this->creditBtaken = $data['courseBtaken'];

        $date = date('Y-m-d h:i:s');

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "INSERT INTO teachers (name, addr, email, contact, designation, department, courseBtaken, creted_at) VALUES  (:n, :a, :e, :c, :d, :dept, :co, '$date')";

        $emailExist = "SELECT email FROM teachers WHERE email='$this->email'";
        $emailExist = $conn->prepare($emailExist);
        $emailExist->execute();


        if ($emailExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Email Already Exist!</div>";
            return;
        }

        $query = $conn->prepare($query);
        $sendData = $query->execute(array(
            ':n' => $this->name,
            ':a' => $this->address,
            ':e' => $this->email,
            ':c' => $this->contact,
            ':d' => $this->designation,
            ':dept' => $this->department,
            ':co' => $this->creditBtaken
        ));
        if ($sendData) {
            echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>New Teacher Added Successfully.</div>";
        }
    }


    public function setStudent($data = '')
    {
        //$year = date("Y");
        //$this->reg = "'" .$data['department'] . $year . "'";

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->contact = $data['contact'];
        $this->date = "'" . $data['date'] . "'";
        $this->address = $data['addr'];
        $this->department = $data['department'];

        $date = date("Y-m-d h:i:s");

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_university', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "INSERT INTO students (name, email, contact, `date`, address, department, creted_at) VALUES  (:n, :e, :c, :d, :ad, :dept, '$date')";


        $emailExist = "SELECT email FROM students WHERE email='$this->email'";
        $emailExist = $conn->prepare($emailExist);
        $emailExist->execute();


        if ($emailExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>E-mail Already Exist!</div>";
            return;
        } else {
            $query = $conn->prepare($query);
            $sendData = $query->execute(array(

                ':n' => $this->name,
                ':e' => $this->email,
                ':c' => $this->contact,
                ':d' => $this->date,
                ':ad' => $this->address,
                ':dept' => $this->department

            ));
            if ($sendData) {
                echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Student Registration Success.</div>";
            }
        }
    }

    public function getStudentDetails()
    {
        $conn = new PDO('mysql:host=localhost;dbname=university', 'ian2016_system', 'sys123');
        $getUser = "SELECT * FROM students ORDER BY id DESC LIMIT 1";
        $getUser = $conn->prepare($getUser);
        $getUser->execute();
        $student = $getUser->fetch(PDO::FETCH_ASSOC);
        return $student;
    }

    public function getStudent()
    {
        $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'root', 'sys123');
        $getUser = "SELECT * FROM students";
        $getUser = $conn->prepare($getUser);
        $getUser->execute();
        $stu = $getUser->fetchAll(PDO::FETCH_ASSOC);
        return $stu;
    }


    public function assignCourse($data = '')
    {
        $department = "'" . $data['department'] . "'";
        $teacher = "'" . $data['teacher'] . "'";
        $ctbt = "'" . $data['ctbt'] . "'";
        $rc = "'" . $data['rc'] . "'";
        $cc = "'" . $data['cc'] . "'";
        $c_name = "'" . $data['c_name'] . "'";
        $credit = "'" . $data['credit'] . "'";

        $date = date('Y-m-d');

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "INSERT INTO courseassigntoteachers (department, Teacher_name, creditToBeTaken, credit, course_code, name, creted_at) VALUES  ($department, $teacher, $ctbt, $credit, $cc, $c_name, '$date')";
        $codeExist = "SELECT course_code FROM courseassigntoteachers WHERE course_code=" . $cc . "LIMIT 1";
        $codeExist = $conn->prepare($codeExist);
        $codeExist->execute();


        if ($codeExist->rowCount() == 1) {
            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Course Already Assigned!</div>";
            return;
        } else {
            $query = $conn->prepare($query);
            $sendData = $query->execute();

            if ($sendData) {
                echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Course Assigned Successful.</div>";
            }
        }

    }

    public function enrollCourse($data = '')
    {

        $studentReg = $_POST['studentReg'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $date = $_POST['date'];

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "INSERT INTO enrollcourse (student_reg_no, name, email, department, creted_at) VALUES ('$studentReg', '$name', '$email', '$department', '$date')";

//        $codeExist = "SELECT course_code FROM courseassigntoteachers WHERE course_code=" . $cc . "LIMIT 1";
//        $codeExist = $conn->prepare($codeExist);
//        $codeExist->execute();


//        if ($codeExist->rowCount() == 1) {
//            echo "<div class='alert-danger' style=\"padding: 5px; border-radius: 5px\"><strong>Course Already Assigned!</div>";
//            return;
//        } else {
            $query = $conn->prepare($query);
            $sendData = $query->execute();

            if ($sendData) {
                echo "<div class='alert-success' style=\"padding: 5px; border-radius: 5px\"><strong>Course Assigned Successful.</div>";
            }
//        }

    }


    public function getTeacher()
    {


        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $query = "SELECT * FROM teachers ";


        $query = $conn->prepare($query);
        $query->execute();
        $query = $query->fetchAll();

        return $query;


    }


    public function designation()
    {

        try {
            $conn = new PDO('mysql:host=localhost;dbname=ian2016_university', 'ian2016_system', 'sys123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        $query = "SELECT designation FROM  designation";


        $query = $conn->prepare($query);
        $query->execute();
        $data = $query->fetchAll();

        return $data;

    }
}