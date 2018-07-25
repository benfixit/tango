$().ready(function() {

    // validate regForm form on keyup and submit
    $("#regForm").validate({
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        },
        username: {
          required: true,
          minlength: 2
        },
        pass: {
          required: true,
          minlength: 5
        },
        retyped_password: {
          required: true,
          minlength: 5,
          equalTo: "#userInputPassword1"
        }
      },
      messages: {
        name: "Please enter your full name",
        email: "Please enter a valid email address",
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        pass: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        retyped_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        }
      },

      submitHandler: function(form) {
  	    form.submit();
  	  }
    });

    // validate loginForm form on keyup and submit
    $("#loginForm").validate({
      rules: {
        login: "required",
        password: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        login: "Please enter your username or email address",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        }
      },
      
      submitHandler: function(form) {
        form.submit();
      }
    });

    // validate signup form on keyup and submit
    $("#resetForm").validate({
      rules: {
        identification: "required"
      },
      messages: {
        identification: "Please enter your username or email address"
      },
      
      submitHandler: function(form) {
        form.submit();
      }
    });

  });