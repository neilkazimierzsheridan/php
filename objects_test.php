<html>
<head><title>PHP Test</title></head>
<body>

<?php
    class Student { 
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){ 
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors(){
            if($this->gpa >= 3.5){
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo "Student 1 GPA: " . $student1->gpa . "<br>";
    echo "Student 2 Honors: " . $student1->hasHonors() . "<br>";

?>

</body>
</html>