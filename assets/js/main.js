

//PORTFOLIO SECTION
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


//Bootstrap scrollspy
$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});   
});

//Mobile Menu
function openNav() {
    document.getElementById("mySidepanel").style.width = "180px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
