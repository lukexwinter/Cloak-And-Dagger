// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/*global jQuery */
/*!        
* FlexVerticalCenter.js 1.0
*
* Copyright 2011, Paul Sprangers http://paulsprangers.com
* Released under the WTFPL license 
* http://sam.zoy.org/wtfpl/
*
* Date: Fri Oct 28 19:12:00 2011 +0100
*/
(function( $ ){
        
        $.fn.flexVerticalCenter = function( onAttribute ) {
        
                return this.each(function(){
                        var $this                = $(this);              // store the object
                        var attribute        = onAttribute || 'margin-top'; // the attribute to put the calculated value on
                
                        // recalculate the distance to the top of the element to keep it centered
                        var resizer = function () {
                                // get parent height minus own height and devide by 2
                                $this.css(
                                        attribute, ( ( $this.parent().height() - $this.height() ) / 2 )
                                );
                        };

                        // Call once to set.
                        resizer();
                                
                        // Call on resize. Opera debounces their resize by default. 
                      $(window).resize(resizer);
                      
                      // Apply a load event to images within the element so it fires again after an image is loaded
                      $this.find('img').load(resizer);
              
                });

        };

})( jQuery );