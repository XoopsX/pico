<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'pico' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {












// Appended by Xoops Language Checker -GIJOE- in 2009-01-18 18:29:25
define($constpref.'_COM_ORDER','Order of comment-integration');
define($constpref.'_COM_POSTSNUM','Max posts displayed in comment-integration');

// Appended by Xoops Language Checker -GIJOE- in 2008-12-02 16:22:08
define($constpref.'_AUTOREGISTCLASS','class name to register/unregister HTML wrapped files');

// Appended by Xoops Language Checker -GIJOE- in 2008-11-19 04:29:55
define($constpref.'_ADMENU_TAGS','Tags');

// Appended by Xoops Language Checker -GIJOE- in 2008-10-01 12:11:22
define($constpref.'_URIM_CLASS','class mapping URI');
define($constpref.'_URIM_CLASSDSC','Change it if you want to override the URI mapper. The default value is PicoUriMapper');

// Appended by Xoops Language Checker -GIJOE- in 2008-09-07 05:14:31
define($constpref.'_EF_CLASS','class for extra_fields');
define($constpref.'_EF_CLASSDSC','Change it if you want to override the handler for extra_fields. default value is PicoExtraFields');
define($constpref.'_EFIMAGES_DIR','directory for extra_fields');
define($constpref.'_EFIMAGES_DIRDSC','set relative path from XOOPS_ROOT_PATH. Create and chmod 777 the directory first. default) uploads/(module dirname)');
define($constpref.'_EFIMAGES_SIZE','pixels for extra images');
define($constpref.'_EFIMAGES_SIZEDSC','(main_width)x(main_height) (small_width)x(small_height) default) 480x480 150x150');
define($constpref.'_IMAGICK_PATH','Path for ImageMagick binaries');
define($constpref.'_IMAGICK_PATHDSC','Leave blank normal, or set it like /usr/X11R6/bin/');
define($constpref.'_NOTCAT_CATEGORY','category');
define($constpref.'_NOTCAT_CATEGORYDSC','notifications under this category');
define($constpref.'_NOTCAT_CONTENT','content');
define($constpref.'_NOTCAT_CONTENTDSC','notifications about this content');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENT','new content');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENTCAP','Notify if a new content is registered. (approved contents only)');
define($constpref.'_NOTIFY_CATEGORY_NEWCONTENTSBJ','[{X_SITENAME}] {X_MODULE}:{CAT_TITLE} a new content {CONTENT_SUBJECT}');
define($constpref.'_NOTIFY_CONTENT_COMMENT','new comment');
define($constpref.'_NOTIFY_CONTENT_COMMENTCAP','Notify if a new comment is posted. (approved comments only)');
define($constpref.'_NOTIFY_CONTENT_COMMENTSBJ','[{X_SITENAME}] {X_MODULE} : a new comment');

// Appended by Xoops Language Checker -GIJOE- in 2008-04-23 04:51:12
define($constpref.'_ALLOWEACHHEAD','specify HTML headers for each contents');
define($constpref.'_BNAME_TAGS','Tags');

// Appended by Xoops Language Checker -GIJOE- in 2007-09-22 03:55:47
define($constpref.'_ADMENU_EXTRAS','Extra');

// Appended by Xoops Language Checker -GIJOE- in 2007-09-18 10:36:05
define($constpref.'_HTMLPR_EXCEPT','Groups can avoid purification by HTMLPurifier');
define($constpref.'_HTMLPR_EXCEPTDSC','Post from users who are not belonged these groups will be forced to purified as sanitized HTML by HTMLPurifier in Protector>=3.14. This purification cannot work with PHP4');

// Appended by Xoops Language Checker -GIJOE- in 2007-09-12 17:00:59
define($constpref.'_BNAME_MYWAITINGS','My waiting posts');

// Appended by Xoops Language Checker -GIJOE- in 2007-06-15 05:03:02
define($constpref.'_BNAME_SUBCATEGORIES','Subcategories');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENT','new content');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENTCAP','Notify if a new content is registered. (approved contents only)');
define($constpref.'_NOTIFY_GLOBAL_NEWCONTENTSBJ','[{X_SITENAME}] {X_MODULE} : New content');

// Appended by Xoops Language Checker -GIJOE- in 2007-05-29 16:39:07
define($constpref.'_COM_VIEW','View of Comment-integration');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","pico");

// A brief description of this module
define($constpref."_DESC","a module for staic contents");

// admin menus
define( $constpref.'_ADMENU_CONTENTSADMIN' , '���¹���' ) ;
define( $constpref.'_ADMENU_CATEGORYACCESS' , '������' ) ;
define( $constpref.'_ADMENU_IMPORT' , '����/ͬ��' ) ;
define( $constpref.'_ADMENU_MYLANGADMIN' , '���Թ���' ) ;
define( $constpref.'_ADMENU_MYTPLSADMIN' , 'ģ�����' ) ;
define( $constpref.'_ADMENU_MYBLOCKSADMIN' , '���/Ȩ�޹���' ) ;
define( $constpref.'_ADMENU_MYPREFERENCES' , '��������' ) ;

