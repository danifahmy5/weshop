<?php
   
    if($user_id){
    	header("location: ".BASE_URL);
    }
?>

<div id="container-user-akses">

	<form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
		<?php
		$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
		$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
		$email = isset($_GET['email']) ? $_GET['email'] : false;
		$phone = isset($_GET['phone']) ? $_GET['phone'] : false;
		$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false; 


		 ?>

		<?php 
		     $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

		     if ($notif == "require") {
		     	echo "<div class='notif'>Maaf, kamu harus melengkapai from dibawah ini</div>";
		     	}elseif ($notif == "password") {
		     	echo "<div class='notif'>Maaf, password yang kamu masukan tidak sama</div>";
		     	}elseif ($notif == "email") {
		     	echo "<div class='notif'>Maaf, email yang kamu masukan sudah terdaftar </div>";
		     	}
		 ?>

		<div class="element-from">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
			
		</div>
		
		<div class="element-from">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
			
		</div>

		<div class="element-from">
			<label>Nomor Telepon / Handphone</label>
			<span><input type="text" name="phone" value="<?php echo $phone; ?>" /></span>
			
		</div>

		<div class="element-from">
			<label>Alamat </label>
			<span><textarea name="alamat"></textarea></span>
			
		</div>

		<div class="element-from">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
			
		</div>

		<div class="element-from">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
			
		</div>

		<div class="element-from">
			<span><input type="submit" value="register" /></span>
			
		</div>
	</form>
	
</div>