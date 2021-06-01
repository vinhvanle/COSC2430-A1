

// Defining a function to display error message
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
  // Retrieving the values of form elements 
  var name = document.contactForm.name.value;
  var email = document.contactForm.email.value;
  var mobile = document.contactForm.mobile.value;
 
  var message = document.contactForm.message.value;
  
// Defining error variables with a default value
  var nameErr = emailErr = mobileErr  = messErr= true;
  
  // Validate name
  if(name == "") {
      printError("nameErr", "Please enter your name");
  } else {
     // var regex = /^[a-zA-Z\s]+$/;                
      if(name.length <= 3) {
          printError("nameErr", "Please enter a valid name");
      } else {
          printError("nameErr", "");
          nameErr = false;
      }
  }
  
  // Validate email address
  if(email == "") {
      printError("emailErr", "Please enter your email address");
  } else {
      // Regular expression for basic email validation
      var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(regex.test(email) === false) {
          printError("emailErr", "Please enter a valid email address");
      } else{
          printError("emailErr", "");
          emailErr = false;
      }
  }
  
  // Validate mobile number
  if(mobile == "") {
      printError("mobileErr", "Please enter your mobile number");
  } else {
      var regex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      if(regex.test(mobile) === false) {
          printError("mobileErr", "Please enter a valid 9 digit mobile number");
      } else{
          printError("mobileErr", "");
          mobileErr = false;
      }
  }
  
  
  //validate mess
  if(message == "") {
    printError("messErr", "Please type your message");
} else {
                  
    if(message.length < 50 || message.length > 500) {
        printError("messErr", "Please type valid message");
    } else {
        printError("messErr", "");
        messErr = false;
    }
}
  
  // Prevent the form from being submitted if there are any errors
  if((nameErr || emailErr || mobileErr || messErr) == true) {
     return false;
  } else {
      // Creating a string from input data for preview
      var dataPreview = "You've entered the following details: \n" +
                        "Full Name: " + name + "\n" +
                        "Email Address: " + email + "\n" +
                        "Mobile Number: " + mobile + "\n" +
                        "Message: " + message + "\n";
      
      // Display input data in a dialog box before submitting the form
      alert(dataPreview);
  }
};