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
            array_push($listEmployee, $data);
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
            $employee = $this->getList();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employee[$index]->they = $_POST['they'];
            $employee[$index]->name = $_POST['name'];
            $employee[$index]->birthday = $_POST['birthday'];
            $employee[$index]->address = $_POST['address'];
            $employee[$index]->position = $_POST['position'];

            $this->saveDataToFile($employee);
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