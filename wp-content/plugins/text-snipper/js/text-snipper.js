(function($) {
    
    function trimText (el, wrapper) {
        //If there is text in this element, and there is still overflow, trim this element's text
        if ( el.text() != "" && wrapper.clientHeight < wrapper.scrollHeight ) {
            el.text(el.text().substring(0, el.text().length - 1));
            trimText(el, wrapper);
        } else {
            return false;
        }   
    }
    
    function checkEmpty (el) {
        if (el.text() != "") { return true; } else { return false; }
    }
    
    //http://www.mail-archive.com/discuss@jquery.com/msg04261.html
    jQuery.fn.reverse = [].reverse;

    $(document).ready( function() {
        
        if (  $('.' + snipClass).length > 0 ) {

            $('.' + snipClass).each( function () {
                
                var wrapper = this;
                
                //Trim text
                if ( wrapper.clientHeight < wrapper.scrollHeight) {
                    //Handle child elements
                    if ($(this).children().length > 0) { 
                        $(this).children().reverse().each( function () {
                            trimText($(this), wrapper);
                         }); 
                    //Handle elements with no children
                    } else { 
                        trimText($(this), wrapper);
                    }
                } 
                //Add '...'
                if ($(this).children().length > 0) { 
                    $(this).children().reverse().each( function () {
                        var isNotEmpty = checkEmpty($(this));
                        if (isNotEmpty) {
                            $(this).text($(this).text().substring(0, $(this).text().length - 3) + '...');
                            return false;
                        }
                     });
                } else {
                    $(this).text($(this).text().substring(0, $(this).text().length - 3) + '...');
                }
                 
            }); 
        }
    });

}(jQuery));