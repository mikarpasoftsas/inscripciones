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
    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_SECURITYGROUPS' => 'Grupos de segurança',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de segurança',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado pelo Nome',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Excluído',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Exibir Tabela Dinâmica',
    'LBL_MODULE_NAME' => 'Tabela Dinâmica',
    'LBL_MODULE_TITLE' => 'Tabela Dinâmica',
    'LBL_HOMEPAGE_TITLE' => 'Minhas Tabelas Dinâmicas',
    'LNK_NEW_RECORD' => 'Criar Tabela Dinâmica',
    'LNK_LIST' => 'Exibir Tabela Dinâmica',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Tabela Dinâmica',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Nova Tabela Dinâmica',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Área para Análise',
    'LNK_SPOT_LIST' => 'Exibir Spots',
    'LNK_SPOT_CREATE' => 'Criar Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuração',

    'LBL_AN_UNSUPPORTED_DB' => 'Desculpa, atualmente a Suite Spots está configura somente para MySQL e MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nome',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Tipo de Conta',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Setor',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'País de Faturamento',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Usuário Atribuído',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Fonte do Potencial',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nome da Campanha',
    'LBL_AN_LEADS_YEAR' => 'Ano',
    'LBL_AN_LEADS_QUARTER' => 'Trimestre',
    'LBL_AN_LEADS_MONTH' => 'Mês',
    'LBL_AN_LEADS_WEEK' => 'Semana',
    'LBL_AN_LEADS_DAY' => 'Dia',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Usuário Atribuído',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'OpportunityType',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Fonte do Potencial',
    'LBL_AN_SALES_AMOUNT' => 'Valor',
    'LBL_AN_SALES_STAGE' => 'Fase da Venda',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilidade',
    'LBL_AN_SALES_DATE' => 'Vendas - Data',
    'LBL_AN_SALES_QUARTER' => 'Vendas - Trimestre',
    'LBL_AN_SALES_MONTH' => 'Vendas - Mês',
    'LBL_AN_SALES_WEEK' => 'Vendas - Semana',
    'LBL_AN_SALES_DAY' => 'Vendas - Dia',
    'LBL_AN_SALES_YEAR' => 'Vendas - Ano',
    'LBL_AN_SALES_CAMPAIGN' => 'Campanha',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_SERVICE_STATE' => 'Estado',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioridade',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Criada - Dia',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Criada - Semana',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Criada - Mês',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Criada - Trimestre',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Criada - Ano',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nome do Contato',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Usuário Atribuído',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tipo',
    'LBL_AN_ACTIVITIES_NAME' => 'Nome',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Usuário Atribuído',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Tipo',
    'LBL_AN_MARKETING_BUDGET' => 'Orçamento',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Custo Previsto',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Receita Esperada',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Valor da Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Fase da Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Oportunidade atribuída a',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nome da Conta',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nome da Campanha',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Data da Atividade',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tipo de Atividade',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Tipo Relacionado',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID Relacionado',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Tipo da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Origem da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fase da Oportunidade',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nome do Contato',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nome do Item',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Item - Tipo',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Item - Categoria',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item - Quantidade',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Item - Preço de Lista',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Item - Preço de Venda',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item - Custo',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item - Desconto',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Valor do Desconto',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item - Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Total Geral',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Usuário Atribuído',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Data de Criação',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Criada - Dia',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Criada - Semana',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Criada - Mês',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Criada - Trimestre',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Criada - Ano',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Erro ao confirmar o rótulo da sub-área da tabela dinâmica',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Tabela',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Tabela Barchart',
    'LBL_RENDERERS_HEATMAP' =>'Heatmap',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Linha do Heatmap',
    'LBL_RENDERERS_COL_HEATMAP' =>'Coluna do Heatmap',
    'LBL_RENDERERS_LINE_CHART' =>'Gráfico de Linhas',
    'LBL_RENDERERS_BAR_CHART' =>'Gráfico de Colunas',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Barras empilhadas',
    'LBL_RENDERERS_AREA_CHART' =>'Área do Gráfico',
    'LBL_RENDERERS_SCATTER_CHART' =>'Gráfico de dispersão',

    'LBL_AGGREGATORS_COUNT' => 'Contagem',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Número de valores únicos',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'Lista de valores únicos',
    'LBL_AGGREGATORS_SUM' => 'Soma',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Soma de inteiros',
    'LBL_AGGREGATORS_AVERAGE' => 'Média',
    'LBL_AGGREGATORS_MINIMUM' => 'Mínimo',
    'LBL_AGGREGATORS_MAXIMUM' => 'Máximo',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Soma sobre soma',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => 'Limitante superior de 80%',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => 'Limitante inferior de 80%',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Soma como fração do Total',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Soma como fração de linhas',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Soma como fração de colunas',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Contagem como fração do Total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Contagem como fração de linhas',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Contagem como fração de colunas',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'Ocorreu um erro ao processar os resultados da tabela dinâmica.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'Ocorreu um erro no cálculo dos resultados da tabela dinâmica.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'Ocorreu um erro ao processar a Interface de usuário da tabela dinâmica.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Selecionar tudo',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Desmarcar todos',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(muitos para listar)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filtrar resultados',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totais',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => 'por',
    'LBL_LOCALE_STRINGS_OK' => 'OK',

    'LBL_ACTIVITIES_CALL'=>'Ligação',
    'LBL_ACTIVITIES_MEETING'=>'Reunião',
    'LBL_ACTIVITIES_TASK'=>'Tarefa',
);
