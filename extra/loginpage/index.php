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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container2">
        <div class="content-area">
            <div class="content-title">
                <h3>Login</h3>
            </div>
            <div class="content-input-field">
			    <form action="php/validate.php" method="post">
			    	<label for="username">
			    		<i class="fas fa-user"></i>
			    	</label>
			    	<input type="text" name="username" placeholder="Username" id="username" required>
                    <br/><br/>
			    	<label for="password">
			    		<i class="fas fa-lock"></i>
			    	</label>
			    	<input type="password" name="password" placeholder="Password" id="password" required>
                    <br/><br/>
                    <div class="content-button">
                        <input type="submit" name="login" value="Login">
                    </div>
			    </form>
		    </div>
                <div class="content-footer">
                    <br/>
                    new user? <a href="../registerpage/index.php">register here</a>
                    <br/>   
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>



