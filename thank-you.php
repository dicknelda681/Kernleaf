<?php 
header("refresh:3;url=/");
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['first_name'] ?? '');
    $lastName  = htmlspecialchars($_POST['last_name'] ?? '');
    $email     = htmlspecialchars($_POST['email'] ?? '');
    $phone     = htmlspecialchars($_POST['phone'] ?? '');
    $message   = htmlspecialchars($_POST['message'] ?? '');

    $to = "shopyprice@gmail.com"; 
    $subject = "New Contact Form Enquiry";

    $body = "
New message received from website:

Name: $firstName $lastName
Email: $email
Phone: $phone

Message:
$message
";

    $headers = "From: Website Contact <info@sweetbaker.xyz>\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $subject, $body, $headers);
}
?>


  <style>
    .box{
      background:#fff;
      max-width:500px;
      margin:auto;
      padding:40px;
      box-shadow:0 10px 30px rgba(0,0,0,.1);
      border-radius:8px;
      margin:80px 20px;
    }
    .box a{
      display:inline-block;
      margin-top:20px;
      text-decoration:none;
      color:#fff;
      background:#000;
      padding:10px 25px;
      border-radius:5px;
    }
  </style>


  <div class="container">
    <div class="row justify-content-center">
        <div class="box">
    <h1>Thank You!</h1>
    <p>Your message has been sent successfully.<br>
       We will contact you shortly.</p>
    <a href="index.php">Back to Home</a>
  </div>
    </div>
  </div>


<?php include('footer.php');?>