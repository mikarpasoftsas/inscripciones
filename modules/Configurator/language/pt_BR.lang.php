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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avançado',
    'DEFAULT_CURRENCY_ISO4217' => 'Código de Moeda ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nome da moeda',
    'DEFAULT_CURRENCY_SYMBOL' => 'Símbolo da moeda',
    'DEFAULT_DATE_FORMAT' => 'Formato de data padrão',
    'DEFAULT_DECIMAL_SEP' => 'Símbolo decimal',
    'DEFAULT_LANGUAGE' => 'Idioma padrão',
    'DEFAULT_SYSTEM_SETTINGS' => 'Interface do Usuário',
    'DEFAULT_THEME' => 'Tema padrão',
    'DEFAULT_TIME_FORMAT' => 'Formato de horário padrão',
    'DISPLAY_RESPONSE_TIME' => 'Mostrar o tempo de resposta do servidor',
    'IMAGES' => 'Logotipos',
    'LBL_ALLOW_USER_TABS' => 'Permitir aos usuários ocultar guias',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configurações do sistema',
    'LBL_LOGVIEW' => 'Exibir Log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação do servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Usuário Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir que Usuários usem esta conta para enviar e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção for selecionada, todos os Usuários serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não for selecionada, os Usuários podem ainda utilizar o servidor de correio de saída, se assim o configurarem nas suas definições.',
    'LBL_MAILMERGE' => 'Mala direta',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo Minimo do Auto-Refresh do Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo que pode ser escolhido para o auto-refresh dos dashlets. Definir para &#39;Nunca&#39; desabilita o auto-refresh dos dashlets completamente.',
    'LBL_MODULE_FAVICON' => 'Exibir ícone de módulo como favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Se está num módulo com um ícone, utilize o ícone do módulo como favicon, em vez do favicon do tema, no tabulador do browser.',
    'LBL_MODULE_NAME' => 'Configurações do Sistema',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'Interface do Usuário',
    'LBL_NOTIFY_FROMADDRESS' => 'Endereço De:',
    'LBL_NOTIFY_SUBJECT' => 'Assunto do E-mail:',
    'LBL_PROXY_AUTH' => 'Autenticação?',
    'LBL_PROXY_HOST' => 'Host do Proxy',
    'LBL_PROXY_ON_DESC' => 'Configurar o endereço do Host do Proxy e autenticação',
    'LBL_PROXY_ON' => 'Utilizar um host do proxy?',
    'LBL_PROXY_PASSWORD' => 'Senha',
    'LBL_PROXY_PORT' => 'Porta',
    'LBL_PROXY_TITLE' => 'Configuração do Proxy',
    'LBL_PROXY_USERNAME' => 'Nome de Usuário',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restaurar',
    'LBL_SYSTEM_SETTINGS' => 'Definições de Sistema',
    'LBL_SKYPEOUT_ON_DESC' => 'Permite aos usuários clicar sobre os números de telefone para ligar usando o Dialer do telefone em seu dispositivo móvel, ou um aplicativo de telefonia no computador (SkypeOut&reg;, etc.). Os números devem ser formatados corretamente para fazer uso desse recurso. Ou seja, deve ser "+" "O código do país" "O número", como +55 (11) 5555-1234.',
    'LBL_SKYPEOUT_ON' => 'Ativar clique para chamadas em números de telefone',
    'LBL_SKYPEOUT_TITLE' => 'Clique para chamadas',
    'LBL_USE_REAL_NAMES' => 'Mostrar o Nome Completo',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo dos Usuários ao invés do nome de Usuário',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desativar ação de conversão de Potenciais para Potenciais Convertidos',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se um Potencial já foi convertido, habilitar esta opção irá remover a ação de conversão de Potenciais.',
    'LBL_ENABLE_ACTION_MENU' => 'Visualizar ações dentro do Menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecione para exibir a tela de Detalhes e as ações do subpanel em um menu dropdown. Se não for selecionado, as ações serão exibidas como botões separados.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Habilitar edição inline na exibição de lista',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Selecione para habilitar a Edição Inline para os campos no modo de exibição de lista. Se não selecionada, a Edição Inline será desabilitada na exibição de lista.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Habilitar edição inline na tela de detalhes',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Selecione para habilitar a Edição Inline para os campos na tela de detalhes. Se não selecionada, a Edição Inline será desabilitada na tela de detalhes.',
    'LBL_HIDE_SUBPANELS' => 'Subpainéis recolhidos',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Itens por página na vista de lista',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Número de registros por página nos Subpainéis',
    'LOG_MEMORY_USAGE' => 'Log de uso da memória',
    'LOG_SLOW_QUERIES' => 'Log de consultas lentas',
    'CURRENT_LOGO' => 'logotipo atual',
    'CURRENT_LOGO_HELP' => 'Este logotipo é exibido no canto esquerdo do rodapé do aplicativo SuiteCRM.',
    'NEW_LOGO' => 'Selecionar um novo logotipo (212x40)',
    'NEW_LOGO_HELP' => 'O formato do arquivo de imagem pode ser .png ou .jpg. A altura máxima é de 170px, e a largura máxima é de 450px. Se imagem carregada for maior em qualquer uma dessas dimensões, a mesma será redimensionada para esses limites.',
    'NEW_LOGO_HELP_NO_SPACE' => 'O formato do arquivo de imagem pode ser .png ou .jpg. A altura máxima é de 170px, e a largura máxima é de 450px. Se imagem carregada for maior em qualquer uma dessas dimensões, a mesma será redimensionada para esses limites. O nome do arquivo de imagem não deve conter caractere de espaço.',
    'SLOW_QUERY_TIME_MSEC' => 'Limite em milissegundos das consultas mais lentas',
    'STACK_TRACE_ERRORS' => 'Mostrar o stack trace de erros',
    'UPLOAD_MAX_SIZE' => 'Tamanho máximo de Arquivos a carregar',
    'VERIFY_CLIENT_IP' => 'Validar o IP do Usuário',
    'LOCK_HOMEPAGE' => 'Evitar que o usuário cusotmize o layout da Página Inicial',
    'LOCK_SUBPANELS' => 'Evitar que o usuário customize o layout de subpainel',
    'MAX_DASHLETS' => 'Número máximo de Dashlets do SuiteCRM na página inicial',
    'SYSTEM_NAME' => 'Nome do Sistema',
    'SYSTEM_NAME_WIZARD' => 'Nome:',
    'SYSTEM_NAME_HELP' => 'Nome que aparece na barra de título do seu navegador.',
    'LBL_LDAP_TITLE' => 'Suporte para Autenticação LDAP',
    'LBL_LDAP_ENABLE' => 'Ativar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Servidor:',
    'LBL_LDAP_SERVER_PORT' => 'Número da Porta',
    'LBL_LDAP_ADMIN_USER' => 'Autenticar Usuário:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Usado para procurar o usuário LDAP. Pode precisar ser totalmente qualificado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Autenticação de Palavra-chave:',
    'LBL_LDAP_AUTHENTICATION' => 'Autenticação:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Ligar ao servidor LDAP usando uma credencial de usuário específico. Será ligada anonimamente se não fornecida.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Criar Usuários automaticamente',
    'LBL_LDAP_USER_DN' => 'DN do Usuário',
    'LBL_LDAP_GROUP_DN' => 'DN do Grupo',
    'LBL_LDAP_GROUP_DN_DESC' => 'Exemplo: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Filtro de Usuário:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Adesão ao Grupo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Usuários devem ser membros de um grupo específico',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Atributo de Usuário:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'O identificador exclusivo que será usado para verificar se eles são um membro do grupo Exemplo: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'O atributo de Grupo que será usado para filtrar face ao Atributo de Usuário Exemplo: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Atributo de Grupo:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Qualquer parâmetral de filtro adicional para aplicar ao autenticar usuários, por exemplo, <em>is_suitecrm_user = 1 ou (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Atributo de Login:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atributo de Ligação:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemplos para vincular usuários LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemplos para pesquisar usuários LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemplo: ldap.example.com',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplo: 389',
    'LBL_LDAP_GROUP_NAME' => 'Nome do Grupo:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplo <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemplo: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Se um usuário autenticado não existir, será criado um.',
    'LBL_LDAP_ENC_KEY' => 'Chave de Encriptação',
    'DEVELOPER_MODE' => 'Modo de Programador',

    'SHOW_DOWNLOADS_TAB' => 'Mostrar o Separador de Downloads',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Quando selecionada, a guia de Download irá aparecer nas configurações do usuário e fornecer aos usuários com acesso a SuiteCRM plug-ins e outros arquivos disponíveis',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para autenticação SOAP quando utilizar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser Ativada no seu arquivo php.ini',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'A extensão openssl deve ser ativada no seu arquivo php.ini.',
    'LBL_ALL' => 'Todos',
    'LBL_MARK_POINT' => 'Marcar Ponto',
    'LBL_NEXT_' => 'Próximo >>',
    'LBL_REFRESH_FROM_MARK' => 'atualizar a Partir da Marca',
    'LBL_SEARCH' => 'Pesquisar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorar-se:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcação Inicial do Logging',
    'LBL_DISPLAYING_LOG' => 'Exibindo Registro',
    'LBL_YOUR_PROCESS_ID' => 'O seu ID do processo',
    'LBL_YOUR_IP_ADDRESS' => 'O seu Endereço de IP é',
    'LBL_IT_WILL_BE_IGNORED' => 'será ignorado',
    'LBL_LOG_NOT_CHANGED' => 'Registro não se alterou',
    'LBL_ALERT_JPG_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG. Carregue um novo arquivo com a extensão .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG ou PNG. Carregue um novo arquivo com a extensão .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'A proporção do aspecto da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
    'LBL_LOGGER' => 'Configurações de Logger',
    'LBL_LOGGER_FILENAME' => 'Nome do arquivo Log',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensão',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Tamanho máximo do log',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato padrão da data',
    'LBL_LOGGER_LOG_LEVEL' => 'Nível do Log',
    'LBL_LEAD_CONV_OPTION' => 'Opções de Conversão de Potenciais',
    'LEAD_CONV_OPT_HELP' => "<b>Copiar</b> - Cria e relaciona cópias de todas as atividades dos Potenciais para novos registros que são selecionados pelo usuário durante a conversão. Cópias são criadas para cada um dos registros selecionados.<br><br><b>Mover</b> - Move todas as atividades dos Potenciais de um novo registro que é selecionado pelo usuário durante a conversão.<br><br><b>Nenhum</b> - Não faz nada com as atividades dos Potenciais durante a conversão. As atividades continuam relacionados apenas ao Potencial.",
    'LBL_CONFIG_AJAX' => 'Configurar Interface de usuário AJAX',
    'LBL_CONFIG_AJAX_DESC' => 'Habilitar ou desabilitar a utilização do AJAX UI para módulos especificos',
    'LBL_LOGGER_MAX_LOGS' => 'Número máximo de logs (antes do rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Anexar após o nome do arquivo',
    'LBL_VCAL_PERIOD' => 'Período de Tempo das atualizações vCal',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar: Número máximo de linhas',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quantas linhas são permitidas dentro de arquivos de importação.<br />Se o número de linhas em um arquivo de importação exceder este número, o usuário será alertado.<br />Se nenhum número é inserido, um número ilimitado de linhas são permitidos.',
    'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses em antecedência à atual data em que a informação Free/Busy para chamadas telefônicas e reuniões é publicada.</BR>Para desligar a publicação Free/Busy, introduza "0". O mínimo é 1 mês; o máximo são 12 meses.',
    'LBL_PDFMODULE_NAME' => 'Definições de PDF',
    'SUGARPDF_BASIC_SETTINGS' => 'Propriedades do Documento',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Definições Avançadas',
    'SUGARPDF_LOGO_SETTINGS' => 'Imagens',

    'PDF_AUTHOR' => 'Autor',
    'PDF_AUTHOR_INFO' => 'O Autor aparece nas propriedades do documento.',

    'PDF_HEADER_LOGO' => 'Para Documentos PDF Cotações',
    'PDF_HEADER_LOGO_INFO' => 'Esta imagem aparece no Cabeçalho padrão em Documentos PDF Cotações',

    'PDF_NEW_HEADER_LOGO' => 'Selecionar Nova Imagem para Cotações',
    'PDF_NEW_HEADER_LOGO_INFO' => 'O formato do arquivo pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 867x74 px.',

    'PDF_SMALL_HEADER_LOGO' => 'Para Documentos PDF Relatórios',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Esta imagem aparece no cabeçalho padrão dos Documentos PDF de Relatórios. <br>Esta imagem também aparece no canto superior esquerdo do aplicativo SuiteCRM.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Selecionar Nova Imagem para Relatórios',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'O formato do arquivo pode ser .jpg ou .png. (Apenas .jpg para EZPDF)<BR>O tamanho recomendado é 212x40 px.',

    'PDF_FILENAME' => 'Nome de arquivo Padrão',
    'PDF_FILENAME_INFO' => 'Nome de arquivo padrão para os Arquivos PDF gerados',

    'PDF_TITLE' => 'Título',
    'PDF_TITLE_INFO' => 'O Título aparece nas propriedades do documento.',

    'PDF_SUBJECT' => 'Assunto',
    'PDF_SUBJECT_INFO' => 'O Assunto aparece nas propriedades do documento.',

    'PDF_KEYWORDS' => 'Palavra(s)-chave',
    'PDF_KEYWORDS_INFO' => 'Associar Palavras-chave ao documento, geralmente no formato "palavra-chave1 palavra-chave2..."',

    'PDF_COMPRESSION' => 'Compressão',
    'PDF_COMPRESSION_INFO' => 'Ativa ou desativa a compressão da página. <br>Quando Ativada, a representação interna de cada página é comprimida, o que leva a uma taxa de compressão de aproximadamente 2 para o documento resultante.',

    'PDF_JPEG_QUALITY' => 'Qualidade JPEG (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Definir a qualidade de compressão JPEG padrão (1-100)',

    'PDF_PDF_VERSION' => 'Versão PDF',
    'PDF_PDF_VERSION_INFO' => 'Definir a versão PDF (verificar a referência PDF para valores válidos).',

    'PDF_PROTECTION' => 'Proteção do Documento',
    'PDF_PROTECTION_INFO' => 'Definir a proteção do documento<br>- copiar: copiar texto e imagens para o clipboard<br>- imprimir: imprimir o documento <br>- modificar: modificá-lo (excepto para anotações e formulários)<br>- anotar-formulários: adicionar anotações e formulários<br>Nota: a proteção contra a modificação é para as pessoas que têm o produto Acrobat completo.',

    'PDF_USER_PASSWORD' => 'Senha do Usuário',
    'PDF_USER_PASSWORD_INFO' => 'Se não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha principal, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_OWNER_PASSWORD' => 'Senha do Proprietário',
    'PDF_OWNER_PASSWORD_INFO' => 'Se não definir nenhuma Senha, o documento abrirá como habitual. <br>Se definir uma Senha de Usuário, o visualizador de PDF irá pedi-la antes de exibir o documento. <br>A Senha principal, se for diferente da do Usuário, pode ser usada para obter acesso total.',

    'PDF_ACL_ACCESS' => 'Controle de Acesso',
    'PDF_ACL_ACCESS_INFO' => 'Controle de Acesso Padrão para a geração de PDF.',

    'K_CELL_HEIGHT_RATIO' => 'Proporção da Altura da Célula',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Se a altura de uma célula é menor que (Proporção Altura da Fonte x Altura da Célula), então (Proporção Altura da Fonte x Altura da Célula) é usada como a altura da célula.<br>(Proporção Altura da Fonte x Altura da Célula) é também usada como altura da célula quando não está definida nenhuma altura.',

    'K_SMALL_RATIO' => 'Fator Fonte Pequena',
    'K_SMALL_RATIO_INFO' => 'Fator de redução para fonte pequena.',

    'PDF_IMAGE_SCALE_RATIO' => 'Proporção da escala da imagem',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Proporção usada para escalar as imagens',

    'PDF_UNIT' => 'Unidade',
    'PDF_UNIT_INFO' => 'Unidade de medição do documento',
    'PDF_GD_WARNING' => 'Não tem a biblioteca GD instalada para PHP. Sem a biblioteca GD instalada, apenas os logotipos JPEG podem ser exibidos em documentos PDF.',
    'ERR_EZPDF_DISABLE' => 'Aviso: A classe EZPDF está desativada na tabela de configuração e foi definida como a classe PDF. Por favor "Grave" este formulário para definir TCPDF como a Classe PDF e retornar num estado estável.',
    'LBL_IMG_RESIZED' => "(redimensionado para exibição)",


    'LBL_FONTMANAGER_BUTTON' => 'Gestor de Fonte PDF',
    'LBL_FONTMANAGER_TITLE' => 'Gestor de Fonte PDF',
    'LBL_FONT_BOLD' => 'Negrito',
    'LBL_FONT_ITALIC' => 'Itálico',
    'LBL_FONT_BOLDITALIC' => 'Negrito/Itálico',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Nuclear',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nome',
    'LBL_FONT_LIST_FILENAME' => 'Nome do arquivo',
    'LBL_FONT_LIST_TYPE' => 'Tipo',
    'LBL_FONT_LIST_STYLE' => 'Estilo',
    'LBL_FONT_LIST_STYLE_INFO' => 'Estilo da fonte',
    'LBL_FONT_LIST_ENC' => 'Codificação',
    'LBL_FONT_LIST_EMBEDDED' => 'Embutido',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Verificar para embutir a fonte no arquivo PDF',
    'LBL_FONT_LIST_CIDINFO' => 'Informação CID',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Para exemplos e mais ajuda: www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Tamanho da Fonte (KB)',
    'LBL_ADD_FONT' => 'Adicionar uma fonte',
    'LBL_BACK' => 'Voltar',
    'LBL_REMOVE' => 'Remover', // PR 6017
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Tem a certeza que pretende eliminar esta fonte?',

    'LBL_ADDFONT_TITLE' => 'Adicionar uma Fonte PDF',
    'LBL_PDF_ENCODING_TABLE' => 'Tabela de Codificação',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Nome da tabela de codificação.<br>Esta opção é ignorada para TrueType Unicode, Unicode OpenType e fontes simbólicas.<br>A codificação define a associação entre um código (de 0 a 255) e um caractere contido na fonte.<br>Os primeiros 128 são fixos e correspondem ao ASCII.',
    'LBL_PDF_FONT_FILE' => 'arquivo da Fonte',
    'LBL_PDF_FONT_FILE_INFO' => 'arquivo .ttf ou .otf ou .pfb',
    'LBL_PDF_METRIC_FILE' => 'Arquivo Métrico',
    'LBL_PDF_METRIC_FILE_INFO' => 'arquivo .afm ou .ufm',
    'LBL_ADD_FONT_BUTTON' => 'Adicionar',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Este arquivo não tem uma boa extensão de arquivo.',

    'ERR_MISSING_CIDINFO' => 'O campo Informação CID não pode estar em branco.',
    'LBL_ADDFONTRESULT_TITLE' => 'Resultado do processo de adicionamento de fonte',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCESSO: A fonte foi adicionada ao SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERRO: A fonte não foi adicionada. Consulte o registro abaixo.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Erro durante o carregamento da fonte ou arquivo métrico.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Seus Cenários',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nenhum cenário foi configurado',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Escolha quais cenários são adequados à sua instalação.  Essas opções podem ser alteradas após a instalação.',

    'LBL_WIZARD_TITLE' => 'Assistente de Administração',
    'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para inserir sua marca, dados de localização e configurar o SuiteCRM agora. Se você deseja configurar o SuiteCRM mais tarde, clique em <b>Ignorar</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o SuiteCRM!',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome e o logotipo de sua empresa para inserir sua marca no SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique como você gostaria que os dados sejam exibidos no SuiteCRM, baseados em sua localização geográfica. As configurações que você fornecer aqui serão as configurações padrões. Os usuários poderão definir suas próprias preferências.',
    'LBL_WIZARD_SMTP_DESC' => 'Forneça a conta de email que será usada para enviar emails, tais como: notificações de atribuição e novas senhas de usuário. Os usuários receberão emails do SuiteCRM, como se os emails fossem enviados da conta de email informada.',
    'LBL_LOADING' => 'Carregando...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Excluir' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bem-vindo' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mostrar e-mails dos contatos relacionados na história Subpainel por módulos',

    // Google auth
    'LBL_GOOGLE_AUTH_TITLE' => 'Autenticação Google', // PR 6146
    'LBL_GOOGLE_AUTH_JSON' => 'Arquivo JSON', // PR 6146
    'LBL_GOOGLE_AUTH_JSON_HELP' => 'Carregue o arquivo JSON que obteve do Google Developers Console.', // PR 6146
);