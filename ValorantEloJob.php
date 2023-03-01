<?php
  if (isset($_POST['compra'])) {
  //  print_r($_POST['nome']);
  //  print_r('<br>');
  //  print_r($_POST['email']);
  //  print_r('<br>');
  //  print_r($_POST['senha']);
  include_once('conexao.php');

  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $numero = $_POST['whatsapp'];
  $elo_inicialPat = $_POST['ct'];
  $elo_inicialNum = $_POST['cd'];
  $elo_inicial = $elo_inicialPat . " " . $elo_inicialNum;
  $elo_finalPat = $_POST['dt'];
  $elo_finalNum = $_POST['dd'];
  $elo_final = $elo_finalPat . " " . $elo_finalNum;
  $valor = "0";

  
  $verificar = mysqli_query($mysqli, "SELECT cliente.id FROM login INNER JOIN cliente ON cliente.login_id = login.id WHERE login.email = '$email'");
  $login = $verificar->fetch_assoc(); 
  if ($login['id'] == null){
    header('location:login.php');
  }else{
    $login_id = $login['id'];
    $servicoAdd = mysqli_query($mysqli, "INSERT INTO servico (titulo, valor , elo_inicial, elo_final) VALUES ('EloJob Valorant', '$valor',  '$elo_inicial', '$elo_final')");
    $cliente = mysqli_query($mysqli, "SELECT cliente.id FROM cliente INNER JOIN login ON cliente.login_id = login.id WHERE login.email = '$email'");
    $clienteBc = $cliente->fetch_assoc();
    $cliente_id = $clienteBc['id'];
    $servico = mysqli_query($mysqli, "SELECT id FROM servico WHERE valor = '$valor' AND elo_inicial = '$elo_inicial' AND elo_final = '$elo_final' AND titulo = 'EloJob Valorant'");
    $servicoBc = $servico->fetch_assoc();
    $servico_id = $servicoBc['id'];
    $compra = mysqli_query($mysqli, "INSERT INTO compra (servico_id, cliente_id, stats_id, booster_id) VALUES ($servico_id , '$cliente_id',  1, 7)");
    header('location:pagamentopix.php');
  } 

    



  }
 ?>

<!DOCTYPE html>
<html lang="pt-br" class="sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--====== Required meta tags ======-->
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
   <title>EloBoost - EloSky</title>
    <!--====== Favicon Icon ======-->
            <style type="text/css">
            .saic-comment-text img {
                max-width: 100% !important;
            }
        </style>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="wp-block-library-css" href="./css/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-block-vendors-style-css" href="./css/vendors-style.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-block-style-css" href="./css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="saic_style-css" href="./css/saic_style.css" type="text/css" media="screen">
<style id="saic_style-inline-css" type="text/css">

		.saic-wrapper {
		  font-size: 14px
		}
	.saic-post-author {
	color: white !important;
	background: #777 !important;
}
	.saic-wrapper ul.saic-container-comments li.saic-item-comment .saic-comment-avatar img {
		max-width: 28px;
		max-height: 28px;
	}
	.saic-wrapper ul.saic-container-comments li.saic-item-comment .saic-comment-content {
		margin-left: 38px;
	}
	.saic-wrapper ul.saic-container-comments li.saic-item-comment ul .saic-comment-avatar img {
		max-width: 24px;
		max-height: 24px;
	}
	.saic-wrapper ul.saic-container-comments li.saic-item-comment ul ul .saic-comment-avatar img {
		max-width: 21px;
		max-height: 21px;
	}
	
