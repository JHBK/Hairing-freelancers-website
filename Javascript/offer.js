


var colors = ['#45b39d', '#A9D0F5', '#81F79F']; 
var active = 0;
setInterval(function(){
    document.querySelector('h1').style.background = colors[active];
    active++;
    if (active == colors.length) active = 0;
}, 1000);