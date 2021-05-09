// Popup module
class PopupManager {
    // Trigger, Target array pair
    constructor() {
        console.log("Popup manager constructor");
        this.pairs = new Array();
    }

    // Add pairs
    addPair (triggerCSS, popupCSS, exitCSS) {
        this.pairs.push({
            trigger: triggerCSS,
            popup: {
                content: popupCSS,
                exit: exitCSS
            }
        })
    }

    // Initiate
    initiate () {
        // Assign event-handler loop
        this.pairs.forEach((item) => {
            jQuery(item.trigger).on("click", () => this.tooglePopup(jQuery(item.popup.content)));
            jQuery(item.popup.exit).on("click", () => this.tooglePopup(jQuery(item.popup.content)));
        })
    }

    // Toogle popup
    tooglePopup (popup) {
        console.log("Toggle popup");
        popup.fadeToggle(500);
    }
}

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
jQuery(document).ready(function() {
    // Initiate main module
    const popupManager = new PopupManager();

    // Add popup
    popupManager.addPair("div.product-1 button.learn-more","section.popup.product-1","section.popup.product-1 div.button-exit");
    popupManager.addPair("div.product-2 button.learn-more","section.popup.product-2","section.popup.product-2 div.button-exit");
    popupManager.addPair("div.product-3 button.learn-more","section.popup.product-3","section.popup.product-3 div.button-exit");
    popupManager.addPair("div.product-4 button.learn-more","section.popup.product-4","section.popup.product-4 div.button-exit");
    popupManager.addPair("div.product-5 button.learn-more","section.popup.product-5","section.popup.product-5 div.button-exit");
    popupManager.initiate();

    // Hide paging
    jQuery("ul.paging").css("display","none");

    // Product popup image gallery
    var main_image = jQuery("section.popup div.product-img-gallery > div.main-image > img");
    jQuery("div.img-list > img.image").toArray().forEach(element => {
        jQuery(element).on("click", () => {
            // Change main img
            var current_img = jQuery(element);
            var src = current_img.attr("src");
            main_image.attr("src", src);
            // Update thumbnail state
            current_img.addClass("is-active");
            console.log(current_img);
            console.log(current_img.siblings());
            current_img.siblings().toArray().forEach(sibling => {
                console.log("sibling: " + jQuery(sibling));
                if (jQuery(sibling).hasClass("is-active"))
                    jQuery(sibling).removeClass("is-active");
            })
        })
    })

    // Menu
    jQuery(".menu-item").mouseover(() => {showSub(jQuery(".sub-menu-item"));});
    jQuery(".menu-item").mouseout(() => {hideSub(jQuery(".sub-menu-item"));});

    // Social
    jQuery(".social-facebook").on("click",() => {location.href = "https://www.facebook.com/SwissEnergyVietnam/";})
    jQuery(".social-instagram").on("click",() => {location.href = "https://www.instagram.com/swiss_energy_vietnam/";})
    jQuery(".social-whatsapp").on("click",() => {location.href = "#";})
});

