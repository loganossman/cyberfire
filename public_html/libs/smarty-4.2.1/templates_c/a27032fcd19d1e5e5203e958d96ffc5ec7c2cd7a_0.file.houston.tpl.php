<?php
/* Smarty version 4.2.1, created on 2022-12-14 07:48:19
  from 'C:\Apache24\htdocs\cyberfire\public_html\templates\houston.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6399c61324c669_27125565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a27032fcd19d1e5e5203e958d96ffc5ec7c2cd7a' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\cyberfire\\public_html\\templates\\houston.tpl',
      1 => 1671022096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6399c61324c669_27125565 (Smarty_Internal_Template $_smarty_tpl) {
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
    console.log("started");
    console.log("Hello");
    var array = <?php echo json_encode($_smarty_tpl->tpl_vars['array']->value);?>
;
    console.log(array);
    setTimeout(() => { rerender();

    }, 100);
    function rerender(){
        var month = (document.getElementsByTagName('h3')[1]).innerHTML; 
        console.log(month) ;
        for (var i = 0, len = numOfDaysInMonth(month); i < len; i++) {
            if(exist(convert(month+" "+i+", 2022"), globalid) == true ){
                console.log("i am runnnig");
                let id =  month+" "+i+", 2022";
                console.log(id);
                document.getElementById(id).className = "full_calander__number green";
            }
        }
    }
    var day31MonthArr=[
        "January",
        "March",
        "May",
        "July",
        "August",
        "October",
        "December",
    ];
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
    function exist(date, location){
                        let exist = false
                        for (var i = 0, len = Object.keys(array).length; i < len; i++) {
                        if(array[i+1]['date'] == date &&  array[i+1]['location'] == location) {
                            exist = true;
                        }   
                        }
                        return exist;
                    };
    function numOfDaysInMonth(month){
        let days = 0;
        if (month == "February"){
            days = 29
        } else if (day31MonthArr.includes(month)){
            days = 31;
        } else{
            days = 30;
        }
        return days;
    };
    var globalid;
    let first = 0;
        function stateLocation(id){
          console.log("function inside .js stateLocation is runnning")
          globalid = id;
          rerender();
        }
        function show(type,id,data){
        if (globalid == undefined){
                 $('#myModal').modal('show');
                var h55 = document.querySelector(".modal-header h5");
                h55.innerHTML = "Please Select a Location First"; 
                var element3 = document.createElement("B");
                element3.className = "viewOfContain", element3.id= "vvv";
                element3.innerHTML = "No location had been selected!!!!";
                document.getElementById("contain").appendChild(element3);
                console.log("finished running");
                first = 2;  
        }else if (globalid != undefined){
            console.log(id);
                    
                    
                    
                
                $('#myModal').modal('show')
                var h5 = document.querySelector(".modal-header h5");
                val = id;
                const date = new Date();
                h5.innerHTML = id +" - - - - Location: " + (globalid.toUpperCase()); 
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
                    document.getElementById("vv").remove();

                }else if(first == 2){
                    document.getElementById("vvv").remove();
                };
                var element2 = document.createElement("B");
                element2.className = "viewOfContain", element2.id= "vv";
                
                
            
                element2.innerHTML = "Schedule:";
                document.getElementById("contain").appendChild(element2);
                var element = document.createElement("div");
            

            element.className = "viewOfContain", element.id= "v";
                for (var i = 0, len = Object.keys(view).length; i < len; i++) {
                    element.appendChild(document.createTextNode(((view[i]['name']) +" "+ (view[i]['shift']))));
                    element.appendChild(document.createElement("br"));
                };
                
                if(view[1] == null){
                    console.log("hi");
                    element2.innerHTML = "No schuedule has been set for this day";

                }

                document.getElementById("contain").appendChild(element);
                first = 1;  
        }
        
        }
        function closer(){
          console.log("clear is running");
        }
    <?php echo '</script'; ?>
> 
</body>
</html><?php }
}
