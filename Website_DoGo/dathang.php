<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="DAC THUC" />

	<title>Untitled 3</title>
     <link rel="stylesheet"  type="text/css" href="style.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
</head>
 <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
            gender: "required",
            address: "required",
            email: {
                required: true,
                email: true
            },
            username: "required",
            password: {
                required: true,
                minlength: 5
            }
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
            gender: "Please specify your gender",
            address: "Please enter your address",
            email: "Please enter a valid email address",
            username: "Please enter a valid username",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
<body>

<?php



if(isset($_POST['submit'])) {
  // collect all input and trim to remove leading and trailing whitespaces
  $name = trim($_POST['name']);
  $gender = trim($_POST['gender']);
  $address = trim($_POST['address']);
  $email = trim($_POST['email']);
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $phone=trim($_POST['phone']);
  $output = '';
  $errors = array();
  
  // Validate the input
  if (strlen($name) == 0)
    array_push($errors, "Please enter your name");
    
 if (strlen($phone) == 0)
    array_push($errors, "Please enter your name");

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please specify a valid email address");

  
  if (strlen($address) == 0) 
    array_push($errors, "Please specify your address");
    
    
   
  // If no errors were found, proceed with storing the user input
  if (count($errors) == 0) {
    array_push($errors, "No Errors! Form Sumbitted Successfully!.. Thanks!");
  }
  
  //Prepare errors for output
  $output = '';
  foreach($errors as $val) {
    $output .= "<div class='output'>$val</div>";
  }
  
}

?>
<?php echo $output; ?>
</body>
</html>