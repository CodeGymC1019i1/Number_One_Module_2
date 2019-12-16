<?php
$textarea =$_POST["textarea"];
$arr = explode(",",$textarea);
$viettel=new SplStack();
$mobi=new SplStack();
$vina=new SplStack();
for($i=0;$i<count($arr);$i++){
    if(substr($arr[$i],0,3)=="098") {
        $viettel->push($arr[$i]);
    }else if(substr($arr[$i],0,3)=="090"){
        $mobi->push($arr[$i]);
    }else{
        $vina->push($arr[$i]);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="textarea"></textarea>
    <input type="submit" value="Lọc">
</form>
</body>
</html>
