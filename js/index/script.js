// Form Validation
$("#signUpForm")
	.form({
	    on: 'blur',
	    inline: true,
	    fields: {
	      usersignup: {
	        identifier : 'userSignUp',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please enter a username!'
	          }
	        ]
	      },
	      userpassword: {
	      	identifier : 'passwordSignUp',
	      	rules: [
	      	 {
	      	 	type   : 'empty',
	      	 	prompt : 'Please enter a password!'
	      	 },
	      	 {
	      	 	type   : 'minLength[6]',
	      	 	prompt : 'Your password must be at least 6 characters!'
	      	 }
	      	]
	      },
	      match: {
	      	identifier : 'confirmPassword',
	      	rules: [
	      	 {
	      	 	type   : 'match[passwordSignUp]',
	      	 	prompt : 'Passwords don\'t match!'
	      	 }
	      	]
	      }
	    }
	});

$("#loginForm")
	.form({
	    on: 'blur',
	    inline: true,
	    fields: {
	      userlogin: {
	        identifier : 'userLogin',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please enter a username!'
	          }
	        ]
	      },
	      userpassword: {
	      	identifier : 'passwordLogin',
	      	rules: [
	      	 {
	      	 	type	: 'empty',
	      	 	prompt	: 'Please enter a password!'
	      	 }
	      	]
	      }
	    }
	});

// For menu tabs
$(".menu .item").tab();


	