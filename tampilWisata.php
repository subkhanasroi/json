<?php
function curl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}

$send = curl("http://localhost/json/getWisata.php");

$data = json_decode($send, TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WISATA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
    crossorigin="anonymous">
</head>
<body>
<div class= "container mt-3">
    <table class= "table table-bordered">
        <thead class= "table-primary">
        <tr>
            <th> Kota</th>
            <th>Wisata</th>
            <th>Tarif</th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $row){
        ?>
            <tr>
                <td><?php echo $row["kota"];?> </td>
                <td><?php echo $row["landmark"];?> </td>
                <td><?php echo $row["tarif"];?> </td>
            </tr>
<?php }?>
                </tbody>
        </table>
    </div>
</body>
</html>