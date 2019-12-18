<?php
include_once 'dancer.php';

$arrBoy = new SplQueue();
$arrGirl = new SplQueue();


$dancer1 = new Dancer('quang','nam');
$dancer2 = new Dancer('phuong','nu');
$dancer3 = new Dancer('cuong','nam');
$dancer4 = new Dancer('hoa','nu');


$arrBoy->enqueue($dancer1);
$arrGirl->enqueue($dancer2);
$arrBoy->enqueue($dancer3);
$arrGirl->enqueue($dancer4);

// var_dump($arrBoy);
if ($arrBoy->isEmpty || $arrGirl->isEmpty) {
    echo 'khong co ban nhay';
} else {
    echo  'ten dancer nam: '.$arrBoy->dequeue()->name. "<br/>ten dancer nu: ". $arrGirl->dequeue()->name;
}