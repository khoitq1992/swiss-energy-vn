// Handler
// Menu
function showSub (sub_menu_dom) {
    sub_menu_dom.css("visibility", "visible");
    sub_menu_dom.css("display","block");
}

function hideSub (sub_menu_dom) {
    sub_menu_dom.css("visibility", "hidden");
    sub_menu_dom.css("display","none");
}

// Assign event
jQuery(document).ready(() => {
    // Menu
    jQuery(".menu-item").mouseover(() => {showSub(jQuery(".sub-menu-item"));});
    jQuery(".menu-item").mouseout(() => {hideSub(jQuery(".sub-menu-item"));});

    // Social
    jQuery(".social-facebook").on("click",() => {location.href = "https://www.facebook.com/SwissEnergyVietnam/";})
    jQuery(".social-instagram").on("click",() => {location.href = "https://www.instagram.com/swiss_energy_vietnam/";})
    jQuery(".social-whatsapp").on("click",() => {location.href = "#";})
})

