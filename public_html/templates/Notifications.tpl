<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bigChungus.css" />
    
</head>
<body>
    <header>
        <img class="logo" src="img/logo.png" alt="blank" width="8%" height="8%"/>
        <nav>
            <ul class="nav__links">
                <li><a href="houston.php">Schedule Manager</a></li>
                <li><a href="Notifications.php">Notifications</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
        <a class="cta" href="login.php"><button>Logout</button></a>
    </header>
    <div class ="contentContainer">
        <div class ="view">
            <p style="font-size:36px; font-style: normal; height:20%; padding: 1% 0% 0% 2%">Notifications</p>
            <div style="height: 80%">
                <!--Inline style used to override row gutter-->
                <div class="paddingMeBoyMeBob">
                    <button type="button" class="row messageCont d-flex align-items-center" style="--bs-gutter-x: 0" onclick="open1()">
                        <div class="col-2 d-flex align-items-center"><img src="img/circle-32.png" alt="gray circle" class="profileImg"></img>Jim(Employee)</div>
                        <div class="col-6"><p class="message"><img src="img/greenCircle-16.png" alt="green circle" class="profileImg">(jim):Hey can i have the day off tommorow my car broke...</p></div>
                        <div class="col-2"><p style="float:right">9:32 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Today</p></div>
                    </button>
                </div>
            </div>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 300%; width: 60%; margin-top: 5%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img src="img/circle-32.png" alt="gray circle" class="profileImg"> Jim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row d-flex align-items-center" style="flex-direction: row">
                                <img src="img/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">Hey we need some to work thursday due to a Joe dropping a shift can you take it?</p>
                            </div>
                            <div class="row d-flex align-items-center" style="flex-direction: row-reverse; margin-top: 3%; margin-bottom: 3%; ">
                                <img src="img/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageMine">Yeah no problem this is at Winchester right?</p>
                            </div>
                            <div class="row d-flex align-items-center">
                                <img src="img/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">Yes at Winchester from 9am-8pm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="align-items: center; border-top:none;">
                        <div style="height: 100%; width: 100%; border-style: solid; border-width: 1px;">
                            <p style="padding-left: 1%">text...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function open1(){
            $('#exampleModal').modal('show');
            console.log("Running");
        }
    </script>
</body>
</html>