<?php
$customer_list = [
    "0" => ["name" => "Mai Van Hoan", "day_of_birth" => "1983/08/20", "address" => "Ha Noi", "image" => "images/img1.jpg"],
    "1" => ["name" => "Nguyen Van Nam", "day_of_birth" => "1983/08/21", "address" => "Bac Giang", "image" => "images/img2.jpg"],
    "2" => ["name" => "Nguyen Thai Hoa", "day_of_birth" => "1983/08/22", "address" => "Nam Dinh", "image" => "images/img3.jpg"],
    "3" => ["name" => "Tran Dang Khoa", "day_of_birth" => "1983/08/17", "address" => "Ha Noi", "image" => "images/img4.jpg"],
    "4" => ["name" => "Nguyen Dinh Thi", "day_of_birth" => "1983/08/19", "address" => "Ha Noi", "image" => "images/img5.jpg"]
];

function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_list = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['day_of_birth'])) < strtotime($from_date)) {
            continue;
        }
        if (!empty($to_date) && (strtotime($customer['day_of_birth'])) > strtotime($to_date)) {
            continue;
        }
        $filtered_list[] = $customer;
    }
    return $filtered_list;
}

$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_date = $_POST["from"];
    $to_date = $_POST["to"];
}
$filtered_customer = searchByDate($customer_list, $from_date, $to_date);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr td {
            width: 200px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Customers list</legend>
        <label>From: </label><input type="text" name="from" placeholder="yyyy-mm-dd">
        <label>To: </label><input type="text" name="to" placeholder="yyyy-mm-dd">
        <input type="submit" value="search">
    </fieldset>
</form>

<table border="0">
    <caption><h2>Customers list</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php if (count($filtered_customer) == 0): ?>
        <tr>
            <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
        </tr>
    <?php endif; ?>

    <?php foreach ($filtered_customer as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>


</table>


</body>
</html>
