
import{adminView, employeeView, scheduleMaker} from './data.js'
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
var LocalDayArr =[
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday",
    ];
var dayArr = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
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
var monthNum = d.getMonth();
var month = monthArr[monthNum];
var h3;
var monthlocation = 0;
var start;
var NumOfGrey;
var endGrey;
var genType;
var dateLocation;
var memoryStart = 1;
var days;
var trigger2;
var color = "red"
var k;
var mainDataref;
var data;
var type;
var x=0;
var obj;
var prestart;
var year = "2022";
direct("employeeEdit","week");
function direct(dataref,typeref){
    type = typeref;
    mainDataref = dataref
    if(dataref = "adminView"){
        data = adminView;
    }else if( dataref = "employeeView"){
        data = employeeView;
    }else if( dataref = "employeeEdit"){
        data = scheduleMaker;
    }
    if(type == "month"){
        view();
        obj =  getDate();
        fullCalandar();
    }else if(type == "week"){
        view();
        obj =  getDate();
        generateCalendarQuarter();
    }
}






function fullNext(){
    monthNum +=1;
    month = monthArr[monthNum]; 
    h3.innerHTML = month;
    numOfDaysInMonth();
    monthLocationAtEnd();
    fullCalandar();
}

function fullPrev(){
    monthNum -=1;
    month = monthArr[monthNum]; 
    h3.innerHTML = month;
    numOfDaysInMonth();
    monthLocationAtEnd();
    fullCalandar();
}
function fullDaysLayout(){
    numOfDaysInMonth();
    document.getElementById("date").remove();
    var element = document.createElement("div");
    element.className = "full_calander__date",element.id ="date";
    document.getElementById("calander").appendChild(element);
    console.log("the month is "+ month)
    for(var a=0; a<monthLocationAtEnd(); a++){
        // console.log("a = "+a+ "  days = "+daysInWeek)
         var element = document.createElement("div");
         element.className="week_div",element.id =("div"+a);
         document.getElementById("date").appendChild(element);
     }
     if(month == "October" || month == "November"|| month == "December"){
        NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
    }else{
        NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
    } 
    console.log("this is num of grey "+ NumOfGrey);
    var daysInWeek = 7;
    x=0;
    start = 1;
    fullGreyedGen(NumOfGrey);
    fullDaysGen(daysInWeek-NumOfGrey);
    for(var a=0; a<(monthLocationAtEnd()-2); a++){
        x+=1;
        fullDaysGen(daysInWeek);
     }
    
    x+=1;
    console.log("end is running")
    NumOfGrey=findEndGrey(); 
    console.log("this is end grey " +findEndGrey());
    fullDaysGen(daysInWeek-NumOfGrey);
    fullGreyedGen(NumOfGrey);
        


    
}
function fullGreyedGen(NumOfGrey){
    console.log(NumOfGrey)
    for(var b=0; b<NumOfGrey;b++){  
        //console.log("b is "+b+" / grey is "+NumOfGrey);
        var element = document.createElement("div");
        element.className = "full_calander__number_empty";
        document.getElementById("div"+x).appendChild(element);
    } 
}
function fullDaysGen(daysInWeek){
    
    
//console.log("this is days in wekk: "+daysInWeek)
    //color = getcolor(month+start+year);

    for(var a=0; a<daysInWeek; a++){
        // console.log("a = "+a+ "  days = "+daysInWeek)
         //color = getcolor(month+start+year, mainDataref);
         if(mainDataref == "employeeEdit"){
             if(color == "red"){
                 var element = document.createElement("div");
                 obj.dt === start && monthArr[d.getMonth()] === month
                 ? (element.className="full_calander__number current_calander__number red",element.id =month+start+year)
                 : (element.className="full_calander__number red",element.id =month+start+year);
                 element.appendChild(document.createTextNode(start));
                 document.getElementById(("div"+x)).appendChild(element);
             }
             if(color == "green"){
                 var element = document.createElement("div");
                 obj.dt === start 
                 ? (element.className="full_calander__number current_calander__number green",element.id =month+start+year)
                 : (element.className="full_calander__number green",element.id =month+start+year);
                 element.appendChild(document.createTextNode(start));
                 document.getElementById(("div"+x)).appendChild(element);
             }
             if(color == "grey"){
                 var element = document.createElement("div");
                 obj.dt === start 
                 ? (element.className="full_calander__number current_calander__number grey",element.id =month+start+year)
                 : (element.className="full_calander__number green",element.id =month+start+year);
                 element.appendChild(document.createTextNode(start));
                 document.getElementById(("div"+x)).appendChild(element);
             }
             
         }
         start += 1;
     }    
 }



