<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_NAME' => 'Gerente do Contrato',
    'LBL_CONTRACT_ACCOUNT' => 'Conta',
    'LBL_OPPORTUNITY' => 'Oportunidade',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado pelo Nome',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Título do Contrato',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contratos',
    'LBL_MODULE_NAME' => 'Contratos',
    'LBL_MODULE_TITLE' => 'Contratos: Início',
    'LBL_HOMEPAGE_TITLE' => 'Meus Contratos',
    'LNK_NEW_RECORD' => 'Criar Contrato',
    'LNK_LIST' => 'Exibir Contratos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Contratos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo Contrato',
    'LBL_CONTRACT_NAME' => 'Nome do Contrato',
    'LBL_REFERENCE_CODE ' => 'Código de Referência',
    'LBL_START_DATE' => 'Data de Início',
    'LBL_END_DATE' => 'Data de Término',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valor do Contrato',
    'LBL_STATUS' => 'Estado',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data de Assinatura do Cliente',
    'LBL_COMPANY_SIGNED_DATE' => 'Data de Assinatura da Empresa',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data do Lembrete de Renovação',
    'LBL_CONTRACT_TYPE' => 'Tipo de Contrato',
    'LBL_CONTACT' => 'Contato',
    'LBL_ADD_GROUP' => 'Adicionar Grupo',
    'LBL_DELETE_GROUP' => 'Excluir Grupo',
    'LBL_GROUP_NAME' => 'Nome do Grupo',
    'LBL_GROUP_TOTAL' => 'Total do Grupo',
    'LBL_PRODUCT_QUANITY' => 'Quantidade',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Número da Peça',
    'LBL_PRODUCT_NOTE' => 'Anotação',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrição',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Desconto',
    'LBL_UNIT_PRICE' => 'Preço de Venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Imposto',
    'LBL_VAT_AMT' => 'Valor do Imposto',
    'LBL_SERVICE_NAME' => 'Serviço',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Preço de Venda',
    'LBL_SERVICE_DISCOUNT' => 'Desconto',
    'LBL_LINE_ITEMS' => 'Itens de linha',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Desconto',
    'LBL_TAX_AMOUNT' => 'Imposto',
    'LBL_SHIPPING_AMOUNT' => 'Frete',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total Geral',
    'LBL_SHIPPING_TAX' => 'Imposto sobre Frete',
    'LBL_SHIPPING_TAX_AMT' => 'Imposto sobre Frete',
    'LBL_ADD_PRODUCT_LINE' => 'Adicionar Linha de Produto',
    'LBL_ADD_SERVICE_LINE' => 'Adicionar Linha de Serviço',
    'LBL_PRINT_AS_PDF' => 'Imprimir PDF',
    'LBL_EMAIL_PDF' => 'PDF por e-mail',
    'LBL_PDF_NAME' => 'Contrato',
    'LBL_EMAIL_NAME' => 'Contrato para',
    'LBL_NO_TEMPLATE' => 'ERRO\nNenhum modelo encontrado. Por favor, crie um modelo de Contrato no módulo de Modelos PDF',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valor do Contrato (Moeda Padrão)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Moeda Padrão)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Desconto (Moeda Padrão)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Imposto (Moeda Padrão)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Frete (Moeda Padrão)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Moeda Padrão)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Imposto sobre Frete (Moeda Padrão)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total Geral (Moeda Padrão)',

    'LBL_CALL_ID' => 'ID da chamada',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de itens de linha',
    'LBL_AOS_PRODUCT_QUOTES' => 'Cotações de produtos',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Cotações: Contratos',
);