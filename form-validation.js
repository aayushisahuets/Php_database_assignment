jQuery(document).ready(function() {
    jQuery('#registration').validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
          "fname": {required:true},
          "uname": {required:true},
          "pwd": {
            required: true,
            minlength: 6
          },
          "email": {
            required: true,
            email: true
          }
    },
    // Specify validation error messages
    messages: {
          "fname": "Please enter firstname",
          "uname": "Please enter username",
          "pwd": {
            required: "Please provide a password",
            minlength: "Your password must be at least 6 characters long"
          },
          "email": "Please enter a valid email address"
    }

    });
});
