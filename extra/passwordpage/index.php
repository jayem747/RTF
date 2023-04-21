<?php
    include('php/validate.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container2">
        <div class="content-area">
            <div class="content-title">
                <h3>Change password</h3>
            </div>
            <div class="content-input-field">
			    <form action="" method="post"> 

                    <label for="email">
                        <i class="fa-solid fa-envelope fa-sm"></i>
                    </label>
                    <input type="email" placeholder="Email" name="email">
                    <br/><br/>

			    	<label for="password">
			    		<i class="fas fa-lock"></i>
			    	</label>
			    	<input type="password" name="password" placeholder="Password" id="password" required>
                    <br/><br/>

			    	<label for="password-verify">
			    		<i class="fas fa-lock"></i>
			    	</label>
			    	<input type="password" name="password-verify" placeholder="Password-verify" id="password-verify" required>
                    <br/><br/>
                    <div class="content-button">
                        <input type="submit" value="submit" name="change">
                    </div>
			    </form>
                <?php

                    if (isset($_POST['change'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $password_verify = $_POST['password-verify'];
                        if ($password!= $password_verify) {
                            echo "<div class=\"alert alert-danger\">Passwords don't match</div>";
                        } else {
                            update_user_account($password, $email);
                        }
                    }

                ?>
		    </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
