<?php
include_once "FileManager.php";

class GroupManager extends FileManager
{
    public function add($group)
    {
        $listGroup = $this->readData();
        $data = [
            'name' => $group->name,
            'member' => $group->member
        ];
        array_push($listGroup, $data);
        $this->saveData($listGroup);
    }

    public function getListGroup()
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $item) {
            $group = new Group(
                $item['name']
            );
            array_push($list, $group);
        }
        return $list;
    }

    public function addMember($member)
    {

    }

    public function delete($index)
    {
        $listGroup = $this->readData();
        if (array_key_exists($index, $listGroup)) {
            array_splice($listGroup, $index, 1);
        }
        $this->saveData($listGroup);
    }

    public function edit($index)
    {
        $groups = $this->getListGroup();
        $groups[$index]->name = $_POST['name'];
        $groups[$index]->member = [];
        $this->saveData($groups);
        header("location: index.php");
    }


    public function search($keyword)
    {
        $data = $this->readData();
        $list = [];
        foreach ($data as $key => $value) {
            if (strpos(strtolower($value['name']), strtolower($keyword)) !== false ) {
                $group = new Group(
                    $value["name"]
                );
                array_push($list, $group);
            }
        }
        return $list;
    }
}