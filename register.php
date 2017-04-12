<?php
ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
	header("Location: index.php");
}
include_once 'assets/dbconnect.php';

if(isset($_POST['btn-signup'])) {
		
	$uname = trim($_POST['uname']);
	$email = trim($_POST['email']);
	$upass = trim($_POST['pass']);
	$ip = trim($_POST['ip']);
	$browser = trim($_POST['browser']);

	$id_user = trim($_POST['id_user']);
	$nama = trim($_POST['nama']);
	$nama_panggilan = trim($_POST['nama_panggilan']);
	$jenis_kelamin = trim($_POST['jenis_kelamin']);
	$tanggal_lahir = trim($_POST['tanggal_lahir']);
	$no_hp = trim($_POST['no_hp']);

	
	$uname = strip_tags($uname);
	$email = strip_tags($email);
	$upass = strip_tags($upass);

	$id_user = strip_tags($id_user);
	$nama = strip_tags($nama);
	$nama_panggilan = strip_tags($nama_panggilan);
	$jenis_kelamin = strip_tags($jenis_kelamin);
	$tanggal_lahir = strip_tags($tanggal_lahir);
	$no_hp = strip_tags($no_hp);

	// password encrypt using SHA256();
	$password = hash('sha256', $upass);
	
	// check email exist or not
	$query1 = "SELECT userEmail FROM users WHERE userEmail='$email'";
	$result = mysql_query($query1);
	
	$count = mysql_num_rows($result); // if email not found then proceed
	
	if ($count==0) {
		
		$query1 = "INSERT INTO users(userName,userEmail,userPass,ip,browser,token) VALUES('$uname','$email','$password','$ip','$browser',UUID())";
		$query2 = "INSERT INTO profils(id_user,nama,nama_panggilan,jenis_kelamin,tanggal_lahir,no_hp) VALUES('$id_user','$nama','$nama_panggilan','$jenis_kelamin','$tanggal_lahir','$no_hp')";
		$res = mysql_query($query1) or die(mysql_error());
		
		if ($res) {
			$res = mysql_query($query2) or die(mysql_error());
			$errTyp = "success";
			$errMSG = "successfully registered, you may login now";
		} else {
			$errTyp = "danger";
			$errMSG = "Terjadi kesalahan, silahkan coba lagi...";	
		}	
			
	} else {
		$errTyp = "warning";
		$errMSG = "Maaf, email sudah digunakan ...";
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php if(stristr($_SERVER['HTTP_USER_AGENT'], "Mobile")){ // if mobile browser ?> 
<link rel="stylesheet" href="assets/css/mobile.css" type="text/css" /> <?php } else { // desktop browser ?> 
<link rel="stylesheet" href="style.css" type="text/css" /> <?php } ?>

</head>

<body>
<?php
			if ( isset($errMSG) ) {
				
				?>
<div class="form-group">
  <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>"> <span class="fa fa-info-sign"></span> <?php echo $errMSG; ?> </div>
</div>
<?php
			}
			?>
<form action="#" method="post" id="smart-form-register" class="smart-form client-form" novalidate>
  <table width="100%" border="0">
    <tr>
      <td width="19%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="35%">&nbsp;</td>
      <td width="22%">&nbsp;</td>
      <td width="1%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
    </tr>
    <tr>
      <td>No. KK</td>
      <td>:</td>
      <td><label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" /></td>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <label for="select"></label>
        <select name="jenis_kelamin" id="jenis_kelamin">
          <option value="1">Laki-Laki</option>
          <option value="2">Perempuan</option>
        </select></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><input type="text" name="textfield2" id="textfield2" /></td>
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" /></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" id="nama" /></td>
      <td>No. HP</td>
      <td>:</td>
      <td><input type="text" name="no_hp" id="no_hp" /></td>
    </tr>
    <tr>
      <td>Nama Panggilan</td>
      <td>:</td>
      <td><input type="text" name="nama_panggilan" id="nama_panggilan" required="required" /></td>
      <td>&nbsp;</td>
      <td>:</td>
      <td><input type="text" name="textfield4" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Username</td>
      <td>:</td>
      <td><input type="text" name="uname" id="uname" required="required" /></td>
      <td>&nbsp;</td>
      <td>:</td>
      <td><input type="text" name="textfield5" id="textfield5" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><input type="text" name="email" id="email" /></td>
      <td>&nbsp;</td>
      <td>:</td>
      <td><input type="text" name="textfield6" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="text" name="pass" id="pass" required="required" /></td>
      <td>&nbsp;</td>
      <td>:</td>
      <td><input type="text" name="textfield7" id="textfield7" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <input type="hidden" name="ip" id="ip" value="<?php echo $_SERVER["REMOTE_ADDR"];?>" >
    <input type="hidden" name="browser" id="browser" value="<?php echo $_SERVER["HTTP_USER_AGENT"];?>" >
    <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION["user"];?>" >
  </table>
  <button type="submit" class="btn btn-primary" name="btn-signup"> Register </button>
</form>
</body>
</html>
