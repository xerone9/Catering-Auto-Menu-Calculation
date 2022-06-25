<!DOCTYPE html>
<html>
  <head>
    <title>Digital Caterers</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("https://caterers.rubick.org/wp-content/uploads/2021/12/Mass.jpg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      
      text-transform: uppercase;
      justify-content: center;
      allign: center;
      font-weight: 400;
      }
      
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: row;
      align-items: center;
      height: 0%;
      padding-left: 350px;
      padding-right: 300px;
      padding-top: 0px;
      margin-top: 100px;          
      background: rgba(0, 0, 0, 0); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: left;
      }
      .right-part {
      text-align: right;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 0px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .design {
      padding: 0px 0px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      text-decoration: none;
      font-size: 30px;
      font-weight: 0;
      font-family: 'Brush Script MT';
      color: #73432a;
      }
      .menu {
      padding: 0px 0px;
      margin-top: 10px;
      border-radius: 5px; 
      border: none;
      text-decoration: none;
      font-size: 25px;
      font-weight: 0;
      font-family: 'Courier New';
      padding-left: 33px;
      color: #ffffff;
      }
      .total {
      padding: 10px 10px;
      margin-top: 40px;
      border-radius: 5px; 
      border: solid;
      border-color: coral;
      text-decoration: none;
      font-size: 30px;
      font-weight: 0;
      color: #ffffff;
      text-align: "right";
      background: #160000; 
      
      }
      .design-center {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      text-decoration: none;
      font-size: 75px;
      font-weight: 400;
      font-family: 'Brush Script MT';
      color: #ffffff;
      text-align: "center";
      }
      .blinking{
    animation:blinkingText 2s infinite;
    font-size: 25px;
    font-family: 'Sriracha', cursive;
}
@keyframes blinkingText{
    0%{     color: red;    }
    49%{    color: #000; }
    60%{    color: transparent; }
    99%{    color:red;  }
    100%{   color: red;    }
}
      .btn-item2 {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: underline;
      background: #66000000; 
      text-decoration: none;
      font-size: 40px;
      font-weight: 400;
      font-family: 'Courier New';
      color: #000dfc;
      }
      .btn-item {
      display: inline-block;
      cursor: pointer;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 5680px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      allign: right;
      height: auto;      
      }
      .submit4 {
        
        border-radius: 5em;
        color: black;
        background: rgb(160, 160, 255);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 22px;
        max-width: 65%;
        margin-left: 7%;
        
    }    
      }
    </style>
  </head>
  <form>
    <h1>Digital Caterers</h1>
  </form>  
  <body>  
    <div class="main-block">
      <div >
        
        <div >
        <form action="rubick.php" method="post" action="functioncalling.php">
        <?php
    $fn = !empty($_POST['persons']) ? $_POST['persons'] : '';
    $ln = !empty($_POST['budget']) ? $_POST['budget'] : '';
?>

<?php      
      ?>
<style type="text/css">#f1, #id{
display:none;
}</style>
<?php
?>
<?php      
      ?>
