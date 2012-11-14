(function(){

function scroller() {

var scroll = $('div.scroll');// Sets the div with a class of scroll as a variable

var height = scroll.height(); // Gets the height of the scroll div (DOES NOT CHANGE!! WHY?)

var topAdj = -height-50; /* '-height' turns the height of the UL into a negative #,
					 * '- 50' subtracts an extra 50 pixels from the height of
					 * the div so that it moves the trail of the UL higher to
					 * the top of the div before the animation ends
					 */
var speed = 15000; // Just a good starting point for the speed of the scroll
var speedAdjust = Math.round(speed/height); // Adjustment for the speed based on the rounded difference in height
var adjustedSpeed = speed-speedAdjust; // Default - speedAdjustment value


scroll.animate({
'top' : [topAdj, 'linear']
}, adjustedSpeed, function(){
scroll.css('top', 250); //resets the top position of the Ul for the next cycle
scroller(); // Recalls the animation cycle to begin.
});}

scroller();

})();