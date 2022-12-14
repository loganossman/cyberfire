<?php
/* Smarty version 4.2.1, created on 2022-12-14 03:56:13
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\houston.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63998fad618a07_47568281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a27032fcd19d1e5e5203e958d96ffc5ec7c2cd7a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\houston.tpl',
      1 => 1671008170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63998fad618a07_47568281 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="js/CalanderComponent/CalanderCSS/TempCalendar.css" />
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
                    <a href="houston.php"><li style="font-size:18px" ;><u>Houston</u></li></a>
                    <a href="austin.php"><li style="font-size:18px" ;>Austin</li></a>
                </ul>
            </div>

            <div class="sections">
                <ul class="section__links">
                    <a id="hrc" onclick="stateLocation('hrc')" ><li style="font-size:14px";>HRC</li></a>
                    <a id="pine" onclick="stateLocation('pine')" ><li style="font-size:14px";>Pine Forest</li></a>
                    <a id="winchester" onclick="stateLocation('winchester')" ><li style="font-size:14px";>Winchester</li></a>
                    <a id="katy" onclick="stateLocation('katy')" ><li style="font-size:14px";>Katy</li></a>
                    <a id="river" onclick="stateLocation('river side')"><li style="font-size:14px";>River Park</li></a>
                    <a id="west" onclick="stateLocation('west side')"><li style="font-size:14px";>West Side</li></a>
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
    <form action="calanderdata.php" method="post">
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="contain"class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button  onclick="closer()" type="submit" id="submit" class="btn btn-secondary" data-dismiss="modal" >Close</button>
              </div>
            </div>
          </div>
        </div>
     </form>
    <?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="javascript">
        function getData() {
            // function below will run clear.php?h=michael
            $.ajax({
                type: "GET",
                url: "calanderdata.php" ,
                data: { h: "michael" },
                success : function() { 

                    // here is the code that will run on client side after running clear.php on server

                    // function below reloads current page
                    location.reload();

                }
            });
        }
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/CalanderComponent/AV.js" type="module"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
> 
    var globalid;
    let first = 0;
        function stateLocation(id){
          console.log("function inside .js stateLocation is runnning")
          globalid = id;
        }
        function show(type,id,data){
        var array = <?php echo json_encode($_smarty_tpl->tpl_vars['array']->value);?>
;
        function convert(date){
            var date = date.replace(',' , '');
            var date = date.split(" ");
            var Months = {
                    January: "1",
                    February: "2",
                    March: "3",
                    April: "4",
                    May: "5",
                    June: "6",
                    July: "7",
                    August: "8",
                    September: "9",
                    October: "10",
                    November: "11",
                    December: "12"
             };
             month = Months[date[0]];
             day = date[1];
             year = date[2];
             date = year+"-"+month+"-"+day
              return date;
        };
        $('#myModal').modal('show')
        var h5 = document.querySelector(".modal-header h5");
        val = id;
        const date = new Date();
        h5.innerHTML = id; 
        let view = [];
        for (var i = 0, len = Object.keys(array).length; i < len; i++) {
            console.log(convert(id)+" == " + array[i+1]['date']);

            if (convert(id) == array[i+1]['date'] & globalid == array[i+1]['location']){
                
                view.push(array[i+1]);
                console.log("pushing");
                console.log(array[i+1]);
            };

        };
        console.log(view);
        if(first == 1){
            document.getElementById("v").remove();
        };
        var element = document.createElement("div");
        element.className = "viewOfContain", element.id= "v";
        for (var i = 0, len = Object.keys(view).length; i < len; i++) {
            element.appendChild(document.createTextNode(((view[i]['name']) +" "+ (view[i]['shift']))));
            element.appendChild(document.createElement("br"));
        }
        
        element.appendChild(document.createElement("br"));
        element.appendChild(document.createTextNode(" Location is: "+ globalid));

        document.getElementById("contain").appendChild(element);
        first = 1;
        }
        function closer(){
          console.log("clear is running");
        }
    <?php echo '</script'; ?>
> 
</body>
</html><?php }
}
