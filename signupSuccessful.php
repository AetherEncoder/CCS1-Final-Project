<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Blue Lock Program</title>
    <!-- Linking CSS, icon, and JavaScript -->
    <link rel="stylesheet" type="text/css" href="src/styles.css">
    <link rel="icon" type="x/icon" href="src/images/bluelock_log.png">

    <?php
    // Retrieve user information from form submission
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
    <!-- Heading Banner -->
    <div class="main-heading-div">
        <img src="src/images/main_banner.png" alt="Main Banner" class="main-banner">
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Container for the Div -->
    <div class="container">
        <div class="login-main">
            <form name="myform" method="POST" action="login.php">
                <div class="signup-success-main">
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

                    <!-- Main Heading -->
                    <h1 class="signup-success-main-heading">WELCOME TO BLUE LOCK</h1>
                    <hr class="login" />
                    <h2 class="signup-success-main-heading">YOU HAVE SUCCESSFULLY CREATED AN ACCOUNT</h2>
                    <br />
                    <br />

                    <!-- Proceed to Log In -->
                    <div class="signup-success-side-bar"></div>
                    <div class="signup-success-proceed-to-login-container">
                        <input class="proceed-to-login" type="submit" value="PROCEED TO LOG IN" name="submit">
                    </div>
                    <div class="signup-success-side-bar"></div>
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