<style type="text/css">#submit2, #id{
display:none;
}</style>
<?php
?>

          <br>
          
          <h1>Tell Us Your Budget</h1>
          <br>
          <br>          
          <p>No. Of Persons.</p>
          <input type="int" name="persons" allign="center" id="persons" value=<?php echo $fn;?>>
          <br>
          <p>Budget.</p>         
          <input type="int" name="budget" allign="center" id="budget" value=<?php echo $ln;?>>
          <br> 
        <form2>
          <br>
          <br>
          <input class="btn-item" type="submit" name="submit" value="Get the best Deal" ></input>
          <br>
        </form2>     
        

        
        </form>
        
       
          
          
          
        </div> 
        </div>

        <div class="left-part" id="d1">

               
        
        <?php 
          
          ini_set('display_errors', 0);
          echo "<br>";
          echo "<br>";

          $persons = $_POST["persons"] ?? "";
          $budget = $_POST["budget"] ?? "";
          $limit = (int)$budget / (int)$persons;
          $minimumBudget = (int)$persons * 270;  

        if((!isset($_POST["persons"])) || trim($_POST["persons"]) == '' && (!isset($_POST["budget"])) || trim($_POST["budget"]) == '')
        {
        echo "Enter Values"."<br>";
        }
        else if((!isset($_POST["persons"])) || trim($_POST["persons"]) == '')
        {
        echo "You did not entered No. Of Persons."."<br>";
        }
        else if ($_POST["budget"] < 27000)
        {        
        echo "<span class='blinking'>" . "Minimum Budget is 27,000/-." . "</span>";
        }
        else if ($_POST["persons"] < 100)
        {
        echo "<span class='blinking'>" . "Minimum persons are 100." . "</span>"; 
        
        }
        else if ($_POST["persons"] > 1500)
        {
        echo "Maximum persons Allowed 1500."."<br>";
        }
        else if((!isset($_POST["budget"])) || trim($_POST["budget"]) == '')
        {
        echo "You did not entered you budget."."<br>";
        }
        else if($limit < 270)
        {
          echo "Minimum budget for ". $persons . " persons is " . number_format($minimumBudget/1000, 3, ',', '') . " Rupees" . "<br>";
        }        
        else if($limit > 599)
        {
          $rate = 600;  
          echo "<span class='design-center'>" . "You Should Go With" . "<br>"  . "</span>";        
          echo "<span class='btn-item2'>" . "For " . $persons . " Persons" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";          
          echo "<span class='menu'>" . "Juice" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Biryani" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Karahi" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Tikka" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Puff" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Tong" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Dulari" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "jaman" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Naan" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Taftaan" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Bar" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Raita" . "<br>"  . "</span>";
          echo "<span class='menu'>" . "Coffee" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "<span class='total'>" . "Total Amount: " . number_format(($persons * $rate)/1000, 3, ',', '') . "/-" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "Amount Saved: " . number_format(($budget - ($persons * $rate))/1000, 3, ',', '') . "/-" . "<br>";
          echo "<br>";
          echo "<span class='design'>" . "Will cover all your persons in your budget and offer you a taste you'll never forget" . "<br>"  . "</span>";
          ?>
<style type="text/css">#submit2, #id{
display:block;
}</style>
<?php
          
        }
        else if($limit > 479)
        {
          $rate = 480;
          echo "<span class='design-center'>" . "You Should Go With" . "<br>"  . "</span>";        
          echo "<span class='btn-item2'>" . "For " . $persons . " Persons" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";     
          echo "<span class='menu'>" . "Biryani" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Karhai" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Tikka" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Fry" . "<br>";
          echo "<span class='menu'>" . "Crunch" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Naan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Taftaan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Bar" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Raita" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Coffee" . "<br>" . "</span>";
          echo "<br>";
          echo "<br>";
          echo "<span class='total'>" . "Total Amount: " . number_format(($persons * $rate)/1000, 3, ',', '') . "/-" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "Amount Saved: " . number_format(($budget - ($persons * $rate))/1000, 3, ',', '') . "/-" . "<br>";
          echo "<br>";
          echo "<span class='design'>" . "Will cover all your persons in your budget and offer you a taste you'll never forget" . "<br>"  . "</span>";  
          ?>
<style type="text/css">#submit2, #id{
display:block;
}</style>
<?php
        }
        else if($limit > 399)
        {
          $rate = 400;
          echo "<span class='design-center'>" . "You Should Go With" . "<br>"  . "</span>";        
          echo "<span class='btn-item2'>" . "For " . $persons . " Persons" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";     
          echo "<span class='menu'>" . "Beef Raseeli Biryani" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Chicken Koyla Karhai" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Chicken Balochi Tikka" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Cherry Crunch" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Milky Naan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Taftan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Salad Bar" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Raita " . "<br>" . "</span>";
          echo "<br>";
          echo "<br>";
          echo "<span class='total'>" . "Total Amount: " . number_format(($persons * $rate)/1000, 3, ',', '') . "/-" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "Amount Saved: " . number_format(($budget - ($persons * $rate))/1000, 3, ',', '') . "/-" . "<br>";
          echo "<br>";
          echo "<span class='design'>" . "Will cover all your persons in your budget and offer you a taste you'll never forget" . "<br>"  . "</span>";  
          ?>
<style type="text/css">#submit2, #id{
display:block;
}</style>
<?php
        }
        else if($limit > 319)
        {
          $rate = 320;          
          echo "<span class='design-center'>" . "You Should Go With" . "<br>"  . "</span>";        
          echo "<span class='btn-item2'>" . "For " . $persons . " Persons" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";       
          echo "<span class='menu'>" . "Beef Biryani" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Chicken Shahi Karahi" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Cream Cocktail" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Milky Naan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Taftaan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Salad" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Raita " . "<br>" . "</span>";
          echo "<br>";
          echo "<br>";
          echo "<span class='total'>" . "Total Amount: " . number_format(($persons * $rate)/1000, 3, ',', '') . "/-" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "Amount Saved: " . number_format(($budget - ($persons * $rate))/1000, 3, ',', '') . "/-" . "<br>";
          echo "<br>";
          echo "<span class='design'>" . "Will cover all your persons in your budget and offer you a taste you'll never forget" . "<br>"  . "</span>";
          ?>
<style type="text/css">#submit2, #id{
display:block;
}</style>
<?php

        }
        else if($limit > 269)
        {
          $rate = 270;          
          echo "<span class='design-center'>" . "You Should Go With" . "<br>"  . "</span>";        
          echo "<span class='btn-item2'>" . "For " . $persons . " Persons" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";      
          echo "<span class='menu'>" . "Chicken Biryani" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Chicken Shahi Karhai" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Doodh Dulari / Lab-e-Sheerin" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Milky Naan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Taftaan" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Salad Fresh" . "<br>" . "</span>";
          echo "<span class='menu'>" . "Raita " . "<br>" . "</span>";
          echo "<br>";
          echo "<br>";
          echo "<span class='total'>" . "Total Amount: " . number_format(($persons * $rate)/1000, 3, ',', '') . "/-" . "<br>"  . "</span>";
          echo "<br>";
          echo "<br>";
          echo "Amount Saved: " . number_format(($budget - ($persons * $rate))/1000, 3, ',', '') . "/-" . "<br>";
          echo "<br>";
          echo "<span class='design'>" . "Will cover all your persons in your budget and offer you a taste you'll never forget" . "<br>"  . "</span>";
          ?>
<style type="text/css">#submit2, #id{
display:block;
}</style>
<?php 
          
        }

      
          ?>








        
        <br>
        <br>
        
                
        <input class="btn-item" type="submit" name="submit2" id="submit2" value="Would You Like To Order" onclick="myFunction()"></input>
        
        </div>
        
        <script>
function myFunction() {
  var x = document.getElementById("f1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


        

 
        
    
    

          

        <div>
      
      <form id="f1">
        <div class="title">         
          <h2>Provide Your Details</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="name" placeholder="Email">
          <input type="text" name="name" placeholder="Phone number">
          <input type="text" name="name" placeholder="Address">
          <input type="text" name="name" placeholder="Delivery Time">
          <select>
            <option value="occassion" selected>Ocassion*</option>
            <option value="wedding">Wedding Ceremony</option>
            <option value="valina">Valima Ceremony</option>
            <option value="mehendi">Mehendi Ceremony</option>
            <option value="birthday">Birthday Event</option>
            <option value="milad">Milad</option>
            <option value="other">Other</option>            
          </select>
        </div>        
        <button type="submit" >Submit</button>
      </form>

      

    </div>
    
  </body>
  
</html>

 