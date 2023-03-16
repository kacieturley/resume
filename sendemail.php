
<!DOCTYPE html>
<html>
  <head>
    <title>Resume</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resume.css">
    <link rel="stylesheet" href="fontface.css">
    <script src="https://kit.fontawesome.com/3b4d3f321b.js" crossorigin="anonymous"></script>   
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .row-padding img {margin-bottom: 12px}
    .sidebar {width: 120px;background: #222;}
    #main {margin-left: 120px}
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
  </head>
<body>
<?php
if(isset($_POST['submit'])) {
    $to = "kacieturley@gmail.com"; // replace with your own email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $body);

    exit();
}
?>
</body>
</html>