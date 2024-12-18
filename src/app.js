// Checks if username and password are valid
function verifySignUp(form){
  // Prevents the form from submitting
  form.submit.type = "button";

  // Get the values of the form
  var password = form.password.value;
  var confirmPassword = form.confirmPassword.value;

  // Variables to check if the password is valid
  var samePassword = false;
  var upperCase = false;
  var numeric = false;
  var startUpperCase = false;

  // Get the length of the username, password, and confirm password
  var usernameLength = form.username.value.length;
  var passwordLength = password.length;
  var confirmPasswordLength = confirmPassword.length;

  // Strings to check if the password has an uppercase letter or a number
  var uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  var numbers = "0123456789";

  // Check if the passwords match
  if(password == confirmPassword){
    samePassword = true;
  }
  else{
    document.getElementById('error').innerHTML = "Passwords do not match";
  }

  // Check if the password has an uppercase letter
  for(var i = 0; i < uppercase.length; i++){
    for(var j = 0; j < password.length; j++){
      if(password[j] == uppercase[i]){
        upperCase = true;

        // Check if the uppercase letter is the first letter
        if(j == 0){
          startUpperCase = true;
        }
      }
    }
  }

  
  // Displays error if the password does not start with an uppercase letter
  if(!startUpperCase){
    document.getElementById('error').innerHTML = "Password must start with an uppercase letter";
  }

  // Displays error if the password does not contain an uppercase letter
  if(!upperCase){
    document.getElementById('error').innerHTML = "Password must contain an uppercase letter";
  }

  // Check if the password has a number
  for(var i = 0; i < numbers.length; i++){
    for(var j = 0; j < password.length; j++){
      if(password[j] == numbers[i]){
        numeric = true;
      }
    }
  }


  // Displays error if the password does not contain a number
  if(!numeric){
    document.getElementById('error').innerHTML = "Password must contain a number";
  }

  // Displays error if the username is not 8 characters long
  if(usernameLength != 8){
    document.getElementById('error').innerHTML = "Username must be 8 characters long";
  }

  // Displays error if the password is not 8 characters long
  if(passwordLength != 8){
    document.getElementById('error').innerHTML = "Password must be 8 characters long";
  }

  // Displays error if the username is empty
  if(password == ""){
    document.getElementById('error').innerHTML = "Password cannot be empty";
  } 

  // Allows the form to submit if the username and password are valid
  if(samePassword && upperCase && numeric && startUpperCase && usernameLength == 8 && passwordLength == 8 && confirmPasswordLength == 8){
    document.getElementById('error').innerHTML = "";
    form.submit.type = "submit";
  }
}

// Set the number of attempts to 3
var attempts = 3;

function login(form){
  // Prevents the form from submitting
  form.submit.type = "button";

  // Get the values of the form
  var username = form.username.value;
  var password = form.password.value;

  // Get the values of the login form
  var loginUsername = form.loginUsername.value;
  var loginPassword = form.loginPassword.value;
  
  // Check if the username and password are valid
  if(username == loginUsername && password == loginPassword){
    // Allow the form to submit
    form.submit.type = "submit";
  }

  // Display error if there are no more attempts
  else if(attempts == 0){
    // Disable the form
    document.getElementById('error').innerHTML = "You have no attempts left";
    form.loginUsername.disabled = true;
    form.loginPassword.disabled = true;
    form.submit.disabled = true;
  }

  // Display error if the username or password is invalid and decrement the number of attempts
  else{
    attempts--;
    document.getElementById('error').innerHTML = "Invalid username or password you have " + attempts + " attempts left";
  }
}

// Allows the user to travel to a different page
function travel(form, destination){
  document.getElementById(destination).type = 'submit';

  // Set the action of the form to the destination
  form.action = destination+".php"; 
}


