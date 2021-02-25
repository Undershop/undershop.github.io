<?php
    include_once 'dbh.inc__Contact.php';
    if(isset($_POST['Name']) && $_POST['EmailAddress'] && $_POST['Phone'] != '') {

        //Sending the Email Code. 
        $token = md5($_POST['Email']).rand(10,9999);
        $mail_already_used = false;
        $query = mysqli_query($conn,"SELECT * FROM `contact__us__informations` WHERE `email__address`='".$_POST['EmailAddress']."'");
        if($query && mysqli_num_rows($query) > 0) {
            $mail_already_used = true;
            $row= mysqli_fetch_array($query);
            if($row['active'] == 0){
                $sql= "UPDATE contact__us__informations SET email_verification_link	='".$token."' WHERE email__address= '".$_POST['EmailAddress']."'";
                mysqli_query($conn, $sql);
                }
            else{
                $token = $row['email_verification_link'];
            }
        }
        $link = "<a href='localhost/New%20Website/Includes/verify-email-contactUs.php?key=".$_POST['EmailAddress']."&token=".$token. "'>Click and Verify Email</a>";
        $Name = $_POST['Name'];
        $mailto = $_POST['EmailAddress'];
        $Phone = $_POST['Phone'];
        $mailMsg = $_POST['Message'];
        require 'C:\xampp\htdocs\New%20Website\PHPMailerMaster\PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail ->IsSmtp();
        $mail ->SMTPDebug = FALSE;
        $mail ->SMTPAuth = true;
        $mail ->SMTPSecure = 'ssl';
        $mail ->Host = 'smtp.gmail.com';
        $mail ->Port = 465;
        $mail ->IsHTML(true);
        $mail ->Username = 'ilyassahed98@gmail.com';
        $mail ->Password = 'Ahedilyass1998';
        $mail ->SetFrom($mailto);
        $mail ->AddAddress('ilyassahed98@gmail.com');
        $mail ->Subject = "UNDERSHOP";
        $mail ->Body = "
        <div style='text-align:center;background:#333;border-radius:15px;'>
            <a href='#' style='text-decoration:none;font-weight:bolder;font-family:Bangers;color:gold;font-size:60px;'>u<span style='text-decoration:none;font-weight:bolder;font-family:Bangers;color:white;font-size:40px;'>ndershop</span></a>
            <h3 style='font-family:Montserrat;text-transform:uppercase;text-align:center;font-weight:600;color:gray;font-size:0.9rem;letter-spacing:4px;line-height:1;'>Contact us Form</h3>
            
            <div style='background:#333;padding:2rem 0;text-align:left; margin:0 25%;'>
                <div style='position: relative;margin: 1.5rem 0;'>
                    <span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>Full Name : </span>
                    <span style='color:white;font-family:Montserrat;text-transform:uppercase;font-weight:400;font-size:0.8rem;'>$Name</span>
                </div>
                <div style='position: relative;margin: 1.5rem 0;'>
                    <span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>Email Address : </span>
                    <span style='color:white;font-family:Montserrat;font-weight:400;font-size:0.8rem;text-decoration:none;'>$mailto</span>
                </div>
                <div style='position: relative;margin: 1.5rem 0;'>
                    <span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>Phone Number : </span>
                    <span style='color:white;font-family:Montserrat;font-weight:400;font-size:0.8rem;letter-spacing:1px'>$Phone</span>
                </div>
                <div style='position: relative;margin: 1.5rem 0;''>
                    <span style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>Message : </span>
                    <span style='color:white;font-family:Montserrat;font-weight:400;font-size:0.8rem;'>$mailMsg</span>
                </div>
                 <div style='position: relative;margin: 1.5rem 0;''>
                    <a style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>$link</a>
                </div>
            </div>
        </div>";

        if( $mail->Send() )
            {
                //if the email already exists in our database
                if($mail_already_used) {
                    http_response_code(200);
                }
                //Saving the Contact Form Data on Database Code. 
                else{
                    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
                    $EmailAddress = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
                    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
                    $sql__1 = "INSERT INTO contact__us__informations (user__name, email__address, phone__number,    email_verification_link, active) VALUES ('$Name', '$EmailAddress', '$Phone', '" . $token . "',0)";
                    mysqli_query($conn, $sql__1);
                    $sql= "UPDATE contact__us__informations SET email_verified_at=now() WHERE email__address= '".$_POST['EmailAddress']."'";
                    mysqli_query($conn, $sql);
                    http_response_code(200);
                }
            }
                
            else
            {
                http_response_code(404);
            }
    }

