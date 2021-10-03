<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
                table,tr,td{
                    border: 1px solid black;
                }
            
                #form {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 45%;
                    margin:auto;
                }

                #form th {
                    padding: 8px;
                    border:1px;
                }
                .container1 {
                    border: 1px solid black;
                    width:45%;
                }
                .container2 {
                    border: 1px solid black;
                    width:50%;
                    float :right;
                    margin-top: -140px; 
                }
                #form tr:nth-child(even){background-color: #f2f2f2;}

                #form tr:hover {background-color: #ddd;}

                h2{
                    text-align:center;
                }

                #form th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: center;
                    background-color: orange;
                    color: black;
                }
                
    </style>
</head>
<body>
    <?php
    $makanan = array('Nasi dan Ikan Nila Bakar', 'Nasi dan Ikan Lele bakar', 'Nasi dan Ayam Goreng', 'Nasi dan Bebek goreng');
    $minuman = array('Es Teh', 'Es jeruk', 'Jeruk Panas', 'Teh panas');
    ?>

    <div class="container1">
        <h5>List Menu Makanan</h5>
        <form action="" method="POST">
    
        <?php
        $no = 1;
        foreach ($makanan as $makan) : ?>
            <div class="">
                <input class="" name="makanan" type="checkbox" value=" <?= $no . '. ' . $makan; ?>" id="">
                <label class="" for="">
                    <?php echo$no++ . '.'; ?>
                    <?php echo $makan; ?>
                </label>
            </div>
        <?php endforeach; ?>
        </div>  

   <div class="container2">
        <h5>List Menu Minuman</h5>
            <?php
            $no = 1;
            foreach ($minuman as $minum) : ?>
                <div class="">
                    <input class="" name="minuman" type="checkbox" value="<?= $no . '. ' . $minum; ?>" id="">
                    <label class="" for="">
                        <?php echo $no++ . '.'; ?>
                        <?php echo $minum; ?>
                    </label>
                    </div>
            <?php endforeach;?>
    </div> 

        <button class="" type="submit">Pesan</button>

            <table id="form">
                <h2>Daftar pesanan</h2>
                <tr>
                    <th>makanan</th>
                    <th>minuman</th>
                </tr>
                <tr>
                <?php if(!Empty($_POST['makanan'] && $_POST['minuman'])){ ?>
                    <td><?php echo $_POST['makanan'];?></td>
                    <td><?php echo $_POST['minuman'];?></td>
                        <?php }else{?>

                        <?php } ?>
                        </tr>
            </table>
 
</body>
</html>
