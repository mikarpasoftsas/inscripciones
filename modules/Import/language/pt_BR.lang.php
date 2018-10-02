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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'linhas não foram importadas devido a erros',
    'LBL_UPDATE_SUCCESSFULLY' => 'registros atualizados com sucesso',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Registros criados com sucesso',
    'LBL_STEP_4_TITLE' => 'Passo 4: Importar Arquivo',
    'LBL_STEP_5_TITLE' => 'Passo 5: Ver Resultados',
    'LBL_CUSTOM_ENCLOSURE' => 'Campos Qualificados Por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Incapaz de publicar. Existe outro mapa de Importação publicado com o mesmo nome.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Incapaz de remover a publicação de um mapa pertencente a outro Usuário. Você possui um mapa de Importação com o mesmo nome.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importações não estão configuradas para este tipo de módulo',
    'LBL_IMPORT_TYPE' => 'Ação de Importação',
    'LBL_IMPORT_BUTTON' => 'Criar Registros',
    'LBL_UPDATE_BUTTON' => 'Criar e Atualizar Registros',
    'LBL_CREATE_BUTTON_HELP' => 'Use esta opção para criar novos registros. Nota: As linhas no arquivo de importação contendo valores que correspondem os IDs dos registros existentes não serão importados se os valores são mapeados para o campo ID',
    'LBL_UPDATE_BUTTON_HELP' => 'Use esta opção para atualizar os registros existentes. Os dados no arquivo de importação serão comparado aos registros existentes com base no ID do registro no arquivo de importação.',
    'LBL_ERROR_INVALID_BOOL' => 'valor inválido (deve ser 1 ou 0)',
    'LBL_IMPORT_ERROR' => 'Ocorreram Erros na Importação',
    'LBL_ERROR' => 'Erro:',
    'LBL_FIELD_NAME' => 'Nome de Campo',
    'LBL_VALUE' => 'Valor',
    'LBL_NONE' => 'Nenhum',
    'LBL_REQUIRED_VALUE' => 'Falta valor necessário',
    'LBL_ERROR_SYNC_USERS' => 'Valor inválido para sincronizar com o Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'ID já existe nesta tabela',
    'LBL_ASSIGNED_USER' => 'se o Usuário não existir use o Usuário atual',
    'LBL_ERROR_DELETING_RECORD' => 'Erro ao excluir o registro:',
    'LBL_ERROR_INVALID_ID' => 'ID fornecido é muito extenso para caber no campo (a extensão máxima é de 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de telefone inválido',
    'LBL_ERROR_INVALID_NAME' => 'String muito extensa para caber no campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'String muito extensa para caber no campo',
    'LBL_ERROR_INVALID_DATE' => 'Data inválida',
    'LBL_ERROR_INVALID_DATETIME' => 'Data e hora inválidas',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Data e hora inválidas',
    'LBL_ERROR_INVALID_TIME' => 'Hora inválida',
    'LBL_ERROR_INVALID_INT' => 'Valor inteiro inválido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico inválido',
    'LBL_ERROR_INVALID_EMAIL' => 'Endereço de E-mail inválido',
    'LBL_ERROR_INVALID_USER' => 'Nome de Usuário ou ID inválido',
    'LBL_ERROR_INVALID_TEAM' => 'Nome de equipa ou ID inválido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nome de conta ou ID inválido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional inválido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moeda inválido',
    'LBL_ERROR_INVALID_FLOAT' => 'Número de ponto flutuante inválido',
    'LBL_ERROR_NOT_IN_ENUM' => 'Valor não está na lista dropDown. Valores permitidos são:',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Arquivo não foi carregado com êxito. Provavelmente a configuração \'upload_max_filesize\' do seu php.ini está definida com um valor muito baixo',
    'LBL_MODULE_NAME' => 'Importar',
    'LBL_TRY_AGAIN' => 'Tente novamente',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'O arquivo de importação contém {0} linhas. O número ideal de linhas é {1}. Mais linhas podem retardar o processo de importação. Clique em OK para continuar importando. Clique em Cancelar para revisar e re-upload do arquivo de importação.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Não pode importar um Usuário administrador do sistema',
    'ERR_MULTIPLE' => 'Múltiplas colunas foram definidas com o mesmo nome de campo.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Campos obrigatórios não preenchidos:',
    'ERR_SELECT_FILE' => 'selecione um Arquivo para carregar.',
    'LBL_SELECT_FILE' => 'selecione um Arquivo:',
    'LBL_EXTERNAL_SOURCE' => 'Aplicação externa ou serviço',
    'LBL_CUSTOM_DELIMITER' => 'Campos Delimitados Por:',
    'LBL_DONT_MAP' => '-- Não mapeie este campo --',
    'LBL_STEP_MODULE' => 'Qual módulo você quer para importadr estes dados?',
    'LBL_STEP_1_TITLE' => 'Passo 1: selecionar a Fonte',
    'LBL_CONFIRM_TITLE' => 'Step {0}:Confirmar Propriedades do arquivo de importações',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Os mapeamentos customizados para o Microsoft Outlook dependem que o arquivo de importação seja delimitado por vírgula (. csv). Se seu arquivo de importação é delimitado por tabulação, os mapeamentos não serão aplicados conforme o esperado.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'publicar',
    'LBL_DELETE' => 'Excluir',
    'LBL_PUBLISHED_SOURCES' => 'Fontes Publicadas:',
    'LBL_UNPUBLISH' => 'não publicadas',
    'LBL_NEXT' => 'Próximo &gt;',
    'LBL_BACK' => '&lt; Voltar',
    'LBL_STEP_2_TITLE' => 'Passo 2: Carregar Arquivo Exportado',
    'LBL_HAS_HEADER' => 'Tem Cabeçalho:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Anotações:',
    'LBL_STEP_3_TITLE' => 'Passo 3: Confirmar Campos e Importar',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Checar duplicidade',
    'LBL_DATABASE_FIELD' => 'Campo do Banco de Dados',
    'LBL_HEADER_ROW' => 'Linha do Cabeçalho',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Selecione se a linha superior do arquivo de importação é uma linha de cabeçalho contendo rótulos de campo.',
    'LBL_ROW' => 'Linha',
    'LBL_CONTACTS_NOTE_1' => 'Sobrenome ou Nome Completo devem ser mapeados.',
    'LBL_CONTACTS_NOTE_2' => 'Se Nome Completo está mapeado, então Primeiro Nome e Sobrenome são ignorados.',
    'LBL_CONTACTS_NOTE_3' => 'Se Nome Completo está mapeado, então o dado deste campo será separado em Primeiro Nome e Sobrenome quando inserido na base de dados.',
    'LBL_CONTACTS_NOTE_4' => 'Campos do Endereço 2 e 3 serão concatenados com o campo Endereço (principal) quando inserido na base de dados.',
    'LBL_ACCOUNTS_NOTE_1' => 'Nome da Conta deve estar mapeado.',
    'LBL_IMPORT_NOW' => 'Importar Agora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Não é possível abrir o Arquivo importado para leitura',
    'LBL_NO_LINES' => 'Não há linhas (Registros) no seu Arquivo de importação',
    'LBL_SUCCESS' => 'Sucesso:',
    'LBL_LAST_IMPORT_UNDONE' => 'A sua última importação foi desfeita',
    'LBL_NO_IMPORT_TO_UNDO' => 'Não há importação para desfazer.',
    'LBL_CREATED_TAB' => 'Dados criados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Erros',
    'LBL_IMPORT_MORE' => 'Importar Mais',
    'LBL_FINISHED' => 'Finalizar',
    'LBL_UNDO_LAST_IMPORT' => 'Desfazer Última Importação',
    'LBL_DUPLICATES' => 'Duplicados Encontrados',
    'LNK_DUPLICATE_LIST' => 'Download da Lista de Duplicados',
    'LNK_ERROR_LIST' => 'Download da Lista de Erros',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download dos Registros que não podem ser importados',
    'LBL_INDEX_USED' => 'Index(es) utilizados',
    'LBL_INDEX_NOT_USED' => 'Index(es) não utilizados',
    'LBL_IMPORT_FIELDDEF_ID' => 'Número de ID Único',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nome ou ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de Telefone',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nome de Equipa ou ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nome de usuário ou ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; ou &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Endereço de E-mail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (Decimal Permitido)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (Decimal Permitido)',
    'LBL_DATE_FORMAT' => 'Formato da Data:',
    'LBL_TIME_FORMAT' => 'Formato da Hora:',
    'LBL_TIMEZONE' => 'Fuso Horário',
    'LBL_ADD_ROW' => 'Adicionar Campo',
    'LBL_REMOVE_ROW' => 'Remover Campo',
    'LBL_DEFAULT_VALUE' => 'Valor Padrão',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar Opções Avançadas',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar Opções Avançadas',
    'LBL_SHOW_NOTES' => 'Ver Anotações',
    'LBL_HIDE_NOTES' => 'Esconder Anotações',
    'LBL_SAVE_MAPPING_AS' => 'Salvar Mapeamento Como:',
    'LBL_IMPORT_COMPLETE' => 'Importação Completa',
    'LBL_IMPORT_COMPLETED' => 'Importação finalizada',
    'LBL_IMPORT_RECORDS' => 'Importando Registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'para',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos Significativos da Moeda',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador 1000s',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato de Exibição do Nome',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saudação, "f" Primeiro Nome, "l" Último Nome</i>',
    'LBL_CHARSET' => 'Codificação do Nome',
    'LBL_MY_SAVED_HELP' => 'Um mapeamento gravado especifica uma combinação anteriormente utilizada de uma fonte específica de dados e um conjunto de campos para mapear para os campos no Arquivo de importação. <br> Clicar <b> Publicar </ b> para tornar o mapeamento disponível para outros Usuários. <br>Clique <b> Não-Publicar </ b> para tornar o mapeamento indisponível para outros Usuárioes.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use esta opção para aplicar as configurações pré-definidas de importação, incluindo propriedades de importação, mapeamentos, e as configurações de verificação duplicadas, para esta importação.<br /><br />Clique em Publicar para fazer os mapeamentos disponíveis para outros usuários.<br />Clique Un-Publish para fazer o mapeamento indisponível para outros usuários.<br />Clique em Excluir para excluir um mapeamento de todos os usuários.',
    'LBL_ENCLOSURE_HELP' => '<p>O <b>caractere qualificador</b> é utilizado para encerrar o conteúdo de campo destinado, incluindo quaisquer caracteres que são utilizados como delimitadores.<br><br>Exemplo: Se o delimitador é uma vírgula (,) e o qualificador é uma aspa ("),<br><b>"Cupertino, Califórnia"</b> é importado para um campo na aplicação e aparece como <b>Cupertino, Califórnia</b>.<br>Se não há caracteres qualificadores, ou se um caractere diferente é o qualificador,<br><b>"Cupertino, Califórnia" </b> é importado para dois campos adjacentes como <b>"Cupertino</b> and <b>"California"</b>.<br><br>Nota: O Arquivo de importação pode não conter quaisquer caracteres qualificadores.<br> O caractere qualificador padrão para Arquivos delimitadores vírgula- e tabulação- criados no Excel é uma aspa.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'selecione um campo da lista de todos os campos existentes na base de dados do módulo.',
    'LBL_HEADER_ROW_HELP' => 'Estes são os títulos de campo na linha de cabeçalho do Arquivo de importação.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indicar um valor a utilizar para o campo no registro criado ou atualizado se o campo no arquivo de importação não contiver dados.',
    'LBL_ROW_HELP' => 'Estes são os dados na primeira linha a seguir ao cabeçalho do Arquivo de importação.',
    'LBL_SAVE_MAPPING_HELP' => 'Introduza um nome para o conjunto de campos da base de dados utilizados anteriormente no mapeamento dos campos no Arquivo de importação de campos.<br>O conjunto de campos, incluindo a ordem dos campos e a fonte de dados selecionada no Passo de Importação 1, serão gravadas durante a tentativa de importação. <br> O mapeamento gravado pode ser selecionado em seguida no Passo de Importação 1 para uma nova importação.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Especifique as configurações no Arquivo de importação para assegurar que os dados são importados<br> correctamente. Estas configurações não se irão sobrepor às suas preferências. Os Registros<br> criados ou atualizados irão conter as configurações especificadas na sua página Minha Conta.',
    'LBL_IMPORT_STARTED' => 'Início da Importação:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'O registro não pôde ser atualizado devido a um problema de permissões',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Tem a certeza que quer apagar este mapeamento?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Se o arquivo de importação de dados foi exportado a partir de qualquer das seguintes fontes, selecione qual.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Selecione a fonte para aplicar automaticamente os mapeamentos de costume, a fim de simplificar o processo de mapeamento (próxima etapa).',
    'LBL_EXAMPLE_FILE' => 'Download do template do arquivo de importação',
    'LBL_CONFIRM_IMPORT' => 'Você selecionou para atualizar registros durante o processo de importação. As atualizações feitas em registros existentes não poderão ser desfeitas. No entanto, os registros criados durante o processo de importação podem ser desfeitos (excluídos), se desejado. Clique em Cancelar para selecionar a opção de somente criar novos registros ou clique OK para continuar.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Atenção: Você já selecionou um mapeamento personalizado para esta importação, você quer continuar?',
    'LBL_SAMPLE_URL_HELP' => 'Download de um arquivo de importação amostra contendo uma linha de cabeçalho dos campos módulo. O arquivo pode ser usado como um modelo para criar um arquivo de importação contendo os dados que você gostaria de importar.',
    'LBL_AUTO_DETECT_ERROR' => 'O campo delimitador e qualificador no arquivo de importação não pôde ser detectado. Por favor, verifique as configurações nas propriedades do arquivo de importação.',
    'LBL_MIME_TYPE_ERROR_1' => 'O arquivo selecionado não parece conter uma lista delimitada. Por favor, verifique o tipo de arquivo. Recomendamos arquivos delimitados por vírgula (. Csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para prosseguir com a importação do arquivo selecionado, clique em OK. Para carregar um novo arquivo, clique em Try Again',
    'LBL_FIELD_DELIMETED_HELP' => 'O delimitador de campo especifica o caractere usado para separar as colunas de campo.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Selecione um arquivo contendo os dados que são separados por um delimitador, como um arquivo por vírgula ou por tabulação. Arquivos do tipo. Csv são recomendados.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Diretório de cache de importação não é gravável.',
    'LBL_ADD_FIELD_HELP' => 'Utilize esta opção para adicionar um valor a um campo em todos os registros criados e / ou atualizado. Selecione o campo e digite ou selecione um valor para esse campo na coluna Valor padrão.',
    'LBL_MISSING_HEADER_ROW' => 'nenhuma linha de cabeçalho encontrada',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => 'Pronto para iniciar importação? Selecione o recurso de dados que gostaria de importar',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Selecione um arquivo no seu computador que contém os dados que você gostaria de importar, ou fazer o download do modelo para obter uma vantagem sobre a criação do arquivo de importação.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Aqui está como as primeiras linhas diversas do arquivo de importação aparecem com as propriedades do arquivo detectado. Se uma linha de cabeçalho foi detectado, ele é exibido na linha superior da tabela. Ver as propriedades do arquivo de importação para fazer alterações às propriedades detectadas e para definir propriedades adicionais. Atualizando as definições irá atualizar os dados que aparecem na tabela.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'A tabela abaixo contém todos os campos no módulo que pode ser mapeado para os dados no arquivo de importação. Se o arquivo contém uma linha de cabeçalho, as colunas no arquivo foram mapeadas para campos correspondentes. Verificar os mapeamentos para se certificar de que eles são o que você espera, e fazer alterações, se necessário. Para ajudar a verificar os mapeamentos, Linha 1 mostra os dados no arquivo. Certifique-se de mapa para todos os campos obrigatórios (observado por um asterisco).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar a criação de registros duplicados, selecione qual dos campos mapeados você gostaria de usar para executar uma verificação de dados duplicados, enquanto está sendo importado. Valores dentro de registros existentes nos campos selecionados serão confrontados com os dados no arquivo de importação. Se dados correspondente for encontrado, as linhas no arquivo de importação contendo os dados serão exibidos juntamente com os resultados de importação (página seguinte). Então você vai ser capaz de selecionar quais dessas linhas para continuar importando.',
    'LBL_DUP_HELP' => 'Aqui estão as linhas do arquivo de importação que não foram importados, porque eles contêm dados que coincide com os valores nos registros existentes com base no cheque duplicado. Os dados que corresponda é realçado. Para voltar a importar essas linhas, faça o download da lista, fazer alterações e clique em Importar novamente.',
    'LBL_SUMMARY' => 'Resumo',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Aqui estão as linhas do arquivo de importação que não foram importados devido a erros. Para voltar a importar essas linhas, faça o download da lista, fazer alterações e clique em Importar novamente',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para atribuir os novos registros para um usuário diferente de si mesmo, use a coluna Valor padrão para selecionar um usuário diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para atribuir os novos registros para outras equipes do que sua equipe padrão (s), use a coluna Valor padrão para selecionar equipes diferentes.',
);

global $timedate;