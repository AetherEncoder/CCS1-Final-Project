<!DOCTYPE html>
<html>
  <head>

    <title>Sign Up - Blue Lock Program</title>

    <!-- Linking css icon and javascript -->
    <link rel="stylesheet" type="text/css" href="src/styles.css">
    <link rel="icon" type="x/icon" href="src/images/bluelock_log.png">


    <?php
    // Personal Information
      $firstName = $_POST["firstName"]; 
      $lastName = $_POST["lastName"]; 
      $middleName = $_POST["middleName"]; 
      $birthDate = $_POST["birthDate"]; 
      $sex = $_POST["sex"]; 

    // Contact Information
      $email = $_POST["email"]; 
      $phoneNumber = $_POST["phoneNumber"]; 

    // Preferred Position
      $forward = $_POST["forward"];
      $forwardTitle = "Forward";

      $midfielder = $_POST["midfielder"]; 
      $midfielderTitle = "Midfielder";

      $defender = $_POST["defender"]; 
      $defenderTitle = "Defender";

      $goalkeeper = $_POST["goalkeeper"]; 
      $goalkeeperTitle = "Goalkeeper";

    // Medical Condition
      $medicalCondition = $_POST["medicalCondition"]; 

    // Emergency Contact
      $emergencyName = $_POST["emergencyName"]; 
      $emergencyRelationship = $_POST["emergencyRelationship"]; 
      $emergencyContact = $_POST["emergencyContact"]; 

    // Security Questions
      $color = $_POST["color"]; 
      $pet = $_POST["pet"]; 
      $course = $_POST["course"]; 

    // Login Credentials
      $username = $_POST["username"]; 
      $password = $_POST["password"]; 
      $confirmPassword = $_POST["confirmPassword"]; 

      ?>

  </head>

  <body onload="position()">

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Container for the main content -->
    <div class="container">

      <!-- Main Div -->
      <div class="login-main">
        <h1>CONFIRM YOUR DETAILS</h1>
        <hr class="login" />

        <form class="login" name="myform" method="POST" action="home.php">

          <!-- Subheading -->
          <div class="subheading">
            <h2>Personal Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Personal Information -->
          <div class="login-caption">
            <p>
              First Name: <span class="bold"><?php echo $firstName; ?></span><br />
              Last Name: <span class="bold"><?php echo $lastName; ?></span><br />
              Middle Name: <span class="bold"><?php echo $middleName; ?></span><br />  <!-- Don't forget to make this optional -->
              Birth Date: <span class="bold"><?php echo$birthDate; ?></span><br />
              Sex: <span class="bold"><?php echo $sex; ?></span><br />
            </p>
          </div>

          <div class="subheading">
            <h2>Contact Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Contact Information -->
           <div class="login-caption">

              <p>
                Email Address: <span class="bold"><?php echo $email; ?></span><br />
                Phone Number: <span class="bold"><?php echo $phoneNumber; ?></span><br />
              </p>

           </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2 id="nice">Preferred Position</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Preferred Position -->
          <div class="login-caption">
            <p class="bold">
              <?php
                if($forward == $forwardTitle){
                  echo $forward."<br />";
                }
                if($midfielder == $midfielderTitle){
                  echo $midfielder."<br />";
                }
                if($defender == $defenderTitle){
                  echo $defender."<br />";
                }
                if($goalkeeper == $goalkeeperTitle){
                  echo $goalkeeper."<br />";
                }
              ?>
            </p>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Health Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Preferred Position -->
          <div class="login-caption">
            <p>
              Medical Conditions if any: <span class="bold"><?php echo $medicalCondition; ?></span><br />
            </p>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Emergency Contact Details</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Preferred Position -->
          <div class="login-caption">
            <p>
              Full Name: <span class="bold"><?php echo $emergencyName; ?></span><br />
              Relationship: <span class="bold"><?php echo $emergencyRelationship; ?></span><br />
              Contact Number: <span class="bold"><?php echo $emergencyContact; ?></span><br />
            </p>
          </div>

          <!-- Subheading -->
          <div class="subhead">
            <h2>Security Questions</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Security Questions -->
          <div class="login-caption">
            <p>
              What is your favorite color? <span class="bold"><?php echo $color; ?></span><br />
              What is the name of your first pet? <span class="bold"><?php echo $pet; ?></span><br />
              What is your course?  <span class="bold"><?php echo $course; ?></span><br />
            </p>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Log in Credentials</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Login Credentials -->
          <div class="login-caption">
            <p>
              Username: <span class="bold"><?php echo $username; ?></span><br />
              Password: <span class="bold"><?php echo $password; ?></span><br />
              Confirm Password: <span class="bold"><?php echo $confirmPassword; ?></span><br />
            </p>
          </div>

          <hr class="login" />

          <div class="login-form submit">
            <a href="signup.php" class="submit">Go Back</a>
            <input type="submit" value="Confirm" class="submit">
          </div>
          

        </form>

      </div>
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <script src="src/app.js"></script>
  </body>
</html>







