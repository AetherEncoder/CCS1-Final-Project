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
        <div class="logo-sidebar"></div>
        <div class="logo-container">
          <img src="src/images/bluelock_logo.png" class="bluelock-logo" />
        </div>
        <div class="logo-sidebar"></div>

        <div class="signup-main-heading">
          <h1 class="center-text">SIGN UP FOR BLUE LOCK</h1>
        </div>

        <hr class="login" />

        <form class="login" name="myform" method="POST" action="signupConfirmation.php">

          <!-- Subheading -->
          <div class="subheading">
            <h2>Personal Information</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>
                First Name: <br />
              </p>  
            </div>

            <div class="login-input">
              <input class="login-text" name="firstName" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>
                Last Name: <br />
              </p>  
            </div>

            <div class="login-input">
              <input class="login-text" name="lastName" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>
                Middle Name: <br />
              </p>  
            </div>

            <div class="login-input">
              <input class="login-text" name="middleName" type="textbox">
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>
                Birth Date: <br />
              </p>  
            </div>

            <div class="login-input">
              <input class="login-text" name="birthDate" type="date" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>
            Sex   : <br />
              </p>  
            </div>

            <div class="login-input">
              <input name="sex" type="radio" value="Male" required>
              <span class="login-paragraph">Male</span>
              <input name="sex" type="radio" value="Female" reqruied>
              <span class="login-paragraph">Female</span>
              <br />
            </div>
          </div>

          <div class="subheading">
            <h2>Contact Information</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>Email Address: <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="email" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Phone Number: <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="phoneNumber" type="textbox" required>
              <br />
            </div>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Preferred Position</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>Forward<br /></p>
            </div>
            <div class="login-input">
              <input id="forward" type="hidden" name="forward" value="">
              <input id="forward" type="checkbox" name="forward" value="Forward">
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Midfielder<br /></p>
            </div>
            <div class="login-input">
              <input id="midfielder" type="hidden" name="midfielder" value="">
              <input id="midfielder" type="checkbox" name="midfielder" value="Midfielder">
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Defender<br /></p>
            </div>
            <div class="login-input">
              <input id="defender" type="hidden" name="defender" value="">
              <input id="defender" type="checkbox" name="defender" value="Defender">
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Goalkeeper<br /></p>
            </div>
            <div class="login-input">
              <input id="goalkeeper" type="hidden" name="goalkeeper" value="">
              <input id="goalkeeper" type="checkbox" name="goalkeeper" value="Goalkeeper">
              <br />
            </div>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Health Information</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>Medical Conditions if any: <br /></p>
            </div>
            <div class="login-input">
              <input type="textbox" name="medicalCondition" class="login-text">
              <br />
            </div>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Emergency Contact Details</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>Full Name: <br /></p>
            </div>
            <div class="login-input">
              <input type="textbox" name="emergencyName" class="login-text" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Relationship: <br /></p>
            </div>
            <div class="login-input">
              <input type="textbox" name="emergencyRelationship" class="login-text" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Contact Number: <br /></p>
            </div>
            <div class="login-input">
              <input type="textbox" name="emergencyContact" class="login-text" required>
              <br />
            </div>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Security Questions</h2>
          </div>
          <hr class="login" />

          <div class="login-row">
            <div class="login-caption">
              <p>What is your favorite color? <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="color" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>What is the name of your first pet? <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="pet" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>What is your course? <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="course" type="textbox" required>
              <br />
            </div>
          </div>

          <!-- Subheading -->
          <div class="subheading">
            <h2>Log in Credentials</h2>
          </div>
          <hr class="login" />

          <!-- Row of input -->
          <div class="login-row">
            <div class="login-caption">
              <p>Username: <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="username" type="textbox" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Password: <br /></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="password" type="password" required>
              <br />
            </div>
          </div>

          <div class="login-row">
            <div class="login-caption">
              <p>Confirm Password: <br /></p>
              <p id="error" class="error"></p>
            </div>
            <div class="login-input">
              <input class="login-text" name="confirmPassword" type="password" required>
              <br />
            </div>
          </div>

          <hr class="login" />

          <div class="login-form submit">
            &nbsp;
          </div>
          
          <input type="submit" value="Lock in" name="submit" class="submit" onclick="verifySignUp(this.form);">

        </form>

      </div>
    </div>

    <!-- Sidebar to center the main div -->
    <div class="side-bar"></div>
    <script src="src/app.js"></script>
  </body>
</html>







