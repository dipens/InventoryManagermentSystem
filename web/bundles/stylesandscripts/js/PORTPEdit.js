$( document ).ajaxStop(function() {
    var PORTP_RTP_NumID = $("#PORTP_RTP_NumID");
    var PORTP_RTP_RefText = $("#PORTP_RTP_RefText");
    var PORTP_RTP_Type = $("#PORTP_RTP_Type");
    var PORTP_RTP_Status = $("#PORTP_RTP_Status");
    var PORTP_RTP_CreatedSysUser = $("#PORTP_RTP_CreatedSysUser");
    var PORTP_RTP_UpdatedSysUser = $("#PORTP_RTP_UpdatedSysUser");
    var PORTP_RTP_Owner = $("#PORTP_RTP_Owner");
    var PORTP_RTP_DateActivation = $("#PORTP_RTP_DateActivation");
    var PORTP_RTP_DateCreated = $("#PORTP_RTP_DateCreated");
    var PORTP_RTP_DateUpdated = $("#PORTP_RTP_DateUpdated");
    var PORTP_RTP_RespCode = $("#PORTP_RTP_RespCode");
    var PORTP_RTP_NoteResp = $("#PORTP_RTP_NoteResp");
    var PORTP_RPT_PMrequest = $("#PORTP_RPT_PMrequest");
    var PORTP_RTP_Note = $("#PORTP_RTP_Note");
    var activate = $("#101");
    var finalize = $("#102");
    var cancel = $("#103");
    var reject = $("#104");
    var takeOwnership = $("#105");
    var userRoles = $("#userRoles").data("id");
    if(userRoles.indexOf('ROLE_PURCHASING') === -1 )
    {
        takeOwnership.addClass('disabledLink');
        finalize.addClass('disabledLink');
        reject.addClass('disabledLink');
    }
    switch(PORTP_RTP_Status.val())
    {
        case '0':
            PORTP_RTP_NumID.prop('readonly', true);
            PORTP_RTP_RefText.prop('readonly', true);
            PORTP_RTP_Type.prop('disabled', 'disabled');
            PORTP_RTP_Status.prop('disabled', 'disabled');
            PORTP_RTP_CreatedSysUser.prop('readonly', true);
            PORTP_RTP_UpdatedSysUser.prop('readonly', true);
            PORTP_RTP_Owner.prop('readonly', true);
            PORTP_RTP_DateActivation.prop('readonly', true);
            PORTP_RTP_DateCreated.prop('readonly', true);
            PORTP_RTP_DateUpdated.prop('readonly', true);
            PORTP_RTP_RespCode.prop('disabled', 'disabled');
            PORTP_RTP_NoteResp.prop('readonly', true);
            break;
        case '2':
            PORTP_RTP_NumID.prop('readonly', true);
            PORTP_RTP_RefText.prop('readonly', true);
            PORTP_RTP_Type.prop('disabled', 'disabled');
            PORTP_RTP_Status.prop('disabled', 'disabled');
            PORTP_RTP_CreatedSysUser.prop('readonly', true);
            PORTP_RTP_UpdatedSysUser.prop('readonly', true);
            PORTP_RTP_Owner.prop('readonly', true);
            PORTP_RTP_DateActivation.prop('readonly', true);
            PORTP_RTP_DateCreated.prop('readonly', true);
            PORTP_RTP_DateUpdated.prop('readonly', true);
            PORTP_RPT_PMrequest.prop('disabled', 'disabled');
            PORTP_RTP_Note.prop('readonly', true);
            activate.addClass('disabledLink');
            break;
        case '9':
        case '10':
        case '11':
            PORTP_RTP_NumID.prop('readonly', true);
            PORTP_RTP_RefText.prop('readonly', true);
            PORTP_RTP_Type.prop('disabled', 'disabled');
            PORTP_RTP_Status.prop('disabled', 'disabled');
            PORTP_RTP_CreatedSysUser.prop('readonly', true);
            PORTP_RTP_UpdatedSysUser.prop('readonly', true);
            PORTP_RTP_Owner.prop('readonly', true);
            PORTP_RTP_DateActivation.prop('readonly', true);
            PORTP_RTP_DateCreated.prop('readonly', true);
            PORTP_RTP_DateUpdated.prop('readonly', true);
            PORTP_RPT_PMrequest.prop('disabled', 'disabled');
            PORTP_RTP_Note.prop('readonly', true);
            activate.addClass('disabledLink');
            finalize.addClass('disabledLink');
            cancel.addClass('disabledLink');
            reject.addClass('disabledLink');
            takeOwnership.addClass('disabledLink');
            PORTP_RTP_RespCode.prop('disabled', 'disabled');
            PORTP_RTP_NoteResp.prop('readonly', true);
            break;
        default:
            PORTP_RTP_NumID.prop('readonly', true);
            PORTP_RTP_RefText.prop('readonly', true);
            PORTP_RTP_Type.prop('disabled', 'disabled');
            PORTP_RTP_Status.prop('disabled', 'disabled');
            PORTP_RTP_CreatedSysUser.prop('readonly', true);
            PORTP_RTP_UpdatedSysUser.prop('readonly', true);
            PORTP_RTP_Owner.prop('readonly', true);
            PORTP_RTP_DateActivation.prop('readonly', true);
            PORTP_RTP_DateCreated.prop('readonly', true);
            PORTP_RTP_DateUpdated.prop('readonly', true);
            PORTP_RPT_PMrequest.prop('disabled', 'disabled');
            PORTP_RTP_Note.prop('readonly', true);
            PORTP_RTP_RespCode.prop('disabled', 'disabled');
            PORTP_RTP_NoteResp.prop('readonly', true);
            break;
    }
});
jQuery(document).ready(function() {
    var RTP_PK = window.location.pathname.substr(1).replace(/[^\d]/g,'');
    var userRoles = $("#userRoles").data("id");
    var PORTP_RTP_RefText = $("#PORTP_RTP_RefText");
    var PORTP_RPT_PMrequest = $("#PORTP_RPT_PMrequest");
    $('#menu').on('click', 'a.menuLink', function(event){
        event.preventDefault();
        var id= $(this).attr('id');
        switch (id)
        {
            case '101':
                if($("#PORTP_RTP_Note").val() === '' || PORTP_RPT_PMrequest.val() == 0)
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>Message to purchasing OR PM request must not be blank.</div>").dialog({});
                }
                else
                {
                    $.ajax({
                        type: 'POST',
                        url: Routing.generate('product_order_portp_change_status_homepage'),
                        data: {
                            status :'2',
                            RTP_PK: RTP_PK
                        },
                        success: function(data){
                            if(data.success == 'success')
                            {
                                //window.open("tapl://EmailRTP/"+RTP_PK+"/2");
                                window.location.reload(true);
                            }
                            else
                            {
                                $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.success+"</div>").dialog({});
                            }
                        },
                        error: function (jqXHR, exception) {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>" + exception + "</div>").dialog({});
                            // Your error handling logic here..
                        }
                    });
                }
                break;
            case '102':
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_portp_change_status_homepage'),
                    data: {
                        status: '9',
                        RTP_PK: RTP_PK
                    },
                    success: function (data) {
                        if (data.success == 'success') {
                            //window.open("tapl://EmailRTP/"+RTP_PK+"/9");
                            window.location.reload(true);
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
                break;
            case '103':
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_portp_change_status_homepage'),
                    data: {
                        status :'10',
                        RTP_PK: RTP_PK
                    },
                    success: function(data){
                        if(data.success == 'success')
                        {
                            //window.open("tapl://EmailRTP/"+RTP_PK+"/10");
                            window.location.reload(true);
                        }
                        else
                        {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.success+"</div>").dialog({});
                        }
                    },
                    error: function (jqXHR, exception) {
                        $("<div title='Error' class = 'ui-state-error ui-corner-all'>" + exception + "</div>").dialog({});
                        // Your error handling logic here..
                    }
                });
                break;
            case '104':
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('product_order_portp_change_status_homepage'),
                    data: {
                        status :'11',
                        RTP_PK: RTP_PK
                    },
                    success: function(data){
                        if(data.success == 'success')
                        {
                            window.location.reload(true);
                        }
                        else
                        {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.success+"</div>").dialog({});
                        }
                    },
                    error: function (jqXHR, exception) {
                        $("<div title='Error' class = 'ui-state-error ui-corner-all'>" + exception + "</div>").dialog({});
                        // Your error handling logic here..
                    }
                });
                break;
            case '105':
                if(userRoles.indexOf('ROLE_PURCHASING') === -1)
                {
                    $("<div title='Error' class = 'ui-state-error ui-corner-all'>You are not authorized to do this action</div>").dialog({});
                }
                else {
                    $.ajax({
                        type: 'POST',
                        url: Routing.generate('product_order_portp_take_ownership_homepage'),
                        data: {
                            RTP_PK: RTP_PK
                        },
                        success: function (data) {
                            if (data.success == 'success') {
                                window.location.reload(true);
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
                break;
            case '213':
                var RTP_NumID = $('#RTP_NumID').data('id');
                window.open('TAPL://openRTPFiles/' + RTP_PK + '/' + RTP_NumID);
                break;
            case '195':
                window.open(Routing.generate('product_order_inventory_reorder_filtered_lookup_homepage', { mode: 0, RefText: PORTP_RTP_RefText.val()  }));
                break;
        }
    });
});