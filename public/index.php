<?php require_once ("../includes/connect.php") ?>

  <head>
    <title>Genius Energy</title>
    <link href="../public/css/styles.css" rel="stylesheet">
  </head>

  <body>
      <div class="head box">
        <a href="http://www.geniusenergy.co.uk"><img src="images/logo.png"/></a>
      </div>
      <div class="form box">
          <form name="contactform" method="post" action="send_form_email.php">
            <input type="text" name="firstname" value="Name"><br>
            <input type="tel" name="number" value="Phone"><br>
            <input type="email" name="email" value="Email Address"><br>
            <input type="text" name="postcode" value="Postcode"><br>
            <select>
              <option value="auto">Annual Income</option>
              <option value="1-2">£10,000 - £20,000</option>
              <option value="2-4">£20,000 - £40,000</option>
              <option value="4-8">£40,000 - £80,000</option>
              <option value="audi">£80,000+</option>
            </select><br>
            <select>
              <option value="auto">Do you own your home?</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select><br>
            
            <input type="submit" value="Submit">

          </form>
      </div>

      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script language="JavaScript">
            var frmvalidator  = new Validator("contactform");
            frmvalidator.addValidation("name","req","Please provide your name");
            frmvalidator.addValidation("email","req","Please provide your email");
            frmvalidator.addValidation("email","email",
              "Please enter a valid email address");
        </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>