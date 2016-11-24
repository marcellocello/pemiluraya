<?php 
session_start();
echo $_SESSION['nis']; ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pemilu Raya | osismprwikrama.org</title>
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/icon?family=Material+Icons'>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="mdl/material.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/img/osis_bulat.png">
</head>

<style>
.demo-card-image.mdl-card.uji {
  width: 256px;
  height: 236px;
  background: url('assets/img/05030.jpg') center / cover;
}
.demo-card-image.mdl-card.bayu {
  width: 256px;
  height: 236px;
  background: url('assets/img/04803.jpg') center / cover;
}
.demo-card-image.mdl-card.reva {
  width: 256px;
  height: 236px;
  background: url('assets/img/05154.jpg') center / cover;
}
.demo-card-image > .mdl-card__actions {
  height: 48px;
  padding: 15px;
  background: rgba(0, 0, 0, 0.6);
}
.demo-card-image__filename {
  color: #fff;
  font-size: 14px;
  font-weight: 500;
}
.demo-card-event.mdl-card {
  width: 256px;
  height: 206px;
  background: rgb(83,109,254);
}
.demo-card-event > .mdl-card__actions {
  border-color: rgba(255, 255, 255, 0.2);
}
.demo-card-event > .mdl-card__title {
  align-items: flex-start;
}
.demo-card-event > .mdl-card__title > h4 {
  margin-top: 0;
}
.demo-card-event > .mdl-card__actions {
  display: flex;
  box-sizing:border-box;
  align-items: center;
}
.demo-card-event > .mdl-card__actions > .material-icons {
  padding-right: 10px;
}
.demo-card-event > .mdl-card__title,
.demo-card-event > .mdl-card__actions,
.demo-card-event > .mdl-card__actions > .mdl-button {
  color: #fff;
}
</style>
<body>
  <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
  <main class="mdl-layout__content">
<!-- Card 1 Begin -->
<div class="mdl-grid" style="margin-top: 400px;">
  <div class="mdl-cell mdl-cell--4-col">
<div class="demo-card-image mdl-card uji">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Muhammad Rifki Fauzi</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
<br/>
<div class="demo-card-image mdl-card uji">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Muhammad Rifki Fauzi</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
</div>
<!-- Card 1 End -->

<!-- Card 2 Begin -->
<div class="mdl-cell mdl-cell--4-col">
<div class="demo-card-image mdl-card bayu">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Bayu Nugraha</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
<br/>
<div class="demo-card-image mdl-card bayu">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Bayu Nugraha</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
</div>
<!-- Card 2 End -->

<!-- Card 3 Begin -->
<div class="mdl-cell mdl-cell--4-col">
<div class="demo-card-image mdl-card reva">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Reva Puji Lestari</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
<br/>
<div class="demo-card-image mdl-card reva">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename" style="font-size: 1em">Reva Puji Lestari</span>
  </div>
</div>
<div class="demo-card-event mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h6>
      Featured event:<br>
      May 24, 2016<br>
      7-11pm
    </h6>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <button class="mdl-button mdl-js-button" value="" name="">
      I CHOOSE
    </button>
  </div>
</div>
</div>
<!-- Card 3 End -->
</div>

<br/>
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
