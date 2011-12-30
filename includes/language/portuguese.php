<?php
//portuguese
if (!isset($_SESSION['settings']['cpassman_url'])) {
$cpassman_url = '';
}else{
$cpassman_url = $_SESSION['settings']['cpassman_url'];
}

$txt['account_is_locked'] = "Conta bloqueada";
$txt['activity'] = "Atividade";
$txt['add_button'] = "Adicionar";
$txt['add_new_group'] = "Adicionar uma nova pasta";
$txt['add_role_tip'] = "Adicionar nova regra";
$txt['admin'] = "Administração";
$txt['admin_action'] = "Por favor, confirme sua ação";
$txt['admin_actions_title'] = "Especificar ações";
$txt['admin_action_check_pf'] = "Atualizar pastas pessoais para todos os usuários (cria se não existem)";
$txt['admin_action_db_backup'] = "Criar backup do banco de dados";
$txt['admin_action_db_backup_key_tip'] = "Entre com uma chave de criptografia. Salve em algum lugar, o mesmo será solicitado quando realizar restauração. (Deixe em branco para não criptografar)";
$txt['admin_action_db_backup_start_tip'] = "Iniciar";
$txt['admin_action_db_backup_tip'] = "É uma boa pratica realizar backups para uma eventual restauração.";
$txt['admin_action_db_clean_items'] = "Remova órfãos do Banco de Dados";
$txt['admin_action_db_clean_items_result'] = "Este item foi deletado.";
$txt['admin_action_db_clean_items_tip'] = "Isso só vai excluir esses itens e registos associados que não tenham sido excluídos após a pasta associada foi eliminada. Sugere-se para criar um backup antes.";
$txt['admin_action_db_optimize'] = "Optimizar o banco de dados.";
$txt['admin_action_db_restore'] = "Restaurar o banco de dados.";
$txt['admin_action_db_restore_key'] = "Entre com a chave de criptografia.";
$txt['admin_action_db_restore_tip'] = "Tem que ser feito usando um arquivo de backup do SQL criado para esta funcionalidade";
$txt['admin_action_purge_old_files'] = "Remove arquivos antigos";
$txt['admin_action_purge_old_files_result'] = "Arquivos deletados";
$txt['admin_action_purge_old_files_tip'] = "Isto vai apagar os arquivos temporários com mais de sete dias.";
$txt['admin_action_reload_cache_table'] = "Recarrega a tabela de cache";
$txt['admin_action_reload_cache_table_tip'] = "Permite que a tabela Cache seja recarregada. É útil ser utilizada algumas vezes.";
$txt['admin_backups'] = "Backups";
$txt['admin_error_no_complexity'] = "(<a href='index.php?page=manage_groups'>Definir?</a>)";
$txt['admin_error_no_visibility'] = "Ninguem pode ver este item. (<a href='index.php?page=manage_roles'>Personalize as regras</a>)	";
$txt['admin_functions'] = "Gerenciador de regras";
$txt['admin_groups'] = "Gerenciador de pastas";
$txt['admin_help'] = "Ajuda";
$txt['admin_info'] = "Alguma informação sobre a ferramenta";
$txt['admin_info_loading'] = "Carregando... aguarde.";
$txt['admin_ldap_configuration'] = "Configuração LDAP";
$txt['admin_ldap_menu'] = "Opções LDAP";
$txt['admin_main'] = "Informações";
$txt['admin_misc_cpassman_dir'] = "Caminho absoluto do TeamPass";
$txt['admin_misc_cpassman_url'] = "Caminho URL do TeamPass";
$txt['admin_misc_custom_login_text'] = "Texto de customização do login";
$txt['admin_misc_custom_logo'] = "URL completo do logo customizado";
$txt['admin_misc_favicon'] = "URL completo do arquivo favicon.ico ";
$txt['admin_misc_title'] = "Customizar";
$txt['admin_one_shot_backup'] = "Um click para backup e restore";
$txt['admin_script_backups'] = "Configurações do script de Backup";
$txt['admin_script_backups_tip'] = "Para maior segurança, recomenda-se definir um parâmetro para o backup agendado do banco de dados. <br/> Use seu servidor para agendar uma tarefa diária no cron chamando o 'script.backup.php'. O arquivo esta na pasta 'backups'. /> você primeiro precisa definir os primeiros 2 paramtros e salvá-los.";
$txt['admin_script_backup_decrypt'] = "Nome do arquivo para ser descriptografado.";
$txt['admin_script_backup_decrypt_tip'] = "A fim de descriptografar o arquivo de backup, basta indicar o nome do arquivo de backup (sem extensão e sem path). <br> O arquivo descriptografado na mesma pasta que os arquivos de backup são salvos.<br>";
$txt['admin_script_backup_encryption'] = "Chave de criptografia (opcional)";
$txt['admin_script_backup_encryption_tip'] = "Se definido, esta chave será usada para criptografar o arquivo.";
$txt['admin_script_backup_filename'] = "Arquivo de Backup";
$txt['admin_script_backup_filename_tip'] = "Nome do arquivo do seu backup";
$txt['admin_script_backup_path'] = "Endereço onde os seus backups serão armazenados.";
$txt['admin_script_backup_path_tip'] = "Em qual diretório o backup será armazenado";
$txt['admin_settings'] = "Configurações";
$txt['admin_settings_title'] = "Configurações TeamPass";
$txt['admin_setting_activate_expiration'] = "Ativa expiração de senha";
$txt['admin_setting_activate_expiration_tip'] = "Quando habilitado, os itens expirados não serão exibidos para o usuário.";
$txt['admin_users'] = "Gerenciamento de usuários ";
$txt['admin_views'] = "Visualizar";
$txt['alert_message_done'] = "Concluído!";
$txt['alert_message_personal_sk_missing'] = "Você necessita entrar com uma senha personalizada para saltkey!";
$txt['all'] = "todos";
$txt['anyone_can_modify'] = "Permite que o item seja modificado e acessado por qualquer usuário";
$txt['associated_role'] = "Qual regra será associado a este diretório:";
$txt['associate_kb_to_items'] = "Selecione o item para associar a este KB";
$txt['assoc_authorized_groups'] = "Diretórios associados permitidos";
$txt['assoc_forbidden_groups'] = "Diretórios associados proibidos.";
$txt['at'] = "em";
$txt['at_add_file'] = "Arquivo adicionado";
$txt['at_category'] = "Pasta";
$txt['at_copy'] = "Copia criada";
$txt['at_copy'] = "Copia concluída.";
$txt['at_creation'] = "Criação";
$txt['at_delete'] = "Deletado";
$txt['at_del_file'] = "Arquivo deletado";
$txt['at_description'] = "Descrição";
$txt['at_file'] = "Arquivo";
$txt['at_import'] = "Importação";
$txt['at_label'] = "Rótulo";
$txt['at_login'] = "Login";
$txt['at_modification'] = "Modificação";
$txt['at_moved'] = "Moved";
$txt['at_personnel'] = "Pessoal";
$txt['at_pw'] = "Senha alterada.";
$txt['at_restored'] = "Restaurado";
$txt['at_shown'] = "Acessado";
$txt['at_url'] = "URL";
$txt['auteur'] = "Autor";
$txt['author'] = "Autor";
$txt['authorized_groups'] = "Diretórios permitidos";
$txt['auth_creation_without_complexity'] = "Permite criar um item sem respeitas a complexidade da senha";
$txt['auth_modification_without_complexity'] = "Permite modificar o item sem respeitar a complexidade da senha exigida";
$txt['auto_create_folder_role'] = "Criar um diretório e regra para";
$txt['block_last_created'] = "Ultimo criado";
$txt['bugs_page'] = "Se você encontrar um bug poderá postar diretamente em <a href='http://code.google.com/p/TeamPass/issues/list' target='_blank'><u>Bugs</u></a>.";
$txt['by'] = "por";
$txt['cancel'] = "Cancelar";
$txt['cancel_button'] = "Cancelar";
$txt['can_create_root_folder'] = "Pode criar um diretório na raiz";
$txt['changelog'] = "Ultimas noticias";
$txt['change_authorized_groups'] = "Muda os diretórios autorizados";
$txt['change_forbidden_groups'] = "Muda os diretórios proibidos";
$txt['change_function'] = "Muda as regras";
$txt['change_group_autgroups_info'] = "Selecione a regra que poderá ver e usar no seguinte diretório";
$txt['change_group_autgroups_title'] = "Customiza os diretórios autorizados";
$txt['change_group_forgroups_info'] = "Selecione a regra que não poderá usar e ver para os diretórios proibidas";
$txt['change_group_forgroups_title'] = "Customizar os diretórios proibidos.";
$txt['change_user_autgroups_info'] = "Selecione o diretório autorizado para ver e usar";
$txt['change_user_autgroups_title'] = "Customize os diretórios autorizados";
$txt['change_user_forgroups_info'] = "Selecione os diretórios proibidos para esta conta que não pode ver e usar";
$txt['change_user_forgroups_title'] = "Customize os diretórios proibidos";
$txt['change_user_functions_info'] = "Selecione a função associada para esta conta";
$txt['change_user_functions_title'] = "Customize as funções associadas";
$txt['check_all_text'] = "Seleciona todos";
$txt['close'] = "Fechar";
$txt['complexity'] = "Complexidade";
$txt['complex_asked'] = "Requer complexidade";
$txt['complex_asked'] = "Requer complexidade";
$txt['complex_level0'] = "Muito fraco";
$txt['complex_level1'] = "Fraco";
$txt['complex_level2'] = "Médio";
$txt['complex_level3'] = "Forte";
$txt['complex_level4'] = "Muito forte";
$txt['complex_level5'] = "Difícil";
$txt['complex_level6'] = "Muito difícil";
$txt['confirm'] = "Confirme";
$txt['confirm_delete_group'] = "Você vai apagar este diretório incluindo todos os itens. você tem certeza?";
$txt['confirm_deletion'] = "Você esta deletando... você tem certeza?";
$txt['confirm_del_account'] = "Você esta deletando esta conta. Você tem certeza?";
$txt['confirm_del_from_fav'] = "Por favor, confirme a deleção de seus Favoritos.";
$txt['confirm_del_role'] = "Por favor, confirme a deleção para a próxima regra:";
$txt['confirm_edit_role'] = "Por favor, entre com o nome da próxima regra:";
$txt['confirm_lock_account'] = "Você quer bloquear esta conta. Você tem certeza?";
$txt['connection'] = "Conexão";
$txt['connections'] = "Conexões";
$txt['copy'] = "Copiar";
$txt['copy_to_clipboard_small_icons'] = "Habilita a copia para a areá de transferência a traves de um icon na pagina.";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style='font-size:11px;max-width:300px;'> Se o computador é antigo, habilite esta função, limita o uso de memoria para o browser. Mas ativado, nenhuma senha sera armazenado no clipboard. </ Span>
";
$txt['creation_date'] = "Data de criação";
$txt['csv_import_button_text'] = "Procurar arquivo CSV";
$txt['date'] = "Data";
$txt['date'] = "Data";
$txt['date_format'] = "Formato da data";
$txt['days'] = "dias";
$txt['definition'] = "Definição";
$txt['delete'] = "Deletar";
$txt['deletion'] = "Deletados";
$txt['deletion_title'] = "Lista dos itens deletados";
$txt['del_button'] = "Deletar";
$txt['del_function'] = "Regras deletadas";
$txt['del_group'] = "Deletar diretório";
$txt['description'] = "Descrição";
$txt['description'] = "Descrição";
$txt['disconnect'] = "Desconexão";
$txt['disconnection'] = "Desconexão";
$txt['div_dialog_message_title'] = "Informação";
$txt['done'] = "Concluído ";
$txt['drag_drop_helper'] = "Item 'drag and drop'";
$txt['duplicate_folder'] = "Autoriza para que tenha vários diretórios com o mesmo nome.";
$txt['duplicate_item'] = "Autoriza para que tenha vários arquivos com o mesmo nome.";
$txt['email'] = "E-mail";
$txt['email_altbody_1'] = "Item";
$txt['email_altbody_2'] = "foi criado";
$txt['email_announce'] = "Avisa por email este item";
$txt['email_body1'] = "Oi,<br><br>Item '";
$txt['email_body2'] = "Foi criado<br /><br />Você pode ver clicando <a href='";
$txt['email_body3'] = "'>AQUI</a><br /><br />Agradecimentos.";
$txt['email_change'] = "Altera e-mail desta conta";
$txt['email_changed'] = "E-mail alterado";
$txt['email_select'] = "Seleciona pessoa para informar";
$txt['email_subject'] = "Criando um novo item no Password Manager";
$txt['email_subject_new_user'] = "[TeamPass] Sua conta";
$txt['email_text_new_user'] = "Oi,<br /><br />Sua conta foi criada em TeamPass.<br />Agora você pode acessar $TeamPass_url usando as seguintes credenciais:<br />";
$txt['enable_favourites'] = "Habilita para que o usuário armazene seus favoritos";
$txt['enable_personal_folder'] = "Habilita o diretório de senhas pessoais";
$txt['enable_personal_folder_feature'] = "Habilita a função de diretórios pessoais";
$txt['enable_user_can_create_folders'] = "Usuários estão autorizado a administrar diretórios descendentes";
$txt['encrypt_key'] = "Chave de criptografia";
$txt['errors'] = "erros";
$txt['error_complex_not_enought'] = "Complexidade de senha não foi aceita!";
$txt['error_confirm'] = "A senha de confirmação não esta correta!";
$txt['error_cpassman_dir'] = "Nenhum diretorio definido para TeamPass. Por favor, selecione na aba de configurações no menu do administrador.";
$txt['error_cpassman_url'] = "Nenhum URL definido para TeamPass. Por favor, selecione na aba de configurações no menu do administrador.";
$txt['error_fields_2'] = "Os 2 campos são obrigatórios!";
$txt['error_group'] = "O diretório é obrigatório";
$txt['error_group_complex'] = "O diretório deve ter para senhas complexidade mínima nível exigido!";
$txt['error_group_exist'] = "Este diretório já existe!";
$txt['error_group_label'] = "O diretório necessita de um nome!";
$txt['error_html_codes'] = "Algum texto contem códigos HTML! Isto não é permitido.";
$txt['error_item_exists'] = "O item já existe!";
$txt['error_label'] = "O rótulo é obrigatório!";
$txt['error_must_enter_all_fields'] = "Você deve preencher cada um dos campos!";
$txt['error_mysql'] = "Erro de MySQL!";
$txt['error_not_authorized'] = "Você não esta autorizado a ver esta pagina.";
$txt['error_not_exists'] = "Esta pagina não existe.";
$txt['error_no_folders'] = "Você pode começar criando algum diretório";
$txt['error_no_password'] = "Você necessita entrar com sua senha!";
$txt['error_no_roles'] = "Você necessita criar alguma regra e associar a alguma pasta.";
$txt['error_password_confirmation'] = "As senhas devem ser as mesmas";
$txt['error_pw'] = "A senha é obrigatória!";
$txt['error_renawal_period_not_integer'] = "A renovação é expressada em meses!";
$txt['error_salt'] = "<b>O 'SALT KEY' é muito longo! Por favor, não use a ferramenta de administração Até que você tenha modificado o 'SALT KEY'. </b> No arquivo settings.php, o 'SALT KEY'NÃO deve ser maior que 32 caracteres.
";
$txt['error_tags'] = "Caracteres de pontuação não é permitida no TAGS! Apenas o espaço.";
$txt['error_user_exists'] = "Usuário já existe.";
$txt['expiration_date'] = "Data de expiração";
$txt['expir_one_month'] = "1 mês";
$txt['expir_one_year'] = "1 ano";
$txt['expir_six_months'] = "6 meses ";
$txt['expir_today'] = "hoje";
$txt['files_&_images'] = "Arquivos &amp; Imagens ";
$txt['find'] = "Procurar";
$txt['find_text'] = "Sua procura";
$txt['folders'] = "Diretórios";
$txt['forbidden_groups'] = "Diretórios ocultos";
$txt['forgot_my_pw'] = "Esqueceu sua senha?";
$txt['forgot_my_pw_email_sent'] = "E-mail foi enviado";
$txt['forgot_my_pw_error_email_not_exist'] = "Este e-mail não existe!";
$txt['forgot_my_pw_text'] = "A sua senha foi enviada para o e-mail de sua conta associada.";
$txt['forgot_pw_email_altbody_1'] = "Oi, A sua identificação para o TeamPass é:";
$txt['forgot_pw_email_body'] = "Oi,<br /><br />Sua nova senha do TeamPass é:";
$txt['forgot_pw_email_body'] = "Oi,<br><br>Sua nova senha do TeamPass é:";
$txt['forgot_pw_email_body_1'] = "Oi, As suas credenciais para o TeamPass é:";
$txt['forgot_pw_email_subject'] = "TeamPass - Sua senha";
$txt['forgot_pw_email_subject_confirm'] = "[TeamPass] Sua senha, passo 2";
$txt['functions'] = "Regras";
$txt['function_alarm_no_group'] = "Não tem regra associado a este diretório";
$txt['generate_pdf'] = "Gerá arquivo PDF";
$txt['generation_options'] = "Opções de geração";
$txt['gestionnaire'] = "Gerenciador";
$txt['give_function_tip'] = "Adicionar nova regra";
$txt['give_function_title'] = "Adicionar nova regra";
$txt['give_new_email'] = "Por favor entre novo e-mail para";
$txt['give_new_login'] = "Por favor, selecione a conta";
$txt['give_new_pw'] = "Por favor, indique a nova senha para";
$txt['god'] = "DEUS";
$txt['group'] = "Diretório";
$txt['group_parent'] = "Diretório parentesco";
$txt['group_pw_duration'] = "Período de renovação";
$txt['group_pw_duration_tip'] = "Em meses. Use 0 para desabilitar";
$txt['group_select'] = "Selecione o diretório";
$txt['group_title'] = "Rótulo do diretório";
$txt['history'] = "Historia ";
$txt['home'] = "Inicio";
$txt['home_personal_menu'] = "Ações pessoais";
$txt['home_personal_saltkey'] = "Sua senha pessoal 'SALT KEY'";
$txt['home_personal_saltkey_button'] = "Armazená-lo";
$txt['home_personal_saltkey_info'] = "Entre com seu 'SALT KEY' pessoal. É necessário para administrar suas senhas pessoais";
$txt['home_personal_saltkey_label'] = "Entre com seu 'SALT KEY' pessoal
";
$txt['importing_details'] = "Lista de detalhes";
$txt['importing_folders'] = "Importar diretórios";
$txt['importing_items'] = "Importar itens";
$txt['import_button'] = "Importar";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Define 'ninguém pode modificar na mesma regra' aplica para todos os itens importados.";
$txt['import_csv_anyone_can_modify_txt'] = "Define 'qualquer um pode modificar' aplica para todos os itens importados.";
$txt['import_csv_dialog_info'] = "Informação: Deve utilizar esta opção de importação de arquivos do tipo CSV. para um arquivo que tenha a seguinte estrutura: Caso seja importado atraves de um KeePass, certifique-se de ter a seguinte estrutura:  `Conta`, `Login Name`, `senha`, `site `,` Comments `.";
$txt['import_csv_menu_title'] = "Importa itens de um arquivo (.CSV/KeePass XML)";
$txt['import_error_no_file'] = "Você necessita selecionar o arquivo!";
$txt['import_error_no_read_possible'] = "Não foi possível ler o arquivo!";
$txt['import_error_no_read_possible_kp'] = "Não foi possível ler o arquivo! Você necessita usar um arquivo XML do KeePass.";
$txt['import_keepass_dialog_info'] = "Utilize este para selecionar um arquivo XML gerado pela exportação Funcionalidade KeePass. Vai trabalhar com arquivo KeePass só! Observe o script de importação Isso não vai importar pastas ou elementos existem que já no mesmo nível da estrutura da árvore.";
$txt['import_keepass_to_folder'] = "Selecione o diretório de destino";
$txt['import_kp_finished'] = "Importação de KeePass foi concluida! <br /> Por padrão, o nível de complexidade para novas pastas foram criadas para `Médio. Talvez você vai precisar mudar isso.";
$txt['import_to_folder'] = "Marque este item se você deseja importar um diretório";
$txt['index_add_one_hour'] = "Estende sua sessão por mais 1 hora.";
$txt['index_alarm'] = "ALARME!!!!";
$txt['index_bas_pw'] = "Senha incorreta para esta conta!";
$txt['index_change_pw'] = "Sua senha foi alterada!";
$txt['index_change_pw'] = "Altere sua senha";
$txt['index_change_pw_button'] = "Alterar";
$txt['index_change_pw_confirmation'] = "Confirmar";
$txt['index_expiration_in'] = "Sessão expira em ";
$txt['index_get_identified'] = "Por favor, identifique-se";
$txt['index_identify_button'] = "Entre";
$txt['index_identify_you'] = "Por favor, identifique-se
";
$txt['index_last_pw_change'] = "Senha alterada para";
$txt['index_last_seen'] = "Ultima conexão, de:";
$txt['index_login'] = "Conta";
$txt['index_maintenance_mode'] = "Modo de manutenção esta ativo. Somente administradores podem logar";
$txt['index_maintenance_mode_admin'] = "Modo de manutenção esta ativo. Usuários não podem usar o TeamPass";
$txt['index_new_pw'] = "Nova senha";
$txt['index_password'] = "Senha";
$txt['index_pw_error_identical'] = "As senhas devem ser iguais!";
$txt['index_pw_expiration'] = "Senha atual vai expirar";
$txt['index_pw_level_txt'] = "Complexidade";
$txt['index_refresh_page'] = "Atualiza pagina";
$txt['index_session_duration'] = "Duração da sessão";
$txt['index_session_ending'] = "Sua sessão vai terminar em menos de 1 minuto.";
$txt['index_session_expired'] = "Sua sessão expirou ou não esta identificado!";
$txt['index_welcome'] = "Bem vindo";
$txt['info'] = "Informação";
$txt['info_click_to_edit'] = "Clique em uma célula para editar os valores.";
$txt['is_admin'] = "É Administrador";
$txt['is_manager'] = "É Gerenciador";
$txt['is_read_only'] = "Is Read Only";
$txt['items_browser_title'] = "Diretórios";
$txt['item_copy_to_folder'] = "'Por favor, selecione o diretório do item que deseja copiar'";
$txt['item_menu_add_elem'] = "Adicionar item";
$txt['item_menu_add_rep'] = "Adicionar diretório";
$txt['item_menu_add_to_fav'] = "Adiciona a meus favoritos.";
$txt['item_menu_collab_disable'] = "Edição não esta permitido";
$txt['item_menu_collab_enable'] = "Edição é permitida";
$txt['item_menu_copy_elem'] = "Copiar item";
$txt['item_menu_copy_login'] = "Copia o login";
$txt['item_menu_copy_pw'] = "Copiar senha";
$txt['item_menu_del_elem'] = "Deletar item";
$txt['item_menu_del_from_fav'] = "Deletar de favoritos";
$txt['item_menu_del_rep'] = "Deletar diretório";
$txt['item_menu_edi_elem'] = "Editar item";
$txt['item_menu_edi_rep'] = "Editar um diretório";
$txt['item_menu_find'] = "Procurar";
$txt['item_menu_mask_pw'] = "Ocultar senha";
$txt['item_menu_refresh'] = "Atualiza pagina";
$txt['kbs'] = "KBs";
$txt['kb_menu'] = "Base de conhecimento";
$txt['keepass_import_button_text'] = "Procurar arquivo XML";
$txt['label'] = "Rótulo ";
$txt['last_items_icon_title'] = "Mostra/Oculta o ultimo item visto";
$txt['last_items_title'] = "Ultimo item visto";
$txt['ldap_extension_not_loaded'] = "A extensão LDAP não esta ativado no servidor";
$txt['level'] = "Nivel";
$txt['link_copy'] = "Obter um link para este item";
$txt['link_is_copied'] = "O link para este objeto foi copiado ao clipboard";
$txt['login'] = "Login (se necessário)";
$txt['login_attempts_on'] = "Tentativas de logon em";
$txt['login_copied_clipboard'] = "Login copiado para o clipboard";
$txt['login_copy'] = "Copia a conta para o clipboard";
$txt['logs'] = "Relatórios ";
$txt['logs_1'] = "Gera o arquivo de registro com as senhas que precisam renovar";
$txt['logs_passwords'] = "Gera um relatório de senhas";
$txt['maj'] = "Letras maiúsculas ";
$txt['mask_pw'] = "Oculta/Mostra a senha";
$txt['max_last_items'] = "Maximo de últimos itens visto por um usuários (Padrão é 10)";
$txt['menu_title_new_personal_saltkey'] = "Changing your Personal Saltkey";
$txt['minutes'] = "minutos";
$txt['modify_button'] = "modificar";
$txt['my_favourites'] = "Meu favorito";
$txt['name'] = "Nome";
$txt['nb_false_login_attempts'] = "Número de tentativas de login sem sucesso para bloquear a conta (0 é desativado)";
$txt['nb_folders'] = "Número da pastas";
$txt['nb_items'] = "Número de itens";
$txt['nb_items_by_page'] = "Número de itens por pagina";
$txt['new_label'] = "Novo rotulo";
$txt['new_role_title'] = "Titulo da nova regra";
$txt['new_saltkey'] = "New Saltkey";
$txt['new_saltkey_warning'] = "Please be sure to use the original SaltKey, otherwize the new encryption will be corrupted. Before doing any change, please test your actual SaltKey!";
$txt['new_user_title'] = "Adiciona novo usuário";
$txt['no'] = "Não";
$txt['nom'] = "Nome";
$txt['none'] = "Nenhum";
$txt['none_selected_text'] = "Nenhum selecionado";
$txt['not_allowed_to_see_pw'] = "Você não esta autorizado a ver este item!";
$txt['not_allowed_to_see_pw_is_expired'] = "Este item esta expirado";
$txt['not_defined'] = "Não definido";
$txt['no_last_items'] = "Não tem itens para visualizar";
$txt['no_restriction'] = "Sem restrições";
$txt['numbers'] = "Números";
$txt['number_of_used_pw'] = "Número de novas senhas que o usuário precisa ingressar antes de usar uma senha antiga";
$txt['ok'] = "OK";
$txt['pages'] = "Paginas";
$txt['pdf_del_date'] = "Gerar arquivo PDF";
$txt['pdf_del_title'] = "Acompanhamento de renovação de senhas";
$txt['pdf_download'] = "Dowload do arquivo";
$txt['personal_folder'] = "Diretório particular";
$txt['personal_saltkey_change_button'] = "Change it!";
$txt['personal_salt_key'] = "Sua senha pessoal 'SALT KEY'";
$txt['personal_salt_key_empty'] = "Particular 'SALT KEY' não foi ingressado";
$txt['personal_salt_key_info'] = "O 'SALT KEY' é usado para criptografar suas senhas. <br /> Isto não é salvo no banco de dados, somente você conhece. <br />Mas por favor, não perda.";
$txt['please_update'] = "Por favor, atualize a ferramenta";
$txt['print'] = "Imprimir";
$txt['print_out_menu_title'] = "Imprimir uma listagem de seus itens";
$txt['print_out_pdf_title'] = "TeamPass - Lista de itens exportados";
$txt['print_out_warning'] = "Todas as senhas e todos os dados confidenciais será escrito neste arquivo sem nenhuma criptografia! Ao escrever o arquivo criptografado que contém itens / senhas, você está aceitando integralmente a responsabilidade pela proteção adicional desta lista!";
$txt['pw'] = "Senha";
$txt['pw_change'] = "Altere a senha da conta";
$txt['pw_changed'] = "Senha alterada";
$txt['pw_copied_clipboard'] = "Senha copiada para o clipboard";
$txt['pw_copy_clipboard'] = "Copia a senha para o clipboard";
$txt['pw_generate'] = "Gera";
$txt['pw_is_expired_-_update_it'] = "Este item expirou! Precisa alterar a senha.";
$txt['pw_life_duration'] = "Vida útil da senha de um usuário para expirar (em dia, 0 para desativar)";
$txt['pw_recovery_asked'] = "Você selecionou para recuperar a senha";
$txt['pw_recovery_button'] = "Envia uma nova senha";
$txt['pw_recovery_info'] = "Ao clicar no próximo botão. você vai receber no e-mail cadastrado da sua conta a senha de recuperação";
$txt['pw_used'] = "Esta senha já foi utilizada (escolha outra)";
$txt['readme_open'] = "Abrir o arquivo README completo";
$txt['read_only_account'] = "Read Only";
$txt['refresh_matrix'] = "Atualizar a matriz";
$txt['renewal_menu'] = "Renewal follow-up";
$txt['renewal_needed_pdf_title'] = "Lista os itens que necessita ser renovado";
$txt['renewal_selection_text'] = "Lista todos os itens que vai expirar:";
$txt['restore'] = "Recupera";
$txt['restore'] = "Recuperar";
$txt['restricted_to'] = "Restrito para";
$txt['restricted_to_roles'] = "Ativa itens restritos para regras e usuários";
$txt['rights_matrix'] = "Matriz de privilégios";
$txt['roles'] = "Regras";
$txt['role_cannot_modify_all_seen_items'] = "Definir este papel não tem permissão para modificar todos os itens acessíveis (definição normal) ";
$txt['role_can_modify_all_seen_items'] = "Definir esta permissão para modificar todos os itens acessíveis (definição não seguro)";
$txt['root'] = "Raiz";
$txt['save_button'] = "Salvar";
$txt['secure'] = "Seguro";
$txt['see_logs'] = "Visualizar registros";
$txt['select'] = "seleciona";
$txt['select_folders'] = "Selecionar diretório";
$txt['select_language'] = "Seleciona seu idioma";
$txt['send'] = "Enviar";
$txt['settings_anyone_can_modify'] = "Ativar esta opção para que cada um possa modificá-lo";
$txt['settings_anyone_can_modify_tip'] = "


