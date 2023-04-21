<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container2">
        <div class="content-area">
            <div class="content-title">
                <h3>Register</h3>
            </div>
            <div class="content-input-field">
                <form action="php/register.php" method="POST">
                    <p>username:</p>
                    <input type="text" placeholder="username" name="name">
                        <br/><br/>
                    <p>email:</p>
                    <input type="email" placeholder="email" name="email">
                        <br/><br/>
                    <p>password:</p>
                    <input type="password" placeholder="password" name="password">
                        <br/><br/>
                    <div class="content-button">
                        <input type="submit" value="register" name="register">
                    </div>
                </form>
                <br/>
                <div class="content-footer">
                    <p>already acount? <a href="../loginpage/index.php">login</a></p>   
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>



