$(document).ready(function() {
    var PickPK = window.location.pathname.substr(1).replace(/[^\d]/g,'');
    var dateObject;
    $('#menu').on('click', 'a.menuLink', function(event){
        event.preventDefault();
        var editId = window.location.pathname.substr(1).replace(/[^\d]/g,'');
        var id= $(this).attr('id');
        var selectedRowId = $('#list').jqGrid ('getGridParam', 'selrow');
        switch (id)
        {
            case '88'://IF ISSUE IS CLICKED
                var isValid = true;
                var msg = '';

                $.ajax({
                    type: 'POST',
                    url: Routing.generate('picking_picking_slip_check_validity_homepage'),
                    data: {
                        action :'Issue',
                        PickPK: PickPK
                    },
                    success: function(data){
                        if(!$.isEmptyObject(data))
                        {
                            var errors = {};
                            $.each (data, function (bb) {
                                errors['W3viewPicking['+data[bb].FieldName.replace('_','')+']'] = data[bb].msg
                            });
                            $("#W3viewPickingForm").validate().showErrors(errors);
                        }
                        else
                        {
                            $.ajax({
                                type: 'POST',
                                url: Routing.generate('picking_picking_slip_issue_slip_homepage'),
                                data: {
                                    action :'Issue',
                                    PickPK: PickPK
                                },
                                success: function(data){
                                    window.location.reload(true);
                                }
                            });
                        }
                    }
                });
                break;
            case '89'://IF Renew IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('picking_picking_slip_issue_slip_homepage'),
                    data: {
                        action :'Renew',
                        PickPK: PickPK
                    },
                    success: function(data){
                        window.location.reload(true);
                    }
                });
                break;
            case '90'://IF Pick IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('picking_picking_slip_issue_slip_homepage'),
                    data: {
                        action :'Pick',
                        PickPK: PickPK,
                        PickedBy: $("#W3viewPicking_PickPickedBy").val()
                    },
                    success: function(data){
                        window.location.reload(true);
                    }
                });
                break;
            case '91'://IF Pack IS CLICKED
                $.ajax({
                    type: 'POST',
                    url: Routing.generate('picking_picking_slip_issue_slip_homepage'),
                    data: {
                        action :'Pack',
                        PickPK: PickPK
                    },
                    success: function(data){
                        if(data.success == 'fail')
                        {
                            $("<div title='Error' class = 'ui-state-error ui-corner-all'>"+data.errormsg+"</div>").dialog();
                        }
                        else if(data.success == 'success')
                        {
                            window.location.href = Routing.generate('picking_packing_slip_homepage', {'PackPK' : data.newPK})
                        }

                    }
                });
                //exec PACKING_Create 131266
                break;
            case '92'://IF Labels IS CLICKED
                //SELECT "Pick_PK" ,"I_PK" ,"PjD_PK" ,"I_ItemNumID" ,"Pick_DoorNum" ,SUM("Pick_QtyPicking" )  FROM "dbo"."tblPickingDetails" WHERE ((("Pick_QtyPicking" > 0 ) AND ("Pick_PK" = 130435 ) ) AND NOT(("Pick_DoorNum" IS NULL ) ) ) GROUP BY "Pick_PK" ,"I_PK" ,"PjD_PK" ,"I_ItemNumID" ,"Pick_DoorNum"  HAVING NOT((SUM("Pick_QtyPicking" )  = 0 ) ) ORDER BY "dbo"."tblPickingDetails"."I_ItemNumID"  ,"dbo"."tblPickingDetails"."Pick_DoorNum"
                break;
            case '93'://IF Print IS CLICKED
                break;
        }
    });
});
