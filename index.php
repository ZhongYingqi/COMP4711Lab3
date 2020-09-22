<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->status = "Freshman";
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->status = "Junior";
        $students['a456'] = $second;
        
        $third = new Student();
        $third->surname = "Zhong";
        $third->first_name = "Yingqi";
        $third->add_email('work','yzhong15@my.bcit.ca');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        $third->status = "Senior";
        $students['z789'] = $third;
        
        $forth = new Student();
        $forth->surname = "Chung";
        $forth->first_name = "Jackie";
        $forth->add_email('home','jackie@chung.com');
        $forth->add_email('work','j_chung@bcit.ca');
        $forth->add_grade(100);
        $forth->add_grade(100);
        $forth->add_grade(100);
        $forth->status = "Senior";
        $students['c111'] = $forth;
        
        ksort($students);
        foreach($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
