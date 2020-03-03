<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses</title>
    <style>
        .input{
            height:30px;
            margin-bottom:10px;
        }
        .tengah{
            align:center;
        }
    </style>
</head>
<body>
<div class="tengah">
<form action="proses.php" method="post">
    <label for=""> Mulai </label>
    <input type="text" name="mulai" class="input"><br>
    <label for=""> Sampai </label>
    <input type="text" name="sampai" class="input"><br>
    <label for=""> Kode Jenis </label>
    <input type="text" name="jenis" class="input"><br>
    <label for=""> Kode Cabang </label>
    <input type="text" name="cabang" class="input"><br>
    <button type="submit" name="generate">Generate</button>
</div>
</form>
</body>
</html>