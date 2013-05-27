<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'pico' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2009-01-18 18:29:26
define($constpref.'_COM_ORDER','Order of comment-integration');
define($constpref.'_COM_POSTSNUM','Max posts displayed in comment-integration');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","pico");

// A brief description of this module
define($constpref."_DESC","um m�dulo para conte�dos est�ticos");

// admin menus
define( $constpref.'_ADMENU_CONTENTSADMIN' , 'Lista de conte�dos' ) ;
define( $constpref.'_ADMENU_CATEGORYACCESS' , 'Permiss�es das categorias' ) ;
define( $constpref.'_ADMENU_IMPORT' , 'Importar/Sincronizar' ) ;
define( $constpref.'_ADMENU_TAGS' , 'Palavras-chave' ) ;
define( $constpref.'_ADMENU_EXTRAS' , 'Extra' ) ;
define( $constpref.'_ADMENU_MYLANGADMIN' , 'Linguagens' ) ;
define( $constpref.'_ADMENU_MYTPLSADMIN' , 'Modelos' ) ;
define( $constpref.'_ADMENU_MYBLOCKSADMIN' , 'Blocos/Permiss�es' ) ;
define( $constpref.'_ADMENU_MYPREFERENCES' , 'Prefer�ncias' ) ;

// configurations
define($constpref.'_USE_WRAPSMODE','habilitar modo wraps');
define($constpref.'_ERR_DOCUMENT_404','Contents path of Error:404');
define($constpref.'_ERR_DOCUMENT_404DSC','The path to the contents file displayed when it becomes 404 errors (Page Not Found).<br/>Repalaces "xoops_root_path" to "'.XOOPS_ROOT_PATH.'" and "xoops_trust_path" to "'.XOOPS_TRUST_PATH.'" at head.');
define($constpref.'_USE_REWRITE','habilitar modo mod_rewrite');
define($constpref.'_USE_REWRITEDSC','Depende de seu ambiente. Se voc� ligar, renomeie .htaccess.rewrite_wraps(com wraps) ou htaccess.rewrite_normal(sem wraps) para .htaccess sob XOOPS_ROOT_PATH/modules/(dirname)/');
define($constpref.'_WRAPSAUTOREGIST','habilitar arquivos auto-registering HTML wrapped no banco de dados de conte�dos');
define($constpref.'_AUTOREGISTCLASS','nome da classe para registrar ou n�o registrar arquivos HTML wrapped');
define($constpref.'_TOP_MESSAGE','Descri��o da categoria TOP');
define($constpref.'_TOP_MESSAGEDEFAULT','');
define($constpref.'_MENUINMODULETOP','Mostrar o menu(index) no topo deste m�dulo');
define($constpref.'_LISTASINDEX',"Mostrar o index dos conte�dos no topo da categoria");
define($constpref.'_LISTASINDEXDSC','SIM significa que uma lista feita automaticamente � mostrada no topo da categoria. N�O significa um conte�do com prioridade mais alta � mostrado ao inv�s da lista feita automaticamente');
define($constpref.'_SHOW_BREADCRUMBS','Mostrar breadcrumbs');
define($constpref.'_SHOW_PAGENAVI','Mostrar p�gina de navega��o');
define($constpref.'_SHOW_PRINTICON','Mostrar icone de impress�o amig�vel');
define($constpref.'_SHOW_TELLAFRIEND','Mostrar o icone do m�dulo Recomende a um amigo');
define($constpref.'_SEARCHBYUID','Habilitar conceito de que postou o artigo');
define($constpref.'_SEARCHBYUIDDSC','Os conte�dos ser�o listado no perfil do usu�rio quem postar. Se voc� este m�dulo com conte�do est�tico, desligue isso.');
define($constpref.'_USE_TAFMODULE','Utitilizar o m�dulo Recomende um amigo');
define($constpref.'_FILTERS','Configura��o padr�o do filtro');
define($constpref.'_FILTERSDSC','informe os nomes dos filtros separados por | (pipe)');
define($constpref.'_FILTERSDEFAULT','xcode|smiley|nl2br');
define($constpref.'_FILTERSF','For�ar filtros');
define($constpref.'_FILTERSFDSC','informe o nome dos filtros separados com ,(v�rgula). filtro: �LTIMO significa que o filtro � passado na �ltima frase. Outros filtros s�o passados na primeira frase.');
define($constpref.'_FILTERSP','Filtros proibidos');
define($constpref.'_FILTERSPDSC','informe os nomes separados com ,(v�rgula).');
define($constpref.'_SUBMENU_SC','Mostrar conte�dos no submenu');
define($constpref.'_SUBMENU_SCDSC','Somente as categorias s�o mostradas como padr�o. Se voc� ativar isso, os conte�dos marcados no menu ser�o mostrados tamb�m');
define($constpref.'_SITEMAP_SC','Mostrar conte�dos no m�dulo Mapa do Site');
define($constpref.'_USE_VOTE','usar a caracter�stica de vota��o');
define($constpref.'_GUESTVOTE_IVL','Voto de convidados');
define($constpref.'_GUESTVOTE_IVLDSC','Configure como 0, para desabilitar vota��o de convidados. Outro n�mero significa tempo em segundos para permitir um segundo voto de um mesmo IP.');
define($constpref.'_HTMLHEADER','cabe�alho html comum');
define($constpref.'_ALLOWEACHHEAD','specificar cabe�alhos comum em HTML para cada um dos conte�dos');
define($constpref.'_CSS_URI','URI do arquivo CSS para este m�dulo');
define($constpref.'_CSS_URIDSC','o percurso absoluto ou relativo pode ser configurado. Padr�o: {mod_url}/index.php?page=main_css');
define($constpref.'_IMAGES_DIR','Diret�rio para arquivos de imagem');
define($constpref.'_IMAGES_DIRDSC','o percurso relativo deve ser configurado no diret�rio do m�dulo. Padr�o: images');
define($constpref.'_BODY_EDITOR','Editor para o corpo');
define($constpref.'_HTMLPR_EXCEPT','Grupos que podem evitar purifica��o por HTMLPurifier');
define($constpref.'_HTMLPR_EXCEPTDSC','Posts de usu�rios que n�o pertencem a esses ser�o for�ados a purifica��o com o sanitized HTML pelo HTMLPurifier no Protector>=3.14. Esta purifica��o n�o trabalha com PHP4');
define($constpref.'_HISTORY_P_C','N�mero de revis�es que s�o armazenadas no banco de dados');
define($constpref.'_MLT_HISTORY','Tempo  m�nimo de vida de cada revis�o, em segundos');
define($constpref.'_BRCACHE','Tempo de vida em Cache para os arquivos de imagem (somente no modo wraps)');
define($constpref.'_BRCACHEDSC','Outros arquivos than HTML ser�o armazenados pelo navegador neste segundo (0 significa desabilitado)');
define($constpref.'_EF_CLASS' , 'classe para extra_fields');
define($constpref.'_EF_CLASSDSC' , 'Mude isso se voc� precisar sobrescrever o tratamento para extra_fields. O valor padr�o � PicoExtraFields');
define($constpref.'_URIM_CLASS' , 'classe de mapeamento da URI');
define($constpref.'_URIM_CLASSDSC' , 'Mude isso se voc� precisar sobrescrever o mapeamento da URI. O Vvalor padr�o � PicoUriMapper');
define($constpref.'_EFIMAGES_DIR' , 'diret�rio para extra_fields');
define($constpref.'_EFIMAGES_DIRDSC' , 'configurar percurso relativo do XOOPS_ROOT_PATH. Primerio, crie e d� chmod 777 ao diret�rio. Padr�o: uploads/(module dirname)');
define($constpref.'_EFIMAGES_SIZE' , 'pixels para imagens extras');
define($constpref.'_EFIMAGES_SIZEDSC' , '(largura_principal)x(altura_principal) (largura_miniatura)x(altura_miniatura) Padr�o: 480x480 150x150');
define($constpref.'_IMAGICK_PATH' , 'Percurso para ImageMagick binaries');
define($constpref.'_IMAGICK_PATHDSC' , 'Normal, deixe em branco ou configure como /usr/X11R6/bin/');
define($constpref.'_COM_DIRNAME','Integra��o de coment�rio: nome do diret�rio do m�dulo d3forum');
define($constpref.'_COM_FORUM_ID','Integra��o de coment�rio: ID do f�rum');
define($constpref.'_COM_VIEW','vizualiza��o do Integra��o de coment�rio');

