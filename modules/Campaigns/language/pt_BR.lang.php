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
    'LBL_FROM_ADDR' => 'Endereço De: ',
    'LBL_REPLY_ADDR' => 'Endereço para Responder a: ',
    'LBL_REPLY_NAME' => 'Nome para Responder a: ',

    'LBL_MODULE_NAME' => 'Campanhas',
    'LBL_MODULE_TITLE' => 'Campanhas: Tela Principal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Campanhas',
    'LBL_LIST_FORM_TITLE' => 'Lista de Campanhas',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Lista de Newsletters',
    'LBL_CAMPAIGN_NAME' => 'Nome:',
    'LBL_CAMPAIGN' => 'Campanha:',
    'LBL_NAME' => 'Nome: ',
    'LBL_INVITEE' => 'Contatos',
    'LBL_LIST_CAMPAIGN_NAME' => 'Campanha',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TYPE' => 'Tipo',
    'LBL_LIST_START_DATE' => 'Data de Início',
    'LBL_LIST_END_DATE' => 'Data de Fim',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por: ',
    'LBL_CREATED' => 'Criado por: ',
    'LBL_TEAM' => 'Equipe:',
    'LBL_ASSIGNED_TO' => 'Atribuído a: ',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_CAMPAIGN_START_DATE' => 'Data de início: ',
    'LBL_CAMPAIGN_END_DATE' => 'Data de término: ',
    'LBL_CAMPAIGN_STATUS' => 'Status: ',
    'LBL_CAMPAIGN_BUDGET' => 'Orçamento: ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Custo Esperado: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Custo Real: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Receita Estimada: ',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'Exibições: ',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Custo por exibição: ',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Custo por clique: ',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Oportunidades Ganhas:',
    'LBL_CAMPAIGN_TYPE' => 'Tipo: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Objetivo: ',
    'LBL_CAMPAIGN_CONTENT' => 'Descrição: ',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "Campanha '{0}' possui estado 'Inativo'. Você tem que definir o estado da campanha para 'Ativo'.",
    'LNK_NEW_CAMPAIGN' => 'Nova Campanha',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'Criar Nova Campanha',
    'LNK_CAMPAIGN_LIST' => 'Ver Campanhas',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar campanha',
	'LNK_NEW_PROSPECT' => 'Criar alvo',
    'LNK_PROSPECT_LIST' => 'Ver Alvos',
    'LNK_NEW_PROSPECT_LIST' => 'Criar Nova Lista de Alvos',
    'LNK_PROSPECT_LIST_LIST' => 'Lista de Alvos',
    'LBL_MODIFIED_BY' => 'Modificado por: ',
    'LBL_CREATED_BY' => 'Criado por: ',
    'LBL_TRACKER_TITLE' => 'Detalhes do rastreador ',
    'LBL_TRACKER_KEY' => 'Rastreador: ',
    'LBL_TRACKER_URL' => 'URL do Rastreador: ',
    'LBL_TRACKER_TEXT' => 'Texto do Link do Rastreador: ',
    'LBL_TRACKER_COUNT' => 'Contador do Tracker: ',
    'LBL_REFER_URL' => 'URL de Redirecionamento do Tracker: ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campanhas',
    'LBL_NEW_FORM_TITLE' => 'Nova Campanha',
    'LBL_TRACKED_URLS' => 'URLs de Tracker',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs de Tracker',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listas de Alvos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico', // PR 4606
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-mail Marketing',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Novo Modelo de E-mail',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Modelos de E-mail',
    'LBL_TRACK_BUTTON_TITLE' => 'Ver estado',
    'LBL_TRACK_BUTTON_LABEL' => 'Ver Status',
    'LBL_QUEUE_BUTTON_TITLE' => 'Enviar E-mails',
    'LBL_QUEUE_BUTTON_LABEL' => 'Enviar E-mails',
    'LBL_TEST_BUTTON_TITLE' => 'Enviar Teste',
    'LBL_TEST_BUTTON_LABEL' => 'Enviar Teste',
    'LBL_COPY_AND_PASTE_CODE' => 'Ou copie e cole o html abaixo para uma página existente',
    'LBL_CHARSET_NOTICE' => 'Aviso: Tenha certeza que a página que contém o formulário "Web-to-lead" tenha a seguinte linha na seção &lt;head&gt; :',

    'LBL_TODETAIL_BUTTON_TITLE' => 'Ver Detalhes',
    'LBL_TODETAIL_BUTTON_LABEL' => 'Ver Detalhes',

    'LBL_DEFAULT' => 'Todas as Listas de Alvos',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Fila de Mensagens',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Mensagem Enviada/Tentativa',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Mensagens Retornadas, Outro Motivo',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Mensagens Retornadas, E-mail Inválido',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Clicou no Link',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Mensagem Exibida',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Optou por Sair',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Potenciais Criados',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contatos Criados',

    //error messages.
    'ERR_SENDING_NOW' => 'Aguardando entrega de mensagens, por favor tente mais tarde.',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'Ver ROI',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Excluir Entradas de Teste',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Excluir Entradas de Teste',
    'LBL_TRACK_DELETE_CONFIRM' => 'Esta opção excluirá registros criados pelo envio de teste. Continuar?',
    'ERR_NO_MAILBOX' => "A seguinte mensagem de marketing não tem uma caixa de correio associada.<BR>Por favor corrija antes de prosseguir.",
    'LBL_LIST_TO_ACTIVITY' => 'Ver estado',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_TARGETED' => 'Alvos identificados',
    'LBL_TOTAL_TARGETED' => 'Total de Alvos identificados',
    'LBL_CAMPAIGN_FREQUENCY' => 'Frequência:',
    'LBL_NEWSLETTERS' => 'Newsletters',
    'LBL_NEWSLETTER' => 'Informativo',
    'LBL_SURVEY' => 'Pesquisa',
    'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
    'LBL_CREATE_NEWSLETTER' => 'Criar Newsletter',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'Configuração de e-mail de entrada',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'Configuração e-mail de entrada (Info)',
    'LBL_INBOUND_EMAIL_CREATE' => 'Criar e-mail de entrada',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'Criar e-mail de entrada (info)',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_FROM_MAILBOX_NAME' => 'Conta para processamento de devoluções:',
    'LBL_FROM_MAILBOX_TITLE' => 'Conta de Email para Controle de Bounce:',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'Conta de e-mail de saída:',
    'LBL_FROM_NAME' => 'Nome De: ',
    'LBL_START_DATE_TIME' => 'Agendar data e hora: ',
    'LBL_DATE_START' => 'Data de Início',
    'LBL_TIME_START' => 'Hora de Início',
    'LBL_TEMPLATE' => 'Modelo de E-mail: ',
    'LBL_TEMPLATE_FIELD' => 'Modelo de e-mail: ',
    'LBL_SUBJECT' => 'Assunto: ',
    'LBL_WIDTH' => 'Largura Padrão:',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Criar',
    'LBL_MESSAGE_FOR' => 'Enviar Esta Mensagem Para:',
    'LBL_FINISH' => 'Concluir',
    'LBL_ALL_PROSPECT_LISTS' => 'Todas as Listas de Alvos na Campanha.',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_EMAIL_SETUP_WIZARD' => 'Configuração do E-mail',
    'LBL_DIAGNOSTIC_WIZARD' => 'Ver Diagnósticos',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Boletins Assinados Para',
    'LBL_UNSUBSCRIBED_HEADER' => 'Disponíveis/Boletins não assinados para',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Movendo os boletins para a lista Boletins Disponíveis/Boletins Não Assinados irá adicionar o contato à Lista de Não Assinantes para este boletim. Não irá remover o contato da Lista de Assinatura original ou da Lista de Alvos.',
    'LBL_FILTER_CHART_BY' => 'Filtrar Gráfico Por:',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Gerenciar Assinaturas',
    'LBL_MARK_AS_SENT' => 'Marcar Como Enviada',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Entradas foram Processadas',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'Nome do Rastreador',
    'LBL_EDIT_TRACKER_URL' => 'URL do Rastreador',
    'LBL_EDIT_OPT_OUT_' => 'Link Opt-out?',
    'LBL_EDIT_OPT_OUT' => 'Link Opt-out:',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Lista de Cancelamento:',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'Lista de Assinatura:',
    'LBL_TEST_LIST_NAME' => 'Lista de Teste:',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Não Subscrição',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'Subscrição',
    'LBL_TEST_TYPE_NAME' => 'Teste',
    'LBL_UNSUBSCRIPTION_LIST' => 'Lista de Não Subscrição',
    'LBL_SUBSCRIPTION_LIST' => 'Lista de Subscrição',
    'LBL_MRKT_NAME' => 'Nome do e-mail de marketing',
    'LBL_MRKT_NAME_FIELD' => 'Nome do e-mail de marketing:',
    'LBL_TEST_LIST' => 'Lista de Teste',
    'LBL_WIZARD_HEADER_MESSAGE' => 'Preencha os campos requeridos para ajudar a identificar a campanha.',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'Informe o orçamento para o cálculo do retorno do investimento (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'Selecione ou grave uma lista de alvos para utilizar com a sua campanha. Esta lista será utilizada quando enviar e-mails com as suas mensagens de marketing.',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'Criar Nova Lista de Alvos:',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'Defina a URL do rastreador aqui para utilizá-lo com esta campanha. Você precisa inserir o nome e a URL para criar o rastreador.',
    'LBL_HOME_START_MESSAGE' => 'Que campanha que você gostaria de criar?',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Não pode ir mais além, já se encontra no último passo.',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Não pode retroceder mais, já se encontra no primeiro passo.',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Cabeçalho da Campanha',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Orçamento da Campanha',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs de Tracker da Campanha',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Informação da Subscrição',
    'LBL_WIZ_MARKETING_TITLE' => 'E-mail de Marketing',
    'LBL_WIZ_SENDMAIL_TITLE' => 'Selecionar o registro do e-mail marketing',
    'LBL_WIZ_EMAILTPL_TITLE' => 'Selecionar modelo de e-mail',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Resumo',
    'LBL_NAVIGATION_MENU_GEN1' => 'Cabeçalho da Campanha',
    'LBL_NAVIGATION_MENU_GEN2' => 'Orçamento',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'Rastreadores',
    'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Enviar E-mail',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Subscrições',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'Resumo',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'Enviar e-mail e resumo',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Isto irá definir a lista de alvos do tipo Subscrição para esta campanha.<br> Esta lista de alvos será utilizada para enviar e-mails para esta campanha.<br> Se não tem uma lista pronta, uma lista vazia será criada para você.',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Isto irá definir a lista de alvos do tipo Não Subscrição para esta campanha. <br>Esta lista de alvos irá conter nomes de pessoas que optaram sair da sua campanha e que não devem ser contatadas através de e-mail. <br>Se não tem uma lista pronta, uma lista vazia será criada para você.',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'Isto irá definir a lista de alvos do tipo Teste para esta campanha.<br>Esta lista de alvos será usada para enviar e-mails de teste para a campanha.<br>Se você não tem uma lista pronta, uma lista vazia será criada para você.',
    'LBL_ADD_TRACKER' => 'Criar Rastreador',
    'LBL_CREATE_TARGET' => 'Criar',
    'LBL_SELECT_TARGET' => 'Utilizar Lista de Alvos existente',
    'LBL_REMOVE' => 'Remover', // PR 5451
    'LBL_START' => 'Iniciar',
    'LBL_TOTAL_ENTRIES' => 'Entradas',
    'LBL_CONFIRM_SEND_SAVE' => 'Está prestes a sair e prosseguir para a página de enviar e-mail de campanha. Deseja salvar e continuar?',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'Newsletter:',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editar Newsletter: ',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editar Campanha: ',
    'LBL_SEND_AS_TEST' => 'Enviar e-mail marketing como teste',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Salvar',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Próximo',
    'LBL_TARGET_LISTS' => 'Listas de Alvos',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'Não pode enviar um e-mail de marketing sem que a sua lista de subscrição tenha pelo menos uma entrada. Pode preencher a sua lista depois de terminar.',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'Não pode enviar um e-mail de marketing sem que a sua lista de subscrição tenha pelo menos uma entrada. Pode preencher a sua lista depois de terminar.',
    'LBL_NO_TARGETS_WARNING' => 'Não pode enviar um e-mail de marketing sem que a sua lista de subscrição tenha pelo menos uma lista de alvos.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'Você não tem nenhum destino associado em suas listas de alvos usados para esta campanha. Você pode preencher sua lista depois de terminar.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'Você não selecionou uma lista de alvos para esta campanha.',
    'LBL_NONE' => 'nenhuma criada',
    'LBL_CAMPAIGN_WIZARD' => 'Assistente de Campanha',
    'LBL_EMAIL' => 'E-mail',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'Campanha não baseada em e-mail',
    'LBL_TARGET_LIST' => 'Listas de Alvos',
    'LBL_TARGET_TYPE' => 'Tipo de Lista de alvos:',
    'LBL_TARGET_NAME' => 'Nome de Lista de Alvos',
    'LBL_NUMBER_OF_TARGET' => 'Número de Alvos',
    'LBL_EMAILS_SCHEDULED' => 'E-mails agendados',
    'LBL_TEST_EMAILS_SENT' => 'E-mails de teste enviados',
    'LBL_USERS_CANNOT_OPTOUT' => 'Usuários do Sistema não têm possibilidade de optar por não receber e-mails.',
    'LBL_ELECTED_TO_OPTOUT' => 'Elegeu a opção de não receber mais e-mails.',
    'LBL_COPY_OF' => 'Cópia de ',
    'LBL_SAVED_SEARCH' => 'Pesquisa & Layout Salvos',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'Do Nome:',
    'LBL_WIZ_FROM_ADDRESS' => 'Do Endereço:',
    'LBL_EMAILS_PER_RUN' => 'Número de e-mails enviados por grupo:',
    'LBL_CUSTOM_LOCATION' => 'Permitir Selecionar',
    'LBL_DEFAULT_LOCATION' => 'Auto-Criar',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Apenas valores inteiros são permitidos para o Número de e-mails enviados por grupo',
    'LBL_LOCATION_TRACK' => 'Localização de arquivos de tracking de campanha (como campaign_tracker.php):',
    'LBL_MAIL_SENDTYPE' => 'Agente de Transferência de Correio:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP',
    'LBL_MAIL_SMTPUSER' => 'Nome de Usuário SMTP',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Configuração de E-mail para Campanhas',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor do Config.php configurando site_url',
    'LBL_NOTIFY_TITLE' => 'Opções de Notificação de E-mail',
    'LBL_MASS_MAILING_TITLE' => 'Opções de Envio de Correio em Massa',
    'LBL_SERVER_TYPE' => 'Protocolo de Servidor de Correio',
    'LBL_SERVER_URL' => 'Endereço de Servidor de Correio',
    'LBL_LOGIN' => 'Nome do Usuário',
    'LBL_PORT' => 'Porta do Servidor de Correio',
    'LBL_MAILBOX_NAME' => 'Nome da Conta de Email:',
    'LBL_PASSWORD' => 'Senha',
    'LBL_MAILBOX_DEFAULT' => 'ENTRADA',
    'LBL_MAILBOX' => 'Pasta Monitorada',
    'LBL_NAVIGATION_MENU_SETUP' => 'Configuração de E-mail',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nova Caixa de Correio',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Caixa(s) de Correio com processamento de retorno detetado. Não precisa criar uma nova, mas pode fazer a mesma abaixo.',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Nenhuma caixa de correio com processamento de retorno foram detectadas, por favor crie uma nova abaixo.',
    'LBL_CAMP_MESSAGE_COPY' => 'Guarde cópias de mensagens de campanha:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Pretende armazenar cópias completas de CADA mensagem de e-mail enviada durante todas as campanhas? Recomendamos a opção Não por defeito. Escolhendo Não irá armazenar apenas o modelo que é enviado e as variáveis necessárias para recriar a mensagem individual.',
    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_EMAIL_SETUP_DESC' => 'Preencha o formulário abaixo para modificar as suas Configurações de Sistema para que os E-mails de Campanha possam ser enviados.',
    'LBL_CREATE_MAILBOX' => 'Criar Nova Caixa de Correio',
    'LBL_SSL_DESC' => 'se o seu servidor de e-mail suporta ligações de socket seguras, a ativação irá forçar as ligações SSL ao importar o e-mail.',
    'LBL_SSL' => 'Utilizar SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Campanha pode não funcionar como o desejado e os seus e-mails podem não ter sido enviados pelas seguintes razões:',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnósticos de Campanha',
    'LBL_MAILBOX_CHECK1_GOOD' => 'Caixa(s) de Correio com processamento de retorno detectadas:',
    'LBL_MAILBOX_CHECK1_BAD' => 'Nenhumas Caixas de Correio com processamento de retorno detectadas.',
    'LBL_MAILBOX_CHECK2_GOOD' => 'Configurações de E-mail foram efetuadas:',
    'LBL_MAILBOX_CHECK2_BAD' => 'Por favor, configure o endereço de e-mail do seu sistema. As configurações de e-mail ainda não foram efetuadas ou são inválidas. O endereço do remetente não pode conter example.com.',
    'LBL_SCHEDULER_CHECK_GOOD' => 'Agendadores detectados',
    'LBL_SCHEDULER_CHECK_BAD' => 'Nenhuns Agendadores detectados',
    'LBL_SCHEDULER_CHECK1_BAD' => 'Agendador não foi configurado para processar E-mails de Campanha Retornados.',
    'LBL_SCHEDULER_CHECK2_BAD' => 'Agendador não foi configurado para processar E-mails de Campanha.',
    'LBL_SCHEDULER_NAME' => 'Agendador',
    'LBL_SCHEDULER_STATUS' => 'Estado',
    'LBL_EMAIL_SETUP_WIZ' => 'Lançar Configuração de E-mail.',
    'LBL_SCHEDULER_LINK' => 'ir para Tela de administrador de agendamento.',
    'LBL_TO_WIZARD_TITLE' => 'Lançar Assistente',
    'LBL_EDIT_EXISTING' => 'Editar Campanha',
    'LBL_SEND_EMAIL' => 'Enviar Email em Horário Agendado',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Criar novo e-mail de marketing',
    'LBL_NON_ADMIN_ERROR_MSG' => 'Por favor notifique o seu administrador de sistema para que ele possa corrigir este problema',
    'LBL_EMAIL_COMPONENTS' => 'Componentes de E-mail',
    'LBL_SCHEDULER_COMPONENTS' => 'Componentes de Agendador',
    'LBL_RECHECK_BTN' => 'Re-checar',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'Cabeçalho do Formulário:',
    'LBL_LEAD_DEFAULT_HEADER' => 'Formulário Web-to-lead para Campanha',
    'LBL_DEFINE_LEAD_SUBMIT' => 'Submeter Etiqueta Botão:',
    'LBL_DEFINE_LEAD_POST_URL' => 'Colocar URL:',
    'LBL_EDIT_LEAD_POST_URL' => 'Editar Colocar URL?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Redirecionar URL:',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campanha Relacionada:',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'Submeter',
    'LBL_WEB_TO_LEAD' => 'Criar formulário de pessoa',
    'LBL_LEAD_FOOTER' => 'Rodapé do Formulário:',
    'NTC_NO_LEGENDS' => 'Nenhuma Legenda',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Descrição do Formulário:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Submeter este formulário irá criar um potencial e um link com a campanha',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Por favor, faça o download do formulário da Web To Lead',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulário Web para pessoa',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Por favor forneça todos os campos requeridos',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Endereço de e-mail inválido',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Por favor Selecione os campos requeridos:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retorno Do Investimento da Campanha',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Resposta da Campanha por Atividade de Recipiente',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Suprimido por Endereço de E-mail ou domínio',

    'LBL_AMOUNT_IN' => 'Montante em',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Receita',
    'LBL_ROI_CHART_INVESTMENT' => 'Investimento',
    'LBL_ROI_CHART_BUDGET' => 'Orçamento',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Receita Esperada',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Campanhas Top',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nome da Campanha',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Receita',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Melhores campanhas por receita',
    'LBL_LEADS' => 'Potenciais',
    'LBL_CONTACTS' => 'Contatos',
    'LBL_ACCOUNTS' => 'Contas',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_LOG_ENTRIES' => 'Entradas de Log',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'E-mail Inválido',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Erro ao Enviar',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    'LBL_LEAD_FORM_WIZARD' => 'Assistente do Formulário de Potencial',
    'LBL_CAMPAIGN_INFORMATION' => 'Visão geral',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDIT_BUTTON' => 'Lançar Assistente',
    'LBL_YEAR' => "Ano",
    'LBL_DAY' => "Dia",
    'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'Inválido' /*for 508 compliance fix*/,
    'LBL_VALID' => 'Válido' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'Alerta' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Lançar Assistente' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Excluir' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Remover' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Visualizar',
    'ERR_NO_OPTS_SAVED' => 'Nenhuma Opção foi gravada na sua Caixa de Entrada de E-mail.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'Por favor, reveja as configurações de e-mail de entrada.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} potenciais que foram criados através desta campanha foram excluídos desde a criação.',
    'LBL_FROM_NAME_HELP' => 'Este será o nome que seu destinatário verá',
    'LBL_FROM_ADDR_HELP' => 'Este é o endereço que será visto pelo destinatário',
    'LBL_REPLY_TO_NAME_HELP' => 'Este será o nome a que os seus destinatários vão responder',
    'LBL_REPLY_TO_ADDR_HELP' => 'Este será o endereço a que os seus destinatários vão responder',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver contas de envio de e-mails',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'Salvar',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'Salvar',
    'LBL_SEARCH_TARGET_LIST' => 'Filtrar lista de alvos',
    'LBL_INSERT_URL_REF' => 'Inserir Referência URL',
    'LBL_INSERT_TRACKER_URL' => 'Inserir URL do Rastreador:',
    'LBL_CREATE_TRACKER_BTN' => 'Criar Rastreador',
    'LBL_INSERT_TRACKER_BTN' => 'Inserir Rastreador',
    'LBL_EDIT_TRACKER_BTN' => 'Editar Rastreador',
    'LBL_CREATE_TRACKER_URL' => '-- Criar --',
    'LBL_INSERT' => 'Inserir',
    'LBL_INSERT_VARIABLE' => 'Inserir:',
    'LBL_INSERT_VARIABLE_BTN' => 'Inserir variável',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'Inserir variável',
    'LBL_EMAIL_VARIABLES' => 'Variáveis de Email',
    'LBL_SAVE' => 'Salvar',
    'ERR_REQUIRED_TRACKER_NAME' => 'Nome do rastreador é necessário',
    'ERR_REQUIRED_TRACKER_URL' => 'URL do rastreador é necessária',
    'LBL_UPDATE_TEMPLATE' => 'Atualizar modelo',
    'LBL_ATTACHMENTS' => 'Anexos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Campo obrigatório não preenchido',
    'LBL_SUGAR_DOCUMENT' => 'Documento',
    'LBL_EMAIL_ATTACHMENT' => 'Anexo do e-mail',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'Processar e-mails devolvidos',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'Processar emails de campanha',
    'LBL_SENDER_DETAILS' => 'Detalhes do remetente',
    'LBL_CHOOSE_TEMPLATES' => 'Escolher modelos',
    'LBL_CHOOSE_TARGETS' => 'Escolher alvos',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'Condições e detalhes de campanha',
    'LBL_OPEN_IN_NEW_WINDOW' => 'Abrir em uma nova janela...',
    'LBL_CREATE_MARKETING_RECORD' => 'Próximo',
    'LBL_NO_TEMPLATE_SELECTED' => 'Modelo de E-mail não selecionado',
    'LBL_SELECT_TEMPLATE' => 'Modelos',
    'LBL_WIZARD_ADD_TARGET' => 'Adicionar a Lista de Alvos Existente:',
    'LBL_CLICK_TO_ADD' => 'Clicar nos itens do template a adicionar.',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_EMPTY_SUBJECT' => 'O assunto do e-mail está em branco. Tem certeza que deseja continuar?',
    'LBL_OVERWRITE_QUESTION' => 'Tem certeza que deseja sobrescrever o modelo de e-mail?',
    'LBL_SELECT_EMAIL_TRACKER' => 'Por favor, selecione um rastreador de email.',
    'LBL_STEP_UNAVAILABLE' => 'Para continuar por favor clique no botão próximo.',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'Por favor, informe o nome da campanha e selecione o status',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'Para cada campanha, são necessárias três listas de alvos para assinatura, cancelamento e teste.  Quando uma lista não for informada, será criada uma lista vazia ao salvar.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'Selecione suas listas de alvos para esta campanha.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'Por favor, selecione um modelo de email ou crie um novo.',
    'LBL_STEP_INFO_MARKETING' => 'Por favor, escolha as contas de email.',
    'LBL_NO_SUBJECT' => 'O modelo de email selecionado não tem um assunto',
    'LBL_NO_HTML_BODY_CONTENTS' => 'O modelo de email selecionado não tem um corpo de html',
    'LBL_NO_SELECTED_TEMPLATE' => 'Nenhum modelo selecionado!',
    'LBL_NO_BODY_CONTENTS' => 'O modelo de email selecionado não tem um corpo',
    'LBL_ERROR_ON_MARKETING' => 'Campo(s) obrigatório(s) não preenchidos',

    'LBL_NO_MARKETING_NAME' => 'Nome do registro de marketing está vazio',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'Conta de email de entrada para Marketing não está selecionado',
    'LBL_NO_DATE_START' => 'Registro de marketing não tem uma data de início',
    'LBL_NO_FROM_NAME' => 'Nome do remetente está vazio',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'Endereço do remetente está vazio ou é inválido',
    'LBL_NEWSLETTER_TITLE' => ' Uma campanha de newsletter é um tipo de campanha de email que permite enviar um email para uma lista simples de alvos.',
    'LBL_EMAIL_TITLE' => 'Uma campanha por email é um tipo de campanha que permite a você enviar um email para várias listas de alvos.',
    'LBL_NON_EMAIL_TITLE' => 'Uma campanha sem email é uma campanha que não envia um email.',
    'LBL_TEMPLATE_SAVING' => 'Por favor aguarde, salvando modelo...',
    'LBL_TEMPLATE_SAVED' => 'Modelo salvo com sucesso.',
    'LBL_PLEASE_SELECT_OPTION' => 'Por favor, selecione a opção de preferência',
    'LBL_OPTION_SELECT_TEMPLATE' => 'Selecionar um modelo existente',
    'LBL_OPTION_CREATE_TEMPLATE' => 'Criar um novo modelo',
    'LBL_OPTION_COPY_TEMPLATE' => 'Copiar um modelo existente',
    'LBL_SUMMARY' => 'Resumo',
    'LBL_CAMPAIGN_CHECKLIST' => 'Checklist da Campanha',

    'LBL_EMAIL_MARKETING' => 'E-mail Marketing',
    'LBL_EMAIL_SUCCESS' => 'Sucesso',
    'LBL_QUEUE_ITEMS' => 'Itens na fila',
    'LBL_PROSPECT_LISTS' => 'Listas de Alvos',
	'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'Respostas da pesquisa',
	'LBL_CAMPAIGN_SURVEY' => "Pesquisa",
);
