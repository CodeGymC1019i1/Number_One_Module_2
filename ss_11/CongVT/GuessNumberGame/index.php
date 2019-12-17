<?php
include "submit.php";
?>

<html>
<title>Submit Form without Page Refresh - PHP/jQuery - TecAdmin.net</title>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<form id="myForm" method="post">
    GUESS: <input name="checkWin" type="radio" value="You are WIN!!!">Right number
    <input name="checkWin" type="radio" value="lower">Lower
    <input name="checkWin" type="radio" value="Higher than my number">Higher <br/>
    <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit"/>
</form>
<br/>
Your data will display below..... <br/>
==============================<br/>
<div id="results">
    <!-- All data will display here  -->
</div>

<script>
    function SubmitFormData() {
        let checkWin = $("input[type=radio]:checked").val();
        $.post("submit.php", {checkWin: checkWin},
            function (data) {
                $('#results').html(data);
                $('#myForm')[0].reset();
            });
    }
</script>
</body>
</html>
