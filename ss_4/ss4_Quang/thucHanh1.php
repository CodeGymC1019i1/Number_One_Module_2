<?php
class Student{
    private $name;
    public static $count=0;
    public function __construct($name)
    {
        $this->name=$name;
        self::$count++;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Student name: ".Student::$count.' '.$this->name;
    }
}
$student1=new Student("Nguyễn Văn A");
echo $student1.'</br>';
$student2=new Student("Nguyễn Văn B");
echo $student2.'</br>';
$student3=new Student("Nguyễn Văn A");
echo $student3.'</br>';
$student4=new Student("Nguyễn Văn B");
echo $student4.'</br>';
