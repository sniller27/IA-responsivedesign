/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";

        $("header").addClass("header-bg");
    } else {
        x.className = "topnav";

        if (!$(this).scrollTop() > 0) {
        	$("header").removeClass("header-bg");
        }
    }

    // if (!$("header").hasClass('header-bg') && $("header").scrollTop() == 0) {
    // 	$("header").addClass("header-bg");
    // }
}