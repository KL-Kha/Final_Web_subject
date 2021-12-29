// ví dụ sử dụng javascript thuần
window.addEventListener("load", () => {
    let title = document.querySelector("h3");

    title.onmouseover = () => {
        title.style.color = "deeppink";
    };

    title.addEventListener("mouseleave", () => {
        title.style.color = "black";
    });
});

// ví dụ sử dụng jquery
$(document).ready(function() {
    $("#old").hide();
    $("#new").show();

    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var content = xmlhttp.responseText;

            if (content != "0") {
                $("#old").show();
                $("#new").hide();
                content = "Welcome " + content + "!";
                $("#wuser").text(content);
            } else {
                $("#old").hide();
                $("#new").show();
            }
        }
    }

    xmlhttp.open("GET", "home.php", true);
    xmlhttp.send();

    $("#logout").click(function() {
        location.href = "logout.php";
    });
});