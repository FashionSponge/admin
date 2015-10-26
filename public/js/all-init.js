/**
 * This page is to call the functions and do some extra js codes
 * all.js rely on this page
 */


/**
 * Dashboard content
 */
function dashboard_on_load() {
    var clear1 = setTimeout(function() {
        perform_line();
        clearTimeout(clear1);
    }, 1000);

    var clear2 = setTimeout(function() {
        perform_donut();
        clearTimeout(clear2);
    }, 1000);

    var clear3 = setTimeout(function() {
        perform_top_performing_pages();
        clearTimeout(clear3);
    }, 1000);

    var clear4 = setTimeout(function() {
        perform_stacked_horizontal();
        clearTimeout(clear4);
    }, 1000);

    var clear5 = setTimeout(function() {
        header_status();
        clearTimeout(clear5);
    }, 1000);
}