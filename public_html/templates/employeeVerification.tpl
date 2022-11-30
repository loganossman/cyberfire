<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css"/>
</head>
<body>     
    <div class ="contentContainerGORGON">
        <div class ="viewGORGON">
            <div class="header">
                <img class="logo" src="img/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "containerGORGON">
                <form action="empVerForm.php" method="post">
                    <div class =" txt_feild">
                        <label>First Name</label>
                        <input type="firstName" id="firstName" name="firstName" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Last Name</label>
                        <input type="lastName" id="lastName" name="lastName" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Date of Birth</label>
                        <input type="date" id="DOB" name="DOB" class="form-control" required>
                    </div>
                    <div class =" txt_feild">
                        <label>Enter Verification Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="buttonPadding">
                        <input class="button" type="submit" id="submit" name="submit" value="Verify">
                    </div> 
                </form>
            </div>
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