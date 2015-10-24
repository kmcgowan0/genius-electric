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
                <p class="heading">Can You Save?</p>
                <p class="subhead">Enter your details below to find out</p>
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
          <div class="testimonials">
              <p class="title">Why Choose Us?</p>
                <div class="test one">
                    <p>A 'Genius' way to save money</p>
                    <p>All the staff at 'Genius Energy' are friendly and very helpful throughout the whole process. We had an excellent consultant who ensured that we understood all the ins and outs of the costs and savings to having solar panels fitted to our roof. I would and have recommended 'Genius Energy' to my friends family and neighbours as I believe that it provides a great saving to your energy bills.</p>
                </div>
                <div class="test two">
                    <p>Excellent customer service, the sales consultant was helpful answered all my questions and wasn't at all pushy, the customer service staff kept me upto date every step of the way and the way and the instillation team were helpful and worked quick
</p>
                </div>
                <div class="test three">
                    <p>Having decided to investigate solar energy, Genius Energy were professional, helpful and knowledgable. They gave very clear advice which tallied with our own research. Purchase was effeciiently organised and the installation was well organised and professional, with office staff hugely helpful. If you are intersted in green energy, Genius Energy is well worth contacting for a excellent and friendly service.</p>
                </div>
          </div>
          
      </div>
      <div class="footer">
        <p>This is some accreditation <img src="images/best-temp.png"/></p>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   
  </body>
</html>