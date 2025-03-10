<?php
    include "Mahasiswa.php";
    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik
    Informatika');
    print_r($mahasiswaTI->getData()); 
    $mahasiswaSI = new Mahasiswa();
    $mahasiswaSI->setData('A11.2000.00001', 'Junior', 'Sistem
    Informasi');
    print_r($mahasiswaSI->getData()); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: flex;
            flex-direction: column;
            transition-duration: 1s;
        }
    </style>
</head>
<body>
    <div>
        <?php $mahasiswaTI -> tampilData() ?>
        <?php $mahasiswaSI -> tampilData() ?>
    </div>
</body>
</html>