function fullCalandar (){

    fullDaysLayout();
}

























//generateCalendarQuarter();

function view() {
    var element = document.createElement("div");
    element.className = "month", element.id ="month";
    document.getElementById("calander").appendChild(element);
    
    if (type == "week"){
            var element = document.createElement("button");
        element.type = "prev";
        element.onclick = function(){
            prev();
        };
        element.innerHTML = '&#10094;';
        document.getElementById("month").appendChild(element);
        

        var element = document.createElement("h3");
        document.getElementById("month").appendChild(element);
        h3 = document.querySelector(".month h3");
        h3.innerHTML = month;

        var element = document.createElement("button");
        element.type = "next";
        element.onclick = function(){
            next();
        };
    }else if(type == "month"){
            var element = document.createElement("button");
        element.type = "prev";
        element.onclick = function(){
            fullPrev();
        };
        element.innerHTML = '&#10094;';
        document.getElementById("month").appendChild(element);
        

        var element = document.createElement("h3");
        document.getElementById("month").appendChild(element);
        h3 = document.querySelector(".month h3");
        h3.innerHTML = month;

        var element = document.createElement("button");
        element.type = "next";
        element.onclick = function(){
            fullNext();
        };
    }
    element.innerHTML = '&#10095;';
    document.getElementById("month").appendChild(element);
   

    var element = document.createElement("div");
    element.className = "calander__date",element.id ="calander__date";
    document.getElementById("calander").appendChild(element);
    for(var i=0;i<7;i++){
        var element = document.createElement("div");
        element.className = "Calender__day";
        element.appendChild(document.createTextNode(LocalDayArr[i]));
        document.getElementById("calander__date").appendChild(element);
    }
    var element = document.createElement("div");
    element.className = "calander__date",element.id ="date";
    document.getElementById("calander").appendChild(element);
}

function generateCalendarQuarter(){
    console.log("running")
    month = monthArr[monthNum];
    if(month == "October" || month == "November"|| month == "December"){
        NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
    }else{
        NumOfGrey = (new Date(year + "-" + (monthNum) + "-01").getDay());
    }
    h3.innerHTML = month;
    monthlocation = 2;
    prev();
    /*This will turn all HTML h3 tags to contan the month*/
    if(((start - 1) != d.getDay()) || ((start - 2) != d.getDay()) ||((start - 3) != d.getDay()) ||((start - 4) != d.getDay()) ||((start - 5) != d.getDay()) ||((start - 6) != d.getDay()) ||((start - 7) != d.getDay())){
        next();
    }
    /*This will determine how many days are in the current month*/
    

    
}

function prev(){
    
   
    if(monthlocation == 1){
        monthNum -= 1;
        month = monthArr[monthNum];
        h3.innerHTML = month;
        
        numOfDaysInMonth();
        endGrey = findEndGrey();
        monthlocation = monthLocationAtEnd();
        NumOfGrey = endGrey;
        start = (days-((7-endGrey)-1));
        daysLayout("endMonth");
        console.log("month location: " + monthlocation)

        return  
    }
    if(monthlocation == 2){
        monthlocation = 1;
        numOfDaysInMonth()
        console.log(month)
        if(month == "October" || month == "November"|| month == "December"){
            NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
        }else{
            NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
        }
        
        
        start= 1;
        daysLayout("startMonth");
        console.log("month location: " + monthlocation)
        return
    }
    if(monthlocation !== 1 && monthlocation !== 2){
        monthlocation -= 1;
        console.log("this is start before pre is clicked "+ start)
        console.log("this is start modified as pre is clicked "+ start)
        start = prestart - 7;
        NumOfGrey =0;
        daysLayout("null");
        console.log("This is start before prev is clicked "+start)

        console.log("month location: " + monthlocation)
        return
    }
    
    
   
}

