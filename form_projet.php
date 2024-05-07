<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <script src="<?php echo "proj_partie_js.js"; ?>"></script>
    <link rel="stylesheet" type="text/css" href="projetcss1.css"/>




    
</head>
<style>
    body{
        background-color: #f2e9d0;
    }
    .h11{
    text-align: center;
    color: #bb5a5a;
    font-family: 'lucida handwriting', cursive;
    font-size: 30px;
     }
    

  
    #cc,#name,#prenom,#email,#num,#date{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        color: black;

    }
    form {
        text-align: center;
        width: 30%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 1}
</style>
<body>

    <?php include 'projet_partie_php.php';?>
    <?php
    if (isset($_GET['registration_success']) && $_GET['registration_success'] == 'true') {
        echo "<p>Message sented successfully!</p>";
    }
    ?>
      <header>
        <a href="PROJ.html" class="header__logo">Beauty corner </a>
         <ul class="header__menu">
           <li><a href="PROJ.html">Home</a></li>
           <li><a href="cleansings.html">Skin care</a></li>
           <li><a href="beauty_trends.html">Trends</a></li>
           
           <li><a href="form_projet.php">Contact Us</a></li>
           <li><a href="form_projet.php"></a></li>
           <li><a href="form_projet.php"></a></li>


         </ul>
         <div class="header__buttons">
            <!--<a href="#">Sign in</a>
            <a href="#">Sign up</a>-->
    
         </div>
      </header>
    
   
 
    <form id="form" method="POST" action="projet_partie_php.php" onSubmit="return validation()">
        <p class="h11">Any question ?</p>
        <p>
            🌟 Need Help? Share Your Problems! 🌟
            
            Hey there! 👋 Do you have a problem or challenge that's been bugging you? Whether it's a physical issue, a personal dilemma, or anything in between, we're here to help !
            
            Our team of specialists is ready to lend a hand. Just drop your problem in the forum below, and we'll do our best to provide you with a tailored solution.
            
            </p>
        <p class="h11">coordinates</p>
        <label  id="name">Name</label><br>
        <input name="nom" id="nom" type="text"><br>

        <label  id="prenom">Prenom</label><br>
        <input name="prenom" id="prenom" type="text" ><br><br>

        <label name="email">Email</label><br>
        <input id="email" name="email" type="email"><br>

        <label id="num">Phone Number</label><br>
        <input type="number" id="numero" name="numero"><br>
   
      
        
       <label for="commentaire" id="cc">Your Problems</label><br>
       <textarea name="commentaire" id="commentaire" ></textarea><br>
      
        <input type ="reset" value="Reset">
        <input type ="submit" value="Confirm Informations">
        


        

    </form>
<!--foot-->
<div class="pre_foot">
  <div class="icones">
   <img src="fb.jpg" width="50px" height="50px">
   <img src="ins.jpg"width="50px" height="50px" >
   <img src="pin.jpg"width="50px" height="50px">

  </div>
  <div class="comm">
   <p><b>To place your order, contact us on Instagram or by phone.</b></p>

  </div>
</div>


<footer >
  <div class="container-footer">
        <h3>WORK HOURS</h3>
        <p>Monday - Friday : 8h-13h et 14h-17h
          Saterday : 8h-12h</p>
  </div>
    <div class="container-footer">
        <h3> Customer Servise </h3>
        <p>(+216) 21 161 000</p>
    </div>
  

</footer>
    
</body>
</html>