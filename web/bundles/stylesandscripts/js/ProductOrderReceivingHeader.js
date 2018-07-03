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
            case '46':
                var somethingToReceive = false;
                var quantityNotValid = false;
                for (i = 0; i < myData.length; i++) {
                    if(myData[i].POD_ReceivingQty != '0')
                    {
                        somethingToReceive = true;
                    }
                    if((parseInt(myData[i].POD_ReceivingQty) + parseInt(myData[i].POD_TotalReceived)) > parseInt(myData[i].POD_OrderQty))
                    {
                        quantityNotValid = true;
                        $("<div title='Error' class = 'ui-state-error ui-corner-all'>Receiving Qty should be less than or equal to the sum of Ordered and Received Quantity.</div>").dialog({});
                    }
                }
                if(somethingToReceive && !quantityNotValid) {
                    $.ajax({
                        type: 'POST',
                        url: Routing.generate('product_order_receiving_header_receive'),
                        data: {
                            PO_PK: PO_PK
                        },
                        success: function (data) {
                            if (data.success == 'success') {
                                window.location.href = Routing.generate('product_order_receiving_header_receive_list', {PO_PK: PO_PK});
                                /*window.open(Routing.generate('product_order_portp_send_email_homepage', {
                                    RTP_PK: RTP_PK,
                                    status: "2"
                                }));*/
                                //window.location.reload(true);
                                console.log("DONE");
                            }
                            else {
                                $("<div title='Error' class = 'ui-state-error ui-corner-all'>" + data.success + "</div>").dialog({});
                            }
                        },
                        error: function (jqXHR, exception) {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>" + exception + "</div>").dialog({});
                            // Your error handling logic here..
                        }
                    });
                }
                else
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>Nothing to Receive</div>").dialog({});
                }
                break;
            case '48':
                window.open(Routing.generate('product_order_receiving_header_send_email_note', {PO_PK: PO_PK}));
                break;
            case '47':
                window.open(Routing.generate('product_order_receiving_header_generate_receiving_labels', {PO_PK: PO_PK}));
                break;
            case '44':
                window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/frmReceiving/rptPackingSlipForServices', parameterArr: {'PO_PK' : PO_PK, W3SessionID : '' }  }));
                break;
            case '45':
                window.open(Routing.generate('ssrs_reporting_service_homepage', { reportName: '/frmReceiving/rptShipmentReadyTag', parameterArr: {'PO_PK' : PO_PK, W3SessionID : '' }  }));
                break;
        }
    });
});