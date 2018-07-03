jQuery(document).ready(function() {
    var editId = window.location.pathname.substr(1).replace(/[^\d]/g,'');
    var dateObject;
    $("#dateRange, #PO_RequireDate, #PO_ConfirmDate, #gs_POD_ReqDate, #gs_POD_PromDate, #gs_POD_DateUpdated").datepicker({
        defaultDate: "+1w",
        yearRange: "-100:+100",
        numberOfMonths: 3,
        dateFormat: 'yy-mm-dd',
        beforeShowDay: $.datepicker.noWeekends
    });
    var autocompleteDiscountSource;
    $.getJSON(Routing.generate('product_order_get_discount_homepage'), function(json){
        autocompleteDiscountSource = json;
        $( "#discountText" ).autocomplete({
            source: autocompleteDiscountSource,
            minLength: 0,
            minChars: 0,
            autoFill: true,
            mustMatch: true,
            autoFocus : true,
            matchContains: false,
            scrollHeight: 220
        }).on('focus', function(event) {
            var self = this;
            $(self).autocomplete( "search", "");
        });
    });
    $('#selectAll').change(function() {
        $.ajax({
            type: 'POST',
            url: Routing.generate('product_order_set_pod_select_all_homepage', { editid: editId}),
            data: {
                'isSelected' : $('#selectAll').is(":checked")
            },
            success: function(data){
                if(data.success == 'success')
                {
                    $("#list").setGridParam({datatype:'json', page:1}).trigger('reloadGrid');
                }
                else
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.success+"</div>").dialog({modal: true});
                }
            }
        });
    });
    $( "#btn_PO_RequireDate" ).click(function() {
        if($( "#PO_RequireDate").val() === "")
        {
            $("<div title='Error' class = 'ui-state-error ui-corner-all'>Please select a Required date</div>").dialog({modal: true});
        }
        else
        {
            $.ajax({
                url: Routing.generate('product_order_set_required_date_homepage', { editid: editId}),
                data: {'POD_ReqDate':$( "#PO_RequireDate").val()},
                type: 'POST',
                success: function(){
                    $('#list').trigger("reloadGrid");
                    //$( "#PO_RequireDate").val('');
                }
            });
/*            $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>Are you sure you want to change the Required date of the selected items?</div>").dialog({
                modal: true,
                buttons: {
                    'YES': function () {

                        $(this).dialog('destroy');
                    },
                    'NO': function () {
                        $(this).dialog('destroy');
                    }
                }
            });*/
        }
    });
    $( "#btn_PO_ConfirmDate" ).click(function() {
        if($( "#PO_ConfirmDate").val() === "")
        {
            $("<div title='Error' class = 'ui-state-error ui-corner-all'>Please select a confirmation date</div>").dialog({modal: true});
        }
        else
        {
            $.ajax({
                url: Routing.generate('product_order_set_date_homepage', { editid: editId}),
                data: {'POD_PromDate':$( "#PO_ConfirmDate").val()},
                type: 'POST',
                success: function(){
                    $('#list').trigger("reloadGrid");
                    $( "#PO_ConfirmDate").val('');
                }
            });
/*            $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>Are you sure you want to change the confirmation date of the selected items?</div>").dialog({
                modal: true,
                buttons: {
                    'YES': function () {

                        $(this).dialog('destroy');
                    },
                    'NO': function () {
                        $(this).dialog('destroy');
                    }
                }
            });*/
        }
    });
    $( "#btn_changeToOldPrices" ).click(function() {
        $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>Are you sure you want to revert the selected items to old prices?</div>").dialog({
            modal: true,
            buttons: {
                'YES': function () {
                    $.ajax({
                        url: Routing.generate('product_order_revert_to_old_prices_homepage', { editid: editId}),
                        type: 'POST',
                        success: function(){
                            $('#list').trigger("reloadGrid");
                        }
                    });
                    $(this).dialog('destroy');
                },
                'NO': function () {
                    $(this).dialog('destroy');
                }
            }
        });
    });
    $( "#btn_changeDiscount" ).click(function() {
        if($( "#discountText").val() === "")
        {
            $("<div title='Error' class = 'ui-state-error ui-corner-all'>Please enter a discount value</div>").dialog({modal: true});
        }
        else
        {
            $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>Are you sure you want to change the discount of the selected items?</div>").dialog({
                modal: true,
                buttons: {
                    'YES': function () {
                        $.ajax({
                            url: Routing.generate('product_order_set_discount_homepage', { editid: editId}),
                            data: {'POD_VendorDiscount':$( "#discountText").val()},
                            type: 'POST',
                            success: function(){
                                $('#list').trigger("reloadGrid");
                                $( "#discountText").val('');
                            }
                        });
                        $(this).dialog('destroy');
                    },
                    'NO': function () {
                        $(this).dialog('destroy');
                    }
                }
            });
        }
    });
    $('#menu').on('click', 'a.menuLink', function(event){
        event.preventDefault();
        var editId = window.location.pathname.substr(1).replace(/[^\d]/g,'');
        var id= $(this).attr('id');
        var selectedRowId = $('#list').jqGrid ('getGridParam', 'selrow');
        switch (id)
        {
            case '1'://IF RELEASE IS CLICKED
                if(!checkRequiredFields())
                {
                    $("<div title='Received Items' class = 'ui-state-error ui-corner-all'>One of the required fields (Buyer, Vendor Name or Vendor Address) is blank</div>").dialog({modal: true});
                }
                else
                {
                    window.open(Routing.generate('product_order_do_action_homepage', { editid: editId, action: "R"  }),"_self");
                }
                break;
            case '24'://IF UNRELEASE IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_get_received_quantities_ajax', { editid: editId }),
                    success: function(data){
                        if(data.success)
                        {
                            $("<div title='Received Items' class = 'ui-state-error ui-corner-all'>PO contains received items.</div>").dialog({modal: true});
                        }
                        else
                        {
                            $( "<div title='Received Items' class = 'ui-state-highlight ui-corner-all'>WARNING:\nSetting a PO to unreleased will unrelease and remove all items from the queue that have not been received, \nAre you sure you want to do this?</div>" ).dialog({
                                resizable: false,
                                buttons: {
                                    "Confirm": function() {
                                        window.open(Routing.generate('product_order_do_action_homepage', {editid: editId, action: "U"}), "_self");
                                        $( this ).dialog( "destroy" );
                                    },
                                    Cancel: function() {
                                        $( this ).dialog( "destroy" );
                                    }
                                }
                            });
                        }
                    }
                });
                break;
            case '25'://IF CANCEL IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_get_received_quantities_ajax', { editid: editId }),
                    success: function(data){
                        if(data.success)
                        {
                            $("<div title='Received Items' class = 'ui-state-error ui-corner-all'>PO contains received items.</div>").dialog({modal: true});
                        }
                        else
                        {
                            $( "<div title='Received Items' class = 'ui-state-highlight ui-corner-all'>WARNING:\nSetting a PO to unreleased will unrelease and remove all items from the queue that have not been received, \nAre you sure you want to do this?</div>" ).dialog({
                                resizable: false,
                                buttons: {
                                    "Confirm": function() {
                                        window.open(Routing.generate('product_order_do_action_homepage', {editid: editId, action: "C"}), "_self");
                                        $( this ).dialog( "destroy" );
                                    },
                                    Cancel: function() {
                                        $( this ).dialog( "destroy" );
                                    }
                                }
                            });
                        }
                    }
                });
                break;
            case '26'://IF FINISH IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_is_received_quantities_ajax', { editid: editId }),
                    success: function(data){
                        if(!data.success)
                        {
                            $("<div title='Items not received' class = 'ui-state-error ui-corner-all'>You can't set the order to finished until all items have been fully received.</div>").dialog({modal: true});
                        }
                        else
                        {
                            window.open(Routing.generate('product_order_do_action_homepage', { editid: editId, action: "F"  }),"_self");
                        }
                    }
                });
                break;
            case '12'://IF OTHER POS IS CLICKED
                var htmlForPopup = "<div id='OtherPos' title='From Date Range'>"+
                    "<label style='width: 100%; !important;'>Please enter from date range or leave empty and press \'OK\' for all dates.</label>" +
                    "<input data-provide='datepicker' id='dateRange' name='dateRange' type='text'>" +
                    "</div>";
                $(htmlForPopup).dialog({
                    modal: true,
                    buttons: {
                        'OK': function() {
                            var date = $("#dateRange").val();
                            var dateArray;
                            if(date !== '')
                            {
                                dateArray = date.split("/");
                                window.open(Routing.generate('product_order_get_po_by_date_range_homepage', { editid: editId, mm: dateArray[0], dd: dateArray[1], yyyy: dateArray[2] }));
                            }
                            else
                            {
                                window.open(Routing.generate('product_order_get_po_by_date_range_nodate', { editid: editId }));
                            }
                            $(this).dialog('destroy');
                        }
                    }
                });
                break;
            case '21':
            case '13':
                window.open(Routing.generate('product_order_fsc_labels_homepage', { editid: editId }));
                break;
            case '14': //Print Prices
                var htmlForDiv = "<div title='Print Prices?'>Do you want to print prices on the PO?</div>";
                if($('#productEdit_PO_Status').val() === 'U')
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>You cannot print a PO with Unreleased status.</div>").dialog({
                        modal: true,
                        buttons: {
                            'OK': function() {
                                $(this).dialog('destroy');
                            }
                        }
                    });
                }
                else if($('#productEdit_PO_ShippingInstr').val() == '0')
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>Shipping Instructions must be chosen</div>").dialog({
                        modal: true,
                        buttons: {
                            'OK': function() {
                                $(this).dialog('destroy');
                            }
                        }
                    });
                }
                else
                {
                    if($('#productEdit_PO_Status').val() === 'F')
                    {
                        $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>This Purchase Order has already been completed.</div>").dialog({
                            modal: true,
                            buttons: {
                                'OK': function() {
                                    $(htmlForDiv).dialog({
                                        modal: true,
                                        buttons: {
                                            'YES': function () {
                                                $.ajax({
                                                    type: 'POST',
                                                    url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                                    success: function(data){
                                                        if(data.success == 'success')
                                                        {
                                                            //window.open(Routing.generate('ssrs_reporting_service_homepage', { editid: editId, printPrices: 'true' }));
                                                            window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/Report+Project3/Report5', parameterArr: {'PO_PK' : editId, printPrices: 'true' }  }));
                                                            window.location.reload(true);
                                                        }
                                                        else if(data.success == 'fail')
                                                        {
                                                            alert("Something happened.")
                                                        }
                                                    }
                                                });
                                                $(this).dialog('destroy');
                                            },
                                            'NO': function () {
                                                $.ajax({
                                                    type: 'POST',
                                                    url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                                    success: function(data){
                                                        if(data.success == 'success')
                                                        {
                                                            window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/Report+Project3/Report5', parameterArr: {'PO_PK' : editId, printPrices: 'true' }  }));
                                                            window.location.reload(true);
                                                        }
                                                        else if(data.success == 'fail')
                                                        {
                                                            alert("Something happened.")
                                                        }
                                                    }
                                                });
                                                $(this).dialog('destroy');
                                            },
                                            'CANCEL': function () {
                                                $(this).dialog('destroy');
                                            }
                                        }
                                    });
                                    $(this).dialog('destroy');
                                },
                                'CANCEL': function() {
                                    $(this).dialog('destroy');
                                }
                            }
                        });
                    }
                    else
                    {
                        $(htmlForDiv).dialog({
                            modal: true,
                            buttons: {
                                'YES': function () {
                                    $.ajax({
                                        type: 'POST',
                                        url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                        success: function(data){
                                            if(data.success == 'success')
                                            {
                                                window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/Report+Project3/Report5', parameterArr: {'PO_PK' : editId, printPrices: 'true' }  }));
                                                window.location.reload(true);
                                            }
                                            else if(data.success == 'fail')
                                            {
                                                alert("Something happened.")
                                            }
                                        }
                                    });
                                    $(this).dialog('destroy');
                                },
                                'NO': function () {
                                    $.ajax({
                                        type: 'POST',
                                        url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                        success: function(data){
                                            if(data.success == 'success')
                                            {
                                                window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/Report+Project3/Report5', parameterArr: {'PO_PK' : editId, printPrices: 'true' }  }));
                                                window.location.reload(true);
                                            }
                                            else if(data.success == 'fail')
                                            {
                                                alert("Something happened.")
                                            }
                                        }
                                    });
                                    $(this).dialog('destroy');
                                },
                                'CANCEL': function () {
                                    $(this).dialog('destroy');
                                }
                            }
                        });
                        //$(this).dialog('destroy');
                    }
                }
                break;
            case '15': //Split Current Quantity
                selectedRowId = $('#list').jqGrid ('getGridParam', 'selrow');
                if(selectedRowId === null)
                {
                    $("<div title='No row selected' class = 'ui-state-error ui-corner-all'>Please select a row to split</div>").dialog({modal: true});
                }
                else
                {
                    var quantity = $("#"+selectedRowId+"_POD_OrderQty").val();
                    var quantityReceived = $("#"+selectedRowId+"_POD_QtyReceived").val();
                    var IPK = $('#list').jqGrid ('getCell', selectedRowId, 'I_PK');
                    var refText = $('#list').jqGrid ('getCell', selectedRowId, 'pod_reftext');
                    var SO_PK = $('#list').jqGrid ('getCell', selectedRowId, 'SO_PK');
                    var PJ_PK = $('#list').jqGrid ('getCell', selectedRowId, 'PJ_PK');
                    var htmlForDialog = "<div title='Split Item Quantity' id='splitCurrentQty'>Locked Items: "+quantityReceived+" " +
                        "</br>First Quantity <input type='number' id='quantityToSplit' max='"+(quantity-quantityReceived-1)+"' value='"+quantityReceived+"'>"+
                        "</br>Second Quantity <input type='number' id='quantityToSplitSecond' min='1' value='"+(quantity - quantityReceived)+"'>"+
                        "</br>Total of Locked, First and Second should be : "+quantity+
                        "</div>";
                    $(htmlForDialog).dialog({
                        modal: true,
                        buttons: {
                            'OK': function () {
                                if((Number($("#quantityToSplit").val()) + Number($("#quantityToSplitSecond").val())) ===  Number(quantity) && Number($("#quantityToSplit").val()) >=  Number(quantityReceived))
                                {
                                    $.ajax({
                                        type: 'POST',
                                        url: Routing.generate('product_order_split_po_detail_quantity_homepage', { editid: selectedRowId }),
                                        data: {
                                            'I_PK' : IPK,
                                            'refText' : $(refText).text(),
                                            'SO_PK' : SO_PK,
                                            'PJ_PK' : PJ_PK,
                                            'POD_OrderQty' : $("#quantityToSplit").val(),
                                            'POD_OrderQtySplitted' : $("#quantityToSplitSecond").val()
                                        },
                                        success: function(data){
                                            if(data.success == 'success')
                                            {
                                                $('#list').trigger("reloadGrid");
                                            }
                                            else
                                            {
                                                $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.success+"</div>").dialog({modal: true});
                                            }
                                        }
                                    });
                                    $(this).dialog('destroy');
                                }
                                else
                                {
                                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>The total should exactly be equal</div>").dialog({modal: true});
                                }

                            },
                            'CANCEL': function () {
                                $(this).dialog('destroy');
                            }
                        }
                    });
                }
                break;
            case '23':
                $.ajax({
                    url: Routing.generate('product_order_rel_un_po_detail_homepage'),
                    data: {'action':'R','editId':editId},
                    type: 'POST',
                    success: function(){
                        $('#list').trigger("reloadGrid");
                    }
                });
                break;
            case '2':
                $.ajax({
                    url: Routing.generate('product_order_rel_un_po_detail_homepage'),
                    data: {'action':'U','editId':editId},
                    type: 'POST',
                    success: function(){
                        $('#list').trigger("reloadGrid");
                    }
                });
                break;
            case '5':
                $.ajax({
                    url: Routing.generate('product_order_sync_action_homepage'),
                    data: {'syncAction':'SYNC_INFO','editId':editId},
                    type: 'POST',
                    success: function(){
                        $('#list').trigger("reloadGrid");
                    }
                });
                break;
            case '20':
                $.ajax({
                    url: Routing.generate('product_order_sync_action_homepage'),
                    data: {'syncAction':'SYNC_COSTS','editId':editId},
                    type: 'POST',
                    success: function(){
                        $('#list').trigger("reloadGrid");
                    }
                });
                break;
            case '17':
                $.ajax({
                    url: Routing.generate('product_order_sync_action_homepage'),
                    data: {'syncAction':'PO_SYNC_NOtes','editId':editId},
                    type: 'POST',
                    success: function(){
                        $('#list').trigger("reloadGrid");
                    }
                });
                break;
            case '16':
                var windowName = 'PriceAdjust';
                $.ajax({
                    url: Routing.generate('product_order_get_check_detail_items_printed_date', {'editid' : editId}),
                    type: 'POST',
                    success: function(data){
                        if(data.success != 'error')
                        {
                            var popup = window.open(Routing.generate('product_order_pod_price_adjust_homepage', { editid: data.success }), windowName, "height=600,width=1000");
                            popup.onunload = function(){
                                $('#list').trigger("reloadGrid",[{current:true}]);
                            }
                        }
                        else
                        {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>Please select one and only one item.</div>").dialog({modal: true});
                        }
                    }
                });
                break;
            case '7':
                $("html, body").animate({ scrollTop: $(document).height() }, 1000);
                break;
            case '18':
            case '10':
                /*window.open(Routing.generate('elfinder', { id: 'productEdit_elfinder',  dir: 'Logistics-BW/PURCHASING-BW/PO/P000'+editId   }), 'File Manager',
                    ', width=800, height=600'
                );*/
                var PONumID = $('#PONumID').data('id');
                window.open('TAPL://openPOFiles/' + editId + '/' + PONumID);
                break;
            case '27':
                var htmlFormDialog =
                    "<div class='radio' title='Choose an attachment type'>"+"" +
                    "&nbsp;&nbsp;&nbsp;<input type='radio' name='optionsRadios' id='excelAttachment' value='excel' checked>Excel</br>"+
                    "&nbsp;&nbsp;&nbsp;<input type='radio' name='optionsRadios' id='htmlAttachment' value='html'>HTML</br>"+
                    "&nbsp;&nbsp;&nbsp;<input type='radio' name='optionsRadios' id='pdfAttachment' value='pdf'>PDF</br>" +
                    "&nbsp;&nbsp;&nbsp;<input type='radio' name='optionsRadios' id='noAttachment' value='none'>None</br>" +
                    "</div>";
                $(htmlFormDialog).dialog({
                    modal: true,
                    buttons: {
                        'OK': function () {
                            window.open(Routing.generate('product_order_send_email_form_homepage', { editid: editId, attachmentType: $('input[name=optionsRadios]:checked').val() }),'Send Email', 'width=2000,toolbar=1,resizable=1,scrollbars=yes,height=768,top=50,left=50');
                            $(this).dialog('destroy');
                        },
                        'CANCEL': function () {
                            $(this).dialog('destroy');
                        }
                    }
                });
                break;
            case '22':
                if(!checkRequiredFields())
                {
                    $("<div title='Received Items' class = 'ui-state-error ui-corner-all'>One of the required fields (Buyer, Vendor Name or Vendor Address) is blank</div>").dialog({modal: true});
                }
                else
                {
                    if ($('#productEdit_PO_PrintedDate').val() !== '') {
                        $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>This PO has already been printed.</div>").dialog({
                            modal: true,
                            buttons: {
                                'OK': function () {
                                    switch ($('#productEdit_PO_Status').val()) {
                                        case 'U':
                                        case 'C':
                                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>You cannot email an EDI with this status</div>").dialog({modal: true});
                                            break;
                                        case 'R':
                                        case 'F':
                                            //window.open(Routing.generate('product_order_send_email_form_homepage', { editid: editId, attachmentType: 'xml' }),'Send Email', 'width=2000,toolbar=1,resizable=1,scrollbars=yes,height=768,top=50,left=50');
                                            $.ajax({
                                                type: 'POST',
                                                url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                                success: function(data){
                                                    if(data.success == 'success')
                                                    {
                                                        window.open('tapl://EmailPOXML/' + editId);
                                                        window.location.reload(true);
                                                    }
                                                    else if(data.success == 'fail')
                                                    {
                                                        alert("Something happened.")
                                                    }
                                                }
                                            });
                                            break;
                                    }
                                    $(this).dialog('destroy');
                                },
                                'CANCEL': function () {
                                    $(this).dialog('destroy');
                                }
                            }
                        });
                    }
                    else {
                        switch ($('#productEdit_PO_Status').val()) {
                            case 'U':
                            case 'C':
                                $("<div title='Error' class = 'ui-state-error ui-corner-all'>You cannot email an EDI with this status</div>").dialog({modal: true});
                                break;
                            case 'R':
                            case 'F':
                                //window.open(Routing.generate('product_order_send_email_form_homepage', { editid: editId, attachmentType: 'xml' }),'Send Email', 'width=2000,toolbar=1,resizable=1,scrollbars=yes,height=768,top=50,left=50');
                                $.ajax({
                                    type: 'POST',
                                    url: Routing.generate('product_order_save_po_printed_date', { editid: editId }),
                                    success: function(data){
                                        if(data.success == 'success')
                                        {
                                            window.open('tapl://EmailPOXML/' + editId);
                                            window.location.reload(true);
                                        }
                                        else if(data.success == 'fail')
                                        {
                                            alert("Something happened.")
                                        }
                                    }
                                });
                                break;
                        }
                    }
                }
                break;
            case '32':
                var saveLayoutDialog =
                    "<div title='Save Layout'>"+
                    "<label style='width: 100%; !important;'>Name the layout</label></br>" +
                    "<input type='text' name='nameOfLayout' id='nameOfLayout' placeholder='Name of Layout' style='width: 100%; !important;'>" +
                    "</div>";
                $(saveLayoutDialog).dialog({
                    modal: true,
                    buttons: {
                        'OK': function () {
                            $.ajax({
                                type: 'POST',
                                url: Routing.generate('save_grid_parameters_homepage', { gridName: 'PODetail' }) ,
                                data: {
                                    'layoutName': $("#nameOfLayout").val(),
                                    'gridData': window.localStorage.getItem(window.location.pathname+"#list")
                                },
                                success: function(data){
                                    if(data.success == 'success')
                                    {
                                    }
                                    else if(data.success == 'fail')
                                    {
                                    }
                                }
                            });
                            $(this).dialog('destroy');
                        },
                        'CANCEL': function () {
                            $(this).dialog('destroy');
                        }
                    }
                });
                break;
            case '204':
                var PONumID = $('#PONumID').data('id');
                window.open('TAPL://newPOTask/' + editId + '/' + PONumID);
                break;
            case '205':
                window.open(Routing.generate('elfinder', { id: 'productEdit_elfinder',  dir: 'Logistics-BW/PURCHASING-BW/PO/P000'+editId   }), 'File Manager',
                    ', width=800, height=600'
                );
                break;
            case '206':
                $("<div title='Warning' class = 'ui-state-highlight ui-corner-all'>Are you sure you want to revert the selected items to old prices?</div>").dialog({
                    modal: true,
                    buttons: {
                        'YES': function () {
                            $.ajax({
                                url: Routing.generate('product_order_revert_to_old_prices_homepage', { editid: editId}),
                                type: 'POST',
                                success: function(){
                                    $('#list').trigger("reloadGrid");
                                }
                            });
                            $(this).dialog('destroy');
                        },
                        'NO': function () {
                            $(this).dialog('destroy');
                        }
                    }
                });
                break;
            case '19':
                window.open(Routing.generate('product_order_po_component_detail_homepage', { POPK: editId   }));
                break;
        }
    });
});
function checkRequiredFields()
{
    var fieldsNotNull = false;
    if($("#productEdit_Vendor_Name").val() != '' && $("#productEdit_VendAdd_PK").val() != '' && $("#productEdit_PO_Buyer").val() != '')
    {
        fieldsNotNull = true;
    }
    return fieldsNotNull;
}
