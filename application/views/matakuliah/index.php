<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Mata Kuliah</title>
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
    }
</style>

<body>
    <div class="container">
        <h2 align="center">Form Mata Kuliah</h2>
        <form action="<?php echo base_url('formmatakuliah/save');?>" method="post">
            <div class="form-panel">
                <div class="form-row form-name">
                    <input type="text" name="kodematkul" id="kodematkul" autocomplete="false" placeholder="Kode Mata Kuliah" required>
                </div>
                <div class="form-row form-name">
                    <input type="text" name="namamatkul" id="namamatkul" autocomplete="false" placeholder="Nama Mata Kuliah" required>
                </div>
                <div class="form-row form-name">
                    <select name="sks" id="sks" required>
                        <option value="notselected">-- Pilih Jumlah SKS --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-row form-name">
                    <input type="submit" class="btn" value="Save"></button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>