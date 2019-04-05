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
    push element of array separated by spaces: <br>
    <input type="text" name="text"/>
    <input type="submit" value="FIND MIN"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    function findMin($text)
    {
        $text = $_POST["text"];
        $array = explode(' ', $text);
        $min = $array[0];
        for ($key = 0; $key < count($array); $key++) {
            if ($min > $array[$key]) {
                $min = $array[$key];
            }
        }
        return $min;
    }
    echo "show number : ".$text."<br> min in your array ".findMin($text);
}
?>
</body>
</html>