/**
 * To show the to be edit field
 * @param selector - class or id
 */
function admin_tag_edit_item_open(selector) {
    $(selector).slideDown('slow');
}

/**
 * @param selector = class or id
 * @param id = id of the item
 * @param type = pattern, material, garment, price and etc...
 */
function admin_tag_delete_item(selector, id, type, url) {



    if(confirm('Are you sure to delete this ' + type + '?')) {
        //alert('process delete ' + type);
        // hide container
        //alert(selector);
        $(selector).slideUp('fast');
        //send request to post query

        //alert(url + ' token = '  +  "{{ csrf_token() }}")

        $.ajax({
            url: url,
            type: "delete",
            data: {'email':'me@gmail.com', '_token': $('input[name=_token]').val()},
            success: function(data){
                if(data == true) {
                    alert('successfully deleted');
                } else {
                   alert('failed to deleted');
                }
            }
        });
    } else {
        //alert('deteling item from ' + type + ' aborted');
    }
}




function compose_tag_generate_field() {
    //count how many field are existing
    //send total field and type = 'material, brand and etc..'
    //For FFox
        var countTD=$("td").length/2;
        alert(countTD);
}