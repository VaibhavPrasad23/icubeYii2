<?php
    $this->registerCssFile('/web/css/zoo2.css');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive zoo website</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="/web/css/zoo2.css">
</head>
<body>
    
    <!-- header -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"></i> zoo</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#animal">animal</a>
            <a href="#pricing">pricing</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <!-- login form -->

    <form action="" class="login-form">

        <h3>login form</h3>
        
        <input type="email" placeholder="Enter your email" class="box">
        <input type="password" placeholder="Enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <a href="#" class="btn">login</a>

    </form>

    </header>


    <!-- end -->

    <!-- home -->

    <section class="home" id="home">

        <div class="content">
            <h3>enjoy the wonderful <br>
            adventure of the <br> animals</h3>
            <a href="#" class="btn">meet the zoo</a>
        </div>

        <img src="images/bottom_wave.png" alt="" class="wave">

    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">

        <h2 class="deco-title">About us</h2>

        <div class="box-container">

            <div class="image">
                <img src="images/about.png" alt="">
            </div>

            <div class="content">
                <h3 class="title">you can find all the most popular species</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Nesciunt temporibus ipsum consectetur asperiores modi ratione. 
                    Sit, dolores voluptas consequuntur dolor tempore quibusdam est 
                    obcaecati possimus omnis, officiis molestias et sapiente.</p>
                
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>we educate</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-bullhorn"></i>
                        <h3>we play</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-book-open"></i>
                        <h3>getting to know</h3>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- end -->

    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h2 class="heading">gallery</h2>

        <div class="swiper gallery-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-1.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-2.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-3.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-4.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- end -->

    <!-- animals -->

    <section class="animal" id="animal">

        <h2 class="heading">animals</h2>

        <div class="box-container">

            <div class="box">
                <img src="images/animal_1.jpg" alt="">
                <div class="content">
                    <h3>cameleon</h3>
                    <a href="#" class="btn">see datails</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_2.jpg" alt="">
                <div class="content">
                    <h3>zebra</h3>
                    <a href="#" class="btn">see datails</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_3.jpg" alt="">
                <div class="content">
                    <h3>giraffe</h3>
                    <a href="#" class="btn">see datails</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_4.jpg" alt="">
                <div class="content">
                    <h3>monkey</h3>
                    <a href="#" class="btn">see datails</a>
                </div>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- banner -->

    <section class="banner">

        <div class="row">
            
            <div class="content">
                <h3>stay with pets</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Saepe doloremque rem reiciendis beatae, ut tempora. Et dolorem enim, iusto autem eaque harum. 
                Ex praesentium commodi sequi culpa eius fugit vel.</p> 
            </div>

            <div class="image">
                <img src="images/banner_1.png" alt="">
            </div>
            
        </div>

    </section>

    <!-- end -->

    <!-- pricing -->

    <section class="pricing" id="pricing">

        <h2 class="heading">pricing</h2>

        <div class="box-container">

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>individuals</h3>
                <h4 class="price">$ 10</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing2.png" alt="">
                <h3>school</h3>
                <h4 class="price">$ 20</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>family</h3>
                <h4 class="price">$ 30</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- contact -->

    <section class="contact" id="contact">

        <h2 class="heading">contact</h2>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="meassage"></textarea>

            <a href="#" class="btn">send message</a>

        </form>

    </section>

    <!-- end -->

    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-paw"></i> zoo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p class="links"><i class="fas fa-clock"></i>monday - friday</p>
                <p class="days">7:00AM - 11:00PM</p>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#" class="links"><i class="fas fa-phone"></i> 1245-147-2589</a>
                <a href="#" class="links"><i class="fas fa-phone"></i> 1245-147-2589</a>
                <a href="#" class="links"><i class="fas fa-envelope"></i> info@zoolife.com</a>
                <a href="#" class="links"><i class="fas fa-map-marker-alt"></i> karachi, pakistan</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i>home</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i>about</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i>gallery</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i>animal</a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i>pricing</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="Your Email" class="email">
                <a href="#" class="btn">subscribe</a>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

        <div class="credit">&copy; 2022 zoolife. All rights reserved by <a href="#" class="link">ninjashub</a></div>

    </section>






    <!-- end -->















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>
</html>