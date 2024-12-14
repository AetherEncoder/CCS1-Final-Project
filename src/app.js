function verifySignUp(form){
  var password = form.password.value;
  var confirmPassword = form.confirmPassword.value;

  // Check if the passwords match
  if(password == confirmPassword){
    form.submit.type = "submit";
  }
  else{
    alert("Passwords do not match.");
  }
}


