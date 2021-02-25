<?php
    session_start();
    $database_name = "products__details";
    $con = mysqli_connect("localhost","root","",$database_name);
    include('./Includes/fb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title><?php echo $lang['Five']; ?> | UNDERSHOP</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="Assets/favicon.ico">
    <!-- CSS Link -->
    <link type="text/css" rel="stylesheet" href="./Includes/styling.css" media="all">
    <link type="text/css" rel="stylesheet" href="./Includes/main.css" media="all">
    <link type="text/css" rel="stylesheet" href="./Includes/contactUsForm.css" media="all">
    <!-- Font Awesome Link -->
    <link type="text/css" rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
    <!-- AOS Css Link-->
    <link type="text/css" rel="stylesheet" href="./aos-master/dist/aos.css">
    <!-- jquery File -->
    <script type="text/javascript" src="./Includes/jquery.js"></script>
    <!-- Owl Carousel2 -->
    <link type="text/css" rel="stylesheet" href="./Includes/owl.carousel.min.css" media="all">
    <link type="text/css" rel="stylesheet" href="./Includes/owl.theme.default.min.css" media="all">
</head>
<body>
        <div class="loader">
            <img src="Includes/8.gif" alt="Loading...">
        </div>
        <div class="header">
            <div class="réseaux">
                    <a href="https://www.facebook.com/ilyass.ahed" target="_blank" title="Facebook" class='Fa'>
                        <i class="fab fa-2x fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/ilyass.ahed/" target="_blank" title="Instagram" class='In'>
                        <i class="fab fa-2x fa-instagram"></i>
                    </a>
                    <a href="#!" target="_blank" title="Snapchat" class='Sp'>
                        <i class="fab fa-2x fa-snapchat-ghost"></i>
                    </a>
                    <a href="#!" target="_blank" title="Twitter" class='Tw'>
                        <i class="fab fa-2x fa-twitter"></i>
                    </a>
            </div>
            <div>
                <h4>
                    <?php echo $lang['Six_8']; ?>
                </h4>
            </div>
            <div>
                <h4 title="<?php echo $lang['Nine_3']; ?> <?php echo $lang['Ten_3']; ?>">
                    +212 691 905 730
                </h4>
            </div>
        </div>
        <div class="nav-bar">
            <div class="num-1">
                <button onclick="myFunction__13()" id="bars" class="undershop" title="<?php echo $lang['Five_9']; ?>"><i class="fas fa-bars"></i></button>
                <a href="#" class="undershop" title="<?php echo $lang['one']; ?>">u<span>ndershop</span></a>
                <div>
                    <button onclick="myFunction__1()" id="shopping-basket" class="undershop" title="<?php echo $lang['two']; ?>"><i class="fas fa-shopping-cart"></i></button>
                    <span id="basketNum" title="<?php echo $lang['two']; ?>">   </span>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="cart-overlay-91" id="cart-overlay-91-id" onclick="myFunction__94()"></div>
            <div class="cart_91" id="cart_91">
                <div class="closed">
                    <img onclick="myFunction__94()" src="./Assets/close-icon-svg-1.png" alt="<?php echo $lang['Five_2']; ?>" title="<?php echo $lang['Five_2']; ?>">
                </div>
                <ul>
                    <div class="Partie1">
                        <h2>u<span>ndershop</span></h2>
                    </div>
                    <li><a href="Home.php"><i class="fas fa-home"></i> Acceuil</a></li>
                    <li><a href="#!">CHÂLES & FOULARDS</a></li>
                    <li><a href="#!">PYJAMAS</a></li>
                    <li><a href="#!">SOUTIENS-GORGE</a></li>
                    <li><a href="#!">PRODUITS COSMETIQUES</a></li>
                    <li><a href="#contact-us" onclick="myFunction__94()"><i class="far fa-paper-plane"></i> Contact Us</a></li>
                </ul>
                <div class='fixed'>
                    <div class="réseaux">
                        <a href="https://www.facebook.com/ilyass.ahed" target="_blank" title="Facebook" class='Fa'>
                            <i class="fab fa-2x fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/ilyass.ahed/" target="_blank" title="Instagram" class='In'>
                            <i class="fab fa-2x fa-instagram"></i>
                        </a>
                        <a href="#!" target="_blank" title="Snapchat" class='Sp'>
                            <i class="fab fa-2x fa-snapchat-ghost"></i>
                        </a>
                        <a href="#!" target="_blank" title="Twitter" class='Tw'>
                            <i class="fab fa-2x fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

        <section class="home">
            <div class="slider">
            <?php
                    $query = "SELECT photo FROM hero WHERE id=1";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="slide active" style="background: url('<?php echo $row["photo"]; ?>');">
                    <div class="container2">
                        <div class="caption">
                                <div class="container4">
                                    <h1 id="text__contain"><?php echo $lang['Seven']; ?></h1>
                                    <div class="count">
                                        <div class="countd">
                                            <span id="days">00</span>
                                            <?php echo $lang['Nine']; ?>
                                        </div>
                                        <div class="countd">
                                            <span id="hours">00</span>
                                            <?php echo $lang['Ten']; ?>
                                        </div>
                                        <div class="countd">
                                            <span id="minutes">00</span>
                                            <?php echo $lang['One_1']; ?>
                                        </div>
                                        <div class="countd">
                                            <span id="seconds">00</span>
                                            <?php echo $lang['Two_1']; ?>
                                        </div>
                                    </div>
                                    <h2 ><?php echo $lang['Eight']; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
            ?>
            <!--  -->
                <?php
                    $query = "SELECT * FROM hero WHERE id>1 ORDER BY id ASC ";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="slide" style="background: url('<?php echo $row["photo"]; ?>');">
                    <div class="container2">
                        <div class="caption">
                            <h1><?php echo $row["description_1"]; ?></h1>
                            <a href="#!"><?php echo $row["button"]; ?></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
            ?>
            </div>
            <!--  -->
            <div class="controls">
                <div class="prev">
                    <img src="Assets/online_icon_right@2x.png" class="icon-right" id="Prev-img">
                </div>
                <div class="next">
                    <img src="Assets/online_icon_right@2x.png" class="icon-right" id="Next-img">
                </div>
            </div>
            <!--  -->
            <div class="indicator"></div>

        </section>
        <div class="container1">
            <h3><span><?php echo $lang['Three']; ?></span><br><?php echo $lang['Four']; ?></h3>
        </div>
        <div class="features-section">
            <div class="contain">
                <div class="features-inner">
                    <div class="features-box" data-aos="fade-up">
                        <div class="icon">
                        <a><i class="fas fa-shipping-fast"></i></a>
                        </div>
                        <h1><?php echo $lang['Five_1']; ?></h1>
                        <p><?php echo $lang['Six_1']; ?></p>
                    </div>
                    <div class="features-box" data-aos="fade-up">
                        <div class="icon">
                            <a><i class="fas fa-undo"></i></a>
                        </div>
                        <h1><?php echo $lang['Sevene_1']; ?></h1>
                        <p><?php echo $lang['Eight_1']; ?></p>
                    </div>
                    <div class="features-box" data-aos="fade-up">
                        <div class="icon">
                            <a><i class="fas fa-headphones-alt"></i></a>
                        </div>
                        <h1><?php echo $lang['Nine_1']; ?></h1>
                        <p><?php echo $lang['Ten_1']; ?></p>
                    </div>
                    <div class="features-box" data-aos="fade-up">
                        <div class="icon">
                        <a><i class="far fa-credit-card"></i></a>
                        </div>
                        <h1><?php echo $lang['One_2']; ?></h1>
                        <p><?php echo $lang['Two_2']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <div class="Aide">
            <h3 onclick="myFunction__5()" data-aos="fade-up"><i class="fas fa-plus"></i><?php echo $lang['Seven_8']; ?></h3>
        </div>
        <!--  -->
        <section class="products">
            <div class="might" data-aos="fade-up">
                <h2 id="might_title"><?php echo $lang['Five']; ?><h2>
            </div>
            <div class="products-center">
            <?php
                $query = "SELECT * FROM products__details__undershop ORDER BY id ASC ";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
                    <article class="product" data-aos="fade-up">
                        <div class="img-container">

                            <a><img src="<?php echo $row["product__image"]; ?>" class="product-img"></a>

                            <button onclick="myFunction__3()" title="<?php echo $lang['Six']; ?>" class="bag-btn-Eye"><i class="far fa-eye" id="EYE-PROD" title="<?php echo $lang['Six']; ?>"></i></button>

                            <button onclick="left()" class="bag-btn-angle-gauche" title="<?php echo $lang['Four_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Four_7']; ?>"></button>
                            
                            <button onclick="right()" class="bag-btn-angle-droit" title="<?php echo $lang['Five_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Five_7']; ?>"></button>

                            <script>
                                function left(){
                                    alert("left is clicked");
                                }
                                function right(){
                                    alert("right is clicked");
                                }
                            </script>
                            
                        </div>
                        <div class="prod_flex">
                            <a href="#!" title="<?php echo $row["product__name"]; ?>"><?php echo $row["product__name"]; ?></a>
                            <h4><?php echo $row["product__price"]; ?> DHS</h4>
                        </div>
                    </article>    
        <?php
                    }
                }
        ?>
            </div>
        </section>

        <!--  -->
        <div class="might" data-aos="fade-up">
            <h2 id="might_title"><?php echo $lang['Seven_6']; ?><h2>
        </div>
        <div class="wrappppper">
            <div class="owl-carousel owl-theme">
            <?php
                            $query = "SELECT * FROM products__gallery ORDER BY id ASC ";
                            $result = mysqli_query($con,$query);
                            if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                        ?>
                <div class="item">
                <article class="product" data-aos="fade-up">
                        <div class="img-container">
                            <a><img src="<?php echo $row["product__image"]; ?>" class="product-img"></a>
                            <button onclick="myFunction__3()" title="<?php echo $lang['Six']; ?>" class="bag-btn-Eye"><i class="far fa-eye" id="EYE-PROD" title="<?php echo $lang['Six']; ?>"></i></button>
                            <button class="bag-btn-angle-gauche" title="<?php echo $lang['Four_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Four_7']; ?>"></button>
                            <button class="bag-btn-angle-droit" title="<?php echo $lang['Five_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Five_7']; ?>"></button>
                        </div>
                        <div class="prod_flex">
                            <a href="#!" title="<?php echo $row["product__name"]; ?>"><?php echo $row["product__name"]; ?></a>
                            <h4><?php echo $row["product__price"]; ?> DHS</h4>
                        </div>
                    </article>
                </div>
                <?php
                                    }
                                }
                        ?>
            </div>
        </div>
        <!--  -->
        <section class="products">
            <div class="might" data-aos="fade-up">
                <h2 id="might_title"><?php echo $lang['Three_1']; ?><h2>
            </div>
            <div class="products-center">
                <?php
                    $query = "SELECT * FROM features ORDER BY id ASC ";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                ?>
                    <article class="product" data-aos="fade-up">
                        <div class="img-container">
                            <a><img src="<?php echo $row["photo"]; ?>" onmouseover="this.src='<?php echo $row['lien']; ?>'" onmouseout="this.src='<?php echo $row['photo']; ?>'" class="product-img"></a>
                            <button onclick="myFunction__3()" title="<?php echo $lang['Six']; ?>" class="bag-btn-Eye"><i class="far fa-eye" id="EYE-PROD" title="<?php echo $lang['Six']; ?>"></i></button>
                            <button class="bag-btn-angle-gauche" title="<?php echo $lang['Four_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Four_7']; ?>"></button>
                            <button class="bag-btn-angle-droit" title="<?php echo $lang['Five_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Five_7']; ?>"></button>
                        </div>
                        <div class="prod_flex">
                            <a href="#!" title="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></a>
                            <h4><?php echo $row["price"]; ?> DHS</h4>
                        </div>
                    </article>
                    <?php
                    }
                }
        ?>
            </div>
        </section>
        <div class="might" data-aos="fade-up">
            <h2 id="might_title"><?php echo $lang['Seven_6']; ?><h2>
        </div>
        <!--  -->
        <div class="wrappppper">
            <div class="owl-carousel owl-theme">
            <?php
                $query = "SELECT * FROM related ORDER BY id ASC ";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="item">
                <article class="product" data-aos="fade-up">
                        <div class="img-container">
                            <a><img src="<?php echo $row["photo"]; ?>" onmouseover="this.src='<?php echo $row['lien']; ?>'" onmouseout="this.src='<?php echo $row['photo']; ?>'" class="product-img"></a>
                            <button onclick="myFunction__3()" title="<?php echo $lang['Six']; ?>" class="bag-btn-Eye"><i class="far fa-eye" id="EYE-PROD" title="<?php echo $lang['Six']; ?>"></i></button>
                            <button class="bag-btn-angle-gauche" title="<?php echo $lang['Four_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Four_7']; ?>"></button>
                            <button class="bag-btn-angle-droit" title="<?php echo $lang['Five_7']; ?>"><img src="Assets/online_icon_right@2x.png" id="per" title="<?php echo $lang['Five_7']; ?>"></button>
                        </div>
                        <div class="prod_flex">
                            <a href="#!" title="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></a>
                            <h4><?php echo $row["price"]; ?> DHS</h4>
                        </div>
                    </article>
                </div>
                <?php
                                    }
                                }
                        ?>
            </div>
        </div>
        <a href="#" title="<?php echo $lang['Six_3']; ?>"><img class="Scroll" id="Scroll-id" src="Assets/arrow-2.png"></a>
        <div class="langue">
            <a href="HOME.php?lang=fr" class="FR" id="langue-id-FR" title="<?php echo $lang['Eight_2']; ?>"><img src="Assets/france.png"></a>    
            <a href="HOME.php?lang=en" class="EN" id="langue-id-EN" title="<?php echo $lang['Nine_2']; ?>"><img src="Assets/américa.png"></a>
        </div>
        <!--  -->
        <div class="container__Form" id="contact-us">
            <div class="form">
                <div class="contact-info" data-aos="fade-up">                
                    <p class="text"><?php echo $lang['Seven_3']; ?>
                    </p>
                    <div class="info">
                        <div class="information">
                            <i class="fas fa-map-marker-alt" id="map-marker-alt"></i>
                            <p><?php echo $lang['Eight_3']; ?></p>
                        </div>
                        <div class="information">
                            <i class="far fa-envelope" id='envelope'></i>
                            <p><span id="mot1">u</span><span id="mot2">ndershop </span>@gmail.com</p>
                        </div>
                        <div class="information">
                            <i class="fas fa-phone-alt" id="phone-alt"></i>
                            <p>+212 691 905 730</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-up">
                    <form id ="contact_form" action="" method="post" >
                        <h3 class="title__"><?php echo $lang['Nine_3']; ?> <i class="far fa-paper-plane"></i> <?php echo $lang['Ten_3']; ?></h3>
                        <div class="input-container">
                            <input type="text" name="Name" class="input" id ="full-name" title="<?php echo $lang['Ten_6']; ?>" tabindex="1" required pattern = "^[a-z|A-Z]([-']?[a-z|A-Z]+)*( [a-z|A-Z]([-']?[a-z|A-Z]+)*)+$"/>
                            <label for="name"><?php echo $lang['One_4']; ?></label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="EmailAddress" class="input"
                            id="email-address" title="<?php echo $lang['Ten_6']; ?>" tabindex="2" required pattern="[^@]+@[^\.]+\..+"/>
                            <label for="email"><?php echo $lang['Three_6']; ?></label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="Phone" class="input" id="phone-number" title="<?php echo $lang['Ten_6']; ?>" tabindex="3" required pattern="(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}"/>
                            <label for="phone"><?php echo $lang['Two_4']; ?></label>
                        </div>
                        <div class="input-container textarea">
                            <textarea type="text" name="Message" class="input" id="message" title="<?php echo $lang['One_7']; ?>" tabindex="4" required pattern="^[ .a-zA-Z0-9:-]{3,150}$"></textarea>
                            <label for="message"><?php echo $lang['Four_6']; ?></label>
                        </div>
                        <div class="submit__">
                        <input type="submit" name="Send" value="<?php echo $lang['Three_4']; ?>" title="<?php echo $lang['Two_7']; ?>" class="btn__Form"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--  -->
        <div id ="sent_contactUs" class='sent' hidden>
            <i class="fas fa-check-circle"></i>Your message was sent successfully. THANK YOU !
        </div>
        <div id="unSent_contactUs" class='not_sent' hidden >
            <i class="fas fa-exclamation-triangle"></i>Something went wrong. PLEASE TRY AGAIN !
        </div>
        <!--  -->
        <!--  -->
        <button class="gift" id="gift-id" onclick="myFunction__modal()" title="<?php echo $lang['Five_3']; ?>"><i class="fas fa-gift"></i></button>
        
        <div class="modal" id="modal">
            <form action="" method="POST" id="form">
                <div>
                    <h1 id="newsHeading"><?php echo $lang['Five_4']; ?><br><span><?php echo $lang['Six_4']; ?></span></h1>
                    <small id="news"><?php echo $lang['Seven_4']; ?></small>
                </div>

                <?php 
                    if(isset($msg)){  // Check if $msg is not empty
                        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
                    } 
                ?>
                <div id="inputBox">
                    <input type="text" name="Email" id="emailId" required pattern="[^@]+@[^\.]+\..+" placeholder="<?php echo $lang['Eight_4']; ?>" >
                    <br>
                    <div class="promo_loader" hidden></div>
                </div>
                <div class="sub">
                    <button class="submitId" name="GetMyCode"><?php echo $lang['Nine_4']; ?></button>
                </div>
            </form>
        </div>
        <div id="overlay__newsletter" onclick="myFunction__modal__1()">
            <div id ="sent_promo" class='sent' hidden>
                <i class="fas fa-user-check"></i>A message was sent to your email box. Check it and click on the email verification link.
            </div>
            <div id ="unSent_promo" class='not_sent' hidden>
                <i class="fas fa-exclamation-triangle"></i>Something went wrong. PLEASE TRY AGAIN !
            </div>
        </div>
        <!--  -->
        <div class="cart-overlay" id="cart-overlay-id" onclick="myFunction__2()"></div>
        <div class="cart" id="cart">
            <div class="cart-header">
                <h2><?php echo $lang['two']; ?></h2>
                <span class="close-cart" id="close-cart-button">
                <img onclick="myFunction__2()" id="img" src="./Assets/close-icon-svg-1.png" alt="<?php echo $lang['Five_2']; ?>" title="<?php echo $lang['Five_2']; ?>">
                </span>
            </div>
            
            <div class="cart-full" hidden>
                <div class="cart-item">
                    <!-- <a href="#!"><img src="Assets/article24.jpg"></a>
                    <div class="article__cart">
                        <a href="#!">Article 1</a>
                        <span id="cart_size">XXL</span>
                        <h4><span>1 </span><span>x </span>99 DHS</h4>
                        <h4 id="cart_remove"><?php echo $lang['Six_6']; ?></h4>
                    </div> -->
                </div>

                <div class="cart__footer">
                    <h3><?php echo $lang['Four_2']; ?></h3>
                    <span class="cart-total">--</span>
                </div>

                <div class="checkout1">
                    <button class="banner__btn"><?php echo $lang['Seven_2']; ?></button>
                    <button class="banner__btn__check"><?php echo $lang['Six_2']; ?></button>
                </div>

            </div>

            <div class="cart-footer cart-empty" >
                <h4><?php echo $lang['Three_2']; ?></h4>
            </div>

        </div>
        <!--  -->
        <div class="cart-overlay-1" id="cart-overlay-1-id" onclick="myFunction__6()"></div>
        <div class="cart1" id="cart1">
            
            <span class="close-cart" id="close-cart-button">
                <img onclick="myFunction__6()" id="img" src="./Assets/close-icon-svg-1.png" alt="<?php echo $lang['Five_2']; ?>" title="<?php echo $lang['Five_2']; ?>">
            </span>

            <div class="cart-footer">
                <h2 id="might_title_1"><?php echo $lang['Fivee_1']; ?><h2>
                <p id="contact__us__1"><?php echo $lang['Nine_7']; ?></p>
                <h2 id="might_title_1"><?php echo $lang['Sevene_1']; ?><h2>
                <p id="contact__us__1"><?php echo $lang['Ten_7']; ?></p>
                <h2 id="might_title_1"><?php echo $lang['One_2']; ?><h2>
                <p id="contact__us__1"><?php echo $lang['One_8']; ?></p>
                <h2 id="might_title_1"><?php echo $lang['Nine_1']; ?><h2>
                <p id="contact__us__1"><?php echo $lang['Four_8']; ?></p>
                <p id="inf">undershop@gmail.com</p>
                <p id="contact__us__1"><?php echo $lang['Five_8']; ?></p>
                <p id="inf">+212 691 905 730<br>+212 661 083 250</p>
            </div>
        </div>
        <!--  -->
        <div class="container-page" id="container-page-id" onclick="myFunction__4()"></div>
            <div class="card" id="card">
                <div class="ZKR">
                    <div class="show" href="assets/article25.jpg">
                        <img src="assets/article25.jpg" id="show-img">
                    </div>
                    <div class="small-img">
                        <img src="Assets/online_icon_right@2x.png" class="icon-left" id="prev-img">
                        <div class="small-container">
                        <div id="small-img-roll">
                            <img src="assets/article25.jpg" class="show-small-img">
                            <img src="assets/article26.jpg" class="show-small-img">
                            <img src="assets/article22.jpg" class="show-small-img">
                            <img src="assets/article21.jpg" class="show-small-img">
                            <img src="assets/article24.jpg" class="show-small-img">
                        </div>
                        </div>
                        <img src="Assets/online_icon_right@2x.png" class="icon-right" id="next-img">
                    </div>
                </div>
                <div class="infor">
                    <div class="closed" id="closed">
                        <img onclick="myFunction__4()" src="./Assets/close-icon-svg-1.png" alt="<?php echo $lang['Five_2']; ?>" title="<?php echo $lang['Five_2']; ?>">
                    </div>
                    <div class="shoename">
                        <div>
                            <h1 class="big">Pyjama NB-20</h1>
                        </div>
                        <div>
                        <h3 class="small">Women's sleeping clothes</h3>
                        </div>
                        <div>
                            <span class="new">Best sellers</span>
                        </div>
                        <div class="taman">
                            <h1>79.99 DHS</h1>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="description">
                        <h3 class="title-3"><?php echo $lang['One_6']; ?></h3>
                        <p>Wikipedia is a free online encyclopedia, created and edited by volunteers around the
                            world and hosted by the Wikimedia Foundation.</p>
                        <h3 class="Instock"><?php echo $lang['Two_6']; ?> <span>(03)</span></h3>
                    </div>
                    <!--  -->
                    <div class="bosh-3">
                        <h3 class="title-3"><?php echo $lang['Nine_5']; ?></h3>
                        <div class="size-ofproduct">
                            <div class="sizes">
                                <select name="" id="size" title="<?php echo $lang['Nine_6']; ?>">
                                    <option value="XXL">XXL</option>
                                    <option value="XL">XL</option>
                                    <option value="L">L</option>
                                    <option value="M">M</option>
                                    <option value="S">S</option>
                                    <option value="XS">XS</option>
                                    <option value="XXS">XXS</option>
                                </select>
                            </div>
                        </div>
                        <h3 class="title-3"><?php echo $lang['Ten_5']; ?></h3>
                        <div class="Quantité">
                            <br>
                            <input type="number" id="quantity1" name="quantity1" min="1" max="10" value="1" title="<?php echo $lang['Ten_5']; ?>">
                        </div>
                    </div>
                    <!--  -->
                    <div class="addtocart">
                        <button class="cart-button">
                            <span class="add-to-cart"><?php echo $lang['Four_1']; ?></span>
                        </button>
                        <button class="cart-button-2">
                            <a href="#!"><?php echo $lang['Seven_2']; ?></a>
                        </button>
                    </div>
                </div>
            </div>

        <!-- jquery Start's here -->
            <script type="text/javascript">
                window.addEventListener("load", function () {
                const loader = document.querySelector(".loader");
                loader.className += " hidden";
                });
            </script>

            <script type="text/javascript">
                function myFunction__13() {
                    var element__1 = document.getElementById("cart-overlay-91-id");
                    var element__2 = document.getElementById("cart_91");
                    element__1.classList.add("Activeee-91");
                    element__2.classList.add("Activeee-91");
                    document.getElementById("gift-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("Scroll-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("langue-id-FR").style.transform = "scale(0)";
                    document.getElementById("langue-id-EN").style.transform = "scale(0)";
                    document.getElementById("bars").style.opacity = "0";
                    document.getElementById("shopping-basket").style.opacity = "0";
                    document.getElementById("basketNum").style.opacity = "0";

                    var $body = $(document.body);
                    var oldWidth = $body.innerWidth();
                    $body.css("overflow", "hidden");
                    $body.width(oldWidth);
                }
                function myFunction__94() {
                    var element__1 = document.getElementById("cart-overlay-91-id");
                    var element__2 = document.getElementById("cart_91");
                    element__1.classList.remove("Activeee-91");
                    element__2.classList.remove("Activeee-91");
                    document.getElementById("gift-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("Scroll-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("langue-id-FR").style.transform = "scale(1)";
                    document.getElementById("langue-id-EN").style.transform = "scale(1)";
                    document.getElementById("bars").style.opacity = "1";
                    document.getElementById("shopping-basket").style.opacity = "1";
                    document.getElementById("basketNum").style.opacity = "1";
                    
                    var $body = $(document.body);
                    $body.css("overflow", "auto");
                    $body.width("auto");
                }
            </script>

            <script>
                window.addEventListener('scroll', function () {
                    let header = document.querySelector('.nav-bar');
                    let windowPosition = window.scrollY > 41.3;
                    header.classList.toggle('scrolling-active', windowPosition);
                })
            </script>

            <script type="text/javascript">
                var count = new Date("Apr 1, 2021 00:00:00").getTime();
                var x = setInterval(function () {
                    var now = new Date().getTime();
                    var d = count - now;
                    var days = Math.floor(d / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((d % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((d % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((d % (1000 * 60)) / 1000);
                    document.getElementById("days").innerHTML = days;
                    document.getElementById("hours").innerHTML = hours;
                    document.getElementById("minutes").innerHTML = minutes;
                    document.getElementById("seconds").innerHTML = seconds;
                    if (d <= 0) {
                        clearInterval(x)
                    }
                }, 1000);
            </script>
            <script src="./Includes/Hero.js"></script>

            <Script type="text/javascript">
                    window.addEventListener('scroll', function () {
                        var scroll = document.querySelector('.Scroll');
                        var langue1 = document.querySelector('.FR img');
                        var langue2 = document.querySelector('.EN img');
                        var gift = document.querySelector('.gift');
                        scroll.classList.toggle("active", window.scrollY > 200)
                        langue1.classList.toggle("active", window.scrollY > 200)
                        langue2.classList.toggle("active", window.scrollY > 200)
                        gift.classList.toggle("active", window.scrollY > 200)
                    })
            </Script>

            <script type="text/javascript">
                const inputs = document.querySelectorAll(".input");
                function focusFunc() {
                    let parent = this.parentNode;
                    parent.classList.add("focus");
                }
                function blurFunc() {
                    let parent = this.parentNode;
                    if (this.value == "") {
                        parent.classList.remove("focus");
                    }
                }
                inputs.forEach((input) => {
                    input.addEventListener("focus", focusFunc);
                    input.addEventListener("blur", blurFunc);
                });
            </script>

            <script type="text/javascript">
                function myFunction__modal() {
                    var element__1 = document.getElementById("overlay__newsletter");
                    var element__2 = document.getElementById("modal");
                    element__1.classList.add("active");
                    element__2.classList.add("active");
                    document.getElementById("gift-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("Scroll-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("langue-id-FR").style.transform = "scale(0)";
                    document.getElementById("langue-id-EN").style.transform = "scale(0)";
                    var $body = $(document.body);
                    var oldWidth = $body.innerWidth();
                    $body.css("overflow", "hidden");
                    $body.width(oldWidth);
                }
                function myFunction__modal__1() {
                    var element__1 = document.getElementById("overlay__newsletter");
                    var element__2 = document.getElementById("modal");
                    element__1.classList.remove("active");
                    element__2.classList.remove("active");
                    document.getElementById("gift-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("Scroll-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("langue-id-FR").style.transform = "scale(1)";
                    document.getElementById("langue-id-EN").style.transform = "scale(1)";
                    var $body = $(document.body);
                    $body.css("overflow", "auto");
                    $body.width("auto");
                }
            </script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script type="text/javascript">
                function validation() {
                    swal({
                        title: "<?php echo $lang['Five_5']; ?>",
                        text: "<?php echo $lang['Four_5']; ?>",
                        icon: "success",
                        button: "<?php echo $lang['Three_5']; ?>",
                    });
                }
            </script>

            <script type="text/javascript">
                function myFunction__1() {
                    var element__1 = document.getElementById("cart-overlay-id");
                    var element__2 = document.getElementById("cart");
                    element__1.classList.add("Activee");
                    element__2.classList.add("Activee");
                    document.getElementById("gift-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("Scroll-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("langue-id-FR").style.transform = "scale(0)";
                    document.getElementById("langue-id-EN").style.transform = "scale(0)";
                    var $body = $(document.body);
                    var oldWidth = $body.innerWidth();
                    $body.css("overflow", "hidden");
                    $body.width(oldWidth);
                }
                function myFunction__2() {
                    var element__1 = document.getElementById("cart-overlay-id");
                    var element__2 = document.getElementById("cart");
                    element__1.classList.remove("Activee");
                    element__2.classList.remove("Activee");
                    document.getElementById("gift-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("Scroll-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("langue-id-FR").style.transform = "scale(1)";
                    document.getElementById("langue-id-EN").style.transform = "scale(1)";
                    var $body = $(document.body);
                    $body.css("overflow", "auto");
                    $body.width("auto");
                }
            </script>

            <script type="text/javascript">
                function myFunction__5() {
                    var element__1 = document.getElementById("cart-overlay-1-id");
                    var element__2 = document.getElementById("cart1");
                    element__1.classList.add("Activeee");
                    element__2.classList.add("Activeee");

                    document.getElementById("gift-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("Scroll-id").style.transform = "translateX(-1000px) scale(0)";
                    document.getElementById("langue-id-FR").style.transform = "scale(0)";
                    document.getElementById("langue-id-EN").style.transform = "scale(0)";

                    var $body = $(document.body);
                    var oldWidth = $body.innerWidth();
                    $body.css("overflow", "hidden");
                    $body.width(oldWidth);
                }
                function myFunction__6() {
                    var element__1 = document.getElementById("cart-overlay-1-id");
                    var element__2 = document.getElementById("cart1");
                    element__1.classList.remove("Activeee");
                    element__2.classList.remove("Activeee");

                    document.getElementById("gift-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("Scroll-id").style.transform = "translateX(0) scale(1)";
                    document.getElementById("langue-id-FR").style.transform = "scale(1)";
                    document.getElementById("langue-id-EN").style.transform = "scale(1)";

                    var $body = $(document.body);
                    $body.css("overflow", "auto");
                    $body.width("auto");
                }
            </script>

        <script type="text/javascript">
            function myFunction__3() {
                var element__3 = document.getElementById("container-page-id");
                var element__4 = document.getElementById("card");
                element__3.classList.add("Active");
                element__4.classList.add("Active");
                document.getElementById("gift-id").style.transform = "translateX(-1000px) scale(0)";
                document.getElementById("Scroll-id").style.transform = "translateX(-1000px) scale(0)";
                document.getElementById("langue-id-FR").style.transform = "scale(0)";
                document.getElementById("langue-id-EN").style.transform = "scale(0)";
                var $body = $(document.body);
                    var oldWidth = $body.innerWidth();
                    $body.css("overflow", "hidden");
                    $body.width(oldWidth);
            }
            function myFunction__4() {
                var element__3 = document.getElementById("container-page-id");
                var element__4 = document.getElementById("card");
                element__3.classList.remove("Active");
                element__4.classList.remove("Active");
                document.getElementById("gift-id").style.transform = "translateX(0) scale(1)";
                document.getElementById("Scroll-id").style.transform = "translateX(0) scale(1)";
                document.getElementById("langue-id-FR").style.transform = "scale(1)";
                document.getElementById("langue-id-EN").style.transform = "scale(1)";
                var $body = $(document.body);
                    $body.css("overflow", "auto");
                    $body.width("auto");
            }
        </script>
        <script type="text/javascript" src="./Includes/owl.carousel.min.js"></script>
        <script type="text/javascript" src="./Includes/jquer.js"></script>
        <script src="./Includes/zoom-image.js"></script>
        <script src="./Includes/zoom-main.js"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                <script>
                    AOS.init({
                        offset: 100,
                        duration: 400
                    });
        </script>

        <!-- Validiation script for contact us form  -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            const form = document.querySelector('#contact_form');
            form.onsubmit = (e) => {
                e.preventDefault();
                var fullName = document.querySelector('#full-name');
                var emailAddress = document.querySelector('#email-address');
                var phone = document.querySelector('#phone-number');
                var message = document.querySelector('#message');
                var bodyFormData = new FormData();
                console.log(fullName.value);
                console.log(emailAddress.value);
                console.log( phone.value);
                console.log(message.value);
                bodyFormData.append('Name', fullName.value);
                bodyFormData.append('EmailAddress', emailAddress.value);
                bodyFormData.append('Phone', phone.value);
                bodyFormData.append('Message', message.value);

                axios({
                    method: 'post',
                    url: 'http://localhost/New%20Website/Includes/send_mail.php',
                    data: bodyFormData,
                    headers: {'Content-Type': 'multipart/form-data' }
                    })
                    .then(function (response) {
                        //handle success
                        fullName.value="";
                        emailAddress.value = "";
                        phone.value ="";
                        message.value = "";
                        document.querySelector('#sent_contactUs').hidden = false;

                    })
                    .catch(function (response) {
                        //handle error
                        document.querySelector('#unSent_contactUs').hidden = false;
                    });
            };
        </script>
        
        <!-- Validiation script for promo us form  -->
        <script>
            const form_promo = document.querySelector('#form');
            form_promo.onsubmit = (e) => {
                e.preventDefault();
                var emailAddress = document.querySelector('#emailId');
                var bodyFormData = new FormData();
                bodyFormData.append('Email', emailAddress.value);
                document.querySelector('.promo_loader').hidden=false;
                axios({
                    method: 'post',
                    url: 'http://localhost/New%20Website/Includes/signup.inc.php',
                    data: bodyFormData,
                    headers: {'Content-Type': 'multipart/form-data' }
                    })
                    .then(function (response) {
                        //handle success
                        document.querySelector('.promo_loader').hidden=true;
                        emailAddress.value="";
                        document.querySelector('#sent_promo').hidden = false;

                    })
                    .catch(function (response) {
                        //handle error
                        document.querySelector('#unSent_promo').hidden = false;
                    });
            };
        </script>
        <!-- jquery End's here -->
        <footer>
            <p class="copyright" title="<?php echo $lang["one"]; ?>">© Copyright 2021 / <a href="#" class="footer-logo">u<span>ndershop</span></a></p>
        </footer>
        <!-- Delete all inactivated emails -->
        <!-- <?php
            include_once 'dbh.inc.php';
            mysqli_query($conn,"DELETE FROM emails_address_undershop WHERE active = 0 and email_verified_at < (now()-60*60*24)")
        ?> -->
</body>
</html>
