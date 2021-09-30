// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='contact']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        fname: "required",
        lname: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        mobile: {
          required: true,
          minlength: 10,
          number: true
        }
      },
      // Specify validation error messages
      messages: {
        firstname: {
            required: "Please enter your firstname",
        },
        lastname: {
            required: "Please enter your lastname",
        },
        mobile: {
          required: "Please provide a mobile number",
          minlength: "Your number must be 10 characters long",
          number: "Only numbers allowed"
        },
        email: "Please enter a valid email address"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });