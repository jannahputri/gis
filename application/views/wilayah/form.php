<!DOCTYPE html>
<html>

<head>
    <title>form lokasi</title>
</head>

<body>
    <form action=" <?= $action; ?> " method="POST" enctype='multipart/form-data'>
        idwilayah : <input type="hidden" name="idwilayah" value=" <?= $idwilayah; ?> "> <br> <br>
        <label>Nama Wilayah</label>
        <input type="text" name="nama" value=" <?= $nama; ?> ">
        <br> <br>
        <label>Wilayah</label>
        <input type="text" name="wilayah" placeholder="wilayah" value=" <?= $wilayah; ?> ">
        <br> <br>
        <label>Data Wilayah</label>
        <input type="text" name="datawilayah" value=" <?= $datawilayah; ?> ">
        <br>
        <br>
        <label>keterangan</label>
        <input type="text" name="keterangan" value=" <?= $keterangan; ?> ">
        <br>
        <button><?= $button ?></button>
    </form>

</body>

</html>