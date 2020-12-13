$(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        firstname : {
          required: true,
          minlength: 2
        },
        lastname: {
          required: true,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        },
      messages : {
        name: {
          minlength: "Enter your name..."
        },
        age: {
          minlength: "Enter yout surname..."
        },
        email: {
          email: "Format must be: abc@domain.tld"
        }
      }
    });
  });