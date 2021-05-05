// Popup trigger
var popupTrigger = () => {
    jQuery("section.popup").fadeToggle(500);
}

jQuery(document).ready(function() {
    // Product popup trigger
    jQuery("button.learn-more").on("click",popupTrigger);
    jQuery("div.button-exit").on("click",popupTrigger);

    // Product popup image gallery
    var main_image = jQuery("div.product-img-gallery > div.main-image > img");
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
});
