<?php
function deleteUser($filename){
    $arr_Data = loadRegistration($filename);
    foreach($arr_Data as $elementKey => $element) {
    foreach($element as $valueKey => $value) {
        if($valueKey == 'deleteStatus' && $value == 'delete'){
            //delete this particular object from the $array
            unset($arr_Data[$elementKey]);
        }
    }
}
}
