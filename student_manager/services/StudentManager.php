<?php
include_once "FileManager.php";

class StudentManager extends FileManager
{
    public function add($student)
    {
        $listStudent = $this->readData();
        $data = [
            'name' => $student->name,
            'age' => $student->age,
            'address' => $student->address,
            'group' => $student->group
        ];
        array_push($listStudent, $data);
        $this->saveData($listStudent);
    }


    public function getListStudent()
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $item) {
            $student = new Student(
                $item['name'],
                $item['age'],
                $item['address'],
                $item['group']
            );
            array_push($list, $student);
        }
        return $list;
    }

    public function delete($index)
    {
        $listStudent = $this->readData();
        if (array_key_exists($index, $listStudent)) {
            array_splice($listStudent, $index, 1);
        }
        $this->saveData($listStudent);
    }

    public function edit($index)
    {
        $students = $this->getListStudent();
        $students[$index]->name = $_POST['name'];
        $students[$index]->age = $_POST['age'];
        $students[$index]->address = $_POST['address'];
        $students[$index]->group = $_POST['group'];
        $this->saveData($students);
        header("location: ../../index.php");
    }


    public function search($keyword)
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $key => $value) {
            if (strpos(strtolower($value['name']), strtolower($keyword)) !== false ||
                $value['age'] == $keyword ||
                strpos(strtolower($value['address']), strtolower($keyword)) !== false ||
                $value['group'] == $keyword) {
                $student = new Student(
                    $value["name"],
                    $value["age"],
                    $value["address"],
                    $value["group"]
                );
                array_push($list, $student);
            }
        }
        return $list;
    }
}