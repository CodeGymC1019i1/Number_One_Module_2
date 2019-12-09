<?php
namespace Controller;

    class EmployeeManager
    {
        private $pathFile;

        public function __construct($pathFile)
        {
            $this->pathFile = $pathFile;
        }

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
            array_push($listEmployee, $employee);
            $this->saveDataToFile($listEmployee);
        }

        public function readFile()
        {
            $dataJson = file_get_contents($this->pathFile);
            return json_decode($dataJson, true);
        }
        public function saveDataToFile($employee)  
        {
            try {
                $dataJson = json_encode($employee);
                file_put_contents($this->pathFile, $dataJson);
            } catch (\Exception $e) {
                echo $e->getMessage();
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