<?php 
$perangkat=['Motherboard','Processor','Hard Disk','PC Coller','VGA Card','SSD'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .kotak{
        margin-left: 20px;
    }

</style>
<body>
<ol>

<h3><b>Macam-macam perangat keras komputer</b></h3>
<div class="kotak">
<?php 
 foreach ($perangkat as $isi)
 echo "<li>$isi</li>"
?>
</div>
</ol>


<ol>
<h3><b>Macam-macam perangat keras komputer baru</b></h3>
<div class="kotak">
<?php 
array_push($perangkat,'Card Reader','Modem');
sort($perangkat);
for ($i = 0; $i < count($perangkat); $i++)
    echo"<li>$perangkat[$i]</li>"

?>
</div>
</ol>
</body>
</html>