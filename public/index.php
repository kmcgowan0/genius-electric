<?php require_once ("../includes/connect.php") ?>

  <head>
    <title>Genius Energy</title>
    <link href="../public/css/styles.css" rel="stylesheet">
  </head>

  <body>
      <div class="container">
          
          <div class="head ">
            <a href="http://www.geniusenergy.co.uk"><img class="logo" src="images/logo-white-long.png"/></a>
          </div>

            <div class="form box">
              <form action="mail.php" method="POST">
                <input type="text" name="name" value="Name"><br>
                <input type="tel" name="number" value="Phone"><br>
                <input type="email" name="email" value="Email Address"><br>
                <input type="text" name="postcode" value="Postcode"><br>
                <select name="income" class="select">
                  <option value="auto">Annual Income</option>
                  <option value="1-2">£10,000 - £20,000</option>
                  <option value="2-4">£20,000 - £40,000</option>
                  <option value="4-8">£40,000 - £80,000</option>
                  <option value="8">£80,000+</option>
                </select><br>
                <select name="home" class="select">
                  <option value="auto">Do you own your home?</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select><br>

                <input class="btn" type="submit" value="Submit">

              </form>
                <p class="ftnote">A member of our team will contact you within 24 hours</p>
          </div> 
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  </body>
</html>