const d = new Date();
const day = d.getDay();
const week = { 
    0 : "Sunday",
    1 : "Monday",
    2 : "Tuesday",
    3 : "Wednesday",
    4 : "Thursday",
    5 : "Friday",
    6 : "Saturday"
}

function formatDate(date){
    return date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
}

function getWeekOf(date){
    return date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() - d.getDay());
}


document.getElementById('currentday').setAttribute("data-day", week[day]);
document.getElementById('currentday').innerText = week[day];

document.getElementById('currentdate').setAttribute("data-date", formatDate(d));
document.getElementById('currentdate').innerText = formatDate(d);

if (document.getElementById('hiddenday') != null){
    document.getElementById('hiddenday').value =  week[day];
    document.getElementById('hiddendate').value = formatDate(d);
    document.getElementById('hiddenweekof').value = getWeekOf(d);
    //alert("Today's Date: " + formatDate(d) + " Sunday's Date: " + getWeekOf(d));
}
