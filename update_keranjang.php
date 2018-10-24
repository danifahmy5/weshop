<?php 

	session_start();
	
	foreach($keranjang AS $key => $value) {
				$barang_id = $key;

				$nama_barang = $value["nama_barang"];
				$quantity = $value["quantity"];
				$gambar = $value["gambar"];
				$harga = $value["harga"];

				$total = $quantity * $harga;
	}
	$keranjang = $_SESSION["keranjang"];
	$barang_id = $_POST["barang_id"];
	$value = $_POST["value"];

	$keranjang[$barang_id]["quantity"] = $value;

	$_SESSION["keranjang"] = $keranjang;

 ?>