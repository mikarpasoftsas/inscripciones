

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='mks_RegistrationReceipts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
<input title="Procesar Pago X" accessKey="P" type="button" class="button" onClick="document.location='index.php?entryPoint=processPayment&type_rr_c=_x_c&record={$fields.id.value}'" name="processpayment_x" id="processpayment_x" value="Procesar Pago Tipo X"/>
<input title="Procesar Pago A" accessKey="P" type="button" class="button" onClick="document.location='index.php?entryPoint=processPayment&type_rr_c=_a_c&record={$fields.id.value}'" name="processpayment_a" id="processpayment_a" value="Procesar Pago Tipo A"/>
<input type="button" class="button" onClick="showPopup('pdf');" value="{$MOD.LBL_PRINT_AS_PDF}"/>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=mks_RegistrationReceipts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>                    {/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='DEFAULT' module='mks_RegistrationReceipts'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='mks_RegistrationReceipts'}
</a>
</li>

{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='mks_RegistrationReceipts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li><input title="Procesar Pago X" accessKey="P" type="button" class="button" onClick="document.location='index.php?entryPoint=processPayment&type_rr_c=_x_c&record={$fields.id.value}'" name="processpayment_x" id="processpayment_x" value="Procesar Pago Tipo X"/></li>
<li><input title="Procesar Pago A" accessKey="P" type="button" class="button" onClick="document.location='index.php?entryPoint=processPayment&type_rr_c=_a_c&record={$fields.id.value}'" name="processpayment_a" id="processpayment_a" value="Procesar Pago Tipo A"/></li>
<li><input type="button" class="button" onClick="showPopup('pdf');" value="{$MOD.LBL_PRINT_AS_PDF}"/></li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=mks_RegistrationReceipts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_RECEIPTS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="date" field="date_receipts_c" colspan='3' >

{if !$fields.date_receipts_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.date_receipts_c.value) <= 0}
{assign var="value" value=$fields.date_receipts_c.default_value }
{else}
{assign var="value" value=$fields.date_receipts_c.value }
{/if}
<span class="sugar_field" id="{$fields.date_receipts_c.name}">{$value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE_RR' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="type_rr_c"  >

{if !$fields.type_rr_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.type_rr_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.type_rr_c.name}" value="{ $fields.type_rr_c.options }">
{ $fields.type_rr_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.type_rr_c.name}" value="{ $fields.type_rr_c.value }">
{ $fields.type_rr_c.options[$fields.type_rr_c.value]}
{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="name" field="name"  >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="mks_registration_mks_registrationreceipts_1_name"  >

{if !$fields.mks_registration_mks_registrationreceipts_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value)}
{capture assign="detail_url"}index.php?module=mks_Registration&action=DetailView&record={$fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="mks_registration_mks_registrationreceipts_1mks_registration_ida" class="sugar_field" data-id-value="{$fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value}">{$fields.mks_registration_mks_registrationreceipts_1_name.value}</span>
{if !empty($fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value)}</a>{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="relate" field="mks_custompaymentplan_mks_registrationreceipts_1_name" colspan='3' >

{if !$fields.mks_custompaymentplan_mks_registrationreceipts_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.mks_custom8555entplan_ida.value)}
{capture assign="detail_url"}index.php?module=mks_CustomPaymentPlan&action=DetailView&record={$fields.mks_custom8555entplan_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="mks_custom8555entplan_ida" class="sugar_field" data-id-value="{$fields.mks_custom8555entplan_ida.value}">{$fields.mks_custompaymentplan_mks_registrationreceipts_1_name.value}</span>
{if !empty($fields.mks_custom8555entplan_ida.value)}</a>{/if}
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="text" field="description" colspan='3' >

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS_REGISTRATION_RECEIPTS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="status_registration_receipts_c"  >

{if !$fields.status_registration_receipts_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.status_registration_receipts_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.status_registration_receipts_c.name}" value="{ $fields.status_registration_receipts_c.options }">
{ $fields.status_registration_receipts_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status_registration_receipts_c.name}" value="{ $fields.status_registration_receipts_c.value }">
{ $fields.status_registration_receipts_c.options[$fields.status_registration_receipts_c.value]}
{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BALANCE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="float" field="balance_c"  >

{if !$fields.balance_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.balance_c.name}">
{sugar_number_format var=$fields.balance_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_DATE_C' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="datetimecombo" field="payment_date_c"  >

{if !$fields.payment_date_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.payment_date_c.value) <= 0}
{assign var="value" value=$fields.payment_date_c.default_value }
{else}
{assign var="value" value=$fields.payment_date_c.value }
{/if} 
<span class="sugar_field" id="{$fields.payment_date_c.name}">{$fields.payment_date_c.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="assigned_user_name"  >

{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}

</div>


</div>

</div>
                        </div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">
<div>&nbsp;</div>





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='mks_RegistrationReceipts'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_RECEIPTS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="date" field="date_receipts_c" colspan='3' >

{if !$fields.date_receipts_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.date_receipts_c.value) <= 0}
{assign var="value" value=$fields.date_receipts_c.default_value }
{else}
{assign var="value" value=$fields.date_receipts_c.value }
{/if}
<span class="sugar_field" id="{$fields.date_receipts_c.name}">{$value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE_RR' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="type_rr_c"  >

{if !$fields.type_rr_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.type_rr_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.type_rr_c.name}" value="{ $fields.type_rr_c.options }">
{ $fields.type_rr_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.type_rr_c.name}" value="{ $fields.type_rr_c.value }">
{ $fields.type_rr_c.options[$fields.type_rr_c.value]}
{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="name" field="name"  >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="mks_registration_mks_registrationreceipts_1_name"  >

{if !$fields.mks_registration_mks_registrationreceipts_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value)}
{capture assign="detail_url"}index.php?module=mks_Registration&action=DetailView&record={$fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="mks_registration_mks_registrationreceipts_1mks_registration_ida" class="sugar_field" data-id-value="{$fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value}">{$fields.mks_registration_mks_registrationreceipts_1_name.value}</span>
{if !empty($fields.mks_registration_mks_registrationreceipts_1mks_registration_ida.value)}</a>{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="relate" field="mks_custompaymentplan_mks_registrationreceipts_1_name" colspan='3' >

{if !$fields.mks_custompaymentplan_mks_registrationreceipts_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.mks_custom8555entplan_ida.value)}
{capture assign="detail_url"}index.php?module=mks_CustomPaymentPlan&action=DetailView&record={$fields.mks_custom8555entplan_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="mks_custom8555entplan_ida" class="sugar_field" data-id-value="{$fields.mks_custom8555entplan_ida.value}">{$fields.mks_custompaymentplan_mks_registrationreceipts_1_name.value}</span>
{if !empty($fields.mks_custom8555entplan_ida.value)}</a>{/if}
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="text" field="description" colspan='3' >

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS_REGISTRATION_RECEIPTS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="status_registration_receipts_c"  >

{if !$fields.status_registration_receipts_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.status_registration_receipts_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.status_registration_receipts_c.name}" value="{ $fields.status_registration_receipts_c.options }">
{ $fields.status_registration_receipts_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status_registration_receipts_c.name}" value="{ $fields.status_registration_receipts_c.value }">
{ $fields.status_registration_receipts_c.options[$fields.status_registration_receipts_c.value]}
{/if}
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BALANCE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="float" field="balance_c"  >

{if !$fields.balance_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.balance_c.name}">
{sugar_number_format var=$fields.balance_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_DATE_C' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="datetimecombo" field="payment_date_c"  >

{if !$fields.payment_date_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.payment_date_c.value) <= 0}
{assign var="value" value=$fields.payment_date_c.default_value }
{else}
{assign var="value" value=$fields.payment_date_c.value }
{/if} 
<span class="sugar_field" id="{$fields.payment_date_c.name}">{$fields.payment_date_c.value}</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="assigned_user_name"  >

{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}

</div>


</div>

</div>
                            </div>
</div>
</div>
{/if}





{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_DETAILVIEW_PANEL1' module='mks_RegistrationReceipts'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0"  data-id="LBL_DETAILVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_EFFECTIVE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_effective_c" colspan='3' >

{if !$fields.total_effective_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_effective_c.name}">
{sugar_number_format var=$fields.total_effective_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_TRANSFERS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_transfers_c" colspan='3' >

{if !$fields.total_transfers_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_transfers_c.name}">
{sugar_number_format var=$fields.total_transfers_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CHECKS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_checks_c" colspan='3' >

{if !$fields.total_checks_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_checks_c.name}">
{sugar_number_format var=$fields.total_checks_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CARDS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_cards_c" colspan='3' >

{if !$fields.total_cards_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_cards_c.name}">
{sugar_number_format var=$fields.total_cards_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_DISCOUNT' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_discount_c" colspan='3' >

{if !$fields.total_discount_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_discount_c.name}">
{sugar_number_format var=$fields.total_discount_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_AMOUNT' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_amount_c" colspan='3' >

{if !$fields.total_amount_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_amount_c.name}">
{sugar_number_format var=$fields.total_amount_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CHARGE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_charge_c" colspan='3' >

{if !$fields.total_charge_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_charge_c.name}">
{sugar_number_format var=$fields.total_charge_c.value precision=2 }
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                                </div>
</div>
</div>
{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_DETAILVIEW_PANEL1' module='mks_RegistrationReceipts'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0" data-id="LBL_DETAILVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_EFFECTIVE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_effective_c" colspan='3' >

{if !$fields.total_effective_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_effective_c.name}">
{sugar_number_format var=$fields.total_effective_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_TRANSFERS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_transfers_c" colspan='3' >

{if !$fields.total_transfers_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_transfers_c.name}">
{sugar_number_format var=$fields.total_transfers_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CHECKS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_checks_c" colspan='3' >

{if !$fields.total_checks_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_checks_c.name}">
{sugar_number_format var=$fields.total_checks_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CARDS' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_cards_c" colspan='3' >

{if !$fields.total_cards_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_cards_c.name}">
{sugar_number_format var=$fields.total_cards_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_DISCOUNT' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_discount_c" colspan='3' >

{if !$fields.total_discount_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_discount_c.name}">
{sugar_number_format var=$fields.total_discount_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_AMOUNT' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_amount_c" colspan='3' >

{if !$fields.total_amount_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_amount_c.name}">
{sugar_number_format var=$fields.total_amount_c.value precision=2 }
</span>
{/if}

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_CHARGE' module='mks_RegistrationReceipts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="float" field="total_charge_c" colspan='3' >

{if !$fields.total_charge_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.total_charge_c.name}">
{sugar_number_format var=$fields.total_charge_c.value precision=2 }
</span>
{/if}

</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                            </div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}