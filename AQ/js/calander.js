/*By Ricardo Padilla inspired by SharnavsTech Url:https://www.youtube.com/c/SharnavsTech*/
/*Moment.js is used for getting current date and start date url:https://momentjs.com/docs/#/manipulating/start-of/*/
var h3 = document.querySelector(".month h3");

/*This array is used to Print the date to h3 in html */
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
/* There are two arrays which chould be simplified to on array but because it would required some math for time i kept the two*/
/* because the moment.js index 0 starts at sunday while my funtions start at Monday. This will be fix possibly in the future.*/
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
/* This is used to determine what months have 31 days when generating the calander*/
var day31MonthArr=[
    "January",
    "March",
    "May",
    "July",
    "August",
    "October",
    "December",
];
/* Im not going to explain all these vars but all retain to geting the starting day of a month, 
using the starting day to determine the layout of the calander and saving vars to generate following calanders*/
var d = new Date();

var dateLocation;
var obj = getDate();
var startOfMonth= moment().clone().startOf("month").format("dddd");
var dayIndex = LocalDayArr.indexOf(startOfMonth);
var year = "2022";
var pointerIndex = 8-(dayIndex);
var days;
var monthNum = d.getMonth();
var month = monthArr[monthNum];
var trigger = "off";
var monthlocation = 1;
var start
var trigger2;
var tempCount = 0;
var k;
var triggera ="off"
var triggerb ="off";
var triggerc="off"
var element = document.createElement("div");
    obj.dt === d 
    ? (element.className="calander__date", element.id ="lx")
    : (element.className="calander__date", element.id ="lx");
    document.getElementById("lcc").appendChild(element);
/* This just calls the calander funtion*/
generateCalendarQuarter()

