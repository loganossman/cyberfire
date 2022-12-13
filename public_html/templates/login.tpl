<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css" />
</head>
<body>     
    <div class ="contentContainerGORGON">
        <div class ="viewGORGON">
            <div class="header">
                <img class="logo" src="img/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "containerGORGON">
                <form action="loginForm.php" method="post">
                    <div class =" txt_feild">
                        <label>Email*</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Password*</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        {if isset($error)}
                            {$error}
                        {/if}
                    </div>
                    <div class="forgot">Admin static login <a href="houston.php" style="color: rgba(224,62,76,.69)">Click here!</a></div>
                    
                    <input class="button" type="submit" id="submit" name="submit" value="Login">
                </form>
                <div class="New">
                    <a href="employeeVerification.php" style="text-decoration: none;">New Employee <span style="color: rgba(224,62,76,.69)">Click here!</span></a>
                </div>
                <div class="New">
                    <a href="emailReEntry.php" style="text-decoration: none;">Forgot Password <span style="color: rgba(224,62,76,.69)">Click here!</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>If you are have trouble logging in please try resetting password. If that doesnt work please email cisdummy2022@gmail.com or contact your Manager</p>
    </div>
</body>
</html>