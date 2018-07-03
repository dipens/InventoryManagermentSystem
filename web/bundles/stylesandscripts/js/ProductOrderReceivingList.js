/**
 * Created by DSHAH on 12/9/2015.
 */
/**
 * Created by DSHAH on 12/8/2015.
 */
jQuery(document).ready(function() {
    var PO_PK = window.location.pathname.substr(1).replace(/[^\d]/g,'');
    var userRoles = $("#userRoles").data("id");
    $('#menu').on('click', 'a.menuLink', function(event){
        event.preventDefault();
        var id= $(this).attr('id');
        var myData = $('#list').jqGrid('getRowData');
        switch (id)
        {
            case '54':
                window.location.href = Routing.generate('product_order_receiving_header_homepage', {PO_PK: PO_PK});
                break;
            case '53':
                window.open(Routing.generate('product_order_receiving_header_send_email_note', {PO_PK: PO_PK}));
                break;
            case '52':
                window.open(Routing.generate('product_order_receiving_header_generate_receiving_labels', {PO_PK: PO_PK}));
                break;
            case '50':
                break;
            case '51':
                break;
        }
    });
});