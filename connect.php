<!-- name="full_name" -->
<!-- name="email_id" -->
<!-- name="phone_number" -->
<?php
    // $fullName = $_POST['full_name'];
    // $emailId = $_POST['email_id'];
    // $phoneNo = $_POST['phone_number'];
    // $serverName = "localhost";
    // $userName = "spadesre_mrkt";
    // $pass = "Q@nat898";
    // $dbname = "spadesre_campaigns_data";

    // //Database Connection//
    // $conn = new mysqli($serverName,$userName, $pass, $dbname);
    // if($conn->connect_error){
    //     die("Connection Failed : ".$conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into sobha_form_data(full_name, email_id, phone_number) values(?, ?, ?)");
    //     $stmt->bind_param('ssi',$fullName,$emailId,$phoneNo);
    //     $stmt->execute();
    //     $stmt->close();
    //     $conn->close();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connect.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ee4c45993.js" crossorigin="anonymous"></script>
    <title>Thank you!</title>
</head>
<body class="thankyou-page">
    <header>
        <nav>
        </nav>
    </header>
    <div class="thankyou-section">
        <div class="thankyou-message">
            <a class="spades-logo" href="https://www.spadesre.com" target="_blank">
                <img src="./images/spades-logo.svg" alt="Spades Logo" srcset="">
            </a>
            <h2>Thank you for your inquiry!</h2>
            <p>One of our representatives will get in touch soon</p>
        </div>
        <div class="social-media-icons"></div>
    </div>
</body>
</html>