
{if strlen($fields.id_autoincrement_c.value) <= 0}
{assign var="value" value=$fields.id_autoincrement_c.default_value }
{else}
{assign var="value" value=$fields.id_autoincrement_c.value }
{/if}  
<input type='text' name='{$fields.id_autoincrement_c.name}' 
    id='{$fields.id_autoincrement_c.name}' size='30' 
    maxlength='80' 
    value='{$value}' title=''  tabindex='1'      >