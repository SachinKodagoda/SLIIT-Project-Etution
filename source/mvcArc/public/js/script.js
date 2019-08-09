function navFunction(loc){
    console.log(loc);
    location.replace(loc);
};

var dateOBJ = new Date();
var hours = dateOBJ.getHours();
var minutes = dateOBJ.getMinutes();
var seconds = dateOBJ.getSeconds();
var message = '';
if(hours < 12){
    message = 'Good Morning! : ';
} else if (hours > 12 && hours < 18){
    message = 'Good Afternoon! : ';
} else if (hours >= 18){
    message = 'Good Evening! : ';
}


$('#greeting').html(message);