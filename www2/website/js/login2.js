$(document).ready(function() {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "home2.php", true);
    xmlhttp.send();
    $("#logout").click(function() {
        location.href = "logout2.php";
    });
});