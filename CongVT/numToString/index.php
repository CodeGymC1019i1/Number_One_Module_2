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
<form action="" method="post">
    <input type="number" name="height" placeholder="Input your height"/>
    <input type="submit" id="submit" value="To String">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $number = $_POST['height'];
    $toString = '';
    if ($number >= 1000 || $number < 0) {
        $toString = 'Out of ability';
    } else {
        switch (floor($number / 100)) {
            case 1:
                $toString = 'One hundred and';
                break;
            case 2:
                $toString = 'Two hundred and';
                break;
            case 3:
                $toString = 'Three hundred and';
                break;
            case 4:
                $toString = 'Four hundred and';
                break;
            case 5:
                $toString = 'Five hundred and';
                break;
            case 6:
                $toString = 'Six hundred and';
                break;
            case 7:
                $toString = 'Seven hundred and';
                break;
            case 8:
                $toString = 'Eight hundred and';
                break;
            case 9:
                $toString = 'Nine hundred and';
                break;
        }
        if (floor(($number % 100) / 10) != 1) {
            switch (floor(($number % 100) / 10)) {
                case 0:
                    $toString .= " ";
                    break;
                case 2:
                    $toString .= ' twenty';
                    break;
                case 3:
                    $toString .= ' thirty';
                    break;
                case 4:
                    $toString .= ' forty';
                    break;
                case 5:
                    $toString .= ' fifty';
                    break;
                case 6:
                    $toString .= ' sixty';
                    break;
                case 7:
                    $toString .= ' seventy';
                    break;
                case 8:
                    $toString .= ' eighty';
                    break;
                case 9:
                    $toString .= ' ninety';
                    break;
            }

            switch (($number % 100) % 10) {
                case 0:
                    $toString .= ' ';
                    break;
                case 1:
                    $toString .= ' one';
                    break;
                case 2:
                    $toString .= ' two';
                    break;
                case 3:
                    $toString .= ' three';
                    break;
                case 4:
                    $toString .= ' four';
                    break;
                case 5:
                    $toString .= ' five';
                    break;
                case 6:
                    $toString .= ' six';
                    break;
                case 7:
                    $toString .= ' seven';
                    break;
                case 8:
                    $toString .= ' eight';
                    break;
                case 9:
                    $toString .= ' night';
                    break;
            }

        } else {
            switch (($number % 100) % 10) {
                case 0:
                    $toString .= ' ten';
                    break;
                case 1:
                    $toString .= ' eleven';
                    break;
                case 2:
                    $toString .= ' twelve';
                    break;
                case 3:
                    $toString .= ' thirteen';
                    break;
                case 4:
                    $toString .= ' fourteen';
                    break;
                case 5:
                    $toString .= ' fifteen';
                    break;
                case 6:
                    $toString .= ' sixteen';
                    break;
                case 7:
                    $toString .= ' seventeen';
                    break;
                case 8:
                    $toString .= ' eighteen';
                    break;
                case 9:
                    $toString .= ' nineteen';
                    break;
            }
        }

    }
    echo "" . $number . " to string is " . $toString . "";
}
?>

</body>
</html>