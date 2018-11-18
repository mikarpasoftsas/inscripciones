function evaluate(){return"Preinforme"==$("#sales_stage :selected").text()?require():optional()}function require(){return addToValidate("EditView","next_call_c_date","date",!0,"Proxima llamada debe ser mayor a la fecha actual"),addToValidateBinaryDependency("EditView","next_call_c_hours","alpha",!1,"Falta campo requerido: Horas","next_call_c_date"),addToValidateBinaryDependency("EditView","next_call_c_minutes","alpha",!1,"Falta campo requerido: Minutos","next_call_c_date"),addToValidateBinaryDependency("EditView","next_call_c_meridiem","alpha",!1,"Falta campo requerido: Meridiano","next_call_c_date"),!0}function optional(){return removeFromValidate("EditView","next_call_c_date"),!0}function compareDates(){var e,a=new Date,t=new Date($("#next_call_c_date").val());if("Preinforme"==$("#sales_stage :selected").text()&&t<a)return(e=$("#next_call_c_hours")).val($("option:first",e).val()),(e=$("#next_call_c_minutes")).val($("option:first",e).val()),(e=$("#next_call_c_meridiem")).val($("option:first",e).val()),$("#next_call_c_date").val(""),$("#next_call_c").val(""),!1;return!0}$(document).ready(function(){evaluate(),$("#SAVE").removeAttr("onclick").click(function(){var e=document.getElementById("EditView");return e.action.value="Save",check_form("EditView")&&compareDates()&&SUGAR.ajaxUI.submitForm(e),!1})}),$("#SAVE").click(function(){return compareDates()});

$(function(){
    var Y = YUI().use('node', 'event', function (Y) {
        // node and event modules are loaded.
    });    
    var container = Y.one('#account_name');
    container.on('change', function (e) {
        var account_id = Y.one('#account_id').get('value');
        console.log('account_name account_id', account_id);
    });
});
/*
console.log('js', new Date());
console.log('inputNode', SUGAR.AutoComplete.account_name.inputNode);
SUGAR.AutoComplete.account_name.inputNode.ac.on('select', function(e) {
    console.log('js AutoComplete', new Date());
});
*/

/*
var myHandler = function(sType, aArgs) {
    console.log('myHandler sType', sType);
    console.log('myHandler aArgs', aArgs);
    var myAC = aArgs[0]; // reference back to the AC instance
    var elLI = aArgs[1]; // reference to the selected LI element
    var oData = aArgs[2]; // object literal of selected item's result data

    // update hidden form field with the selected item's ID
    // myHiddenField.value = oData.id;
};
var oAC = new YAHOO.widget.AutoComplete("account_name");
oAC.itemSelectEvent.subscribe(myHandler);
YAHOO.account_name.ItemSelectHandler = function() {
    // Use a LocalDataSource
    var oDS = new YAHOO.util.LocalDataSource(YAHOO.example.Data.accounts);
    oDS.responseSchema = {fields : ["name", "id"]};

    // Instantiate the AutoComplete
    var oAC = new YAHOO.widget.AutoComplete("myInput", "myContainer", oDS);
    oAC.resultTypeList = false;
    
    // Define an event handler to populate a hidden form field
    // when an item gets selected
    var myHiddenField = YAHOO.util.Dom.get("myHidden");
    var myHandler = function(sType, aArgs) {
        var myAC = aArgs[0]; // reference back to the AC instance
        var elLI = aArgs[1]; // reference to the selected LI element
        var oData = aArgs[2]; // object literal of selected item's result data
        
        // update hidden form field with the selected item's ID
        myHiddenField.value = oData.id;
    };
    oAC.itemSelectEvent.subscribe(myHandler);
    
    // Rather than submit the form,
    // alert the stored ID instead
    var onFormSubmit = function(e, myForm) {
        YAHOO.util.Event.preventDefault(e);
        alert("Company ID: " + myHiddenField.value);
    };
    YAHOO.util.Event.addListener(YAHOO.util.Dom.get("myForm"), "submit", onFormSubmit);

    return {
        oDS: oDS,
        oAC: oAC
    };
}();
*/