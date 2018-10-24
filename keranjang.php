<?php 
	if ($totalBarang == 0) {
		echo "<h3>saat ini belum ada data dalam keranjang belanja anda</h3>";
	}else{
		$no=1;

		echo "<table class='table-list'>
					<tr class='baris-title'>
						<th class='tengah'>No</th>
						<th class='kiri'>image</th>
						<th class='kiri'>Nama Barang</th>
						<th class='tengah'>Qty</th>
						<th class='tengah'>Harga Satuan</th>
						<th class='tengah'>Total</th>
					</tr>";
			foreach($keranjang AS $key => $value) {
				$barang_id = $key;

				$nama_barang = $value["nama_barang"];
				$quantity = $value["quantity"];
				$gambar = $value["gambar"];
				$harga = $value["harga"];

				$total = $quantity * $harga;

				echo "<tr>
						<td class='tengah'>$no</td>
						<td class='kiri'><img src='".BASE_URL."images/barang/$gambar' height='100px'></td>
						<td class='kiri'>$nama_barang</td>
						<td class='tengah'><input type='number' name='$barang_id' value='$quantity' class='update-quantity'>
						</td>
						<td class='tengah'>".rupiah($harga)."</td>
						<td class='kanan hapus_item'>".rupiah($total)." <a href='".BASE_URL."hapus_item.php?barang_id=$barang_id'>x</a></td>

					  </tr>";
				$no++;
			}
			echo "</table>";
			  
	}

 ?>

 <script type="text/javascript">
 	$(".update-quantity").on("input", function(e){
 		var barang_id = $(this).attr("name");
 		var value = $(this).val();

 		$.ajax({
 			method: "POST",
 			url: "update_keranjang.php",
 			data: "barang_id="+barang_id+"&value="+value
 		})
 		.done(function(data){
 			location.reload();
 		});
 	});
 </script>