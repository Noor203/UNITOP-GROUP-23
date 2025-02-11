<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/payments.css">

</head>
<body>
    <header>
        <!--NAVBAR-->
        <div class="banner">
            <section class="navbar">
                <img src="assests/Navbar/logo-no-slogan.png" width="75px" alt="UNITOP logo">
                <h1>UNITOP</h1>
                <div class="links">
                    <nav>
                        <div class="img-links">
                             <!--Customer basket-->
                             <!--<a href=""><img src="images/search.png" class="browse-icon"></a>-->
                             <a href="index.html"><img src="assests/Navbar/home_4991416.png" class="home-icon"></a>
                             <a href=""><img src="assests/Navbar/about-us.png" class="about-us-icon"></a>
                             <a href=""><img src="assests/Navbar/notification_9383540.png" class="contact-us-icon"></a>
                             <a href=""><img src="assests/Navbar/avatar_9892372.png" class="account-icon"></a>
                             <a href=""><img src="assests/Navbar/checkout_4765148.png" class="basket-icon"></a>
                        </div>

                        <div class="nav-links">
                        <ul>
                           <!--<li><a href="">Browse</a></li>-->
                            <li><a href="index.html">Home</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Account</a></li>
                            <li><a href="">Basket</a></li>
                        </ul>
                        </div>
                    
                        <!---Search Bar--->
                        <div class="search-bar">
                            <input type="text" placeholder="Search">
                            <button type="submit"><img src="assests/Navbar/search.png" class="search-icon"></button>
                        </div>
                    </nav>

                   </div>
            </section>
        </div>
    </header>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Billing Address</h3>

                <div class="inputBox">
                    <span>Full Name:</span>
                    <input type="text" placeholder="Steve Smith">
                </div>
                <div class="inputBox">
                    <span>Company Email:</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Company Address:</span>
                    <input type="text" placeholder="Street etc.">
                </div>
                <div class="inputBox">
                    <span>City:</span>
                    <input type="text" placeholder="Birmingham">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Area:</span>
                        <input type="text" placeholder="Aston">
                    </div>
                    <div class="inputBox">
                        <span>Post Code:</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>Cards Accepted:</span>
                    <img src="assests/Payments/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name On Card:</span>
                    <input type="text" placeholder="Mr.Steve Smith">
                </div>
                <div class="inputBox">
                    <span> Credit Card Number:</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Exp Month:</span>
                    <input type="text" placeholder="January">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year:</span>
                        <input type="number" placeholder="2024">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    


<!-------------------FOOTER---------------------->
<footer>
    <div class="footer">
        <div class="footer-box">
            <img src="assests/Navbar/logo-no-slogan.png">
            <h3>UNITOP</h3>
            <p>Educate with UNITOP!</p>
            <a href="login.html" class="btn">Log In</a>
        </div>
    
        <div class="footer-box">
            <h3>Follow Us</h3>
            <div class="socials">
                <img src="assests/Footer/instagram.png">
                <img src="assests/Footer/facebook.png">
                <img src="assests/Footer/linkedin.png"> 
            </div>
        </div>
    
        <div class="footer-box">
            <h3>About Us</h3>
            <ul>
                <li><a href="">Who We Are</a></li>
                <br>
                <li><a href="">Our Mission</a></li>
                <br>
                <li><a href="">The Team</a></li>
            </ul>
        </div>
    
        <div class="footer-box">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="">Home</a></li>
                <br>
                <li><a href="">Contact Us</a></li>
                <br>
                <li><a href="">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="line">
          <p>Terms and Conditions apply* | UNITOP Limited</p>
    </div>
    
    </footer>
    
</body>
</html>