$(document).ready(function() {
  $("#basic-form").validate({
    rules: {
      fname : {
        required: true,
        minlength: 2
      },
      lname: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
    messages : {
      fname: {
        minlength: "Enter your name..."
      },
      age: {
        minlength: "Enter yout surname..."
      },
      email: {
        email: "Format must be: abc@domain.tld"
      }
    }
    }
  });
})