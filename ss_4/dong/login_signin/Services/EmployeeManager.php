<?php


class EmployeeManager
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }


    public function add($employee)
    {
        $listEmployee = $this->readData();
        $data = [
            'name' => $employee->name,
            'dateOfBirth' => $employee->dateOfBirth,
            'address' => $employee->address,
            'job' => $employee->job
        ];
        array_push($listEmployee, $data);
        $this->saveDataToFile($listEmployee);

    }

    public function delete($index)
    {
        $listEmployee = $this->readData();
        if (array_key_exists($index, $listEmployee)) {
            array_splice($listEmployee, $index, 1);
        }
        $this->saveDataToFile($listEmployee);
    }

    public function edit($index)
    {
        $employees = $this->getListEmployee();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $employees[$index]->name = $_POST['name'];
            $employees[$index]->dateOfBirth = $_POST['dateOfBirth'];
            $employees[$index]->address = $_POST['address'];
            $employees[$index]->job = $_POST['job'];
            $this->saveDataToFile($employees);
            header("location: index.php");
        }
    }

    public function readData()
    {
        $dataJson = file_get_contents($this->path);
        return json_decode($dataJson, true);
    }

    function saveDataToFile($employees)
    {
        try {
            $dataJson = json_encode($employees);
            file_put_contents($this->path, $dataJson);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function search($keyword)
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $key => $value) {
            if ($value['name'] == $keyword || $value['dateOfBirth'] == $keyword || $value['address'] == $keyword || $value['job'] == $keyword ) {
                $employee = new Employee(
                    $value["name"],
                    $value["dateOfBirth"],
                    $value["address"],
                    $value["job"]
                );
                array_push($list, $employee);
            }
        }
        return $list;
    }


    public function getListEmployee()
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $item) {
            $employee = new Employee(
                $item["name"],
                $item["dateOfBirth"],
                $item["address"],
                $item["job"]
            );
            array_push($list, $employee);
        }
        return $list;
    }

}