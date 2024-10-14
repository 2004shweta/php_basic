<?php
class Student {
    public $name;
    public $rollNo;

    // Setter method for student name
    function set_name($name) {
        $this->name = $name;
    }

    // Getter method for student name
    function get_name() {
        return $this->name;
    }

    // Setter method for roll number
    function set_rollNo($rollNo) {
        $this->rollNo = $rollNo;
    }

    // Getter method for roll number
    function get_rollNo() {
        return $this->rollNo;
    }
}

$student1 = new Student();
$student1->set_name('John Doe');
$student1->set_rollNo('101');

echo "Student Name: " . $student1->get_name();
echo "<br>";
echo "Roll Number: " . $student1->get_rollNo();
echo "<br>";
?> 


