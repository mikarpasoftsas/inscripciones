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
    'LBL_EMAIL_INFORMATION' => 'EMAIL',
    'LBL_FW' => 'EN:',
    'LBL_RE' => 'RE:',

    'LBL_BUTTON_CREATE' => 'Criar',
    'LBL_BUTTON_EDIT' => 'Editar',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Editar rascunho',
    'LBL_QS_DISABLED' => '(Pesquisa Rápida não está disponível para este módulo. Por favor utilize o botão selecionar.)',
    'LBL_SIGNATURE_PREPEND' => 'Assinatura acima da resposta?',
    'LBL_IMPORT' => 'Importar',
    'LBL_LOADING' => 'Carregando ...',
    'LBL_MARKING' => 'Marcação',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Tem certeza que deseja excluir este e-mail?',
    'LBL_ENTER_FOLDER_NAME' => 'Por favor insira um nome de pasta',

    'LBL_ERROR_SELECT_MODULE' => 'Por favor selecione um módulo para o campo Referente a',

    'ERR_ARCHIVE_EMAIL' => 'Erro: selecionar os e-mails a arquivar.',
    'ERR_DELETE_RECORD' => 'Erro: Um número de registro deverá ser especificado para eliminar a Conta.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_ADD_DASHLETS' => 'Adicionar Dashlets',
    'LBL_ADD_DOCUMENT' => 'Adicionar do módulo de Documentos',
    'LBL_ADD_ENTRIES' => 'Adicionar Entradas',
    'LBL_ADD_FILE' => 'Adicionar arquivos',
    'LBL_ATTACHMENTS' => 'Anexos:',
    'LBL_ATTACH_FILES' => 'Anexar Arquivos',
    'LBL_ATTACH_DOCUMENTS' => 'Anexar Documentos',
    'LBL_HAS_ATTACHMENT' => 'Tem anexo?:',
    'LBL_BCC' => 'Cco:',
    'LBL_BODY' => 'Corpo:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CC' => 'Cc:',
    'LBL_COMPOSE_MODULE_NAME' => 'Escrever E-mail',
    'LBL_CONTACT_NAME' => 'contato:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'contatos',
    'LBL_CREATED_BY' => 'Criado por',
    'LBL_DATE_SENT' => 'Data de Envio:',
    'LBL_DATE' => 'Data de Envio:',
    'LBL_DELETE_FROM_SERVER' => 'Eliminar mensagem do servidor',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_EDIT_ALT_TEXT' => 'Editar Texto Alternativo',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Enviar como texto simples',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Enviar email de adesão',
    'LBL_EMAIL_ATTACHMENT' => 'Anexo do E-mail',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Selecionar',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Apagar',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Contas de E-mail',
    'LBL_EMAILS_BUGS_REL' => 'E-mails: Bugs',
    'LBL_EMAILS_CASES_REL' => 'E-mails: Ocorrências',
    'LBL_EMAILS_CONTACTS_REL' => 'E-mails: contatos',
    'LBL_EMAILS_LEADS_REL' => 'Email: Potenciais',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mails: Oportunidades',
    'LBL_EMAILS_NOTES_REL' => 'E-mails: Anotações',
    'LBL_EMAILS_PROJECT_REL' => 'E-mails: Projeto',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mails: Tarefa de Projeto',
    'LBL_EMAILS_PROSPECT_REL' => 'Email: Potenciais clientes',
    'LBL_EMAILS_CONTRACTS_REL' => 'Emails: Contrato',
    'LBL_EMAILS_TASKS_REL' => 'E-mails: Tarefas',
    'LBL_EMAILS_USERS_REL' => 'E-mails: Usuários',
    'LBL_EMPTY_FOLDER' => 'Nenhum E-mail a exibir',
    'LBL_SELECT_FOLDER' => 'Selecionar Pasta',
    'LBL_ERROR_SENDING_EMAIL' => 'Erro ao enviar o e-mail',
    'LBL_ERROR_SAVING_DRAFT' => 'Erro ao gravar rascunho',
    'LBL_FROM_NAME' => 'Nome De',
    'LBL_FROM' => 'De:',
    'LBL_REPLY_TO' => 'Responder A:',
    'LBL_HTML_BODY' => 'Corpo em HTML',
    'LBL_INVITEE' => 'Destinatários',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_MESSAGE_SENT' => 'Mensagem Enviada',
    'LBL_MODIFIED_BY' => 'Modificado Por',
    'LBL_MODULE_NAME' => 'Todos os E-mails',
    'LBL_MODULE_TITLE' => 'E-mails:',
    'LBL_MY_EMAILS' => 'Emails',
    'LBL_NEW_FORM_TITLE' => 'Arquivar E-mail',
    'LBL_NONE' => 'Nenhum',
    'LBL_NOT_SENT' => 'Erro no Envio',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Anexos',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projetos',
    'LBL_RAW' => 'Código fonte do email',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Salvar Rascunho',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Ignorar o Rascunho',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar E-mails',
    'LBL_SEND_ANYWAYS' => 'Este e-mail está sem assunto. Enviar e salvar mesmo assim?',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SEND_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND' => 'ENVIAR',
    'LBL_SENT_MODULE_NAME' => 'E-mails Enviados',
    'LBL_SHOW_ALT_TEXT' => 'Mostrar Texto Alternativo',
    'LBL_SIGNATURE' => 'Assinatura',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_TEXT_BODY' => 'Corpo do Texto',
    'LBL_TIME' => 'Hora de Envio:',
    'LBL_TO_ADDRS' => 'Para',
    'LBL_USERS_SUBPANEL_TITLE' => 'Usuários',
    'LBL_USERS' => 'Usuários',

    'LNK_CALL_LIST' => 'Ligações',
    'LBL_EMAIL_RELATE' => 'Referente a',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Modelos de E-mail',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_NEW_CALL' => 'Registrar Ligação',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Criar Modelo de E-mail',
    'LNK_NEW_EMAIL' => 'Escrever E-mail',
    'LNK_NEW_MEETING' => 'Criar Nova Reunião',
    'LNK_NEW_NOTE' => 'Nova Anotação ou Anexo',
    'LNK_NEW_SEND_EMAIL' => 'Escrever E-mail',
    'LNK_NEW_TASK' => 'Criar Nova Tarefa',
    'LNK_NOTE_LIST' => 'Anotações',
    'LNK_SENT_EMAIL_LIST' => 'E-mails Enviados',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_VIEW_CALENDAR' => 'Hoje',

    'LBL_LIST_ASSIGNED' => 'Atribuído',
    'LBL_LIST_CONTACT_NAME' => 'Nome do contato',
    'LBL_LIST_DATE_SENT' => 'Data de Envio',
    'LBL_LIST_DATE' => 'Data de Envio',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Rascunho',
    'LBL_LIST_FORM_SENT_TITLE' => 'E-mails Enviados',
    'LBL_LIST_FORM_TITLE' => 'Lista de E-mails',
    'LBL_LIST_FROM_ADDR' => 'De',
    'LBL_LIST_RELATED_TO' => 'Referente a',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LIST_TO_ADDR' => 'Para',
    'LBL_LIST_TYPE' => 'Tipo',

    'WARNING_SETTINGS_NOT_CONF' => 'Atenção: As suas configurações de e-mail não estão definidas para o envio do mesmo.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Exibir código',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ocultar código',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Verificar se tem novos E-mails',
    'LBL_BUTTON_CHECK_TITLE' => 'Verificar se tem novos emails',
    'LBL_BUTTON_FORWARD' => 'Encaminhar',
    'LBL_BUTTON_REPLY_TITLE' => 'Responder',
    'LBL_BUTTON_REPLY_ALL' => 'Responder Todos',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_INBOUND_TITLE' => 'E-mail Recebido',
    'LBL_INTENT' => 'Intenção',
    'LBL_MESSAGE_ID' => 'ID da Mensagem',
    'LBL_REPLY_HEADER_1' => 'Em',
    'LBL_REPLY_HEADER_2' => 'escreveu:',
    'LBL_REPLY_TO_ADDRESS' => 'Endereço de Resposta',
    'LBL_REPLY_TO_NAME' => 'Nome de Resposta',

    'LBL_LIST_BUG' => 'Bugs',
    'LBL_LIST_CASE' => 'Ocorrências',
    'LBL_LIST_CONTACT' => 'contatos',
    'LBL_LIST_LEAD' => 'Potenciais',
    'LBL_LIST_TASK' => 'Tarefas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário Atribuído',

    // for Inbox
    'LBL_ALL' => 'Todos',
    'LBL_ASSIGN_WARN' => 'Assegure-se de que as 2 opções estão seleccionadas.',
    'LBL_BACK_TO_GROUP' => 'Voltar para a Caixa de E-mails de Entrada de Grupo',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Atribuir',
    'LBL_BUTTON_DISTRIBUTE' => 'Atribuir',
    'LBL_BUTTON_GRAB_TITLE' => 'Capturar do Grupo',
    'LBL_BUTTON_GRAB' => 'Capturar do Grupo',
    'LBL_CREATE_BUG' => 'Criar Bug',
    'LBL_CREATE_CASE' => 'Criar Ocorrência',
    'LBL_CREATE_CONTACT' => 'Criar contato',
    'LBL_CREATE_LEAD' => 'Novo Potencial',
    'LBL_CREATE_TASK' => 'Criar Tarefa',
    'LBL_DIST_TITLE' => 'Atribuição',
    'LBL_LOCK_FAIL_DESC' => 'O item escolhido não está disponível de momento.',
    'LBL_LOCK_FAIL_USER' => ' ganhou a propriedade.',
    'LBL_MASS_DELETE_ERROR' => 'Nenhum dos itens selecionados foi submetido à eliminação.',
    'LBL_NEW' => 'Novo',
    'LBL_NEXT_EMAIL' => 'Próximo Item Livre',
    'LBL_REPLIED' => 'Respondido',
    'LBL_TO' => 'Para:',
    'LBL_TOGGLE_ALL' => 'Marcar todos',
    'LBL_UNKNOWN' => 'Desconhecido',
    'LBL_USE' => 'Atribuir:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Atribuir Resultados Selecionados A:',
    'LBL_USER_SELECT' => 'selecionar Usuários',
    'LBL_USING_RULES' => 'Utilizando Perfis:',
    'LBL_WARN_NO_DIST' => 'Nenhum Método de Distribuição Selecionado',
    'LBL_WARN_NO_USERS' => 'Nenhum Utilizador está Selecionado',
    'LBL_IMPORT_STATUS_TITLE' => 'Estado',
    'LBL_INDICATOR' => 'Indicador',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Caixa de Entrada do Grupo',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Rascunhos',
    'LBL_LIST_TITLE_MY_INBOX' => 'Caixa de Entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'E-mail enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails Arquivados',

    'LNK_MY_DRAFTS' => 'Rascunhos',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver E-mails',
    'LNK_QUICK_REPLY' => 'Responder',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nenhuma equipe Principal especificada',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insira o Endereço de Email de um Contato',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insira o Endereço de Email de uma Conta',
    'LBL_INSERT_TARGET_EMAIL' => 'Insira o Endereço de Email de um Alvo',
    'LBL_INSERT_USER_EMAIL' => 'Insira o Endereço de Email de um Usuário',
    'LBL_INSERT_LEAD_EMAIL' => 'Insira o Endereço de Email de um Potencial',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Endereço de email inválido',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Atribuído A:',
    'LBL_MEMBER_OF' => 'Precedente',
    'LBL_QUICK_CREATE' => 'Criar Rápido',
    'LBL_CREATE' => 'Criar', // PR 5651
    'LBL_STATUS' => 'Status do e-mail:',
    'LBL_EMAIL_FLAGGED' => 'Assinalado:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Responder ao Status:',
    'LBL_TYPE' => 'Tipo:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Por favor verifique!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Ao selecionar este modelo irá sobrescrever quaisquer dados já introduzidos dentro do corpo do e-mail. Pretende continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selecionar "--Nenhum--" irá limpar todos os dados já inseridos no corpo do e-mail. Deseja continuar?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Aviso',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Usar um modelo de e-mail que contenha variáveis de contato, tais como o nome de contato, para enviar e-mail a destinatários múltiplos pode resultar em erros inesperados. É recomendado que se use uma campanha de e-mail para envios em massa.',
    'LBL_CHECK_ATTACHMENTS' => 'Por Favor Verifique os Anexos!',
    'LBL_HAS_ATTACHMENTS' => 'Este e-mail já contém anexos(s). Pretende manter o(s) anexo(s)?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Possui Anexos',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Campo obrigatório não preenchido',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obrigatório inválido',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Apenas exibir recipientes relacionados',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Adicionar',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Adicionar',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Propriedades da conta de e-mail',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Servidor de correio SMTP de saída',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Servidores de correio SMTP de saída',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Contas de Correio',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'E-mail de entrada',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'E-mail de saída',
    'LBL_ADD_CC' => 'Adicionar Cc',
    'LBL_ADD_BCC' => 'Adicionar Bcc',
    'LBL_MOVE_TO_BCC' => 'Mover para o Bcc',
    'LBL_ADD_TO_ADDR' => 'Adicionar Para',
    'LBL_SELECTED_ADDR' => 'Selecionado',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Mensagem Não Pode Ser Enviada',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'exibir',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => 'mais',
    'LBL_MORE_OPTIONS' => 'Mais',
    'LBL_LESS_OPTIONS' => 'Menos',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Pessoal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Grupo',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupo - Importação Automática',
    'LBL_SEARCH_FOR' => 'Procurar',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Pessoal:</b> conta de e-mail acessível por si. Só você pode gerir e importar e-mails dessa conta.<br> <b>Grupo:</b> conta de e-mail acessível a membros das equipes especificadas. Os membros das equipes podem gerir e importar e-mails dessa conta. <br><b>Grupo - Importação Automática:</b> a conta de e-mail acessível a membros de equipes especificadas. Emails são importados automaticamente como registros.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Insira um endereço de e-mail, Nome, Apelido ou Nome da Conta para encontrar recipientes.',
    'LBL_TEST_SETTINGS' => 'Configurações de teste',
    'LBL_EMPTY_EMAIL_BODY' => 'Esta mensagem não tem conteúdo',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Por favor, especifique o assunto',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Por favor especifique a sua mensagem no corpo',
    'LBL_HAS_INVALID_EMAIL_CC' => 'O(s) endereço(s) no campo Cc é(são) inválido(s)',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'O(s) endereço(s) no campo Cco é(são) inválido(s)',
    'LBL_HAS_INVALID_EMAIL_TO' => 'O(s) endereço(s) no campo Para é(são) inválido(s)',
    'LBL_TEST_EMAIL_SUBJECT' => 'E-mail de teste do SuiteCRM',
    'LBL_NO_SUBJECT' => '(sem assunto)',
    'LBL_CHECKING_ACCOUNT' => 'A verificar conta',
    'LBL_OF' => 'de',
    'LBL_TEST_EMAIL_BODY' => 'Este e-mail foi enviado para testar as definições do servidor de correio de saída fornecidas no SuiteCRM. Uma recepção bem-sucedida deste e-mail indica que as informações do servidor de correio de saída são válidas.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'O administrador ainda não configurou a conta padrão de saída. Não é possível enviar e-mail de teste.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Palavra-passe Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Usuário Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',

    'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Anexo' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Excluir' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Criar Ocorrências' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Criar Potenciais' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Criar Contatos' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Criar Bugs' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Criar Tarefas' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Checar' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Fechar' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Esperar' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Checar E-mail' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Escrever E-mail' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Configuração de E-mail' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'E-mail: Reuniões',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',

    'LBL_CATEGORY' => 'Categoria',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'LBL_EMAIL_TEMPLATE' => 'Modelo de E-mail',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorar o Rascunho',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Esta operação irá apagar este e-mail, você quer continuar?',
    'LBL_EMAIL_DRAFT_DELETED' => 'O rascunho foi excluído',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Ocorreu um erro ao tentar excluir o rascunho.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'O registro foi criado com sucesso.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS2' => 'Clique em OK para visualizar o novo registro.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS3' => 'Clique em Cancelar para retornar para o E-mail.', // PR 5651

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Aplicar um modelo de Email',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Esta operação irá substituir os campos de corpo do e-mail e do assunto, quer mesmo continuar?',

    'LBL_MAILBOX_ID' => 'ID da caixa de correio',
    'LBL_PARENT_ID' => 'ID Origem:',
    'LBL_LAST_SYNCED' => 'Última sincronização',
    'LBL_ORPHANED' => 'Órfão',
    'LBL_IMAP_KEYWORDS' => 'Senha do IMAP',
    'LBL_ERROR_NO_FOLDERS' => 'Erro: não existem pastas disponíveis. Por favor, verifique as suas configurações de e-mail.',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',


    'LBL_MARK_UNREAD' => 'Marcar como não lida',
    'LBL_MARK_READ' => 'Marcar como lida',
    'LBL_MARK_FLAGGED' => 'Marcar como assinalado',
    'LBL_MARK_UNFLAGGED' => 'Marcar como não assinalado',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Email de adesão enviado',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Falha no e-mail de adesão',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmar chave do consentimento',

    'ERR_NO_RETURN_ID' => 'Anexo não encontrado.',

    'LBL_LIST_DATE_MODIFIED' => 'Última Modificação',
    'LNK_IMPORT_CAMPAIGNS' => 'Importar campanha',
);