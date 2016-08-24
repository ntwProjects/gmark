/***************************/
//@Author: Adrian "yEnS" Mato Gondelle &amp;amp;amp; Ivan Guardado Castro  
//@website: www.yensdesign.com  
//@email: yensamg@gmail.com  
//@license: Feel free to use it, but keep this credits please!  
/***************************/

jQuery(document).ready(function() {
    jQuery("#populars").addClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").removeClass("active");
                //display selected division, hide others  
                jQuery("div.populars").fadeIn();
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.links").css("display", "none");
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.images").css("display", "none");
    jQuery(".menutabs > li").click(function(e) {
        switch (e.target.id) {
            case "populars":
                //change status &amp;amp;amp; style menu  
                jQuery("#populars").addClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").removeClass("active");
                //display selected division, hide others  
                jQuery("div.populars").fadeIn();
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.links").css("display", "none");
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.images").css("display", "none");
                break;
//            case "tutorials":
//                //change status &amp;amp;amp; style menu  
//                jQuery("#news").removeClass("active");
//                jQuery("#tutorials").addClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").removeClass("active");
//                //display selected division, hide others  
//                jQuery("div.tutorials").fadeIn();
//                jQuery("div.news").css("display", "none");
//                jQuery("div.links").css("display", "none");
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.images").css("display", "none");
//                break;
//            case "links":
//                //change status &amp;amp;amp; style menu  
//                jQuery("#news").removeClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").addClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").removeClass("active");
//                //display selected division, hide others  
//                jQuery("div.links").fadeIn();
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.news").css("display", "none");
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.images").css("display", "none");
//                break;
//            case "musiks":
//                //change status &amp;amp;amp; style menu  
//                jQuery("#news").removeClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").addClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").removeClass("active");
//                //display selected division, hide others  
//                jQuery("div.musiks").fadeIn();
//                jQuery("div.links").css("display", "none");
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.news").css("display", "none");
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.images").css("display", "none");
//                break;
//            case "videos":
//                //change status &amp;amp;amp; style menu  
//                jQuery("#news").removeClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").addClass("active");
//                jQuery("#images").removeClass("active");
//                //display selected division, hide others  
//                jQuery("div.videos").fadeIn();
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.links").css("display", "none");
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.news").css("display", "none");
//                jQuery("div.images").css("display", "none");
//                break;
//            case "images":
//                //change status &amp;amp;amp; style menu  
//                jQuery("#news").removeClass("active");
//                jQuery("#tutorials").removeClass("active");
//                jQuery("#links").removeClass("active");
//                jQuery("#musiks").removeClass("active");
//                jQuery("#videos").removeClass("active");
//                jQuery("#images").addClass("active");
//                //display selected division, hide others  
//                jQuery("div.images").fadeIn();
//                jQuery("div.videos").css("display", "none");
//                jQuery("div.musiks").css("display", "none");
//                jQuery("div.links").css("display", "none");
//                jQuery("div.tutorials").css("display", "none");
//                jQuery("div.news").css("display", "none");
//                break;
        }
        //alert(e.target.id);  
        return false;
    });
});  