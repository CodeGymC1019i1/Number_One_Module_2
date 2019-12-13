<?php
namespace Controller;

include_once "Manager.php";

    class EmployeeManager extends Manager
    {
        public function add($employee)
        {
            $listEmployee = $this->readFile();

            $data = [
                'they' => $employee->they,
                'name' => $employee->name,
                'birthday' => $employee->birthday,
                'address' => $employee->address,
                'position' => $employee->position
            ];
            array_unshift($listEmployee, $data);
            $this->saveDataToFile($listEmployee);
        }

        public function delete($index)
        {
            $employee = $this->readFile();
            if(array_key_exists($index, $employee)){
                array_splice($employee, $index, 1);
            }
            $this->saveDataToFile($employee);
        }
        public function edit($index)
        {
            $employees = $this->getList();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employees[$index]->they = $_POST['editThey'];
            $employees[$index]->name = $_POST['editName'];
            $employees[$index]->birthday = $_POST['editBirthday'];
            $employees[$index]->address = $_POST['editAddress'];
            $employees[$index]->position = $_POST['editPosition'];

            $this->saveDataToFile($employees);
            header("location: ../index.php");
            }
        }
        public function getList()
        {
            $data = $this->readFile();
            
            $arr = [];
            foreach ($data as $item) {
                $employee = new Employee($item['they'],$item['name'],$item['birthday'],$item['address'],$item['position']
                                    );
                                    array_push($arr, $employee);
                                }
                                return $arr;
                            }
                        }