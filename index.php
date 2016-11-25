<?php
session_start();
$_SESSION['isLogin'] = False;
$_SESSION['nis'] = "";
error_reporting(0);
include 'config/conn.php'; 
$signin = "disabled";
if (isset($_POST['check'])) {
  $sql = mysqli_query($con, "SELECT * FROM tbl_peserta WHERE `NIS` = '".$_POST['nis']."'");
  if (mysqli_num_rows($sql) > 0) {
    $lol = mysqli_fetch_array($sql);
    $nama = $lol['Nama'];
    $memilih = $lol['Memilih'];
    $nis = $_POST['nis'];
    $signin = "";
    $_SESSION['isLogin'] = True;
    $_SESSION['nis'] = $lol['NIS'];
?>
<?php
  } else {  
    $nama = "Peserta Didik Tidak Terdaftar";
    $signin = "disabled";
  }
}

if(isset($_POST['signin'])){
  $sql = mysqli_query($con, "SELECT * FROM tbl_peserta WHERE `NIS` = '".$_POST['nis']."'");
  $lol = mysqli_fetch_array($sql);
  if ($_POST['token']==$lol['Token']) {
    if ($lol['Memilih']=='Sudah') {
      echo "<Script>alert('Anda Sudah Memilih');document.location.href='index.php'</script>";
    } else {
      echo "<script>document.location.href='calon';</script>";
    } 
  } else if($_POST['token']=="") {
    echo "<script>alert('Token Tidak Boleh Kosong')</script>";
  } else {
    echo "<script>alert('Token Yang Anda Masukkan Salah')</script>";
  }
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Marcello Ryan">
  <meta name="description" content="Pemilu Raya OSIS MPR SMK WIKRAMA BOGOR">
  <meta name="keywords" content="Pemilu, Raya, OSIS, MPR, SMK, Wikrama, Bogor, HTML, PHP, CSS, MDL, Material, Design, Lite, Javascript, JS, SQL">

  <title>Pemilu Raya | osismprwikrama.org</title>
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/icon?family=Material+Icons'>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="mdl/material.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/img/logo.png">
</head>

<body oncontextmenu="return false">
<!--      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title" style="text-align: center; margin-left: 530px;">Pemilu Raya</span>
        </div>
      </header>-->

  <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
  <main class="mdl-layout__content">
    <div class="mdl-card mdl-shadow--6dp">
      <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text">Login</h2>
      </div>
      <div class="mdl-card__supporting-text">
        <form method="post">
        <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--8-col">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="nis" type="text" id="nis" maxlength="8" onkeypress="return angkaOnly(event)" value="<?php echo $nis; ?>">
    <label class="mdl-textfield__label" for="nis">NIS</label>
  </div>
          </div>
          <div class="mdl-cell mdl-cell--4-col">
            <button name="check" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">Check
            </button>
          </div>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="nama" disabled style="text-align: center;" value="<?php echo $nama; ?>">
          </div>
      </div>
      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--8-col">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="token" type="password" id="token" value="" onkeypress="return angkaOnly(event)" maxlength="8">
            <label class="mdl-textfield__label" for="nis">Token</label>
          </div>
        </div>
        <div class="mdl-cell mdl-cell--4-col">
          <button name="signin" <?php echo $signin;; ?> class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">Sign In
          </button>
        </div>
      </div>
        </form>
    </div><br/>

    <div class="mdl-mega-footer__middle-section">
      <div style="text-align: center;">Hak Cipta &copy; 2016 <a href="http://osismprwikrama.org/" target="_blank" style="text-decoration: none;">OSIS MPR</a></div>
    </div>

  </main>
  <center><img src="assets/img/logo.png" width="50px" height="50px"></center>
</div>

  <script src="mdl/material.min.js"></script>
  <script>
    function angkaOnly(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
      if(charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>
  
</body>
</html>
