$(document).ready(function($) {
    /*"use strict";*/
    /*
    $('#container').pinto({
        itemWidth:230,
        gapX:10,
        gapY:10,
        onItemLayout: function($item, column, position) {
        }
    });*/

    $('#container').pinto();

    //update item cart
    $('.item-quantity').change(function(event) {
        
        var id = $(this).data('id');
        var href = $(this).data('href');
        var quantity = $("#product_" + id).val();
        
        window.location.href = href + "/" + quantity;
    });
});