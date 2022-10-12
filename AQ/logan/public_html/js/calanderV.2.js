
var d = new Date();
var monthNum = d.getMonth();
var monthArr = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
var obj = getDate();

var month = monthArr[monthNum];

function getDate(){
    monthNum = d.getMonth();
    month = monthArr[monthNum];
    var day = d.getDay();
    day = dayArr[day];
    var date = d.getDate();
    h3.innerHTML = month;
    return{m:month, dy:day, dt:date, yr:d.getFullYear()}
}

function view() {
    var element = document.createElement("div");
    element.className = "month", element.id ="month";
    document.getElementById("calander").appendChild(element);
    
    var element = document.createElement("button");
    element.type = "prev";
    element.onclick = function(){
        prev();
    };
    element.innerHTML = '&#10094;';
    document.getElementById("month").appendChild(element);
    

    var element = document.createElement("h3");
    document.getElementById("month").appendChild(element);

    var element = document.createElement("button");
    element.type = "next";
    element.onclick = function(){
        next();
    };
    element.innerHTML = '&#10095;';
    document.getElementById("month").appendChild(element);
    console.log("passed");

    var element = document.createElement("div");
    element.className = "calander__date",element.id ="calander__date";
    document.getElementById("calander").appendChild(element);
    for(var i=1;i<7;i++){
        var element = document.createElement("div");
        element.className = "Calender__day";
        element.appendChild(document.createTextNode(LocalDayArr[i]));
        document.getElementById("calander__date").appendChild(element);
    }
    var element = document.createElement("div");
    element.className = "calander__date",element.id ="date";
    document.getElementById("calander").appendChild(element);
    

}


var dayArr = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];
var LocalDayArr =[
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday",
    ];
var day31MonthArr=[
    "January",
    "March",
    "May",
    "July",
    "August",
    "October",
    "December",
];
var d = new Date();

var monthlocation = 0;
var start;
var NumOfGrey;
var endGrey;
var genType;
var dateLocation;
var memoryStart = 1;
var days;
var trigger2;
var k;





var year = "2022";


var trigger = "off";


var tempCount = 0;
var triggera ="off"
var triggerb ="off";
var triggerc="off"
view();
generateCalendarQuarter();


/* This just calls the calander funtion*/


/*This function gets the date and returns the date in a specific formate so that specific parts of the date may be pulled and used in this program*/

function monthMaxNumOfWeeks(){
    var counter = 1;
    var max=1;

    while(counter<days){
        if(counter== 1){
            var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
        }
        var tempDaysInWeek = 7-tempNumOfGrey;
        for(var i = 0; i < tempDaysInWeek; i++){
            counter+=1;
        }
        max += 1;
    }
    return max;

}
function daysLayout(genType){

    var daysInWeek = 7;
    if(genType=="endMonth"){
        daysInWeek = 7 - NumOfGrey
        daysGen(daysInWeek);
        greyedGen(NumOfGrey)
    }
    if(genType=="startMonth"){
        daysInWeek = 7 - NumOfGrey
        greyedGen(NumOfGrey);
        daysGen(daysInWeek);

        
    }else{
        daysGen(daysInWeek)
    }
}
function greyedGen(NumOfGrey){
    console.log("This is the num of grey" +NumOfGrey)
    for(var b=0; b<NumOfGrey;b++){  
        console.log("b is "+b+" / grey is "+NumOfGrey);
        var element = document.createElement("div");
        element.className = "calander__number_empty";
        document.getElementById("date").appendChild(element);
    } 
}
function daysGen(daysInWeek){
    console.log("this is days in wekk: "+daysInWeek)
    for(var a=0; a<daysInWeek; a++){
        console.log("a = "+a+ "  days = "+daysInWeek)
        var element = document.createElement("div");
        obj.dt === start 
        ? (element.className="calander__number calander_number--current",element.id =month+start+year)
        : (element.className="calander__number",element.id =month+start+year);
        element.appendChild(document.createTextNode(start));
        document.getElementById("date").appendChild(element);
        start += 1;
    }    
}
function findEndGrey(){
    var counter = 1;
    var previousMemoryStart=1;
    while(counter<days){
        if(counter== 1){
            var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
        }
        var tempDaysInWeek = 7-tempNumOfGrey;
        for(var i = 0; i < tempDaysInWeek; i++){
            previousMemoryStart = counter;
            counter+=1;
        }
    }
    var endGrey = days-previousMemoryStart;
    return endGrey;
}
function prev(){
    console.log("i ran prev!!!")
    if(start == 1){
        month -= 1;
        endGrey = findEndGrey();
        start = (days-(7-endGrey))+1;
        daysLayout(endGrey,"endMonth");
    }
    start = start - 14;
}



function generateCalendarQuarter(){
    monthlocation = 1;
    console.log("This is the month week location: "+monthlocation)
    month = monthArr[monthNum];
    NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
    console.log("This is num of grey: "+NumOfGrey)
    start= 1;
    console.log("This is the start var: "+start)

    /*This will turn all HTML h3 tags to contan the month*/
    h3.innerHTML = month;

    /*This will determine how many days are in the current month*/
    if(month === "February" && obj.yr % 4 !== 0){
        days = 28
    } else if (obj.m == "February" && obj.yr % 4 === 0){
        days = 29
    } else if (day31MonthArr.includes(month)){
        days = 31;
    } else{
        days = 30;
    }

    daysLayout("startMonth");
}

