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
    push element of array separated by spaces:
    <input type="text" name="text"/>
    <input type="submit" value="FIND MIN"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Bước 1 : lấy chuỗi nhập vào;
    $text = $_POST["text"];

        //Bước 2 : tách chuổi thành mảng mới;
    $arrayNumber = explode(' ', $text);
    echo "Array your in put is : <br>".$text;

        //Bước 3 : tìm min
    $min = $arrayNumber[0];
    echo "<br>" . $arrayNumber[0];
    for ($key = 0; $key < count($arrayNumber); $key++) {
        if ($min > $arrayNumber[$key]) {
            $min = $arrayNumber[$key];
        }
    }

        //Bước 4 : In kết quả
    echo "<br>" . "min of array is : " . $min;
}
?>
</body>
</html>
