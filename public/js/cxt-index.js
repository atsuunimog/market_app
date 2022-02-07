//toggle mobile nav
function show_mobile_menu(obj_toggle){document.getElementById("mobile-menu-panel").classList.remove("hidden");}
function hide_mobile_menu(obj_toggle){document.getElementById("mobile-menu-panel").classList.add("hidden")}
//toggle mobile sub_nav
function toggle_mobile_sub_nav(obj){ 
    obj.children[0].classList.toggle("ion-chevron-up");
    document.getElementById("dropdown-toggle").classList.toggle("hidden");
}