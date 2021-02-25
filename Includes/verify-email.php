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
            include_once 'dbh.inc.php';
            $email = $_GET['key'];
            $token = $_GET['token'];
            $query = mysqli_query($conn,
            "SELECT * FROM `emails_address_undershop` WHERE `email_verification_link`='".$token."' and `Emails`='".$email."';"
            );
            $d = date('Y-m-d H:i:s');
            if($query && mysqli_num_rows($query) > 0) {
                $row= mysqli_fetch_array($query);
                if($row['active'] == 0){
                    mysqli_query($conn,"UPDATE emails_address_undershop set active =1 WHERE Emails='" . $email . "'");
                    $code = substr($token,0,6);
                    $msg = "Congratulations! Your email has been verified.
                            here is your promo code <span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:1.2rem;background: rgba(0,0,0,.03);
                            color: gold;' id=\"promo_code\"> $code</span>";
                }else{
                    $code = substr($token, 0, 6);
                    $msg = "You have already verified your account with us, here is your promo code<span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:1.2rem;background: rgba(0,0,0,.03);
                            color: gold;' id=\"promo_code\"> $code</span>";
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