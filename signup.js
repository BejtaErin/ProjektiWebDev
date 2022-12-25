function signUp() {
    // Get the values from the form
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
  
    // Validate the form input
    if (username == "") {
      alert("Please enter a username");
      return;
    }
    if (email == "") {
      alert("Please enter an email");
      return;
    }
    if (password == "") {
      alert("Please enter a password");
      return;
    }
    if (confirmPassword == "") {
      alert("Please confirm your password");
      return;
    }
    if (password != confirmPassword) {
      alert("Passwords do not match");
      return;
    }
}  