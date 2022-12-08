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
            <form class = "containerGORGON" action="loginToPasscode.php" method="post">
                <div class =" txt_feild">
                    <label>Email*</label>
                    <input type="email" name="email" required>
                </div>
                <div class =" txt_feild">
                    <label>Password*</label>
                    <input type="password" required>
                </div>
                <div class="forgot">Admin static login <a href="houston.php" style="color: rgba(224,62,76,.69)">Click here!</a></div>
                
                <input class="button" onclick="window.location.href='EmployeeSchedule.php';" type="submit" value="Login"> </input>
                
                <div class="New">
                    <a href="employeeVerification.php" style="text-decoration: none;">New Employee <span style="color: rgba(224,62,76,.69)">Click here!</span></a>
                </div>

                <input class="button" type="submit" id="submit" name="submit" value="New Password">
            </form>
            <div class = "footer">
                <p>
                    If you are have trouble logging in please try resetting password.
                    If that doesnt work please email cisdummy2022@gmail.com or contact your Manager
                </p>
            </div>
        </div>
    </div>
</body>
</html>