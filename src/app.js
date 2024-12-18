function verifySignUp(form){
  form.submit.type = "button";

  var password = form.password.value;
  var confirmPassword = form.confirmPassword.value;

  var samePassword = false;
  var upperCase = false;
  var numeric = false;
  var startUpperCase = false;

  var usernameLength = form.username.value.length;
  var passwordLength = password.length;
  var confirmPasswordLength = confirmPassword.length;

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
        if(j == 0){
          startUpperCase = true;
        }
      }
    }
  }

  

  if(!startUpperCase){
    document.getElementById('error').innerHTML = "Password must start with an uppercase letter";
  }

  if(!upperCase){
    document.getElementById('error').innerHTML = "Password must contain an uppercase letter";
  }

  for(var i = 0; i < numbers.length; i++){
    for(var j = 0; j < password.length; j++){
      if(password[j] == numbers[i]){
        numeric = true;
      }
    }
  }

  if(!numeric){
    document.getElementById('error').innerHTML = "Password must contain a number";
  }

  if(usernameLength != 8){
    document.getElementById('error').innerHTML = "Username must be 8 characters long";
  }

  if(passwordLength != 8){
    document.getElementById('error').innerHTML = "Password must be 8 characters long";
  }

  if(password == ""){
    document.getElementById('error').innerHTML = "Password cannot be empty";
  }

  if(samePassword && upperCase && numeric && startUpperCase && usernameLength == 8 && passwordLength == 8 && confirmPasswordLength == 8){
    document.getElementById('error').innerHTML = "";
    form.submit.type = "submit";
  }
}

var attempts = 3;
function login(form){
  

  form.submit.type = "button";

  var username = form.username.value;
  var password = form.password.value;

  var loginUsername = form.loginUsername.value;
  var loginPassword = form.loginPassword.value;
  
  if(username == loginUsername && password == loginPassword){
    form.submit.type = "submit";
  }
  else if(attempts == 0){
    document.getElementById('error').innerHTML = "You have no attempts left";
    form.loginUsername.disabled = true;
    form.loginPassword.disabled = true;
    form.submit.disabled = true;
  }
  else{
    attempts--;
    document.getElementById('error').innerHTML = "Invalid username or password you have " + attempts + " attempts left";
  }
}

function travel(form, destination){
  document.getElementById(destination).type = 'submit';

  form.action = destination+".php"; 
}


