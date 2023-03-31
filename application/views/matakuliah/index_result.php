<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil | Mata Kuliah</title>
</head>
<style>
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 0;
        margin: 0;
    }


    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"],
    select {
        padding: 4px 20px;
        height: 35px;
        border: 1px solid black;
        margin: 10px;
        border-radius: 3px;
        flex-grow: 1;
    }

    .form-row {
        flex-direction: row;
        display: flex;
    }

    .container {
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        border: 1px solid black;
        padding: 32px;
        border-radius: 24px;
    }


    .btn {
        margin-top: 14px;
        width: 100%;
        margin: 4px 20px;
        background-color: black;
        color: white;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
    }

    .back {
        width: 100%;
        margin: auto;
        background-color: black;
        color: white;
        padding: 8px;
        text-decoration: none;
        border-radius: 4px;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <h2 align="center">Detail Mata Kuliah</h2>
        <form action="#">
            <div class="form-panel">
                <div class="form-row form-name">
                    <input type="text" value="Kode MTK : <?php echo $kode ?>" disabled required>
                </div>
                <div class="form-row form-name">
                    <input type="text" value="Nama MTK : <?php echo $nama ?>" disabled>
                </div>
                <div class="form-row form-name">
                    <input type="text" value="Jumlah SKS : <?php echo $sks ?>" disabled>
                </div>
                <div class="form-row form-name">
                    <a href="<?php echo base_url('formmatakuliah'); ?>" class="back">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>