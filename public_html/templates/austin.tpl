<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css" />-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../css/general.css" />
    <link rel="stylesheet" href="../../css/TempCalendar.css" />
    <link rel="stylesheet" href="../../css/AdminHome.css" /> -->
    <link rel="stylesheet" href="js/CalanderComponent/CalanderCSS/calander.css" />
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
        <div class ="viewBLORP">

            <div class="cities">
                <ul class="city__links">
                    <a href="houston.php"><li style="font-size:18px" ;>Houston</li></a>
                    <a href="austin.php"><li style="font-size:18px" ;><u>Austin</u></li></a>
                </ul>
            </div>

            <div class="sections">
                <ul class="section__links">
                  <a id="main" onclick="stateLocation('main')"><li style="font-size:14px";>main</li></a>
                  <a id="local" onclick="stateLocation('local')"><li style="font-size:14px";>local</li></a>
                </ul>
            </div>

            <hr class="solid">

            <div class ="viewEA">
            <div class = "calanderBody">
                <h3></h3>    
                <div class = "calander" id="calander">
                    <!--the html is auto generated here with javascript!!-->     
                </div>
            </div>
            </div>
<!--            <aside>-->
<!--                <div>Today:</div>-->
<!--                <div>Westside: 10am-8pm</div>-->
<!--                <div>Tomorrow</div>-->
<!--                <div>Westside: 10am-8pm</div>-->
<!--                <div>May 8, 2022</div>-->
<!--                <div>HRC: 10am-8pm</div>-->
<!--                <div>May 9, 2022</div>-->
<!--                <div>HRC: 10am-8pm</div>-->
<!--                <div>May 10, 2022</div>-->
<!--                <div>Westside: 10am-8pm</div>-->
<!--                <div>May 11, 2022</div>-->
<!--                <div>Westside: 10am-8pm</div>-->
<!--            </aside>-->

<!--            <div class="values">-->
<!--                <ul>-->
<!--                    <li>working</li>-->
<!--                    <li>day off</li>-->
<!--                    <li>Schedule not made</li>-->
<!--                </ul>-->
<!--            </div>-->

        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="contain" class="modal-body">
              <h1 class="in1">   </h1>
              <h1 class="in2">   </h1>
              <h1 iclass="in3">   </h1>
            </div>
            <div class="modal-footer">
              <button onclick="closer()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <script src="js/moment.js"></script>
    <script src="js/CalanderComponent/AV.js" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script> 
      var globalid;
          function stateLocation(id){
            console.log("function inside .js stateLocation is runnning")
            globalid = id;
          }
          function show(type,id,data){
          $('#myModal').modal('show')
          var h5 = document.querySelector(".modal-header h5");
          h5.innerHTML = id;
          var element = document.createElement("div");
          element.className = "viewOfContain", element.id= "v";
          element.appendChild(document.createTextNode(data));
          element.appendChild(document.createElement("br"));
          element.appendChild(document.createTextNode(" Location is: "+ globalid));
  
          document.getElementById("contain").appendChild(element);
          }
          function closer(){
            console.log("clear is running");
            document.getElementById("v").remove();
          }
      </script>  
</body>
</html>