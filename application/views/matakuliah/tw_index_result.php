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
    <div class="flex h-screen items-center justify-center">
        <div style="padding: 32px" class="shadow-lg">
            <h2 class="subpixel-antialiased text-center text-xl font-black " style="margin-bottom: 32px;">Data Tersimpan</h2>
            <form class="w-full max-w-sm " action="<?php echo base_url('formmatakuliah/tw_save'); ?>" method="post">
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Kode MTK
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required name="kodematkul" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" disabled value="<?php echo $kode ?>">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Nama MTK
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input required name="namamatkul" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" disabled value="<?php echo $nama ?>">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                            Jumlah SKS
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <div class="relative">
                            <select required name="sks" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" disabled value="<?php echo $sks ?>">

                                <option>1 SKS</option>
                                <option>2 SKS</option>
                                <option>3 SKS</option>
                                <option>4 SKS</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="relative">
                        <button onclick="location.href='<?php echo base_url('formmatakuliah/tw'); ?>'" type="button">
                            Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>