<span style='font-size:11px;max-width:300px;'> Quando ativado, isto irá adicionar uma opção no formulário de item que permite que o criador para permitir a modificação deste item por qualquer pessoa. </ span>";
$txt['settings_default_language'] = "Define the Default Language";
$txt['settings_kb'] = "Ativa Base de Conhecimento (beta)";
$txt['settings_kb_tip'] = "<span style='font-size:11px;max-width:300px;'> Quando ativado, isto irá adicionar uma página onde você pode construir sua base de conhecimento. </ span>";
$txt['settings_ldap_domain'] = "Conta sufixo para LDAP para seu dominio";
$txt['settings_ldap_domain_controler'] = "Se tiver mais de um LDAP, defina aqui";
$txt['settings_ldap_domain_controler_tip'] = "<span style='font-size:11px;max-width:300px;'> controladores especifique múltiplas se você gostaria que a classe para equilibrar as consultas LDAP entre vários servidores. <br /> Você deve delimitar os domínios por uma vírgula (,) <br /> Por exemplo: domain_1, domain_2, domain_3 </ span>";
$txt['settings_ldap_domain_dn'] = "Base LDAP para seu dominio";
$txt['settings_ldap_mode'] = "Ativa autenticação LDAP para os usuarios";
$txt['settings_ldap_mode_tip'] = "Habilitar somente se você tiver um servidor LDAP e se você quiser usá-lo para autenticas os usuários TeamPass através dele.";
$txt['settings_ldap_ssl'] = "Usar SSL (LDAPS)";
$txt['settings_ldap_tls'] = "Use LDAP a traves de TLS";
$txt['settings_log_accessed'] = "Ativa registros de quem acessou aos itens";
$txt['settings_log_connections'] = "Habilita todos os registros de todos os usuários ao banco de dados";
$txt['settings_maintenance_mode'] = "Coloca TeamPass em modo de manutenção";
$txt['settings_maintenance_mode_tip'] = "Este modo vai recusar todas as conexões, exceto de administradores";
$txt['settings_manager_edit'] = "Os Gerenciadores podem editar e apagar itens que estão autorizados a ver";
$txt['settings_printing'] = "Habilita a opção de imprimir arquivos PDF";
$txt['settings_printing_tip'] = "Quando ativado, um botão será adicionado à página home do usuário que permita que ele / ela escrever uma lista de itens para um arquivo PDF ele / ela pode ver. Observe que as senhas serão listados DESCRIPTOGRAFADAS. (não é seguro ativar)";
$txt['settings_restricted_to'] = "Enable Restricted To functionality on Items";
$txt['settings_richtext'] = "Habilitar richtext para descrição do item";
$txt['settings_richtext_tip'] = "style='font-size:11px;max-width:300px;'> <span Isso irá ativar um richtext com BBCodes no campo de descrição. </ span>";
$txt['settings_send_stats'] = "Enviar estatísticas mensais ao autor para compreender melhor seu uso de TeamPass";
$txt['settings_send_stats_tip'] = "Estas estatísticas são totalmente anônimos <br /> <span style='font-size:10px;max-width:300px;'> O seu IP não será enviado, apenas os seguintes dados são transmitidos: quantidade de itens, pastas, usuários versão TeamPass, pastas pessoais habilitado, ldap habilitado obrigado. <br /> Muitos se você permitir que essas estatísticas. Por isso, você me ajudar a desenvolver ainda mais TeamPass. </ Span>";
$txt['settings_show_description'] = "Show Description in list of Items";
$txt['show'] = "Mostrar";
$txt['show_help'] = "Mostrar ajuda";
$txt['show_last_items'] = "Mostrar bloco últimos itens na página principal";
$txt['size'] = "Tamanho";
$txt['start_upload'] = "Inicia o upload de arquivos";
$txt['sub_group_of'] = "Dependente de";
$txt['support_page'] = "Para qualquer ajuda, por favor use o <a href='https://sourceforge.net/projects/communitypasswo/forums' target='_blank'> <u> Fórum </ u> </ a>.";
$txt['symbols'] = "Símbolos ";
$txt['tags'] = "Tags";
$txt['thku'] = "Obrigado por usar TeamPass!";
$txt['timezone_selection'] = "Seleção de 'timezone'";
$txt['time_format'] = "Formato da hora";
$txt['uncheck_all_text'] = "Desmarca todos";
$txt['unlock_user'] = "Usuário esta bloqueado. Você que desbloquear a conta?";
$txt['update_needed_mode_admin'] = "E recomendável você atualizar o seu TeamPass";
$txt['uploaded_files'] = "Arquivos existentes";
$txt['upload_button_text'] = "Procurar";
$txt['upload_files'] = "Upload de novos arquivos";
$txt['url'] = "URL";
$txt['url_copied'] = "URL foi copiado!";
$txt['used_pw'] = "Senha utilizada";
$txt['user'] = "Usuário";
$txt['users'] = "Usuários ";
$txt['users_online'] = "users online";
$txt['user_action'] = "Ação sobre um usuário";
$txt['user_alarm_no_function'] = "Este usuário não tem regras!";
$txt['user_del'] = "Excluir conta";
$txt['user_lock'] = "Bloquear conta";
$txt['version'] = "Versão atual";
$txt['views_confirm_items_deletion'] = "Você realmente deseja excluir os itens selecionados do banco de dados?";
$txt['views_confirm_restoration'] = "Por favor, confirme a restauração deste item";
$txt['visibility'] = "Visibilidade";
$txt['warning_screen_height'] = "WARNING: screen height is not enough for displaying items list!";
$txt['yes'] = "Sim";
$txt['your_version'] = "Sua versão:";
?>