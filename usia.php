<!DOCTYPE html>
<html>
<body>
<style>
                table,td{
                border: 1px solid black;
                border-collapse: collapse;
               }
                #form {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                #form th {
                padding: 8px;
                }

                #form tr:nth-child(even){background-color: #f2f2f2;}

                #form tr:hover {background-color: #ddd;}

                #form th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
                }
                
        </style>
<?php  

error_reporting(E_ALL);
$golongan = array(
    array('1' =>'kanak-kanak','2'=> 'remaja', '3'=>'dewasa','4'=> 'lansia'),
);
$usia = array(
    array('1'=>'15-11 tahun','2'=> '12-25 tahun','3'=> '26-45 tahun','4'=> '46-65 tahun'),
);
?>  

<table>
<tr>
        <td><?php echo $golongan[0][1];?></td>
        <td><?php echo $golongan[0][2];?></td>
        <td><?php echo $golongan[0][3];?></td>
        <td><?php echo $golongan[0][4];?></td>
</tr>

<tr>
        <td><?php echo $usia[0][1];?></td>
        <td><?php echo $usia[0][2];?></td>
        <td><?php echo $usia[0][3];?></td>
        <td><?php echo $usia[0][4];?></td>
</tr>
</table>

<p><strong> Output Range Umur Golongan Dewasa dan Lansia </p></strong>
    <?php echo $golongan[0][3]. "<br>"?>
    <?php 
for ($u = 35; $u <= 40; $u++){
    echo $u. ' tahun'. "<br>";
}
?>
        <br>
        <?php echo $golongan[0][4]. "<br>";?>
        <?php 
            $a= 60;
            echo $a. ' tahun'?>

</body>
</html>
