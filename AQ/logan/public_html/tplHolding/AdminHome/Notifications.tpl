<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    
    <link rel="stylesheet" href="../../css/2general.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <header>
        <img class="logo" src="../../images/logo.png" alt="blank" width="8%" height="8%"/>
        <nav>
            <ul class="nav__links">
                <li><a href="houston.php">Schedule Manager</a></li>
                <li><a href="Notifications.php">Notifications</a></li>
            </ul>
        </nav>
        <a class="cta" href="../Login/login.php"><button>Logout</button></a>
    </header>
    <div class ="contentContainer">
        <div class ="view">
            <p style="font-size:36px; font-style: normal; height:20%; padding: 1% 0% 0% 2%">Notifications</p>
            <div style="height: 80%">
                <!--Inline style used to override row gutter-->
                <div class="paddingMeBoyMeBob">
                    <button type="button" class="row messageCont d-flex align-items-center" style="--bs-gutter-x: 0" onclick="open1()">
                        <div class="col-2 d-flex align-items-center"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"></img>Jim(Employee)</div>
                        <div class="col-6"><p class="message"><img src="../../images/greenCircle-16.png" alt="green circle" class="profileImg">(jim):Hey can i have the day off tommorow my car broke...</p></div>
                        <div class="col-2"><p style="float:right">9:32 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Today</p></div>
                    </button>
                </div>
                <div class="paddingMeBoyMeBob middleMessage">
                    <button class="messageCont row d-flex align-items-center" style="--bs-gutter-x: 0" onclick="open2()">
                        <div class="col-2 d-flex align-items-center"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"></img>Sarrah(Employee)</div>
                        <div class="col-6"><p class="message"><img src="../../images/circle-16.png" alt="gray circle" class="profileImg">(Sarrah):When are we getting paychecks. I really need .....</p></div>
                        <div class="col-2"><p style="float:right">6:32 pm</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">Yesterday</p></div>
                    </button>
                </div>
                <div class="paddingMeBoyMeBob">
                    <button class="messageCont row d-flex align-items-center" style="--bs-gutter-x: 0" onclick="open3()">
                        <div class="col-2 d-flex align-items-center"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"></img>John(Employee)</div>
                        <div class="col-6"><p class="message"><img src="../../images/circle-16.png" alt="gray circle" class="profileImg">(John):Can you give me a diffrent location other than Pine forest...</p></div>
                        <div class="col-2"><p style="float:right">9:50 am</p></div>
                        <div class="col-2"><p style="float:left; padding-left: 15px">May 2, 2022</p></div>
                    </button>
                </div>
            </div>

        </div>
        <button type="button" class="button"  onclick="open1()">

        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 300%; width: 60%; margin-top: 5%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"> Jim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row d-flex align-items-center" style="flex-direction: row">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">Hey we need some to work thursday due to a Joe dropping a shift can you take it?</p>
                            </div>
                            <div class="row d-flex align-items-center" style="flex-direction: row-reverse; margin-top: 3%; margin-bottom: 3%; ">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageMine">Yeah no problem this is at Winchester right?</p>
                            </div>
                            <div class="row d-flex align-items-center">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
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
        <div class="modal fade" id="exampleModalTwo" tabindex="-1" aria-labelledby="exampleModalLabelTwo" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 300%; width: 60%; margin-top: 5%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelTwo"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"> Sarrah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row d-flex align-items-center" style="flex-direction: row">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">When are we getting paychecks. I really need to know.</p>
                            </div>
                            <div class="row d-flex align-items-center" style="flex-direction: row-reverse; margin-top: 3%; margin-bottom: 3%; ">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageMine">You will be getting your check tomorrow. Sorry it took so long.</p>
                            </div>
                            <div class="row d-flex align-items-center">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">Ok. I really want to buy the Xbox Series X for my son. He ate our cat. Please help.</p>
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
        <div class="modal fade" id="exampleModalThree" tabindex="-1" aria-labelledby="exampleModalLabelThree" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 300%; width: 60%; margin-top: 5%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelThree"><img src="../../images/circle-32.png" alt="gray circle" class="profileImg"> Sarrah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row d-flex align-items-center" style="flex-direction: row">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">Can you give me a location other than pine forest? There is no forest. Only koalas.</p>
                            </div>
                            <div class="row d-flex align-items-center" style="flex-direction: row-reverse; margin-top: 3%; margin-bottom: 3%; ">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageMine">Must have changed since I was last there. How does the underworld sound instead of there?</p>
                            </div>
                            <div class="row d-flex align-items-center">
                                <img src="../../images/circle-32.png" alt="gray circle" class="profileImg col-1">
                                <p class="col-6 messageOther">As long as I cannot hear their mating call anymore. It is the most terrifying sound.</p>
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
        function open2(){
            $('#exampleModalTwo').modal('show');
            console.log("Running");
        }
        function open3(){
            $('#exampleModalThree').modal('show');
            console.log("Running");
        }
    </script>
</body>
</html>