/*This function gets the date and returns the date in a specific formate so that specific parts of the date may be pulled and used in this program*/
function getDate(){
    monthNum = d.getMonth();
    month = monthArr[monthNum];
    var day = d.getDay();
    day = dayArr[day];
    var date = d.getDate();
    h3.innerHTML = month;
    return{m:month, dy:day, dt:date, yr:d.getFullYear()}
}

    
function generateCalendarQuarter(){
    console.log(monthlocation)

    var dayIndex = LocalDayArr.indexOf(startOfMonth);
    pointerIndex = 8-(dayIndex);

    monthlocation = 1;
    if(month === "February" && obj.yr % 4 !== 0){
        days = 28
    } else if (obj.m == "February" && obj.yr % 4 === 0){
        days = 29
    } else if (day31MonthArr.includes(month)){
        days = 31;
    } else{
        days = 30;
    }
    for(var j=0; j<dayIndex;j++){
        
        var element = document.createElement("div");
        element.className = "calander__number_empty";
        document.getElementById("lx").appendChild(element);
    }

    for(var k=1; k<pointerIndex; k++){
        
        var element = document.createElement("div");
        obj.dt === k 
        ? (element.id=k.className="calander__number calander_number--current",element.id =month+k+year)
        : (element.className="calander__number",element.id =month+k+year);

        element.appendChild(document.createTextNode(k));
        document.getElementById("lx").appendChild(element);
    }
    start = k;
}
// code for the next button
function next(){
    if(triggera == "on"){
        triggera ="off" ;
        start=start+7;
        if(start>=days){
            console.log("new month ran");
            monthNum = monthNum +1;
            month = monthArr[monthNum];
            dayIndex = (new Date(year + "-" + (monthNum+1) + "-01").getDay())-1;
            console.log("dayindex "+ dayIndex)
            console.log("month "+ month)
            pointerIndex= 8-dayIndex;
            h3.innerHTML = month;
            document.getElementById("lc").remove();
            document.getElementById("lx").remove();

            var element = document.createElement("div");
            obj.dt === d 
            ? (element.className="calander__date", element.id ="lc")
            : (element.className="calander__date", element.id ="lc");
            document.getElementById("lcc").appendChild(element);
            var element = document.createElement("div");
            obj.dt === d 
            ? (element.className="calander__date", element.id ="lx")
            : (element.className="calander__date", element.id ="lx");
            document.getElementById("lcc").appendChild(element);
            for(var d=0; d<7; d++){
                
                var element = document.createElement("div");
                obj.dt === d 
                ? (element.className="Calender__day")
                : (element.className="Calender__day");
        
                element.appendChild(document.createTextNode(LocalDayArr[d]));
                document.getElementById("lc").appendChild(element);
                
            }

            generateCalendarQuarter()
            return
        }
        
     }

    document.getElementById("lc").remove();
    document.getElementById("lx").remove();

    
    h3.innerHTML = month;



    var element = document.createElement("div");
    obj.dt === d 
    ? (element.className="calander__date", element.id ="lc")
    : (element.className="calander__date", element.id ="lc");
    document.getElementById("lcc").appendChild(element);
    var element = document.createElement("div");
    obj.dt === d 
    ? (element.className="calander__date", element.id ="lx")
    : (element.className="calander__date", element.id ="lx");
    document.getElementById("lcc").appendChild(element);

    for(var d=0; d<7; d++){
        
        var element = document.createElement("div");
        obj.dt === d 
        ? (element.className="Calender__day")
        : (element.className="Calender__day");

        element.appendChild(document.createTextNode(LocalDayArr[d]));
        document.getElementById("lc").appendChild(element);
        
    }
    if(trigger == "on"){
        trigger = "off";
        triggerc ="off"
        generateCalendarQuarter()
        return
    }
    monthlocation= monthlocation+1;
    console.log(monthlocation)

    for(k=start; k<(start + 7); k++){

        if(k<(days+1)){
           
            var countemp = countemp + 1;
            var element = document.createElement("div");
            tempCount = tempCount + 1;
            obj.dt === k 
            ? (element.className="calander__number calander_number--current",element.id =month+k+year)
            : (element.className="calander__number",element.id =month+k+year);
    
            element.appendChild(document.createTextNode(k));
            document.getElementById("lx").appendChild(element);
            
        }else{
            monthNum = monthNum +1;
            month = monthArr[monthNum];
            dayIndex = new Date(year + "-" + (monthNum+1) + "-01").getDay();
            pointerIndex= 8-dayIndex;
            trigger = "on";
            k = start + 7;
            triggerc = "on"
         
        }
        
    }
    for(var c=1; c<(8-tempCount);c++){
            var element = document.createElement("div");
            element.className = "calander__number_empty";
            document.getElementById("lx").appendChild(element);
    }
    tempCount = 0;
    
    start = k;
    
    triggerb="on"

}
//code for previous button
function prev(){

    if(triggerb == "on"){
        triggerb ="off" ;
        start=start-7
        if(triggerc = "on"){
            triggerc ="off";
            start=start-1;
        }
        if (monthlocation == 2){
            start=start+1;
        }
     }
    document.getElementById("lc").remove();
    document.getElementById("lx").remove();
    
    
    if(monthlocation == 1){
        monthNum = monthNum -1;
        month = monthArr[monthNum];
        if(month === "February" && obj.yr % 4 !== 0){
            days = 28
        } else if (obj.m == "February" && obj.yr % 4 === 0){
            days = 29
        } else if (day31MonthArr.includes(month)){
            days = 31;
        } else{
            days = 30;
        }
        dayIndex = new Date(year + "-" + (monthNum+1) + "-01").getDay();
        pointerIndex= 8-dayIndex;
    
        h3.innerHTML = month;
        start = pointerIndex;
        
        var count = 1;
        while(start<days){
            start = start + 7
            count = count + 1
        }
        start = start - 6;
        trigger2 = start;
        
        var prevIndex = days - start;
        var grayIndex = 7 - prevIndex;
        monthlocation = count;
      

    }else{
        monthlocation = monthlocation - 1;
        console.log(monthlocation)

        var tempStart = start-1;

        start = start - 7;
   
        trigger2 = start;
        prevIndex = 6;
        grayIndex = 0;


        if(start<0){
            
            grayIndex = 7-tempStart;
            prevIndex = 7-grayIndex;

        }
  

    }
    
    

   

    var element = document.createElement("div");
    obj.dt === d 
    ? (element.className="calander__date", element.id ="lc")
    : (element.className="calander__date", element.id ="lc");
    document.getElementById("lcc").appendChild(element);
    var element = document.createElement("div");
    obj.dt === d 
    ? (element.className="calander__date", element.id ="lx")
    : (element.className="calander__date", element.id ="lx");
    document.getElementById("lcc").appendChild(element);

    for(var d=0; d<7; d++){
        
        var element = document.createElement("div");
        obj.dt === d 
        ? (element.className="Calender__day")
        : (element.className="Calender__day");

        element.appendChild(document.createTextNode(LocalDayArr[d]));
        document.getElementById("lc").appendChild(element);
        
    }

    /*editing*/
    if(trigger2<0){
        
        for(var b=0; b<grayIndex;b++){
            var element = document.createElement("div");
            element.className = "calander__number_empty";
            document.getElementById("lx").appendChild(element);
        }
        

        start= 7 - grayIndex;
        for(var a=1; a<(prevIndex+1); a++){
    
            var element = document.createElement("div");
            obj.dt === a 
            ? (element.className="calander__number calander_number--current",element.id =month+a+year)
            : (element.className="calander__number",element.id =month+a+year);
    
            element.appendChild(document.createTextNode(a));
            document.getElementById("lx").appendChild(element);
        }
        
    }

    if(trigger2>=0){
        

        for(var a=start; a<(start+prevIndex+1); a++){
    
            var element = document.createElement("div");
            obj.dt === a 
            ? (element.className="calander__number calander_number--current",element.id =month+a+year)
            : (element.className="calander__number",element.id =month+a+year);
    
            element.appendChild(document.createTextNode(a));
            document.getElementById("lx").appendChild(element);
        }
        for(var b=1; b<grayIndex;b++){
            var element = document.createElement("div");
            element.className = "calander__number_empty";
            document.getElementById("lx").appendChild(element);
        }
    }
    
    
    
        
        /*console.log("start= " +start );
        console.log("prevndex= " + prevIndex);
        console.log(" month location= " +monthlocation );
        console.log(" month num= " + monthNum);
        console.log(" date location= " + dateLocation);
        console.log("   " );*/
 triggera="on"
        
        
}

