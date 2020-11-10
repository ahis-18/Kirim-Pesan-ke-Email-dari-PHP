<?php
include("phpmailer/class.phpmailer.php");

if (isset($_POST['kirim'])) {
    // Kode PHPMAILER
    $base_url = "http://localhost/phpemail/";
    $mail_body = $_POST['pesan'];

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->SMTPAuth = true;
    $mail->Username = '';                   // Masukan Email Anda
    $mail->Password = '';                   // Masukan Password Anda
    $mail->SMTPSecure = 'ssl';
    $mail->From = '';                       // Masukan Email Anda Lagi
    $mail->FromName = '';                   // Masukan Nama Anda
    $mail->AddAddress($_POST['email']);
    $mail->WordWrap = 50;
    $mail->IsHTML(true);
    $mail->Subject = '';                    // Masukan Subject / Teks apa aja
    $mail->Body = $mail_body;
    if ($mail->Send()) {
?>
        <script>
            alert("Data Berkasil Terkirim");
        </script>
<?php
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Floating labels example · Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" method="POST">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Mengirim Pesan ke Email menggunakan PHPMailer</h1>
        </div>

        <div class="form-label-group">
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="pesan" class="form-control" placeholder="Pesan" required>
            <label for="inputPassword">Pesan</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="kirim">Kirim</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>