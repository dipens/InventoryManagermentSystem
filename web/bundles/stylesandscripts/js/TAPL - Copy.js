jQuery(document).ready(function() {
    $('#menu').on('click', 'a.menuLink', function(event) {
        event.preventDefault();
        var id= $(this).attr('id');
        switch (id)
        {
            case '31':
                window.open(Routing.generate('Product_Order_NewPO'),"_blank");
                break;
            case '30':
                window.open(Routing.generate('product_order_lookup_homepage'),"_blank");
                break;
            case '35':
                window.open(Routing.generate('contacts_lookup_homepage'),"_blank");
                break;
            case '37':
                window.open(Routing.generate('vendor_lookup_homepage'),"_blank");
                break;
            case '53':
                window.open(Routing.generate('employee_lookup_homepage'),"_blank");
                break;
            case '41':
                window.open(Routing.generate('customer_lookup_homepage'),"_blank");
                break;
            case '4':
                window.open('tapl://openProjectsList/');
                break;
            case '57':
                window.open(Routing.generate('product_order_inventory_reorder_lookup_homepage', {'mode': '0'}),"_blank");
                break;
            case '55':
                window.open(Routing.generate('product_order_expedited_po_lookup_homepage'),"_blank");
                break;
            case '56':
                window.open(Routing.generate('product_order_rtprte_lookup_homepage'),"_blank");
                break;
            case '82':
                window.open(Routing.generate('picking_outstanding_picking_homepage'),"_blank");
                break;
            case '83':
                window.open(Routing.generate('picking_outstanding_packing_homepage'),"_blank");
                break;
            case '84':
                window.open(Routing.generate('picking_my_outstanding_picking_homepage'),"_blank");
                break;
            case '85':
                window.open(Routing.generate('picking_my_outstanding_packing_homepage'),"_blank");
                break;
            case '86':
                window.open(Routing.generate('picking_lookup_all_homepage'),"_blank");
                break;
            case '87':
                window.open(Routing.generate('picking_packing_lookup_all_homepage'),"_blank");
                break;
            case '67':
                window.open(Routing.generate('inventory_regular_inventory_homepage'),"_blank");
                break;
            case '68':
                window.open(Routing.generate('inventory_miscellaneous_inventory_homepage'),"_blank");
                break;
            case '73':
                window.open(Routing.generate('inventory_inventory_adjustment_lookup_homepage'),"_blank");
                break;
            case '74':
                window.open(Routing.generate('inventory_inventory_transfer_lookup_homepage'),"_blank");
                break;
            case '125':
                window.open(Routing.generate('inventory_ttsswa_homepage'),"_blank");
                break;
            case '1260':
                window.open(Routing.generate('inventory_ttsswa_outstanding_homepage'),"_blank");
                break;
            case '106':
                window.open(Routing.generate('vendor_vendor_quote_lookup_homepage'),"_blank");
                break;
            case '75':
                window.open(Routing.generate('inventory_inventory_adjustment_transfer_lookup_homepage'),"_blank");
                break;
            case '71':
                window.open(Routing.generate('inventory_inventory_adjustment_new_inventory_homepage', {'IAType': '6'}),"_blank");
                break;
            case '72':
                window.open(Routing.generate('inventory_inventory_adjustment_new_inventory_homepage', {'IAType': '8'}),"_blank");
                break;
            case '69':
                window.open(Routing.generate('inventory_item_master_new_item_homepage', {'IItemType': 'W'}),"_blank"); //Regular
                break;
            case '70':
                window.open(Routing.generate('inventory_item_master_new_item_homepage', {'IItemType': 'C'}),"_blank"); //Misc
                break;
            case '42':
                window.open(Routing.generate('product_order_receiving_lookup_homepage'),"_blank");  //Receiving
                break;
            case '126':
                window.open(Routing.generate('vendor_new_vendor_quote_homepage'),"_blank");  //New Vendor Quote
                break;
            case '133':
                window.open(Routing.generate('product_order_po_items_received_homepage'),"_blank");  //New Vendor Quote
                break;
            case '207':
                window.open(Routing.generate('vendor_reactivate_vendor_quote_homepage'));
                break;
            case '187':
                window.open(Routing.generate('customer_sales_order_lookup_homepage'));
                break;
            case '186':
                window.open(Routing.generate('sales_order_my_sales_order_lookup_homepage'));
                break;
            case '9':
                window.open(Routing.generate('sales_order_sales_order_lookup_homepage'));
                break;
        }
    })
});