<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pencarian dengan CodeIgniter 3 &raquo; Jaranguda.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h3>Pencarian</h3>
			<hr>
			<form action="<?php echo base_url('index.php/DataAlumni/hasil')?>" action="GET">
				<div class="form-group">
					<label for="cari">data yang dicari</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>
		</div>
	</body>
</html>
