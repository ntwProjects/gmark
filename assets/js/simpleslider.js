/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//// Start Simple Sliders ////
$(function() {
    setInterval("rotateDiv()", 10000);
});
function rotateDiv() {
    var currentDiv = $("#simpleslider div.current");
    var nextDiv = currentDiv.next();
    if (nextDiv.length == 0)
        nextDiv = $("#simpleslider div:first");
    currentDiv.removeClass('current').addClass('previous').fadeOut('2000');
    nextDiv.fadeIn('3000').addClass('current', function() {
        currentDiv.fadeOut('2000', function() {
            currentDiv.removeClass('previous');
        });
    });
}
//// End Simple Sliders //// 

