<!DOCTYPE html>
<?php 
$say = "hello " . $_GET['depan']. " " .$_GET['belakang'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1><?= $say ?></h1>

    <!-- <form action="" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="">
        <label for="ttl">tempat lahir</label>
        <input type="text" name="ttl" id="">
        <input type="submit" value="ror">
    </form>

    <table>
        <tr> 
            <td>nama:</td>
            <td><?= $_POST['name']?></td>
        </tr>
        <tr>
            <td>ttl:</td>
            <td><?= $_POST['ttl']?></td>
        </tr>
    </table> -->
    <form action="" method="get">
                <label for="name">name</label>
        <input type="text" name="name" id="">
        <label for="ttl">tempat lahir</label>
        <input type="text" name="ttl" id="">
        <input type="submit" value="ror">
    </form>

        <table>
        <tr> 
            <td>nama:</td>
            <td><?= $_GET['name'] ?></td>
        </tr>
        <tr>
            <td>ttl:</td>
            <td><?= $_GET['ttl'] ?></td>
        </tr>
    </table>
</body>
</html>