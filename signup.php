<!DOCTYPE html>
<html>
  <head>

    <title>Sign Up - Blue Lock Program</title>

    <!-- Linking css icon and javascript -->
    <link rel="stylesheet" type="text/css" href="src/styles.css">
    <link rel="icon" type="x/icon" href="src/images/bluelock_log.png">

  </head>

  <body>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>

    <!-- Container for the Div -->
    <div class="container">

      <!-- Main Div -->
      <div class="login-main">
        <h1>SIGN UP FOR BLUE LOCK</h1>
        <hr class="login" />

        <form class="login" name="myform" method="POST" action="signupconfirmation.php">

          <!-- Subheading -->
          <div class="subheading">
            <h2>Personal Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Personal Information -->
          <div class="login-caption">
            <p>
              First Name: <br />
              Last Name: <br />
              Middle Name: <br /> <!-- Don't forget to make this optional -->
              Birth Date: <br />
              Sex: <br />
              </p>
          </div>

          <!-- Input Fields Personal Information -->
          <div class="login-input">
            <input class="login-text" name="firstName" type="textbox" required>
            <br />

            <input class="login-text" name="lastName" type="textbox" required>
            <br />

            <input class="login-text" name="middleName" type="textbox">
            <br />

            <input class="login-text" name="birthDate" type="date" required>
            <br />

            <input name="sex" type="radio" value="Male" required>
            <span class="login-paragraph">Male</span>
            <input name="sex" type="radio" value="Female" reqruied>
            <span class="login-paragraph">Female</span>
            <br />

          </div>

          <div class="subheading">
            <h2>Contact Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Contact Information -->
           <div class="login-caption">

              <p>
                Email Address: <br />
                Phone Number: <br />
              </p>

           </div>

           <!-- Input Fields Contact Information -->
           <div class="login-input">

            <input class="login-text" name="email" type="textbox" required>
            <br />

            <input class="login-text" name="phoneNumber" type="textbox" required>
            <br />

           </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Preferred Position</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Preferred Position -->
          <div class="login-caption">
            <p>
              Forward <br />
              Midfielder <br />
              Defender <br />
              Goalkeeper <br />
            </p>
          </div>

          <!-- Input Fields Preferred Position -->
          <div class="login-input">

            <!-- Use type hidden so when user not check it it no error -->
            <input id="forward" type="hidden" name="forward" value="">
            <input id="forward" type="checkbox" name="forward" value="Forward"> <br />

            <input id="midfielder" type="hidden" name="midfielder" value="">
            <input id="midfielder" type="checkbox" name="midfielder" value="Midfielder"> <br />

            <input id="defender" type="hidden" name="defender" value="">
            <input id="defender" type="checkbox" name="defender" value="Defender"> <br />

            <input id="goalkeeper" type="hidden" name="goalkeeper" value="">
            <input id="goalkeeper" type="checkbox" name="goalkeeper" value="Goalkeeper"> <br />

          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Health Information</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Preferred Position -->
          <div class="login-caption">
            <p>
              Medical Conditions if any: <br />
            </p>
          </div>

          <!-- Input Fields Preferred Position -->
          <div class="login-input">
            <input type="textbox" name="medicalCondition" class="login-text">
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Emergency Contact Details</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Preferred Position -->
          <div class="login-caption">
            <p>
              Full Name: <br />
              Relationship: <br />
              Contact Number: <br />
            </p>
          </div>

          <!-- Input Fields Preferred Position -->
          <div class="login-input">
            <input type="textbox" name="emergencyName" class="login-text" required>
            <br />

            <input type="textbox" name="emergencyRelationship" class="login-text" required>
            <br />

            <input type="textbox" name="emergencyContact" class="login-text" required>
            <br />

          </div>

          <!-- Subheading -->
          <div class="subhead">
            <h2>Security Questions</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Security Questions -->
          <div class="login-caption">
            <p>
              What is your favorite color? <br />
              What is the name of your first pet? <br />
              What is your course?  <br />
            </p>
          </div>

          <!-- Input Fields Security Questions -->
          <div class="login-input">
            <input class="login-text" name="color" type="textbox" required>
            <br />

            <input class="login-text" name="pet" type="textbox" required>
            <br />

            <input class="login-text" name="course" type="textbox" required>
            <br />
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Log in Credentials</h2>
          </div>
          <hr class="login" />

          <!-- Input Fields Caption Login Credentials -->
          <div class="login-caption">
            <p>
              Username: <br />
              Password: <br />
              Confirm Password: <br />
            </p>
          </div>

          <!-- Input Fields Login Credentials -->
          <div class="login-input">
            <input class="login-text" name="username" type="textbox" required>
            <br />

            <input class="login-text" name="password" type="password" required>
            <br />

            <input class="login-text" name="confirmPassword" type="password" required>
            <br />
          </div>

          <hr class="login" />

          <div class="login-form submit">
            &nbsp;
          </div>
          
          <input type="button" value="Lock in" name="submit" class="submit" onclick="verifySignUp(this.form);">

        </form>

      </div>
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>
    <script src="src/app.js"></script>
  </body>
</html>