function next(){
    if (monthLocationAtEnd() == monthlocation){
        console.log(monthLocationAtEnd()+" = " + monthlocation)
        monthlocation = 2;
        monthNum += 1;
        month = monthArr[monthNum];
        h3.innerHTML = month;
        numOfDaysInMonth();
        if(month == "October" || month == "November"|| month == "December"){
            NumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
        }else{
            NumOfGrey = (new Date(year + "-" + (monthNum) + "-01").getDay());
        }
        start= 1;
        prev()
        console.log("month location: " + monthlocation)
        
    }else if(monthlocation !== monthLocationAtEnd() && monthlocation !== (monthLocationAtEnd()-1)){
        monthlocation += 1;
        console.log("This is prestart before next is clicked "+prestart)
        start = prestart+(7 - NumOfGrey);
        console.log("This is start modified as next is clicked "+start)
        NumOfGrey =0;
        daysLayout("null");
        console.log("This is start after next is clicked "+start)

        console.log("month location: " + monthlocation)
        console.log(start)
        return
    }else if(monthlocation == (monthLocationAtEnd()-1)){
        monthlocation +=1;
        endGrey = findEndGrey();
        NumOfGrey = endGrey;
        daysLayout("endMonth");
        console.log("month location: " + monthlocation)
    }

}


function daysLayout(genType){
    document.getElementById("date").remove();
    var element = document.createElement("div");
    element.className = "calander__date",element.id ="date";
    document.getElementById("calander").appendChild(element);
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
        

        
    }if(genType == "null"){
        
        daysGen(daysInWeek)
    }
}
function greyedGen(NumOfGrey){
    
    for(var b=0; b<NumOfGrey;b++){  
        //console.log("b is "+b+" / grey is "+NumOfGrey);
        var element = document.createElement("div");
        element.className = "calander__number_empty";
        document.getElementById("date").appendChild(element);
    } 
}
function daysGen(daysInWeek){
    
    prestart = start;
    //console.log("this is days in wekk: "+daysInWeek)
    for(var a=0; a<daysInWeek; a++){
       // console.log("a = "+a+ "  days = "+daysInWeek)
    
        

        if(mainDataref == "employeeEdit"){
            if(color == "red"){
                var element = document.createElement("div");
                obj.dt === start && monthArr[d.getMonth()] === month
                ? (element.className="calander__number current_calander__number red",element.id =month+start+year,onclick = function(){ show("employeeEdit"); })
                : (element.className="calander__number red",element.id =month+start+year);
                element.appendChild(document.createTextNode(start));
                document.getElementById(("date")).appendChild(element);
            }
            if(color == "green"){
                var element = document.createElement("div");
                obj.dt === start 
                ? (element.className="calander__number current_calander__number green",element.id =month+start+year,onclick = function(){ show("employeeEdit"); })
                : (element.className="calander__number green",element.id =month+start+year);
                element.appendChild(document.createTextNode(start));
                document.getElementById(("date")).appendChild(element);
            }
            if(color == "grey"){
                var element = document.createElement("div");
                obj.dt === start 
                ? (element.className="calander__number current_calander__number grey",element.id =month+start+year,onclick = function(){ show("employeeEdit"); })
                : (element.className="calander__number green",element.id =month+start+year);
                element.appendChild(document.createTextNode(start));
                document.getElementById(("date")).appendChild(element);
            }
            start += 1;
        }
    }    
}
function findEndGrey(){
    var counter = 0;
    var previousMemoryStart=1;
    while(counter<days){
        var tempNumOfGrey = 0;
        if(counter == 0){
            if(month == "October" || month == "November"|| month == "December"){
                var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
            }else{
                var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
            }
        }
        var tempDaysInWeek = 7-tempNumOfGrey;
        previousMemoryStart = counter;
        for(var i = 0; i < tempDaysInWeek; i++){
            
            
            counter+=1;
        }
    }
    var endGrey = (previousMemoryStart+7)-days;
    return endGrey;
}
function getDate(){
    monthNum = d.getMonth();
    month = monthArr[monthNum];
    var day = d.getDay();
    day = dayArr[day];
    var date = d.getDate();
    h3.innerHTML = month;
    return{m:month, dy:day, dt:date, yr:d.getFullYear()}
}
function numOfDaysInMonth(){
    if(month === "February" && obj.yr % 4 !== 0){
        days = 28
    } else if (obj.m == "February" && obj.yr % 4 === 0){
        days = 29
    } else if (day31MonthArr.includes(month)){
        days = 31;
    } else{
        days = 30;
    }
    return
}

function monthLocationAtEnd(){
    var counter = 0;
    var tempmonthlocation = 0;
    while(counter<days){
        

        var tempNumOfGrey = 0;
        if(counter == 0){
            if(month == "October" || month == "November"|| month == "December"){
                var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay());
            }else{
                var tempNumOfGrey = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
            }
        }
        var tempDaysInWeek = 7-tempNumOfGrey;
        for(var i = 0; i < tempDaysInWeek; i++){
            counter+=1;
        }
        tempmonthlocation+=1;
    }
    return tempmonthlocation;
}

