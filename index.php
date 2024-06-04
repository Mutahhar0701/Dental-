<?php
$conn=mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($conn,$_POST['name']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $number= $_POST['number'];
    $date= $_POST['date'];

    $insert=mysqli_query($conn,"INSERT INTO contact_form(name,email,number,date)VALUES('$name','$email','$number','$date')") or die('qurey failed'); 

    if($insert){
        $message[]='Appointment made Successfully!';
    }else{
        $message[]='Appointment Failed';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--fond cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--end-->
    <!--bootstrap cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
<!--end-->
<!--css link-->
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header section-->
<nav class="navbar fixed-top">
  <div class="container-fluid">
    
      <a class="logo" href="#home">Dentanl<span>Care.</span></a>
    <div class="nav">
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#services">Services</a>
      <a href="#reviews">Reviews</a>
      <a href="#contact">Contact</a>
    </div>
    <a href="#contact" class="link-btn">Make Appointment</a>
 <div id="menu-btn" class="fas fa-bars"></div>
</div>

</nav>
<!--Home start-->
<section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
        <div class="content text-center text-md-left">
            <h3>Let us brighten your smile</h3>
            <p>
            Your Dental Practice offers advanced dental care, personalized services, and routine cleanings to enhance oral health and smile radiance, ensuring a comfortable and confident experience.
            </p>
            <a href="#contact" class="link-btn">Make Appointment</a>
        </div>
        </div>
    </div>
</section>
<!--end-->
<!--about section-->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="about.jpg" class="w-100 mb-4 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
                <span>About Us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>"True healthcare for your family goes beyond treating illnesses; it embraces a holistic approach to well-being. It involves fostering a supportive environment, promoting preventive care, and nurturing both physical and mental health. True healthcare is a commitment to understanding each family member's unique needs and actively working towards their overall wellness. It's a journey that prioritizes empathy, communication, and a shared dedication to a healthy, happy life together."</p>
                <a href="#contact" class="link-btn">Make Appointment</a>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--services start-->
<section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">
        <div class="box">

            <img src="icon-2.svg" alt="">
            <h3>Alignment Specialist</h3>
            <p>An Alignment Specialist optimizes organizational goals and individual efforts, fine-tuning strategies, processes, and resources to enhance efficiency, effectiveness, and synergy, contributing to streamlined operations and success.</p>

        </div>
        <div class="box">

<img src="ion.svg" alt="">
<h3>Cosmatic Dental</h3>
<p>Cosmetic dentistry involves procedures like teeth whitening, veneers, and dental implants to improve smiles, boost aesthetic confidence, and enhance overall dental appearance.</p>

</div>
<div class="box">

<img src="icon-5.svg" alt="">
<h3>Oral Hygiene</h3>
<p>Oral hygiene is the cornerstone of a vibrant smile and lasting dental health, where regular brushing, flossing, and routine dental check-ups pave the way for a confident and cavity-free life.</p>
</div>
<div class="box">

<img src="icon-9.svg" alt="">
<h3>Root Canal</h3>
<p>Root canal treatment is a dental procedure that saves teeth from infection by removing infected pulp and sealing the root canals, restoring function and comfort.</p>
</div>
<div class="box">

<img src="icon-6.svg" alt="">
<h3>Live Dental Advisory</h3>
<p>Live Dental Advisory provides real-time, personalized guidance to dental professionals, enhancing patient care and clinical decision-making through expert advice.</p>

</div>
<div class="box">

<img src="icon-10.svg" alt="">
<h3>Cavity Inspection</h3>
<p>Cavity inspection is a meticulous process that identifies hidden flaws or damages in structures, ensuring thorough examination and maintenance to maintain structural integrity.</p>

</div>

    </div>
</section>
<!--process start-->
<section class="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="doctor.png" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Pediatric Dentistry focuses on enhancing children's oral health through specialized care, prevention, early intervention, and a positive dental experience to ensure a lifetime of healthy smiles.</p>
        </div>
        <div class="box">
            <img src="dentist.png" alt="">
            <h3>Cosmatic Dentistry</h3>
            <p>Pediatric Dentistry focuses on enhancing children's oral health through specialized care, prevention, early intervention, and a positive dental experience to ensure a lifetime of healthy smiles.</p>
        </div>
        <div class="box">
            <img src="me.png" alt="">
            <h3>Dental implants</h3>
            <p>Pediatric Dentistry focuses on enhancing children's oral health through specialized care, prevention, early intervention, and a positive dental experience to ensure a lifetime of healthy smiles.</p>
        </div>
        
    </div>
</section>
<!--end-->
<!--review strat-->
<section class="reviews" id="reviews">
    <h1 class="heading">Satisfied Clinets</h1>
    <div class="box-container container">
        <div class="box">
            <img src="pic-1.png" alt="">
            <p>Our dental care consistently receives positive reviews due to our skilled professionals, personalized approach, and commitment to providing a comfortable and effective oral health experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
        </div>
        <div class="box">
            <img src="woman.png" alt="">
            <p>Our dental care consistently receives positive reviews due to our skilled professionals, personalized approach, and commitment to providing a comfortable and effective oral health experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
        </div>
        <div class="box">
            <img src="pic-1.png" alt="">
            <p>Our dental care consistently receives positive reviews due to our skilled professionals, personalized approach, and commitment to providing a comfortable and effective oral health experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
        </div>
    </div>
</section>
<!--end-->
<!--contact-->
<section class="contact" id="contact">
    <h1 class="heading">Make Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
        }
    }
    ?>
    <span>Your Name</span>
   <input type="text" name="name" placeholder="Enter your name" class="box" required>
   <span>Your Email</span>
  <input type="email" name="email" placeholder="Enter your email" class="box" required>
  <span>Your Number</span>
  <input type="number" name="number" placeholder="Enter your number" class="box" required>
  <span>Appointment Date</span>
  <input type="datetime-local" name="date"  class="box" required>
  <input type="submit" value="Make Appointment" name="submit" class="link-btn">
</form>
</section>
<!--end-->
<!--footer-->
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+92340701887</p>
            <p>+923465170655</p>
        </div>
        <div class="box">
            <i class="fas fa-map-market"></i>
            <h3>Our Address</h3>
            <p>Skardu, Pakistan</p>
        </div>
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening Time</h3>
            <p>12:00am to 04:00pm</p>
        </div>
        <div class="box">
            <i class="fas fa-envelop"></i>
            <h3>Email Address</h3>
            <p>mutahaar123@gmail.com</p>
            <p>shabaz1245@gmail.com</p>
        </div>
    </div>
</section>




<!--js script-->
<script src="script.js"></script>
</body>
</html>