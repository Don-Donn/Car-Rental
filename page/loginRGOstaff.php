<!--require session-->

<!DOCTYPE html>
<html>
    <head>

        <title>Car Rental Login</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/loginAdmin.css">

    </head>
    <body>
        <header id="header">
            <div>
                <p id = "rgo">LAYCO CAR RENTAL SERVICES</p>
            </div>
            <div id = "location">
                <h4>Brgy. Dagatan, Lipa City</h4>
            </div>
        </header>
    <br>
    </br>

        <div id ="univ_text">
            <h2>LAYCO CAR RENTAL LOGIN</h2>
        </div>

        <div class="login_container">
        <form action=" " method="post">
            <p class="admin-login">Admin</p>

            <input type="email" id="email" name="email" placeholder="Username" required><br>

            <input type="password" id="password" name="password" placeholder="Password" required><br>

            <button type="submit" name="login_user" id="login-button">Login</button>

        </form>
        </div>

    </body>
</html>
