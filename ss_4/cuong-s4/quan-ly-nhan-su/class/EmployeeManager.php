<?php
namespace Controller;

include_once "Manager.php";

    class EmployeeManager extends Manager
    {
        public function add($employee)
        {
            $listEmployee = $this->readFile();

            $data = [
                'img' => $employee->img,
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
            $employees[$index]->img = $this->image();
            $employees[$index]->name = $_POST['editName'];
            $employees[$index]->birthday = $_POST['editBirthday'];
            $employees[$index]->address = $_POST['editAddress'];
            $employees[$index]->position = $_POST['editPosition'];
            $this->saveDataToFile($employees);
        }
        
        public function image()
        {
            if(isset($_FILES['editImg'])){
                $errors= array();
                $img = $_FILES['editImg']['name'];
                $file_tmp = $_FILES['editImg']['tmp_name'];
                $file_ext=strtolower(end(explode('.',$_FILES['editImg']['name'])));
                $extensions= array("jpeg","jpg","png");
              
              if(in_array($file_ext,$extensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                 $img = '/person.jpg';
              }
              if(empty($errors)==true) {
                 move_uploaded_file($file_tmp,"../src/images/".$img);
              }else{
                 print_r($errors);
              }
            }
            return $img;
        }
        public function getList()
        {
            $data = $this->readFile();
            
            $arr = [];
            foreach ($data as $item) {
                $employee = new Employee($item['img'],$item['name'],$item['birthday'],$item['address'],$item['position']
                                    );
                                    array_push($arr, $employee);
                                }
                                return $arr;
                            }
                        }