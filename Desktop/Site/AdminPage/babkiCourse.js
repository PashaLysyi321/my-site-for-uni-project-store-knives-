$(document).ready(function(){
	//getRate();
	grafon(getHistoryRate()[0],getHistoryRate()[1]);
	//grafon1(getHistoryRate()[0],getHistoryRate()[1]);
	//grafon2(getHistoryRate()[0],getHistoryRate()[1]);
});

function getRate(){
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json",
		function(data){
			var courseNow = data[0];
			document.getElementById("CourseNow").innerHTML = courseNow;
			document.write(data[27]["rate"]);
		}
	);
}

function viewDiv(){
	document.getElementById("div1").style.color = "black";
}

function sleep(millis) {
    var t = (new Date()).getTime();
    var i = 0;
    while (((new Date()).getTime() - t) < millis) {
        i++;
    }
}


function getHistoryRate(){
	var mass = [];
	var datamass = [];
	
	var data = new Date();
	
	var a = data.getFullYear();

	var b = data.getMonth()+1;
	
	var c = data.getDate();
	
	var now = a+' '+b+' '+c;
	
	now = now.replace(/\s/g, '');
	
	var now = parseInt(now, 10);
	var t1 = now-1;
	var t2 = now-2;
	var t3 = now-3;
	var t4 = now-4;
	var t5 = now-5;
	var t6 = now-6;
	
	datamass = [now,t1,t2,t3,t4,t5,t6];
	
	
	
	
	
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+now+"&json",
		function(data){
			var courseA = data[27]["rate"];
			sleep(100);
			mass[0] = courseA;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t1+"&json",
		function(data){
			var courseB = data[27]["rate"];
			sleep(100);
			mass[1] = courseB;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t2+"&json",
		function(data){
			var courseC = data[27]["rate"];
			sleep(100);
			mass[2] = courseC;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t3+"&json",
		function(data){
			var courseD = data[27]["rate"];
			sleep(100);
			mass[3] = courseD;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t4+"&json",
		function(data){
			var courseE = data[27]["rate"];
			sleep(100);
			mass[4] = courseE;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t5+"&json",
		function(data){
			var courseF = data[27]["rate"];
			sleep(100);
			mass[5] = courseF;
			//console.log(courseA);
			//document.write(mass);
		}
	);
	$.get(
		"https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date="+t6+"&json",
		function(data){
			var courseT = data[27]["rate"];
			mass[6] = courseT;
		}
	);

	return [mass,datamass];
	
}

function grafon(mass, datamass){
	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [datamass[0],datamass[1],datamass[2],datamass[3],datamass[4],datamass[5],datamass[6]],
        datasets: [{
            label: "PRICE $ FOR A WEEK",
            backgroundColor: ['aquamarine', 'turquoise', 'lightseagreen','mediumturquoise', 'cadetblue', 'darkcyan','teal'],
            borderColor: 'rgb(255, 99, 132)',
            data: mass,
        }]
    },

    // Configuration options go here
    options: {}
});
	
}

function grafon1(mass, datamass){
	var ctx = document.getElementById('myChart1').getContext('2d');
	var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [datamass[0],datamass[1],datamass[2],datamass[3],datamass[4],datamass[5],datamass[6]],
        datasets: [{
            label: "PRICE $ FOR A WEEK",
            data: mass,
			backgroundColor: ['turquoise']
        }]
    },

    // Configuration options go here
    options: {
    }
});
}
