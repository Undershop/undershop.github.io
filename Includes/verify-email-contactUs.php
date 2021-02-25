<!doctype html>
<html lang="en">
    <!-- This the page that will verify the link clicked by the client  -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>User Account Activation by Email Verification using PHP</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        if($_GET['key'] && $_GET['token'])
        {
            include_once 'dbh.inc__Contact.php';
            $email = $_GET['key'];
            $token = $_GET['token'];
            $query = mysqli_query($conn,
            "SELECT * FROM `contact__us__informations` WHERE `email_verification_link`='".$token."' and `email__address`='".$email."';"
            );
            $d = date('Y-m-d H:i:s');
            if($query && mysqli_num_rows($query) > 0) {
                $row= mysqli_fetch_array($query);
                if($row['active'] == 0){
                    mysqli_query($conn,"UPDATE contact__us__informations set active = 1 WHERE email__address='" . $email . "'");
                    $msg = "Congratulations! Your email has been verified.
                            your message is sent";
                }else{
                    $msg = "You have already verified your account with us, your message is sent ";
                }
            }else {
            $msg = "This email has been not registered with us";
            }
        }
        else
        {
            $msg = "Danger! Your something goes to wrong.";
        }
        ?>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header text-center">
                    User Account Activation by Email Verification using PHP
                </div>
                <div class="card-body">
                    <p><?php echo $msg; ?></p>
                </div>
            </div>
        </div>
    </body>
</html>