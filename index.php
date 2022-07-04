
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<html>
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="sal.css">
	<title>Tech Ware</title>
</head>
<body>
  <div class="wrapper">
    <header class="sticky">
      <a href="#" class="logo">Tech Ware</a>
      <div class="toggle" onclick="toggleClassName();"></div>
    </header>

    <div class="sidebar">
    			<ul>
    				<li><a href="#home" onclick="toggleClassName();">Home</a></li>
    				<li><a href="#about" onclick="toggleClassName();">About</a></li>
    				<li><a href="#services" onclick="toggleClassName();">Services</a></li>
    				<li><a href="#technology" onclick="toggleClassName();">Technology</a></li>
    			</ul>
    		</div>


      <div class="banner" id="home">
      <img src="img\1.jpg">

      <div class="content" data-sal="slide-left" data-sal-duration="500">

        <h2>Welcome to Tech Ware</h2>
          <p>A platform that offers a solution to your digital needs at affordable prices.</p>
      </div>
    </div>



    <section class="about" id="about">
  			<div class="contentBx" data-sal="slide-right" data-sal-duration="500">
          <h2 class="heading">Why choose us</h2>
        <p class="text">With Technology a part of our daily life, Using the internet became part of our daily-life.
          What we offer is recharge of Airtime, sale of data bundles at affordable prices, CableTV (DStv, StarTimes), Electrical bill payment and more.
        <ul>
          <li>Online 24/7</li>
          <li>Fast response</li>
          <li>100% legit</li>
          <li>Available at your convenience</li>
          <li>100% secure</li>
        </ul>
        <br>
        </p>
        <h3 id="head"class="heading" data-sal="slide-right" data-sal-duration="500">How to make payment</h3>
      <p class="text">To make your payment, there are two methods.</p>
      <ul>
        <li>  <p class="text">Using mobile banking with your phone you deposite the money to into (6949374939) this account, and send the recipt ofthe transaction</p></li>
        <li><p class="text">Last method is by using point of sale service (POS) at any service provider.</p></li>

      </ul>

  			</div>
  			<div class="imgBx" data-sal="slide-left" data-sal-duration="500"></div>
  		</section>


  <center>
          <section class="services" id="services">
            <h2 class="heading" data-sal="slide-right" data-sal-duration="500">Our Services</h2>
            <p class="text" data-sal="slide-left" data-sal-duration="500"> Our team is made up of tech enthusiast, we aim to provide you with the most affordable
              services. contact us through 0913584535, TechWare@gmail.com, use internet banking and
              transfer the money, Pay your biils in a swift from the comfort of your house. Our data palns are also compatible with routers, buy a router plan for a special discount.</p>
            <div class="container"  data-sal="slide-right" data-sal-duration="500">

    <img class="tw" src="img\2.jpg" alt="">

            </div>
          </section>
  </center>



        <section class="technolgy" id="technology">
          <div class="contentBx" data-sal="slide-right" data-sal-duration="500">
          <h2 class="heading">We use state of the art technology</h2>
          <p class="text">At Tech Ware, We sell data plans at affordable prices  along with airtime for local network providers such as MTN, Airtel, 9Mobile and GLO.</p>
  <p class="text">Along with our fast respnse time, Tech Ware aims to deliver its service as soon as possible.</p>

        </div>
        <div class="imgBx" data-sal="slide-left" data-sal-duration="500">
          <img src="img\3.jpg" alt="">
          <img src="img\8.jpg" alt="">
          <img src="img\9.jpg" alt="">
          <img src="img\14.jpg" alt="">

        </div>
      		</section>




          <section class="sec">


          <style type="text/css">

          .sec{
            background-color: #04303d;
          }
          #Welcome{



            height: 150px;
            width: 200px;
            box-shadow: 0 0 3px 0 (0,0,0,0,3);

           padding: 20px;
            margin: 8% auto 0;
            text-align: center;
            font-size: 20px;
            padding-bottom: 20px;



          }

          .anchor{

            color: #25bac7;
            cursor: pointer;

          }

          </style>








          	<br>
            <div id="Welcome">

              <a class="anchor"href="logout.php">Logout</a>

            </div>
          </section>

<hr>



    <section class="footer" data-sal="slide-right" data-sal-duration="500">
      <p class="text">Design & Developed By Salim Ahmed Sambo</p>
      <ul>
        <p class="text">Follow us on : </p>
        <li><a href="#"><img src="img\facebook.png"></a></li>
        <li><a href="#"><img src="img\ig.jpg"></a></li>
        <li><a href="#"><img src="img\wa.jpg"></a></li>
      </ul>
    </section>


  </div>
  <script src="main.js">
alert("")
    </script>

    <script type="text/javascript" src="sal.js"></script>
    <script type="text/javascript">
      sal({
        once: false,
      });


      function toggleClassName() {
        var sidebar = document.querySelector('.sidebar')
        var wrapper = document.querySelector('.wrapper')
        var toggle = document.querySelector('.toggle')

        sidebar.classList.toggle('active')
        wrapper.classList.toggle('active')
        toggle.classList.toggle('active')

      }
      window.addEventListener('scroll', function() {

        var header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);


      })
    </script>







</body>
</html>
