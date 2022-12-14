<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="js/CalanderComponent/CalanderCSS/calander.css" /> 
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

                
<!--            <li><a href="??????.php">????</a></li>-->
        </ul>
    </nav>
    <a class="cta" href="login.php"><button>Logout</button></a>
</header>

<div class ="contentContainer">
    <div class ="view">
        <div class ="viewES">
            <div class = "calanderBody">
                <h3></h3>    
                <div class = "calander" id="calander">
                    <!--the html is auto generated here with javascript!!-->     
                </div>
            </div>
    
            <aside class = "aside">
                <div id ="1d"class="boldJohn">Today:</div>
                <div id ="1t">Westside: 10am-8pm</div>
                <div id ="2d"class="boldJohn">Tomorrow:</div>
                <div id ="2t">Westside: 10am-8pm</div>
                <div id ="3d"boldJohn">May 8, 2022:</div>
                <div id ="3t">HRC: 10am-8pm</div>
                <div id ="4d"class="boldJohn">May 9, 2022:</div>
                <div id="4t">HRC: 10am-8pm</div>
                <div id="5d" class="boldJohn">May 10, 2022:</div>
                <div id="5t">Westside: 10am-8pm</div>
                <div id="6d"class="boldJohn">May 11, 2022:</div>
                <div id="6t">Westside: 10am-8pm</div>
            </aside>
        </div>
        
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
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script src="js/moment.js"></script>
<script src="js/CalanderComponent/EV.js" type="module"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    var array = {$array|@json_encode};

function getDate(i) {

    var Months = [
                            'January',
                            'February',
                            'March',
                            'April',
                            'May',
                            'June',
                            'July',
                            'August',
                            'September',
                            'October',
                            'November',
                            'December'
];
let add = 1 + i;
var today = new Date();
var dd =  today.getDate() + add;

var mm =  today.getMonth() + 1; 
var yyyy =  today.getFullYear();


function exist(date, location){
                        let exist = "you do not work this day"
                        for (var i = 0, len = Object.keys(array).length; i < len; i++) {
                        console.log("array date: "+array[i+1]['date']+"  date:"+date)
                        if(array[i+1]['date'] == date ) {
                            return ("You work at " + array[i+1]['location']+ " from " + array[i+1]['shift']);
                        }   
                        }
                        return exist;
                    };
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} if (i == -1){
    today = "Today";
    date = yyyy+"-"+mm+"-"+dd;
    console.log(date);
    today2 = exist(date);

}else if(i == 0){
    today = "Tommorow";
    date = yyyy+"-"+mm+"-"+dd;
    console.log(date);

    today2 = exist(date);


}else{
    console.log("month num: "+ mm);
    console.log("month nword: "+ Months[mm]);
    console.log("day num: "+ dd);
    console.log("year num: "+ yyyy);

                    date = yyyy+"-"+mm+"-"+dd;
                    today2 = exist(date);

    today = Months[mm-1]+" "+dd+", "+yyyy;
}

 console.log(i+"d")              
document.getElementById(String((i+2)+'d')).innerHTML = String(today);
document.getElementById(String((i+2)+'t')).innerHTML = String(today2);
console.log("this is gen "+today);
}
for (var i = -1, len = 5; i < len; i++) {
    console.log(i);
    getDate(i);
}
getDate(2);

    console.log("started");
    console.log("Hello");
    console.log(array);
    setTimeout(() => { rerender();

    }, 100);
    function rerender(){
        var month = (document.getElementsByTagName('h3')[1]).innerHTML; 
        console.log(month) ;
        for (var i = 0, len = numOfDaysInMonth(month); i < len; i++) {
            if(exist(convert(month+" "+i+", 2022")) == true ){
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
                        if(array[i+1]['date'] == date ) {
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
    let first = 0;
        
        function show(type,id,data){
        
            console.log(id);
                    
                    
  
                
                $('#myModal').modal('show')
                var h5 = document.querySelector(".modal-header h5");
                val = id;
                h5.innerHTML = id ; 
                let view = [];
                for (var i = 0, len = Object.keys(array).length; i < len; i++) {
                    console.log(convert(id)+" == " + array[i+1]['date']);

                    if (convert(id) == array[i+1]['date']){
                        
                        view.push(array[i+1]);
                        console.log("pushing");
                        console.log(array[i+1]);
                    };

                };
                console.log(view);

                if(first == 1){
                    document.getElementById("v").remove();
                    document.getElementById("vv").remove();
                }
                var element2 = document.createElement("B");
                element2.className = "viewOfContain", element2.id= "vv";
                
                
            
                element2.innerHTML = "Schedule:";
                document.getElementById("contain").appendChild(element2);
                var element = document.createElement("div");
            

            element.className = "viewOfContain", element.id= "v";
            console.log("This is view: "+view[0]);
            if(view[0] != null){
              for (var i = 0, len = 1; i < len; i++) {
                    element.appendChild(document.createTextNode(("You are working at "+(view[i]['location']) +" from: "+ (view[i]['shift']))));
                    element.appendChild(document.createElement("br"));
                };
            }
                
                console.log(view[1]);
                if(view[0] == null){
                    console.log("hi");
                    element2.innerHTML = "No schuedule has been set for this day";

                }

                document.getElementById("contain").appendChild(element);
                first = 1;  
        }
        
        
        function closer(){
          console.log("clear is running");
        }
    </script> 
</body>
</html>