<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="css/bigChungus.css" />
</head>
<body>
    <header>
        <img class="logo" src="img/logo.png" alt="blank" width="8%" height="8%"/>
        <nav>
            <ul class="nav__links">
                <li><a href="EmployeeSchedule.php">Schedule</a></li>
                <li><a href="avalability.php">Availability</a></li>
                <li><a href="ContactManager.php">Contact Manager</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
        <button><a class="cta" href="../Login/login.php">Login</a></button>
    </header>

    <div class ="contentContainer">
        <div class ="viewBLORP">
            <div class = "title">
                <h1>Profile</h1>
            </div>
            <!-- based on stuff from here: https://www.w3schools.com/howto/howto_css_profile_card.asp -->
            <div class="profile" style="max-width: 400px;">
                <div style="float:left; margin-right: 20px;">
                <img src="img/pfp.png">
                <h1>{$wholeName}</h1>
                </div>
                <div style="float:right;">
                <p>DoB: 4/20/1969</p>
                <p>123 Stinky Street</p>
                <p>1-800-420-6969</p>
                <button style="background-color: #E03E4C; margin: 10px"><a class="cta" href="editProfile.php" style="color: black">Edit</a></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <script src="../../js/moment.js"></script>
    <script src="../../js/SM.js" type="module"></script>  
    <script> function show(type,date,location){
        console.log(type)
        $('#myModal').modal('show')

    }
    </script>   -->
</body>
</html>