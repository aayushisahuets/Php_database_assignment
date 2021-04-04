
   // Wait for the DOM to be ready
jQuery(document).ready(function() {
// jQuery(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  // jQuery("#registration").validate({
    jQuery('.submit').click(function(){

    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
          fname: "required",
          uname: "required",
          pwd: {
            required: true,
            minlength: 6
          },
          email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          }
    }


// $(document).ready(function() {
// $("#basic-form").validate({
// rules: {
// name : {
// required: true,
// minlength: 3
// },
// age: {
// required: true,
// number: true,
// min: 18
// },
// email: {
// required: true,
// email: true
// },
// weight: {
// required: {
// depends: function(elem) {
// return $("#age").val() > 50
// }
// },
// number: true,
// min: 0
// }
// }
// });
// });
//     messages : {
// name: {
// minlength: "Name should be at least 3 characters"
// },
// age: {
// required: "Please enter your age",
// number: "Please enter your age as a numerical value",
// min: "You must be at least 18 years old"
// },
// email: {
// email: "The email should be in the format: abc@domain.tld"
// },
// weight: {
// required: "People with age over 50 have to enter their weight",
// number: "Please enter your weight as a numerical value"
// }
// }
    // Specify validation error messages
    messages: {
          fname: "Please enter your firstname",
          uname: "Please enter your username",
          pwd: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          email: "Please enter a valid email address"
    }
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    // submitHandler: function(form) {
    //   form.submit();
    // }
  });
// });
});