// configurations
define($constpref.'_USE_WRAPSMODE','����Ƕ��ģʽ');
define($constpref.'_ERR_DOCUMENT_404','Contents path of Error:404');
define($constpref.'_ERR_DOCUMENT_404DSC','The path to the contents file displayed when it becomes 404 errors (Page Not Found).<br/>Repalaces "xoops_root_path" to "'.XOOPS_ROOT_PATH.'" and "xoops_trust_path" to "'.XOOPS_TRUST_PATH.'" at head.');
define($constpref.'_USE_REWRITE','����mod_rewriteģʽ');
define($constpref.'_USE_REWRITEDSC','��������Ļ�������������ô���뽫XOOPS_ROOT_PATH/modules/(dirname)/.htaccess.rewrite_wraps (with wraps) �� .htaccess.rewrite_normal (without wraps) ����Ϊ .htaccess');
define($constpref.'_WRAPSAUTOREGIST','�����Զ��Ĵ�Ƕ����ݿ���ļ���HTML��Ϊ����');
define($constpref.'_TOP_MESSAGE','ģ����ҳ����');
define($constpref.'_TOP_MESSAGEDEFAULT','');
define($constpref.'_MENUINMODULETOP','�ڴ�ģ�����ҳ��ʾ�˵� (����)');
define($constpref.'_LISTASINDEX',"�������ҳ��ʾ��������");
define($constpref.'_LISTASINDEXDSC','���ǡ���ʾ�������ҳ��ʾ�����б?�������ʾ��ʾΪ���µ�����');
define($constpref.'_SHOW_BREADCRUMBS','��ʾλ�õ���');
define($constpref.'_SHOW_PAGENAVI','��ʾ���µ�ǰ������');
define($constpref.'_SHOW_PRINTICON','��ʾ����ӡ��ͼ��');
define($constpref.'_SHOW_TELLAFRIEND','��ʾ��ת�����ѡ�ͼ��');
define($constpref.'_SEARCHBYUID','��¼����������');
define($constpref.'_SEARCHBYUIDDSC','���½������������ߵ��û������С��������Ϊ��̬����ʹ�ô�ģ�飬��رմ��');
define($constpref.'_USE_TAFMODULE','ʹ�á�Tellafriend��ģ��');
define($constpref.'_FILTERS','Ĭ�Ϲ������趨');
define($constpref.'_FILTERSDSC','����������������� (|) �ָ�');
define($constpref.'_FILTERSDEFAULT','htmlspecialchars|xcode|smiley|nl2br');
define($constpref.'_FILTERSF','ǿ�ƵĹ�����');
define($constpref.'_FILTERSFDSC','������������Զ��� (,) �ָ�����������LASTָ�������������׶�ͨ��ģ�����Ĺ����������׽׶�ͨ��ġ�');
define($constpref.'_FILTERSP','��ֹ�Ĺ�����');
define($constpref.'_FILTERSPDSC','������������Զ��� (,) �ָ���');
define($constpref.'_SUBMENU_SC','�ڲ˵�����ʾ����');
define($constpref.'_SUBMENU_SCDSC','Ĭ��Ϊ����ʾ�����ơ���������ô�������С��˵��������±���Ҳ����ʾ��');
define($constpref.'_SITEMAP_SC','��ʾ��������վ��ͼģ��');
define($constpref.'_USE_VOTE','����ͶƱ����');
define($constpref.'_GUESTVOTE_IVL','�����ڷÿ͵�ͶƱ');
define($constpref.'_GUESTVOTE_IVLDSC','��Ϊ0����ֹ�ÿ�ͶƱ����������ָ����������ͬIP��ַ���ٴ�ͶƱ���ʱ�� (��)��');
define($constpref.'_HTMLHEADER','ͨ��HTMLͷ��');
define($constpref.'_CSS_URI','ģ��CSS�ļ���URI');
define($constpref.'_CSS_URIDSC','�����趨��Ի���·����Ĭ��ֵ��{mod_url}/index.css');
define($constpref.'_IMAGES_DIR','ͼ���ļ�Ŀ¼');
define($constpref.'_IMAGES_DIRDSC','���·��Ӧ����Ϊģ��Ŀ¼�С�Ĭ��ֵ��images');
define($constpref.'_BODY_EDITOR','���ı༭��');
define($constpref.'_HISTORY_P_C','�洢����ݿ���޶��汾��');
define($constpref.'_MLT_HISTORY','���޶�������С��Чʱ�� (��)');
define($constpref.'_BRCACHE','ͼ���ļ��Ļ�����Чʱ�� (������Ƕ��ģʽ)');
define($constpref.'_BRCACHEDSC','�ڴ�ʱ����HTML������ļ�����WEB��������� (0Ϊ��ֹ)');
define($constpref.'_COM_DIRNAME','����-���ɣ�d3forumĿ¼��');
define($constpref.'_COM_FORUM_ID','����-���ɣ�forum ID');

// blocks
define($constpref.'_BNAME_MENU','�˵�');
define($constpref.'_BNAME_CONTENT','����');
define($constpref.'_BNAME_LIST','�б�');

// Notify Categories
define($constpref.'_NOTCAT_GLOBAL', 'ȫ��');
define($constpref.'_NOTCAT_GLOBALDSC', '���ڴ�ģ���֪ͨ');

// Each Notifications
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENT', '�ȴ�');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENTCAP', '�������·���������ȴ����ʱ֪ͨ (��֪ͨ��������Ա�����Ա)');
define($constpref.'_NOTIFY_GLOBAL_WAITINGCONTENTSBJ', '[{X_SITENAME}] {X_MODULE}���ȴ�');

}


?>
