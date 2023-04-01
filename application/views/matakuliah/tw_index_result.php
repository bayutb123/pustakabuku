<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('dist/output.css') ?>">
    <title>Form | Mata Kuliah</title>
</head>
<style>
    .container {
        width: fit-content;
        margin: auto;
        margin-top: 50px;
        border: 3px solid grey;
        padding: 32px;
        border-radius: 24px;
    }
    h2 {
        margin-bottom: 24px;
    }
</style>

<body>
    <div class="container bg-blue-500 shadow-lg shadow-blue-500/50 text-white">
        <h2 class="font-semibold text-center">Tabel simulasi jika beberapa data telah diinput</h2>
        <table class="table-fixed">
            <thead>
                <tr>
                    <th>Kode MTK</th>
                    <th>Nama MTK</th>
                    <th>Jumlah SKS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:bg-blue-400 duration-300 " style="cursor: pointer;">
                    <td align="left"><?php echo $kode ?></td>
                    <td><?php echo $nama ?></td>
                    <td align="right"><?php echo $sks ?></td>
                </tr>
                <tr class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:bg-blue-400 duration-300 " style="cursor: pointer;">
                    <td align="left"><?php echo $kode ?></td>
                    <td><?php echo $nama ?></td>
                    <td align="right"><?php echo $sks ?></td>
                </tr>
                <tr class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:bg-blue-400 duration-300 " style="cursor: pointer;">
                    <td align="left"><?php echo $kode ?></td>
                    <td><?php echo $nama ?></td>
                    <td align="right"><?php echo $sks ?></td>
                </tr>
                <tr class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:bg-blue-400 duration-300 bg-blend-multiply " style="cursor: pointer;">
                    <td align="left"><?php echo $kode ?></td>
                    <td><?php echo $nama ?></td>
                    <td align="right"><?php echo $sks ?></td>
                </tr>
                <tr class="transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-110 hover:bg-blue-400 duration-300 " style="cursor: pointer;">
                    <td align="left"><?php echo $kode ?></td>
                    <td><?php echo $nama ?></td>
                    <td align="right"><?php echo $sks ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>