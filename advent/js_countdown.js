//repeat every second
setInterval(countdown, 1000);

/* DATE() */

function GetDates(){
	let today = new Date();
	let christmasday = "December 25";
	if (today.getMonth() == 11 && today.getDate() > 25){
		christmasday = "December 25 " + (today.getFullYear() + 1);
	}
	else {
		christmasday = "December 25 " + today.getFullYear();
	}
	christmasday = new Date(christmasday + " 00:00:00");
	let startDate = new Date(today).getTime();
    console.log(`StartDate: ${startDate}`);
    let endDate = new Date(christmasday).getTime();
    console.log(`EndDate: ${endDate}`);
    
	
    let dates = {  
		start: startDate,
		end: endDate
	};
    return dates;
}

/* AJAX */

function countdown(){
	dates = GetDates();
    let difference = dates.end - dates.start;
    console.log(`StartDate: ${dates.start} \nEndDate: ${dates.end}\nDifference: ${difference}`);
    let days = Math.floor((difference / (1000 * 60 * 60 * 24)));
    let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = `${days} :     ${hours} : ${minutes} : ${seconds} until Christmas`;
}	


