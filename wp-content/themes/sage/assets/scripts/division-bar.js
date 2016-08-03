$(document).ready(function() {

    // Hide the directory navigation
    // $('.division-directory').hide();


    // Show/Hide the directory navigation on-click
    $('.directory-toggle').click(function() {
        $(this).toggleClass("active");
        $('.division-directory').toggleClass("active");

        var state = $(this).attr('aria-expanded') == 'false' ? true : false;
        $(this).attr('aria-expanded', state);

        var stateHidden = $('#collapsible-0').attr('aria-hidden') == 'false' ? true : false;
        $('#collapsible-0').attr('aria-hidden', stateHidden);


        return false;
    });


    // For small screens - show/hide the search on-click
    $('.search-toggle').click(function() {
        $(this).toggleClass('active');
        $('.division-search').slideToggle();

        var state = $(this).attr('aria-expanded') == 'false' ? true : false;
        $(this).attr('aria-expanded', state);

        var stateHidden = $('#collapsible-1').attr('aria-hidden') == 'false' ? true : false;
        $('#collapsible-1').attr('aria-hidden', stateHidden);
        
        return false;
    });


});