// blocks
define($constpref.'_BNAME_MENU','Menu');
define($constpref.'_BNAME_CONTENT','Conte�do');
define($constpref.'_BNAME_LIST','Lista');
define($constpref.'_BNAME_SUBCATEGORIES','Subcategorias');
define($constpref.'_BNAME_MYWAITINGS','Meus posts aguardando aprova��o');
define($constpref.'_BNAME_TAGS','Palavras-chave');

// Notify Categories
define($constpref.'_NOTCAT_GLOBAL', 'global');
define($constpref.'_NOTCAT_GLOBALDSC', 'Notifica��es sobre este m�dulo');
define($constpref.'_NOTCAT_CATEGORY', 'categoria');
define($constpref.'_NOTCAT_CATEGORYDSC', 'notifica��es sob esta categoria');
define($constpref.'_NOTCAT_CONTENT', 'conte�do');
define($constpref.'_NOTCAT_CONTENTDSC', 'notifica��es sobre este conte�do');

// Each Notifications
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENT', 'aguardando aprova��o');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENTCAP', 'Notifique-me de novos posts ou modifica��es no aguardo de aprova��o (notificar apenas os administradores e moderadores)');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENTSBJ', '[{X_SITENAME}] {X_MODULE}: aguardando');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENT', 'novo conte�do');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENTCAP', 'Notifique-me quando um novo conte�do for registrado. (somente conte�dos aprovados)');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENTSBJ', '[{X_SITENAME}] {X_MODULE} : um novo conte�do {CONTENT_SUBJECT}');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENT', 'novo conte�do');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENTCAP', 'Notifique-me quando um novo conte�do for registrado. (somente conte�dos aprovados)');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENTSBJ', '[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} um novo conte�do {CONTENT_SUBJECT}');
define($constpref.'_NOTIFY_CONTENT_COMMENT', 'novo coment�rio');
define($constpref.'_NOTIFY_CONTENT_COMMENTCAP', 'Notifique-me quando um novo coment�rio for postado. (somente coment�rios aprovados)');
define($constpref.'_NOTIFY_CONTENT_COMMENTSBJ', '[{X_SITENAME}] {X_MODULE} : um novo coment�rio');

}


?>
