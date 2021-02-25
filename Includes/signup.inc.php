<?php
    include_once 'dbh.inc.php';
    	
     //Sending the Email verification link with a key (client Email) and  token (client Email encrypted) 
     $token = md5($_POST['Email']).rand(10,9999);
        $mail_already_used = false;
        $query = mysqli_query($conn,"SELECT * FROM `emails_address_undershop` WHERE `Emails`='".$_POST['Email']."'");
        if($query && mysqli_num_rows($query) > 0) {
            $mail_already_used = true;
            $row= mysqli_fetch_array($query);
            if($row['active'] == 0){
                $sql= "UPDATE emails_address_undershop SET email_verification_link='".$token."' WHERE emails= '".$_POST['Email']."'";
                mysqli_query($conn, $sql);
                }
            else{
                $token = $row['email_verification_link'];
            }
        }
        $link = "<a href='localhost/New%20Website/Includes/verify-email.php?key=".$_POST['Email']."&token=".$token. "'>Click and Verify Email</a>";
        $mailto = $_POST['Email'];
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
        $mail ->SetFrom('ilyassahed98@gmail.com');
        // Add the client address to reciever addresses list
        $mail ->AddAddress($mailto);
        $mail ->Subject = "UNDERSHOP";
        $mail ->Body = "
        <div style='text-align:center;background:#333;border-radius:15px;'>
            <a href='#' style='text-decoration:none;font-weight:bolder;font-family:Bangers;color:gold;font-size:60px;'>u<span style='text-decoration:none;font-weight:bolder;font-family:Bangers;color:white;font-size:40px;'>ndershop</span></a>
            <h3 style='font-family:Montserrat;text-transform:uppercase;text-align:center;font-weight:600;color:gray;font-size:0.9rem;letter-spacing:4px;line-height:1;'>Contact us Form</h3>
            
            <div style='background:#333;padding:2rem 0;text-align:left; margin:0 25%;'>
                <div style='position: relative;margin: 1.5rem 0;'>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem aperiam pariatur distinctio tenetur neque eos quod eum fugiat, architecto tempore fuga numquam ea atque dolor quae accusantium tempora ratione adipisci!
                </div>
                <div style='position: relative;margin: 1.5rem 0;''>
                    <a style='color:gold;font-family:Montserrat;text-transform:uppercase;font-weight:700;font-size:0.75rem;'>$link</a>
                </div>
            </div>
        </div>";


        if( $mail->Send() )
            {
                // Email sent successfully 
                $now = date_default_timezone_set('Australia/Melbourne');
                if($mail_already_used) {
                    http_response_code(200);
                }
                else {
                    $sql = "INSERT INTO emails_address_undershop(Emails,email_verification_link,active) VALUES('". $_POST['Email'] . "', '" . $token . "',0)";
                    $result = mysqli_query($conn, $sql);
                    $sql= "UPDATE emails_address_undershop SET email_verified_at=now() WHERE emails= '".$_POST['Email']."'";
                    mysqli_query($conn, $sql);
                    http_response_code(200);
                }
                
            }
        else
        {
            // A problem encoutred try again
            http_response_code(404);
        }
		
        // mysqli_query($conn,"DELETE FROM emails_address_undershop WHERE active = 0 and email_verified_at < (now()-60*60*24)");