</style>
<script type="text/javascript" src="./css/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="./css/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>

	    <link rel="shortcut icon" href="../SiteEloSky/assets/img/ICON_DRAGON_INVISIVEL355.ico" type="image/png">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="./css/flaticon.css">
    <!--====== Iconfont css ======-->
    <link rel="stylesheet" href="./css/icofont.css">
    <!--====== Gilory css ======-->
    <link rel="stylesheet" href="./css/gilory.css">
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="./css/magnific-popup.css">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="./css/slick.css">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="./css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="./css/style(1).css">
 
    <link rel="stylesheet" href="./css/style(2).css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <style>.eapp-popup-root-layout-component {
  position: relative;
  width: 100%;
  -webkit-font-smoothing: antialiased;
}
.eapp-popup-root-layout-component,
.eapp-popup-root-layout-component * {
  box-sizing: border-box !important;
  outline: none !important;
}
.eapp-popup-root-layout-component a {
  text-decoration: none;
}
.eapp-popup-root-layout-component a:hover,
.eapp-popup-root-layout-component a:focus {
  text-decoration: underline;
}
</style><style>.eapp-popup-button-component {
  overflow: hidden;
  box-sizing: border-box;
  -webkit-justify-content: center;
          justify-content: center;
  -webkit-align-items: center;
          align-items: center;
  width: 100%;
  padding: 0 12px;
  outline: none;
  white-space: nowrap;
  text-overflow: ellipsis;
  font-weight: 700;
  line-height: 1;
  transition-property: border-color, background-color, color;
  transition-duration: 0.2s;
  transition-timing-function: ease;
}
.eapp-popup-button-component.eapp-popup-button-style-outline {
  border: 2px solid;
}
.eapp-popup-button-component.eapp-popup-button-shape-rounded {
  border-radius: 4px;
}
</style><style>.eapp-popup-control-close-component {
  padding: 4px;
  outline: none;
}
.eapp-popup-control-close-icon {
  display: block;
  width: 10px;
  height: 10px;
}
</style><style>.eapp-popup-modal-overlay-component {
  opacity: 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  transition: opacity 0.2s ease;
  transition-delay: 0.15s;
}
.eapp-popup-modal-overlay-component.eapp-popup-modal-overlay-component-transition-entered {
  opacity: 1;
  transition-delay: 0s;
}
.eapp-popup-modal-overlay-image-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  content: '';
}
</style><style>.eapp-popup-content-banner-component {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
</style><style>.eapp-popup-block-variation-button-component {
  padding-top: 12px;
}
</style><style>.eapp-popup-block-variation-coupon-component {
  padding-top: 12px;
}
.eapp-popup-block-variation-coupon-area {
  position: relative;
  box-sizing: border-box;
  -webkit-justify-content: center;
          justify-content: center;
  -webkit-align-items: center;
          align-items: center;
  width: 100%;
  padding: 0 12px;
  border: 1px dashed;
  outline: none;
  white-space: nowrap;
  text-overflow: ellipsis;
  line-height: 1;
  transition: background-color 0.2s ease;
}
.eapp-popup-block-variation-coupon-shape-rounded .eapp-popup-block-variation-coupon-area {
  border-radius: 4px;
}
.eapp-popup-block-variation-coupon-tooltip {
  position: absolute;
  z-index: 1;
  visibility: hidden;
  top: 0;
  right: 0;
  bottom: 50%;
  left: 0;
  text-align: center;
  font-size: 8px;
  line-height: 1.5;
  opacity: 0;
  transition: visibility 0.2s linear, opacity 0.2s ease-in-out;
}
.eapp-popup-block-variation-coupon-area:hover .eapp-popup-block-variation-coupon-tooltip {
  visibility: visible;
  opacity: 1;
}
.eapp-popup-block-variation-coupon-component.eapp-popup-block-variation-coupon-copied .eapp-popup-block-variation-coupon-tooltip {
  opacity: 0;
  transition: none;
}
.eapp-popup-block-variation-coupon-notification {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 50%;
  font-size: 8px;
  line-height: 1.5;
  opacity: 1;
  -webkit-transform: translate3d(-50%, 0, 0);
          transform: translate3d(-50%, 0, 0);
  transition: opacity 0.8s ease, -webkit-transform 0.6s ease;
  transition: opacity 0.8s ease, transform 0.6s ease;
  transition: opacity 0.8s ease, transform 0.6s ease, -webkit-transform 0.6s ease;
  transition-delay: 0.2s;
}
.eapp-popup-block-variation-coupon-notification.eapp-popup-block-variation-coupon-notification-enter-done {
  opacity: 0;
  -webkit-transform: translate3d(-50%, -20px, 0);
          transform: translate3d(-50%, -20px, 0);
}
.eapp-popup-block-variation-coupon-code {
  position: relative;
  z-index: 3;
  font-weight: 700;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
}
.eapp-popup-block-variation-coupon-component:not(.eapp-popup-block-variation-coupon-copied) .eapp-popup-block-variation-coupon-area:hover .eapp-popup-block-variation-coupon-code {
  -webkit-transform: translate3d(0, 4px, 0);
          transform: translate3d(0, 4px, 0);
}
.eapp-popup-block-variation-coupon-component.eapp-popup-block-variation-coupon-copied .eapp-popup-block-variation-coupon-code {
  transition-delay: 0.15s;
}
</style><style>.eapp-popup-block-variation-text-component {
  line-height: 1.38;
}
.eapp-popup-block-variation-text-text {
  line-height: inherit;
}
</style><style>.eapp-popup-block-variation-iframe-component {
  content: '';
}
.eapp-popup-block-variation-iframe-iframe {
  display: block;
}
</style><style>.eapp-popup-block-variation-image-component {
  content: '';
}
.eapp-popup-block-variation-image-img {
  display: block;
}
</style><style>.eapp-popup-block-variation-link-component {
  line-height: 1.38;
}
.eapp-popup-block-variation-link-link {
  text-decoration: underline;
}
.eapp-popup-block-variation-link-link:hover {
  text-decoration: none;
}
</style><style>.eapp-popup-block-variation-separator-component::before {
  display: block;
  border-top-width: 1px;
  border-top-style: solid;
  content: '';
}
</style><style>.eapp-popup-block-variation-spacing-component {
  content: '';
}
</style><style>.eapp-popup-block-variation-title-component {
  line-height: 1.1;
}
</style><style>.eapp-popup-block-variation-video-component {
  content: '';
}
.eapp-popup-block-variation-video-iframe {
  display: block;
  width: 100%;
}
</style><style>.eapp-popup-block-variation-form-field-text-component {
  content: '';
}
.eapp-popup-block-variation-form-field-text-input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  padding: 0 19px;
  border: 1px solid transparent;
  outline: none;
}
.eapp-popup-block-variation-form-field-text-shape-rounded .eapp-popup-block-variation-form-field-text-input {
  border-radius: 4px;
}
.eapp-popup-block-variation-form-field-text-background-dark .eapp-popup-block-variation-form-field-text-input {
  color: #fff;
}
.eapp-popup-block-variation-form-field-text-background-dark .eapp-popup-block-variation-form-field-text-input::-webkit-input-placeholder {
  color: rgba(255,255,255,0.4);
}
.eapp-popup-block-variation-form-field-text-background-dark .eapp-popup-block-variation-form-field-text-input::-moz-placeholder {
  color: rgba(255,255,255,0.4);
}
.eapp-popup-block-variation-form-field-text-background-dark .eapp-popup-block-variation-form-field-text-input:-ms-input-placeholder {
  color: rgba(255,255,255,0.4);
}
.eapp-popup-block-variation-form-field-text-background-dark .eapp-popup-block-variation-form-field-text-input::placeholder {
  color: rgba(255,255,255,0.4);
}
.eapp-popup-block-variation-form-field-text-component:not(.eapp-popup-block-variation-form-field-text-background-dark) .eapp-popup-block-variation-form-field-text-input {
  border-color: rgba(17,17,17,0.1);
  color: #111;
}
.eapp-popup-block-variation-form-field-text-component:not(.eapp-popup-block-variation-form-field-text-background-dark) .eapp-popup-block-variation-form-field-text-input::-webkit-input-placeholder {
  color: rgba(17,17,17,0.4);
}
.eapp-popup-block-variation-form-field-text-component:not(.eapp-popup-block-variation-form-field-text-background-dark) .eapp-popup-block-variation-form-field-text-input::-moz-placeholder {
  color: rgba(17,17,17,0.4);
}
.eapp-popup-block-variation-form-field-text-component:not(.eapp-popup-block-variation-form-field-text-background-dark) .eapp-popup-block-variation-form-field-text-input:-ms-input-placeholder {
  color: rgba(17,17,17,0.4);
}
.eapp-popup-block-variation-form-field-text-component:not(.eapp-popup-block-variation-form-field-text-background-dark) .eapp-popup-block-variation-form-field-text-input::placeholder {
  color: rgba(17,17,17,0.4);
}
</style><style>.eapp-popup-block-variation-form-field-checkbox-component {
  content: '';
}
.eapp-popup-block-variation-form-field-checkbox-item {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
          align-items: center;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  width: 100%;
  transition: 0.1s all ease;
  padding: 8px;
  border-radius: 3px;
}
.eapp-popup-block-variation-form-field-checkbox-item .eapp-popup-block-variation-form-field-checkbox-input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.eapp-popup-block-variation-form-field-checkbox-item .eapp-popup-block-variation-form-field-checkbox-checkmark {
  display: inline-block;
  position: relative;
  top: 0;
  left: 0;
  min-width: 20px;
  width: 20px;
  height: 20px;
  border-radius: 3px;
  margin-right: 10px;
  border: 1px solid rgba(190,190,190,0.4);
  background: #fff;
  -webkit-align-self: flex-start;
          align-self: flex-start;
}
.eapp-popup-block-variation-form-field-checkbox-item .eapp-popup-block-variation-form-field-checkbox-checkmark::after {
  content: "";
  position: absolute;
  display: none;
  left: 7px;
  top: 3px;
  width: 5px;
  height: 9px;
  border: solid #fff;
  border-width: 0 1px 1px 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.eapp-popup-block-variation-form-field-checkbox-item .eapp-popup-block-variation-form-field-checkbox-caption {
  font-size: 15px;
  font-weight: 400;
  line-height: 20px;
}
</style><style>.eapp-popup-block-variation-form-field-component {
  content: '';
}
</style><style>.eapp-popup-block-variation-form-component {
  content: '';
}
.eapp-popup-block-variation-form-hidden-submit {
  position: absolute;
  visibility: hidden;
  pointer-events: none;
}
.eapp-popup-block-variation-form-row {
  padding-top: 12px;
}
.eapp-popup-block-variation-form-row:not(:last-child) {
  padding-bottom: 16px;
}
</style><style>.eapp-popup-content-blocks-container-component.eapp-popup-content-blocks-container-paddings-medium {
  padding: 40px;
}
.eapp-popup-content-blocks-container-component.eapp-popup-content-blocks-container-paddings-small {
  padding: 20px;
}
.eapp-popup-content-blocks-container-paddings-medium .eapp-popup-content-blocks-container-item:not(:first-child) {
  margin-top: 16px;
}
.eapp-popup-content-blocks-container-paddings-small .eapp-popup-content-blocks-container-item:not(:first-child) {
  margin-top: 8px;
}
.eapp-popup-content-blocks-container-free-link {
  margin-bottom: -8px;
}
.eapp-popup-content-blocks-container-paddings-medium .eapp-popup-content-blocks-container-free-link {
  margin-top: 20px;
}
.eapp-popup-content-blocks-container-paddings-small .eapp-popup-content-blocks-container-free-link {
  margin-top: 12px;
}
</style><style>.eapp-popup-content-component {
  position: relative;
  height: 100%;
}
.eapp-popup-content-component.eapp-popup-content-shape-rounded {
  border-radius: 20px;
  overflow: hidden;
}
.eapp-popup-content-main {
  height: 100%;
}
.eapp-popup-content-outer {
  display: -webkit-flex;
  display: flex;
  position: relative;
  -webkit-flex: 1 0 auto;
          flex: 1 0 auto;
  -webkit-align-items: center;
          align-items: center;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.eapp-popup-content-outer-image-overlay {
  position: absolute;
  z-index: 1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.eapp-popup-content-inner {
  position: relative;
  z-index: 2;
  -webkit-flex-grow: 1;
          flex-grow: 1;
}
.eapp-popup-content-banner {
  position: relative;
}
</style><style>.eapp-popup-layout-variation-left-pane-component {
  transition: visibility 0.3s linear;
}
.eapp-popup-layout-variation-left-pane-content-container {
  overflow: hidden auto;
  max-height: 100%;
  opacity: 0;
  -webkit-transform: translate3d(-20px, 0, 0);
          transform: translate3d(-20px, 0, 0);
  transition: opacity 0.3s ease, -webkit-transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease, -webkit-transform 0.4s ease;
}
.eapp-popup-layout-variation-left-pane-content-container.eapp-popup-layout-variation-left-pane-content-container-transition-entered {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition-delay: 0.1s;
}
</style><style>.eapp-popup-layout-variation-modal-component {
  padding: 10px;
  transition: visibility 0.3s linear;
}
.eapp-popup-layout-variation-modal-content-container {
  overflow: hidden;
  opacity: 0;
  -webkit-transform: translate3d(0, 20px, 0);
          transform: translate3d(0, 20px, 0);
  transition: opacity 0.3s ease, -webkit-transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease, -webkit-transform 0.4s ease;
  margin: auto;
}
.eapp-popup-layout-variation-modal-content-container.eapp-popup-layout-variation-modal-content-container-transition-entered {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition-delay: 0.1s;
}
</style><style>.eapp-popup-layout-variation-right-pane-component {
  transition: visibility 0.3s linear;
}
.eapp-popup-layout-variation-right-pane-content-container {
  overflow: hidden auto;
  max-height: 100%;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  transition: opacity 0.3s ease, -webkit-transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease, -webkit-transform 0.4s ease;
}
.eapp-popup-layout-variation-right-pane-content-container.eapp-popup-layout-variation-right-pane-content-container-transition-entered {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition-delay: 0.1s;
}
</style><style>.eapp-popup-layout-variation-slide-in-left-component {
  padding: 20px;
  transition: visibility 0.3s linear;
}
.eapp-popup-layout-variation-slide-in-left-content-container {
  overflow: hidden auto;
  color: #f00;
  max-height: 100%;
  opacity: 0;
  -webkit-transform: translate3d(-20px, 0, 0);
          transform: translate3d(-20px, 0, 0);
  transition: opacity 0.3s ease, -webkit-transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease, -webkit-transform 0.4s ease;
}
.eapp-popup-layout-variation-slide-in-left-content-container.eapp-popup-layout-variation-slide-in-left-content-container-transition-entered {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
</style><style>.eapp-popup-layout-variation-slide-in-right-component {
  padding: 20px;
  transition: visibility 0.3s linear;
}
.eapp-popup-layout-variation-slide-in-right-content-container {
  overflow: hidden auto;
  color: #f00;
  max-height: 100%;
  opacity: 0;
  -webkit-transform: translate3d(20px, 0, 0);
          transform: translate3d(20px, 0, 0);
  transition: opacity 0.3s ease, -webkit-transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease;
  transition: opacity 0.3s ease, transform 0.4s ease, -webkit-transform 0.4s ease;
}
.eapp-popup-layout-variation-slide-in-right-content-container.eapp-popup-layout-variation-slide-in-right-content-container-transition-entered {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
</style><meta http-equiv="origin-trial" content="A7bG5hJ4XpMV5a3V1wwAR0PalkFSxLOZeL9D/YBYdupYUIgUgGhfVJ1zBFOqGybb7gRhswfJ+AmO7S2rNK2IOwkAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjY5NzY2Mzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script type="text/javascript" async="" src="./css/f(1).txt"></script><script charset="utf-8" src="./css/twk-chunk-2c78ba82.js.download"></script><script charset="utf-8" src="./css/twk-chunk-696bc286.js.download"></script><script charset="utf-8" src="./css/twk-chunk-f1596d96.js.download"></script><script charset="utf-8" src="./css/twk-chunk-48f46bef.js.download"></script><script charset="utf-8" src="./css/twk-chunk-4fe9d5dd.js.download"></script><script charset="utf-8" src="./css/twk-chunk-2d0b9454.js.download"></script><script charset="utf-8" src="./css/twk-chunk-f163fcd0.js.download"></script><script charset="utf-8" src="./css/twk-chunk-32507910.js.download"></script><style type="text/css">#k1qagdjup311664825043256 {outline:none !important;
visibility:visible !important;
resize:none !important;
box-shadow:none !important;
overflow:visible !important;
background:none !important;
opacity:1 !important;
filter:alpha(opacity=100) !important;
-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important;
-mz-opacity:1 !important;
-khtml-opacity:1 !important;
top:auto !important;
right:0px !important;
bottom:0px !important;
left:auto !important;
position:fixed !important;
border:0 !important;
min-height:0px  !important;
min-width:0px  !important;
max-height:none  !important;
max-width:none  !important;
padding:0px !important;
margin:0px !important;
-moz-transition-property:none !important;
-webkit-transition-property:none !important;
-o-transition-property:none !important;
transition-property:none !important;
transform:none !important;
-webkit-transform:none !important;
-ms-transform:none !important;
width:auto !important;
height:auto  !important;
display:none !important;
z-index:2000000000 !important;
background-color:transparent !important;
cursor:none !important;
float:none !important;
border-radius:unset !important;
pointer-events:auto !important;
clip:auto !important;
color-scheme:light !important;}#k1qagdjup311664825043256.widget-hidden {display: none !important;}#k1qagdjup311664825043256.widget-visible {display: block !important;}
@media print{
 #k1qagdjup311664825043256.widget-visible { 
display: none !important;
 }
}</style><script src="./css/emojione.min.js.download" type="text/javascript" async="" defer=""></script><script src="./css/emojione.min.js.download" type="text/javascript" async="" defer=""></script><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#ek605l4nc8m1664825043652.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#ek605l4nc8m1664825043652.closed{animation: tawkMaxClose .25s ease!important}</style></head>
<body data-rsssl="1" class="class=" page-template-default="" page="" page-id-369="" woocommerce-no-js="" elementor-default="" elementor-kit-8""="">

          <!-- Favicon-->
          <link rel="icon" type="image/x-icon" href="assets/img/ICON_DRAGON_INVISIVEL355.ico" />
          <!-- Font Awesome icons (free version)-->
          <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
          <!-- Google fonts-->
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
          <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
          <!-- Core theme CSS (includes Bootstrap)-->
          <link href="css/styles.css" rel="stylesheet" />
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--====== Start Header ======-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
          <img src="assets/img/final- dragon 1- sem fundo.png" class="imgglogo">
          <a class="navbar-brand" href="index.php#page-top">ELO SKY </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars ms-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php#aboutus">Sobre Nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#serviceslol">Serviços LOL</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#servicesvalorant">Serviços Valorant</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">Feedbacks</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#faq">F.A.Q.</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#team">Boosters</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Contato</a></li>
                        <li class="btn btn-primary"><a class="textbuttom text-uppercase btn-xl" href="login.php">Area do Cliente</a></li>
            </ul>
          </div>
      </div>
  </nav>
          <header class="masthead">
           <div class="container">
                <div class="masthead-subheading">EloBoost!</div>
                <div class="masthead-heading text-uppercase">Clique no botão abaixo!</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#elojob">Saiba Mais</a>
            </div>
        </header>
        <!--====== Start Features section ======-->
    <section class="service-area-v3 pt-120 pb-120" aria-hidden="false" id="elojob">
            <div class="container">
                <div class="row" >
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-80" >
                            <h2 style="margin-bottom: 0;">Compre EloBoost</h2>
                            <p>Nesse serviço nós estaremos entrando em sua conta e upando até o elo desejado, zelando sempre pela segurança e privacidade.</p>
                        </div>
                    </div>
                </div>
                <form action="ValorantEloJob.php" method="post" id="enviareloboost">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service-item mb-30">
                            <div class="service-content">
                                <h3 class="title text-center">Posição atual</h3>
                                <div class="row">
                                    <div class="col-md-7"><div class="form-group">
   <select id="ct" name="ct" class="form-control">
    <option value="ferro" data-img="imagenselo/ferrovalorant.png">Ferro</option>
    <option value="bronze" data-img="imagenselo/bronzevalorant.png">Bronze</option>
    <option value="prata" data-img="imagenselo/pratavalorant.png">Prata</option>
    <option value="ouro" selected="" data-img="imagenselo/ourovalorant.png">Ouro</option>
    <option value="platina" data-img="imagenselo/platinavalorant.png">Platina</option>
    <option value="diamante" data-img="imagenselo/diamantevalorant.png">Diamante</option>
    <option value="ascendente" id="m" data-img="imagenselo/ascendente.png">Ascendente</option>
    <option value="immortal" id="gm" data-img="imagenselo/Immortal.png">Immortal</option>
          </select>
  </div></div>
  <div class="col-md-5"><div class="form-group">
   <select id="cd" name="cd" class="form-control">
            <option selected="">1</option>
            <option>2</option>
            <option>3</option>
          </select>
  </div></div>
                                </div>
                            </div>
                            <div class="service-icon text-center mt-30">
                                <img id="eloa" src="imagenselo/ourovalorant.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service-item mb-30">
                            <div class="service-content">
                                <h3 class="title text-center">Posição desejada</h3>
                                <div class="row">
                                    <div class="col-md-7"><div class="form-group">
   <select id="dt" name="dt" class="form-control">
    <option value="ferro" data-img="imagenselo/ferrovalorant.png">Ferro</option>
    <option value="bronze" data-img="imagenselo/bronzevalorant.png">Bronze</option>
    <option value="prata" data-img="imagenselo/pratavalorant.png">Prata</option>
    <option value="ouro" selected="" data-img="imagenselo/ourovalorant.png">Ouro</option>
    <option value="platina" data-img="imagenselo/platinavalorant.png">Platina</option>
    <option value="diamante" data-img="imagenselo/diamantevalorant.png">Diamante</option>
    <option value="ascendente" id="ascendente" data-img="imagenselo/ascendente.png">Ascendente</option>
    <option value="immortal" id="immortal" data-img="imagenselo/Immortal.png">Immortal</option>
            <option value="radiant" id="radiant" data-img="imagenselo/radiant.png">Radiant</option>
          </select>
  </div></div>
  <div class="col-md-5"><div class="form-group">
   <select id="dd" name="dd" class="form-control">
            <option selected="">1</option>
            <option>2</option>
            <option>3</option>
          </select>
  </div></div>
                                </div>
                            </div>
                            <div class="service-icon text-center mt-30">
                                <img id="elof" src="imagenselo/ourovalorant.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="service-item mb-20" style="background:#87ceeb;">
                            <div class="service-content" style="color:#fff;">
                              <h3 class="title text-center">Dê um boost no seu pedido!</h3>
                                                                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="0" id="adicional3" name="adicional3">
                                <label class="form-check-label" for="defaultCheck1">
                                  Stream no Discord - <strong> Gratuito</strong>
                                </label>
                                <input type="hidden" name="nomeadicional3" value="Escolha as rotas">
                                <input type="hidden" name="servicoelojob" value="servicoelojob">
                              </div>
                                                                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="0" id="adicional4" name="adicional4">
                                <label class="form-check-label" for="defaultCheck1">
                                  Chat offline - <strong> Gratuito</strong>
                                </label>
                                <input type="hidden" name="nomeadicional4" value="Chat offline">
                                <input type="hidden" name="servicoelojob" value="servicoelojob">
                              </div>
                                                                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" id="adicional5" name="adicional5">
                                <label class="form-check-label" for="defaultCheck1">
                                  Seleção de agentes (minimo 4 campeões para escolher) - <strong>+5 %</strong>
                                </label>
                                <input type="hidden" name="nomeadicional5" value="Seleção de campeões">
                                <input type="hidden" name="servicoelojob" value="servicoelojob">
                              </div>
                                                                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="20" id="adicional7" name="adicional7">
                                <label class="form-check-label" for="defaultCheck1">
                                  Entrega à jato - <strong>+20 %</strong>
                                </label>
                                <input type="hidden" name="nomeadicional7" value="Entrega à jato">
                                <input type="hidden" name="servicoelojob" value="servicoelojob">
                              </div>
                                                                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="15" id="adicional10" name="adicional10">
                                <label class="form-check-label" for="defaultCheck1">
                                  Vitória extra - <strong>+15 %</strong>
                                </label>
                                <input type="hidden" name="nomeadicional10" value="Uma win extra">
                                <input type="hidden" name="servicoelojob" value="servicoelojob">
                              </div>
                                                                                                                          </div>
                        </div>
                        <div class="col-lg-12" style="border-bottom: 15px solid #87ceeb; padding-bottom: 10px; padding-top:0">
                            
                                            <div class="form_group text-center">

                                               
                                               <div id="price" valor-inicial="88" style="color: #87ceeb; font-size: 26px; font-weight: bold;">R$&nbsp;88,00</div>
                                            </div>
                                        </div>
                                                                                                                                                                          <script type="text/javascript">
                                            window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
jQuery(document).on('change','#ct',function(){ 
     var valorDaDiv = jQuery("#price").text();
    if ((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
        jQuery("#price").addClass("erro");
        jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
        jQuery(".form-check-input").prop('disabled', true);
        jQuery('#linkativo').prop("disabled", true);
    } else {
        jQuery("#price").removeClass("erro");
        jQuery(".form-check-input").prop('disabled', false);
        jQuery('#linkativo').prop("disabled", false);
    }
    var valor = conversor(document.querySelector('#price').innerHTML); // obtem o valor impresso
    var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); // obtem o valor inicial armazenado (nao sofre alterações)
    // vai percorrer todos os inputs do tipo checkbox (referentes aos adicionais)
    document.querySelectorAll('input[type=checkbox]').forEach(input => {
        input.addEventListener('click', function(e) {
            if (input.checked) { // ao ser marcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor + porcentagem; // soma o valor com a porcentagem calculada
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            } else { // ao ser desmarcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor - porcentagem; // subtrai o valor da porcentagem calculada (resultado no valor anterior)
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            }
        });
    })
    function conversor(input) {
        if (typeof input == 'number')
            return input;
        let res;
        input = input.toString().replace(/[^0-9,.]/g, '');
        if (input.match(/(,)\d{2}$/)) {
            res = input.replace(/\./g, '').replace(',', '.')
        } else {
            res = input.replace(',', '');
        }
        return parseFloat(res);
    }
    const formatCurrency = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    });
});
jQuery(document).on('change','#cd',function(){ 
     var valorDaDiv = jQuery("#price").text();
    if ((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
        jQuery("#price").addClass("erro");
        jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
        jQuery(".form-check-input").prop('disabled', true);
        jQuery('#linkativo').prop("disabled", true);
    } else {
        jQuery("#price").removeClass("erro");
        jQuery(".form-check-input").prop('disabled', false);
        jQuery('#linkativo').prop("disabled", false);
    }
    var valor = conversor(document.querySelector('#price').innerHTML); // obtem o valor impresso
    var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); // obtem o valor inicial armazenado (nao sofre alterações)
    // vai percorrer todos os inputs do tipo checkbox (referentes aos adicionais)
    document.querySelectorAll('input[type=checkbox]').forEach(input => {
        input.addEventListener('click', function(e) {
            if (input.checked) { // ao ser marcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor + porcentagem; // soma o valor com a porcentagem calculada
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            } else { // ao ser desmarcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor - porcentagem; // subtrai o valor da porcentagem calculada (resultado no valor anterior)
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            }
        });
    })
    function conversor(input) {
        if (typeof input == 'number')
            return input;
        let res;
        input = input.toString().replace(/[^0-9,.]/g, '');
        if (input.match(/(,)\d{2}$/)) {
            res = input.replace(/\./g, '').replace(',', '.')
        } else {
            res = input.replace(',', '');
        }
        return parseFloat(res);
    }
    const formatCurrency = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    });
});
jQuery(document).on('change','#dt',function(){ 
     var valorDaDiv = jQuery("#price").text();
    if ((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
        jQuery("#price").addClass("erro");
        jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
        jQuery(".form-check-input").prop('disabled', true);
        jQuery('#linkativo').prop("disabled", true);
    } else {
        jQuery("#price").removeClass("erro");
        jQuery(".form-check-input").prop('disabled', false);
        jQuery('#linkativo').prop("disabled", false);
    }
    var valor = conversor(document.querySelector('#price').innerHTML); // obtem o valor impresso
    var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); // obtem o valor inicial armazenado (nao sofre alterações)
    // vai percorrer todos os inputs do tipo checkbox (referentes aos adicionais)
    document.querySelectorAll('input[type=checkbox]').forEach(input => {
        input.addEventListener('click', function(e) {
            if (input.checked) { // ao ser marcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor + porcentagem; // soma o valor com a porcentagem calculada
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            } else { // ao ser desmarcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor - porcentagem; // subtrai o valor da porcentagem calculada (resultado no valor anterior)
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            }
        });
    })
    function conversor(input) {
        if (typeof input == 'number')
            return input;
        let res;
        input = input.toString().replace(/[^0-9,.]/g, '');
        if (input.match(/(,)\d{2}$/)) {
            res = input.replace(/\./g, '').replace(',', '.')
        } else {
            res = input.replace(',', '');
        }
        return parseFloat(res);
    }
    const formatCurrency = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    });
});
jQuery(document).on('change','#dd',function(){ 
     var valorDaDiv = jQuery("#price").text();
    if ((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
        jQuery("#price").addClass("erro");
        jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
        jQuery(".form-check-input").prop('disabled', true);
        jQuery('#linkativo').prop("disabled", true);
    } else {
        jQuery("#price").removeClass("erro");
        jQuery(".form-check-input").prop('disabled', false);
        jQuery('#linkativo').prop("disabled", false);
    }
    var valor = conversor(document.querySelector('#price').innerHTML); // obtem o valor impresso
    var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); // obtem o valor inicial armazenado (nao sofre alterações)
    // vai percorrer todos os inputs do tipo checkbox (referentes aos adicionais)
    document.querySelectorAll('input[type=checkbox]').forEach(input => {
        input.addEventListener('click', function(e) {
            if (input.checked) { // ao ser marcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor + porcentagem; // soma o valor com a porcentagem calculada
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            } else { // ao ser desmarcado
                var porcentagem = valor_inicial * (conversor(input.value) / 100); // vai calcular a porcentagem sobre o valor inicial
                valor = valor - porcentagem; // subtrai o valor da porcentagem calculada (resultado no valor anterior)
                document.querySelector('#price').innerHTML = formatCurrency.format(valor); // imprime o resultado na div
            }
        });
    })
    function conversor(input) {
        if (typeof input == 'number')
            return input;
        let res;
        input = input.toString().replace(/[^0-9,.]/g, '');
        if (input.match(/(,)\d{2}$/)) {
            res = input.replace(/\./g, '').replace(',', '.')
        } else {
            res = input.replace(',', '');
        }
        return parseFloat(res);
    }
    const formatCurrency = new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    });
});
                                             jQuery(document).ready(function(){
                                                jQuery("body").mouseenter(function(){
                                                     var valor = conversor(document.querySelector('#price').innerHTML); 
var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); 
document.querySelectorAll('input[type=checkbox]').forEach(input => {
    input.addEventListener('click', function(e) {
        if (input.checked) { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor + porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        } else { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor - porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        }
    });
})
function conversor(input) {
    if (typeof input == 'number')
        return input;
    let res;
    input = input.toString().replace(/[^0-9,.]/g, '');
    if (input.match(/(,)\d{2}$/)) {
        res = input.replace(/\./g, '').replace(',', '.')
    } else {
        res = input.replace(',', '');
    }
    return parseFloat(res);
}
const formatCurrency = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});
});
        jQuery("#ct").mouseup(function(){
          var valorDaDiv = jQuery("#price").text();
         if((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
            jQuery("#price").addClass( "erro" );
            jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
            jQuery(".form-check-input").prop('disabled', true);
            jQuery('#linkativo').prop("disabled", true);
         } else {
             jQuery("#price").removeClass( "erro" );
             jQuery(".form-check-input").prop('disabled', false);
              jQuery('#linkativo').prop("disabled", false);
         }
         var valor = conversor(document.querySelector('#price').innerHTML); 
var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); 
document.querySelectorAll('input[type=checkbox]').forEach(input => {
    input.addEventListener('click', function(e) {
        if (input.checked) { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor + porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        } else { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor - porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        }
    });
})
function conversor(input) {
    if (typeof input == 'number')
        return input;
    let res;
    input = input.toString().replace(/[^0-9,.]/g, '');
    if (input.match(/(,)\d{2}$/)) {
        res = input.replace(/\./g, '').replace(',', '.')
    } else {
        res = input.replace(',', '');
    }
    return parseFloat(res);
}
const formatCurrency = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});
         });
        jQuery("#dt").mouseup(function(){
          var valorDaDiv = jQuery("#price").text();
          if((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
            jQuery("#price").addClass( "erro" );
            jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
            jQuery(".form-check-input").prop('disabled', true);
            jQuery('#linkativo').prop("disabled", true);
         } else {
             jQuery("#price").removeClass( "erro" );
             jQuery(".form-check-input").prop('disabled', false);
              jQuery('#linkativo').prop("disabled", false);
         }
         var valor = conversor(document.querySelector('#price').innerHTML); 
var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); 
document.querySelectorAll('input[type=checkbox]').forEach(input => {
    input.addEventListener('click', function(e) {
        if (input.checked) { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor + porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        } else { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor - porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        }
    });
})
function conversor(input) {
    if (typeof input == 'number')
        return input;
    let res;
    input = input.toString().replace(/[^0-9,.]/g, '');
    if (input.match(/(,)\d{2}$/)) {
        res = input.replace(/\./g, '').replace(',', '.')
    } else {
        res = input.replace(',', '');
    }
    return parseFloat(res);
}
const formatCurrency = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});
         });
        jQuery("#cd").mouseup(function(){
          var valorDaDiv = jQuery("#price").text();
          if((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
            jQuery("#price").addClass( "erro" );
            jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
            jQuery(".form-check-input").prop('disabled', true);
            jQuery('#linkativo').prop("disabled", true);
         } else {
             jQuery("#price").removeClass( "erro" );
             jQuery(".form-check-input").prop('disabled', false);
              jQuery('#linkativo').prop("disabled", false);
         }
         var valor = conversor(document.querySelector('#price').innerHTML); 
var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); 
document.querySelectorAll('input[type=checkbox]').forEach(input => {
    input.addEventListener('click', function(e) {
        if (input.checked) { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor + porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        } else { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor - porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        }
    });
})
function conversor(input) {
    if (typeof input == 'number')
        return input;
    let res;
    input = input.toString().replace(/[^0-9,.]/g, '');
    if (input.match(/(,)\d{2}$/)) {
        res = input.replace(/\./g, '').replace(',', '.')
    } else {
        res = input.replace(',', '');
    }
    return parseFloat(res);
}
const formatCurrency = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});
         });
        jQuery("#dd").mouseup(function(){
          var valorDaDiv = jQuery("#price").text();
          if((valorDaDiv == "R$  0,00") || (valorDaDiv == "false") || valorDaDiv == "O elo inicial não pode ser maior que o elo final!") {
            jQuery("#price").addClass( "erro" );
            jQuery('#price').text('O elo inicial não pode ser maior que o elo final!');
            jQuery(".form-check-input").prop('disabled', true);
            jQuery('#linkativo').prop("disabled", true);
         } else {
             jQuery("#price").removeClass( "erro" );
             jQuery(".form-check-input").prop('disabled', false);
              jQuery('#linkativo').prop("disabled", false);
         }
         var valor = conversor(document.querySelector('#price').innerHTML); 
var valor_inicial = conversor(document.querySelector('#price').getAttribute('valor-inicial')); 
document.querySelectorAll('input[type=checkbox]').forEach(input => {
    input.addEventListener('click', function(e) {
        if (input.checked) { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor + porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        } else { 
            var porcentagem = valor_inicial * (conversor(input.value) / 100); 
            valor = valor - porcentagem; 
            document.querySelector('#price').innerHTML = formatCurrency.format(valor); 
        }
    });
})
function conversor(input) {
    if (typeof input == 'number')
        return input;
    let res;
    input = input.toString().replace(/[^0-9,.]/g, '');
    if (input.match(/(,)\d{2}$/)) {
        res = input.replace(/\./g, '').replace(',', '.')
    } else {
        res = input.replace(',', '');
    }
    return parseFloat(res);
}
const formatCurrency = new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL'
});
         });
     jQuery('#ct').change(function(){
         var src = jQuery(this).find('option:selected').attr('data-img');
         jQuery('img#eloa').attr('src',src);
         jQuery(".form-check-input").prop("checked", false);
         opt1 = jQuery(this).children("option:selected").attr('id');
         if((opt1 == 'ascendente') || (opt1 == 'immortal')) {
            jQuery('#cd').empty()
            .append('<option selected="selected">1</option><option>2</option><option>3</option>');
         } else {
            jQuery('#cd').empty()
            .append('<option>3</option><option>2</option><option selected="selected">1</option>');
         }
     });
     jQuery('#cd').change(function(){
         jQuery(".form-check-input").prop("checked", false);
     });
     jQuery('#dd').change(function(){
         jQuery(".form-check-input").prop("checked", false);
     });
      jQuery('#dt').change(function(){
         var src = jQuery(this).find('option:selected').attr('data-img');
         jQuery('img#elof').attr('src',src);
         jQuery(".form-check-input").prop("checked", false);
        opt = jQuery(this).children("option:selected").attr('id');
         if((opt == 'ascendente') || (opt == 'immortal')) {
            jQuery('#dd').empty()
            .append('<option selected="selected">1</option><option>2</option><option>3</option>');
         } else {
            jQuery('#dd').empty()
            .append('<option>3</option><option>2</option><option selected="selected">1</option>');
            }   if((opt == 'radiant')) {
            jQuery('#dd').empty()
            .append('<option selected="selected">1');
         }
     });
});
function EloEvolution(attrs) {
  this._products = {
    ferro4: {
      price: 5    },
    ferro3: {
      price: 5    },
    ferro2: {
      price: 5   },
    ferro1: {
      price: 5    },
    bronze4: {
      price: 7    },
    bronze3: {
      price: 7    },
    bronze2: {
      price: 7    },
    bronze1: {
      price: 7    },
    prata4: {
      price: 12    },
    prata3: {
      price: 12    },
    prata2: {
      price: 12    },
    prata1: {
      price: 12    },
    ouro4: {
      price: 22    },
    ouro3: {
      price: 22    },
    ouro2: {
      price: 22    },
    ouro1: {
      price: 22    },
    platina4: {
      price: 28    },
    platina3: {
      price: 28    },
    platina2: {
      price: 28    },
    platina1: {
      price: 28    },
    diamante4: {
      price: 50    },
    diamante3: {
      price: 50    },
    diamante2: {
      price: 50    },
    diamante1: {
      price: 50    },
    ascendente4: {
      id: 0,
      price: 0
    },
    ascendente3: {
      id: 0,
      price: 0
    },
    ascendente2: {
      id: 0,
      price: 71
    },
    ascendente1: {
      id: 0,
      price: 71    },
    immortal4: {
      id: 0,
      price: 0
    },
    immortal3: {
      id: 0,
      price: 0
    },
    immortal2: {
      id: 0,
      price: 120
    },
    immortal1: {
      id: 0,
      price: 120    },
    radiant4: {
      id: 0,
      price: 0
    },
    radiant3: {
      id: 0,
      price: 0
    },
    radiant2: {
      id: 0,
      price: 0
    },
    radiant1: {
      id: 0,
      price: 216    }
  };
  this._errorMessages = {
    dest_lt_cur: "Nível Desejado é menor que o Atual"
  }
  this._sequence = [
     'ferro1', 'ferro2', 'ferro3',
     'bronze1', 'bronze2', 'bronze3',
     'prata1', 'prata2', 'prata3',
     'ouro1', 'ouro2', 'ouro3',
     'platina1', 'platina2', 'platina3',
     'diamante1', 'diamante2', 'diamante3',
     'ascendente1', 'ascendente2', 'ascendente3',
     'immortal1', 'immortal2', 'immortal3',
     'radiant1', 'radiant2', 'radiant3'
  ];
  this.errors = [];
  this.currencyFormat = 'R$ ';
  this.currencyDecimalSeparator = ',';
  this.settings = function(attrs) {
    for (var key in attrs) {
      this[key] = attrs[key];
    }
    this._attachAddToCart();
    return this;
  }
  this.change = function() {
    this.ck = jQuery(this.selectCurrentTier).val() + jQuery(this.selectCurrentDivision).val();
    this.dk = jQuery(this.selectDestinationTier).val() + jQuery(this.selectDestinationDivision).val();
    this.current = this._products[this.ck];
    this.destination = this._products[this.dk];
    var price = this.sumValue();
     jQuery(this.priceContainer).text(this._formatCurrency(price));
     jQuery("#price").attr("valor-inicial", price);
    return this;
  }
  this.sumValue = function() {
    this._getSequence();
    if(this.i_dest < this.i_cur) {
      this._addError('dest_gt_cur');
      return false;
    }
    var sum = 0;
    this._execInSequence(function(p, k){
      sum += p.price;
    });
    return sum;
  }
  this.errorMessages = function () {
    var trErrors = [];
    for(var i = 0; i < this.errors.length; i++) {
      var k = this.errors[i];
      if(this._errorMessages[k]) {
        trErrors.push(this._errorMessages[k]);
      } else {
        trErrors.push(k);
      }
      return trErrors;
    }
  }
// ============== PRIVATE METHODS ================
  this._getSequence = function() {
    for(var i = 0; i < this._sequence.length; i++) {
      if(this.ck === this._sequence[i]) {
        this.i_cur = i;
      }
      if(this.dk === this._sequence[i]) {
        this.i_dest = i;
      }
    }
  }
  this._execInSequence = function(func) {
    for(var i = this.i_cur; i < this.i_dest; i++) {
      var p_key = this._sequence[i];
      var product = this._products[p_key];
      func(product, p_key);
    }
  }
  this._formatCurrency = function(val) {
    var o = [];
    var decPart = new String(parseInt((val - parseInt(val)) * Math.pow(10, this._currencyDecimalQty)) || 0);
    var intPart = new String(parseInt(val) || 0);
    if (decPart < 10) {
      decPart = "0" + decPart;
    }
    o.push(this.currencyFormat);
    o.push(' ')
    o.push(intPart);
    o.push(this.currencyDecimalSeparator);
    o.push(decPart);
    return o.join('');
  }
  this._attachAddToCart = function() {
    var evo = this;
    jQuery(evo.addToCartButton).click(function(){
      evo.addToCart();
    });
  }
  this._addError = function(err) {
    this.errors.push(err);
  }
  this.init = function(attrs) {
    if(attrs) {
      this.settings(attrs);
    }
  }
  this.init(attrs);
}
jQuery(function(){
  var evo = new EloEvolution({
    selectCurrentTier: '#ct',
    selectCurrentDivision: '#cd',
    selectDestinationTier: '#dt',
    selectDestinationDivision: '#dd',
    priceContainer: '#price',
    priceContainerOriginal : '#priceoriginal'
  }).change();
  jQuery('#ct,#cd,#dt,#dd').change(function(){
    // we need to call inside an anonymous function
    // because we use `this`, inside evo.change function,
    // referring to evo instance, instead the dom object
    // that was changed.
    evo.change();
  });
});
</script>
                    </div>
                    <div class="col-lg-8 deskcomp" style="margin-top: 50px;">
                        <h5 style="margin-bottom: 20px; margin-top: 30px;">Complete sua compra</h5>

                        <div class="form-group row">
    <label for="nome" class="col-4 col-form-label">Nome</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-circle-o"></i>
          </div>
        </div> 
        <input id="nome" name="nome" placeholder="Digite seu nome..." type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Digite seu email..." type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="whatsapp" class="col-4 col-form-label">WhatsApp</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-whatsapp"></i>
          </div>
        </div> 
        <input id="whatsapp" name="whatsapp" placeholder="Digite seu WhatsApp..." type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  
                    </div>
                    <div class="col-lg-4" style="margin-top: 30px;">
                        <h5 style="margin-bottom: 20px;">Pagamento</h5>
                        <div class="form-group row">
    <label for="pagamento" class="col-4 col-form-label">Método</label> 
    <div class="col-8">
      <select id="pagamento" name="pagamento" class="custom-select" required="required">
        <option value="pix">PIX</option>
      </select>
      <h6> No momento só aceitamos PIX.</h6>
    </div>
  </div> 
                        <button type="submit" name="compra" class="main-btn" style="width: 100%;" id="linkativo">Pagar</button></div>
                </div>
                </form>
            </div>
        </section>
        <style type="text/css">
        @media only screen and (max-width: 600px) {
           .deskcomp img {
            margin-top: 0 !important;
           }
       }
        </style>
        <section class="page-section bg-light" id="contact">
          <footer class="footer py-4">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-4 text-lg-start">Copyright &copy; EloSky 2022</br></br><b>Este site não possui qualquer tipo de vínculo e/ou agregação com a Riot Games e suas marcas.</b></div>
                      <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/elojobsky" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/elojobsky" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://discord.gg/6NxCn7pexs" aria-label="Discord"><i class="fab fa-discord"></i></a>
                      </div>
                      <div class="col-lg-4 my-3 my-lg-0">
                          <a href="#page-top"><img src="assets/img/final- dragon 1- sem fundo.png" class="imggglogo"></a>
                      </div>
                  </div>
              </div>
          </footer>
      </section>
      <!--====== Bootstrap js ======-->
    <script src="./css/popper.min.js.download"></script>
    <script src="./css/bootstrap.min.js.download"></script>
    <!--====== Slick js ======-->
    <script src="./css/slick.min.js.download"></script>
    <!--====== Magnific Popup js ======-->
    <script src="./css/jquery.magnific-popup.min.js.download"></script>
    <!--====== Isotope js ======-->
    <script src="./css/isotope.pkgd.min.js.download"></script>
    <!--====== Imagesloaded js ======-->
    <script src="./css/imagesloaded.pkgd.min.js.download"></script>
    <!--====== counterup js ======-->
    <script src="./css/jquery.counterup.min.js.download"></script>
    <!--====== waypoints js ======-->
    <script src="./css/waypoints.min.js.download"></script>
    <!--====== Main js ======-->
    <script src="./css/main.js.download"></script>
    <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
     <script src="./css/bootstrap-select.js.download"></script>
     <script type="text/javascript" src="./css/pum-site-scripts.js.download" id="popup-maker-site-js"></script>
<script type="text/javascript" src="./css/mobile-detect.min.js.download" id="mobile-detect-js"></script>
<script type="text/javascript" src="./css/wp-embed.min.js.download" id="wp-embed-js"></script>
<script type="text/javascript" src="./css/elfsight-popup.js.download" id="elfsight-popup-js"></script>
    <script src="./css/modernizr-3.6.0.min.js.download"></script>
    <script type="text/javascript" src="./css/saic_script.js.download" id="saic_js_script-js"></script>
<script type="text/javascript" src="./css/jquery.jPages.min.js.download" id="saic_jPages-js"></script>
<script type="text/javascript" src="./css/jquery.textareaCounter.js.download" id="saic_textCounter-js"></script>
<script type="text/javascript" src="./css/jquery.placeholder.min.js.download" id="saic_placeholder-js"></script>
<script type="text/javascript" src="./css/autosize.min.js.download" id="saic_autosize-js"></script>
<script type="text/javascript" src="./css/alg-wc-custom-payment-gateways.js.download" id="alg-wc-custom-payment-gateways-js"></script>
<script type="text/javascript" src="./css/core.min.js.download" id="jquery-ui-core-js"></script>

 </body></html>