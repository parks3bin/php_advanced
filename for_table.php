<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for문&table</title>
</head>
<body>
<?php
echo"<table border=\"1\"> <tr>";
for ($i=1; $i<=10; $i++){
    echo "<td>".$i."</td>";
}
echo"</tr></table>";
?>

<?php
for ($i=0; $i<=10; $i++) {?>
<div>하하하</div>
<?php }?>

<table border="1">
    <?php
    for($i=0; $i<=9; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 9; $j++) {
            echo "<td>" . ($i + $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<table border="1">
    <?php
    for($i=0; $i<=9; $i++) {
        echo "<tr>";
        for ($j = $i*10+1; $j <= $i*10+10; $j++) {
            echo "<td>".$j."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>