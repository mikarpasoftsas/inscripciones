
{if strlen($fields.consecutive_c.value) <= 0}
{assign var="value" value=$fields.consecutive_c.default_value }
{else}
{assign var="value" value=$fields.consecutive_c.value }
{/if}  
<input type='text' name='{$fields.consecutive_c.name}' 
    id='{$fields.consecutive_c.name}' size='30' 
    maxlength='80' 
    value='{$value}' title=''  tabindex='1'      >