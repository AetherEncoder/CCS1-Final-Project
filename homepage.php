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

  <body>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Container for the Div -->
    <div class="home-main">
      <form name="myform" class="login" method="POST" action="">
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

        <!-- Heading -->
        <div class="heading">
          <div class="side-heading"></div>
          <div class="main-heading">
            <!-- Display Greetings -->
            <h1 >Welcome <?php echo $firstName; ?>!</h1>

            <!-- Go Back to Log in page -->
            <div class="logout-side"></div>
            <div class="logout-main">
              <input type="button" class="logout" id="login" value="Log out" onclick="travel(this.form, 'login')">
            </div>
            <div class="logout-side"></div>
            </div>
        </div>

        <!-- Body Div -->
        <div class="home-body">
          <!-- Banner For Sonjaco -->
          <div class="home-body-banner">
            <input type="button" class="student-banner" id="sonjaco" value="" onclick="travel(this.form, 'sonjaco');">
          </div>

          <!-- Banner For Venenoso -->
          <div class="home-body-banner">
            <input type="button" class="student-banner" id="venenoso" value="" onclick="travel(this.form, 'venenoso');">
          </div>

          <!-- Banner For Ong -->
          <div class="home-body-banner">
            <input type="button" class="student-banner" id="ong" value="" onclick="travel(this.form, 'ong');">
          </div>
        </div>

        
      </form>
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>
    <script src="src/app.js"></script>
  </body>
</html>






