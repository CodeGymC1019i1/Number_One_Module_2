<?php

namespace employee;

class EmployeeManagement
{
    public static $pathFile;

    //construct
    public function __construct($pathFile)
    {
        self::$pathFile = $pathFile;
    }

    //read file json
    public function readFile()
    {
        $dataJson = file_get_contents(self::$pathFile);
        return json_decode($dataJson, true);
    }

    //get list employee
    public function getListEmployee()
    {
        $data = $this->readFile();

        $employeeArray = [];
        foreach ($data as $person) {
            $employee = new Employee($person['name'],
                $person['surName'],
                $person['birthDay'],
                $person['address'],
                $person['position']
            );
            array_push($employeeArray, $employee);
        }
        return $employeeArray;
    }

    //add employee to json
    public function addEmployee($employee)
    {
        $listEmployee = $this->readFile();

        $newEmployee = [
            'name' => $employee->name,
            'surName' => $employee->surName,
            'birthDay' => $employee->birthDay,
            'address' => $employee->address,
            'position' => $employee->position
        ];
        array_push($listEmployee, $newEmployee);
        $this->saveDataToJsonFile($listEmployee);
    }

    //edit employee
    public function editEmployee($index)
    {
        $employees = $this->getListEmployee();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $employees[$index]->name = $_POST['name'];
            $employees[$index]->surName = $_POST['surName'];
            $employees[$index]->birthDay = $_POST['birthDay'];
            $employees[$index]->address = $_POST['address'];
            $employees[$index]->position = $_POST['position'];
            $this->saveDataToJsonFile($employees);
            header("Location: ../index.php");
        }

    }

    //save data to json file
    public function saveDataToJsonFile($employee)
    {
        try {
            $dataJson = json_encode($employee);
            file_put_contents(self::$pathFile, $dataJson);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    //delete employee from json:
    public function deleteEmployee($index)
    {
        $employees = $this->readFile();
        if (array_key_exists($index, $employees)) {
            array_splice($employees, $index, 1);
        }
        $this->saveDataToJsonFile($employees);
    }

    //search employee from json
    public function searchEmployee($inputSearch)
    {
        $eachKeyWord = explode(" ", $inputSearch);
        $employeeList = $this->readFile();
        $result = [];
        foreach ($eachKeyWord as $keyword) {
            foreach ($employeeList as $key => $value) {
                if ($keyword == $value['name'] || $keyword == $value['surName'] || $keyword == $value['address']) {
                    $employee = new Employee(
                        $value['name'],
                        $value['surName'],
                        $value['birthDay'],
                        $value['address'],
                        $value['position']
                    );
                    array_push($result, $employee);
                }
            }
        }
        return $result;
    }
}