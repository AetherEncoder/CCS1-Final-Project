<!DOCTYPE html>
<html>
	<head>
	  <title>CCS Website - Developer Information</title>
	  <!-- Include icon and stylesheet -->
	  <link id="icon" rel="icon" type="image/x-icon" href="images/CCS_logo.png">
	  <link id="theme" rel="stylesheet" type="text/css" href="src/egoist.css">

	  <?php
	  	// Retrieve user information from previous form submission
	  	
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
	  <!-- Displays Student Face and Banner -->
	  <div class="myface-div">
	    <div class="myface">
	      <div class="myface-container">
	        <img id="myface" src="src/images/ong_player_card.png" alt="My face" class="myface">
	      </div>
	    </div>
	  </div>

	  <!-- Main Content of the webpage -->
	  <div class="content">
	    <div class="main-content">
	      <h1 class="main-heading">Developer Information</h1>
	      <!-- Navigation bar -->
	      <div class="main-nav-bar">
	        <div><a class="main-nav-link" href="#Personal">Personal Information</a></div>
	        <div class="nav-space">|</div>
	        <div><a class="main-nav-link" href="#Educational">Educational Background</a></div>
	        <div class="nav-space">|</div>
	        <div><a class="main-nav-link" href="#Social">Social Media</a></div>
	        <div class="nav-space">|</div>
	        <div><a class="main-nav-link" href="#Parent">Parent's Information</a></div>
	        <div class="nav-space">|</div>
	        <div><a class="main-nav-link" href="#Hobbies">Hobbies, Talents, Skills, and Interests</a></div>
	      </div>
	      <hr class="main-hr" />

	      <!-- Sections with informational content -->
	      <a class="anchor" name="Personal">&nbsp;</a>
	      <h2 class="main-subheading">Personal Information</h2>
	      <hr class="main-hr" />

	      <div class="column1">
	        <p class="main-paragraph">
	          Name<br /><br />
	          Mobile No.<br /><br />
	          Gender<br /><br />
	          Marital Status<br /><br />
	          Nationality<br /><br />
	          Address<br /><br />
	        </p>
	      </div>
	      <div class="column2">
	        <p class="main-paragraph">
	          : Kristian Daniel D. Ong<br /><br />
	          : 0936-812-8853<br /><br />
	          : Male<br /><br />
	          : Single<br /><br />
	          : Filipino<br /><br />
	          : Daro, Dumaguete<br /><br />
	        </p>
	      </div>
	      <div class="column1">
	        <p class="main-paragraph">
	          Father's Name<br /><br />
	          Email Address<br /><br />
	          Date of Birth<br /><br />
	          Religion<br /><br />
	          Languages<br /><br />
	        </p>
	      </div>
	      <div class="column2">
	        <p class="main-paragraph">
	          : Oliver E. Ong<br /><br />
	          : <a class="link" href="mailto:kristiandong@su.edu.ph" target="_blank">kristiandong@su.edu.ph</a> <br /><br />
	          : March 23, 2005<br /><br />
	          : Roman Catholic<br /><br />
	          : English, Filipino, Cebuano, Chavacano<br /><br />
	        </p>
	      </div>
	      <a class="anchor" name="Educational">&nbsp;</a>
	      <h2 class="main-subheading">Educational Background</h2>
	      <hr class="main-hr" />
	      <div class="column1">
	        <p class="main-paragraph">
	          Elementary<br /><br />
	          Junior High School<br /><br />
	          Senior High School<br /><br />
	          College<br /><br />
	        </p>
	      </div>
	      <div class="column2">
	        <p class="main-paragraph">
	          : Zamboanga Chong Hua Elementary School<br /><br />
	          : Claret School of Zamboanga City - Junior High School<br /><br />
	          : Silliman University - Senior High School<br /><br />
	          : Silliman University - College of Computer Studies<br /><br />
	        </p>
	      </div>
	      <div class="column1">
	        <p class="main-paragraph">
	          Year Graduated<br /><br />
	          Year Graduated<br /><br />
	          Year Graduated<br /><br />
	          Course<br /><br />
	        </p>
	      </div>
	      <div class="column2">
	        <p class="main-paragraph">
	          : 2017<br /><br />
	          : 2022<br /><br />
	          : 2024<br /><br />
	          : Bachelor of Science in Computer Science<br /><br />
	        </p>
	      </div>
	      <a class="anchor" name="Social">&nbsp;</a>
	      <h2 class="main-subheading">Social Media Accounts</h2>
	      <hr class="main-hr" />
	      <div class="column1">
	        <p class="main-paragraph">
	          Facebook<br /><br />
	          Instagram<br /><br />
	        </p>
	      </div>
	      <div class="column2">
	        <p class="main-paragraph">
	          : <a href="https://www.facebook.com/kristian.ong.39/" class="link" target="_blank">Kristian Ong</a><br /><br />
	          : <a href="https://www.instagram.com/ong_kristian/" class="link" target="_blank">ong_kristian</a><br /><br />

	        </p>
	      </div>
	      <a class="anchor" name="Parent">&nbsp;</a>
	      <h2 class="main-subheading">Parent's Information</h2>
	      <hr class="main-hr" />
	      <div class="column-half">Mother</div>
	      <div class="column-half">Father</div>
	      <div class="column-quarter">
	        <p class="main-paragraph">
	          Name <br /><br />
	          Age <br /><br />
	          Birthday <br /><br />
	          Educational Background <br /><br />
	          Occupation <br /><br />
	          Marital Status <br /><br />
	        </p>
	      </div>
	      <div class="column-quarter">
	        <p class="main-paragraph">
	          : Wilma D. Ong <br /><br />
	          : 51 <br /><br />
	          : March 3, 1973 <br /><br />
	          : College Graduate <br /><br />
	          : Retired <br /><br />
	          : Married <br /><br />
	        </p>
	      </div>
	      <div class="column-quarter">
	        <p class="main-paragraph">
	          Name <br /><br />
	          Age <br /><br />
	          Birthday <br /><br />
	          Educational Background <br /><br />
	          Occupation <br /><br />
	          Marital Status <br /><br />
	        </p>
	      </div>
	      <div class="column-quarter">
	        <p class="main-paragraph">
	          : Oliver E. Ong <br /><br />
	          : 50 <br /><br />
	          : June 7, 1974 <br /><br />
	          : College Graduate <br /><br />
	          : Seaman <br /><br />
	          : Married <br /><br />
	        </p>
	      </div>
	
	      <a class="anchor" name="Hobbies">&nbsp;</a>
	      <h2 class="main-subheading">Hobbies Talents Skills and Interests</h2>
	      <hr class="main-hr" />

	      <div class="column-third">
	        <p class="main-paragraph">
	          <span class="bold">Hobbies</span><br /><br />
	          Reading Light Novels <br /><br />
	          Reading Mangas <br /><br />
	          Reading Manhwas <br /><br />
	          Watching Animes <br /><br />
	          Basketball <br /><br />
	          Typing <br /><br />
	          Workout<br /><br />
	        </p>
	      </div>

	      <div class="column-third">
	        <p class="main-paragraph">
	          <span class="bold">Tallent & Skills</span><br /><br />
	          100+ Words Per Minute Typing Speed <br /><br />
	          Basketball <br /><br /> 
	          Python Programming <br /><br />
	          Pygame <br /><br />
	        </p>
	      </div>

	      <div class="column-third">
	        <p class="main-paragraph">
	          <span class="bold">Interests</span><br /><br />
	          Web Development <br /><br />
	          Learning to Play the Piano <br /><br />
	          Learning more about Music <br /><br />
	          Learning Chemistry <br /><br />
	          Learning Math <br /><br />
	          Soccer <br /><br />
	        </p>
	      </div>

	    </div>
	  </div>

	  <!-- Button to go back to home page -->
	  <div class="back-to-top">
	    <hr class="back-to-top" />
	    <form name="myform" class="login" method="POST" action="homepage.php">
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

	      <input type="submit" value="Go Back" class="go-back-home" name="submit">
	    </form>
	    <hr class="back-to-top" />
	  </div>

	  <!-- Footer -->
	  <div class="copyright">
	    <hr class="copyright" />
	    <p class="copyright"> Copyright (2024) &copy; </p>
	    <hr class="copyright" />
	  </div>

	  <!-- Linking JS file -->
	  <script src="src/scripts.js"></script>
	</body>
</html>









