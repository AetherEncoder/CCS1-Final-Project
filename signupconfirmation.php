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

    <!-- Heading Banner -->
    <div class="main-heading-div">
      <img src="src/images/main_banner.png" alt="Main Banner" class="main-banner">
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Container for the main content -->
    <div class="container">

      <!-- Main Div -->
      <div class="login-main">
        <h1>CONFIRM YOUR DETAILS</h1>
        <hr class="login" />

        <form class="login" name="myform" method="POST" action="signupSuccessful.php">
          <!-- Values -->
          <input type="hidden" name="firstName" value="<?php echo $firstName; ?>">
          <input type="hidden" name="lastName" value="<?php echo $lastName; ?>">
          <input type="hidden" name="middleName" value="<?php echo $middleName; ?>">
          <input type="hidden" name="birthDate" value="<?php echo $birthDate; ?>">
          <input type="hidden" name="sex" value="<?php echo $sex; ?>">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
          <input type="hidden" name="phoneNumber" value="<?php echo $phoneNumber; ?>">
          <input type="hidden" name="forward" value="<?php echo $forward; ?>">
          <input type="hidden" name="midfielder" value="<?php echo $midfielder; ?>">
          <input type="hidden" name="defender" value="<?php echo $defender; ?>">
          <input type="hidden" name="goalkeeper" value="<?php echo $goalkeeper; ?>">
          <input type="hidden" name="medicalCondition" value="<?php echo $medicalCondition; ?>">
          <input type="hidden" name="emergencyName" value="<?php echo $emergencyName; ?>">
          <input type="hidden" name="emergencyRelationship" value="<?php echo $emergencyRelationship; ?>">
          <input type="hidden" name="emergencyContact" value="<?php echo $emergencyContact; ?>">
          <input type="hidden" name="color" value="<?php echo $color; ?>">
          <input type="hidden" name="pet" value="<?php echo $pet; ?>">
          <input type="hidden" name="course" value="<?php echo $course; ?>">
          <input type="hidden" name="username" value="<?php echo $username; ?>">
          <input type="hidden" name="password" value="<?php echo $password; ?>">
          <input type="hidden" name="confirmPassword" value="<?php echo $confirmPassword; ?>">


          <!-- Subheading -->
          <div class="subheading">
            <h2>Personal Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Personal Information -->
          <div class="signup-confirm">
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
           <div class="signup-confirm">

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
          <div class="signup-confirm">
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
          <div class="signup-confirm">
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
          <div class="signup-confirm">
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
          <div class="signup-confirm">
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
          <div class="signup-confirm">
            <p>
              Username: <span class="bold"><?php echo $username; ?></span><br />
              Password: <span class="bold"><?php echo $password; ?></span><br />
            </p>
          </div>

          <hr class="login" />

          <div class="login-form submit">
            <a href="index.php" class="submit">Go Back</a>
            <input type="submit" value="Confirm" class="submit">
          </div>
        </form>

      </div>
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Marquee Disclaimer -->
    <div class="disclaimer">
      <marquee class="disclaimer">
        This website is a student project created for academic purposes as part of the CCS1 course. It is not intended for actual use, and any data entered here will not be stored or used beyond this project demonstration.
      </marquee>
    </div>

    <!-- Copy Right Section -->
    <div class="copyright">
      <hr class="copyright" />
      <p class="copyright"> Copyright (2024) &copy; </p>
      <hr class="copyright" />
    </div>

    <script src="src/app.js"></script>
  </body>
</html>







