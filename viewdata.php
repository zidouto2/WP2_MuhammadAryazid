<html>
<head>
<title>From Data Member</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
<h5>NIK</h5>
<input type="text" name="nik" value="" size="50" />

<h5>Nama</h5>
<input type="alpha" name="nama" value="" size="50" />

<h5>Alamat</h5>
<input type="text" name="alamat" value="" size="50" />

<h5>Jenis Kelamin</h5>
<input type="radio" name="kel" value="Laki-Laki" > Laki-Laki <br>
<input type="radio" name="kel" value="Perempuan" > Perempuan <br>

<h5>No Hp</h5>
<input type="text" name="no_hp" value="" size="50" />

<div><input type="submit" value="Submit" /></div>


</body>
</html>