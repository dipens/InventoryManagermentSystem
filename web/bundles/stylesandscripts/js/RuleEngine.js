function handleScriptsAndStyles(json)
{
    $.each (json, function (bb) {
        var field = $("#"+json[bb].fieldName);
        switch (json[bb].scriptToApply)
        {
            case 'disableField':
                field.prop("disabled", true);
                break;
            case 'hideField':
                $("label[for="+json[bb].fieldName+"]").hide();
                field.hide();
                break;
            case 'readonlyField':
                field.attr('readonly', true);
                break;
        }
        switch (json[bb].styleToApply)
        {
            case 'erroredStyle':
                field.addClass("has-error");
                break;
            case 'disableLink':
                field.parent().addClass("disabled");
                break;
            case 'selectErroredStyle':
                field.css("background", "#FDC1C1");
                break;
        }
    });

}
function enableDisableLinks(currentPage)
{
    switch(currentPage)
    {
        case 'productorderedit':
            switch($('#productEdit_PO_Status').val())
            {
                case 'R':
                    $('#1').addClass("disabled");
                    break;
                case 'U':
                    $('#32').addClass("disabled");
                    break;
                case 'C':
                    $('#33').addClass("disabled");
                    break;
                case 'F':
                    $('#34').addClass("disabled");
                    break;
            }
            break;
    }
}