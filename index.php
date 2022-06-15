<?php 
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM 'contact_tb' WHERE name = '$name' 
    AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already';
    }else{ 
        mysqli_query($conn, "INSERT INTO 'contact_tb'(name, email, number, message) 
        VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- custome css file -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    
    <?php
    
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
          <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
            ';
        }
    }
    ?>
    <!-- header sectio start here  -->
        <header class="header">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#home" class="logo">Port<span>folio.</span></a>
            <nav class="navbar">
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#portfolio">portfolio</a>
                <a href="#contact">contact</a>
            </nav>

            <div class="follow">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-github"></a>
            </div>


        </header>
    <!-- header sectio start here  -->

    <!-- home section start here   -->
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="images/ik1.jpg" alt="">
        </div>
        <div class="content" data-aos="fade-up">
            <h3 data-aos="fade-up">hi, i am ikenna</h3>
            <span data-aos="fade-up">front-end developer</span>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Distinctio odio voluptas provident dicta culpa iusto?</p>
                 <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>
    </section>
    <!-- home section stops here   -->

    <!-- about section start here -->

    <section class="about" id="about">
        <hi class="heading" data-aos="fade-up"><span>biography</span></hi>

        <div class="biography">
            <p data-aos="fade-up">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Obcaecati voluptas optio atque assumenda aperiam ipsa suscipit natus odit consequuntur provident!</p>

            <div class="bio">
                <h3 data-aos="zoom-in"><span>name :</span> chukwu ikenna</h3>
                <h3 data-aos="zoom-in"><span>email :</span> iksunnybrown@gmail.com</h3>
                <h3 data-aos="zoom-in"><span>address :</span> lagos, nigeria</h3>
                <h3 data-aos="zoom-in"><span>phone :</span> +23481-7263-524</h3>
                <h3 data-aos="zoom-in"><span>age :</span> 22 years</h3>
                <h3 data-aos="zoom-in"><span>experience :</span> 3+ years</h3>
            </div>

            <a href="#" class="btn" data-aos="fade-up">download CV</a>
        </div>

        <div class="skills" data-aos="fade-up">
            <hi class="heading"><span>skills</span></hi>

            <div class="progress">
                <div class="bar" data-aos="fade-left"><h3><span>HTML</span> <span>95%</span></h3></div>
                <div class="bar" data-aos="fade-right"><h3><span>CSS</span> <span>80%</span></h3></div>
                <div class="bar" data-aos="fade-left"><h3><span>JAVASCRIPT</span> <span>65%</span></h3></div>
                <div class="bar" data-aos="fade-right"><h3><span>PHP</span> <span>55%</span></h3></div>
            </div>
        </div>

        <div class="edu-exp">
            <hi class="heading" data-aos="fade-up"><span>education and experience</span></hi>

            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-up">education</h3>

                    <div class="box" data-aos="fade-right">
                        <span>(2019 - 2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>(2020 - 2021)</span>
                        <h3>web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>(2021 - 2022)</span>
                        <h3>graphic designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>
                </div>

                <div class="box-container">
                    <h3 class="title" data-aos="fade-up">experience</h3>

                    <div class="box" data-aos="fade-left">
                        <span>(2019 - 2020)</span>
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2020 - 2021)</span>
                        <h3>back-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>(2021 - 2022)</span>
                        <h3>full-stack developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Blanditiis ut suscipit delectus atque dicta vel!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section stop here -->

    <!-- services section start here -->

    <section class="services" id="services">
        <hi class="heading" data-aos="fade-up"><span>services</span></hi>

        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <i class="fas fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>

            <div class="box" data-aos="fade-right">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>

            <div class="box" data-aos="fade-left">
                <i class="fab fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>

            <div class="box" data-aos="fade-left">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>

            <div class="box" data-aos="fade-right">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>

            <div class="box" data-aos="fade-right">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quo sed numquam officiis iure magni placeat.</p>
            </div>
        </div>
    </section>

    <!-- services section stops here -->

    <!-- portfolio section start here -->

    <section class="portfolio" id="portfolio">

        <hi class="heading" data-aos="fade-up"> <span>portfolio</span></hi>

        <div class="box-container">

            <div class="box" data-aos="fade-up">
                <img src="images/web1.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/web2.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/web3.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/web4.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/web5.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/web6.jpg" alt="">
                <h3>web-development</h3>
                <span>(2020 - 2022)</span>
            </div>
        </div>
    </section>
    <!-- portfolio section stop here -->

    <!-- contact info start here -->

    <section class="contact" id="contact">
        <hi class="heading" data-aos="fade-up"> <span>contact me</span></hi>
        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name..." class="box" required>
                <input data-aos="fade-right" type="email" name="email" placeholder="enter your email..." class="box" required>
            </div>
            <input data-aos="fade-left" type="number" min="0" name="number" placeholder="enter your number..." class="box" required>
            <textarea data-aos="fade-left" name="message" class="box" required placeholder="enter your message here..." cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+234-816-4567-456</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>iksunnybrown@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>lagos nigeria</p>
            </div>
        </div>
    </section>

    <!-- contact info stops here -->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>iksunnybrown</span></div>






    <!-- custome js files -->
    <script src="script.js"></script>

    <!-- aos js ink -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

        AOS.init({
            duration:800,
            delay:300
        });
    </script>
</body>
</html>