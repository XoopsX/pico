<?php

if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ;

if( ! preg_match( '/^[0-9a-zA-Z_-]+$/' , $mydirname ) ) exit ;

if( ! class_exists( 'PicoPreloadBase' ) ) {

class PicoPreloadBase extends XCube_ActionFilter
{
	var $mydirname = 'pico' ;

	function postFilter()
	{
		$this->mRoot->mDelegateManager->add("Legacy_BackendAction.GetRSSItems", array( &$this , "getRSSItems" ) ) ;
		$this->mRoot->mDelegateManager->add('Ckeditor4.Utils.PreBuild_ckconfig', array($this, 'ckeditor4PreBuild'));
	}

	function getRSSItems( &$items )
	{
/*		$mydirname = $this->mydirname ;
		$module_handler =& xoops_gethandler( 'module' ) ;
		$xoopsModule =& $module_handler->getByDirname( $this->mydirname ) ;
		$xoopsDB =& Database::getInstance() ;
		$_GET['page'] = 'rss' ;
		include dirname(__FILE__).'/main/index.php' ;

		$items[] = array(
			'pubdate' => time() ,
			'title' => $this->mydirname ,
			'link' => 'link' ,
			'description' => 'desc' ,
			'guid' => 'guid' ,
		) ;*/
	}
	
	public function ckeditor4PreBuild(&$params)
	{
		if ($this->mRoot->mContext->mXoopsModule->get('trust_dirname') === 'pico') {
			$params['allowhtml'] = true;
			if (!isset($params['switcher'])) {
				$id = $params['id'];
				$params['switcher'] = <<<EOD
var f = $("#{$id}").closest("form");
// checkbox
var {$id}_bbcode_checkbox = f.find('input[type="checkbox"][name="filter_enabled_xcode"]');
var {$id}_br_checkbox = f.find('input[type="checkbox"][name="filter_enabled_nl2br"]');
var {$id}_smiley_checkbox = f.find('input[type="checkbox"][name="filter_enabled_smiley"]');
var {$id}_xoopsts_checkbox = f.find('input[type="checkbox"][name="filter_enabled_xoopsts"]');
// xcode checkbox
if ({$id}_bbcode_checkbox) {
	{$id}_bbcode_checkbox.change(function(){
		var obj = CKEDITOR.instances.{$id},
		conf = ckconfig_{$id},
		change = false;
		if ($(this).is(":checked")) {
			change = 'bbcode';
			conf = $.extend(conf, ckconfig_bbcode_{$id});
		} else {
			change = 'html';
			conf = $.extend(conf, ckconfig_html_{$id});
		}
		obj && obj.destroy();
		$("#{$id}").data("editor", change);
		{$id}_smiley_checkbox && {$id}_smiley_checkbox.attr("disabled", false);
		{$id}_br_checkbox && {$id}_br_checkbox.attr("disabled", false);
		{$id}_br_checkbox && {$id}_br_checkbox.prop("checked", (change == 'bbcode')).attr("disabled", true);
		{$id}_smiley_checkbox && {$id}_smiley_checkbox.prop("checked", (change == 'bbcode'));
		{$id}_xoopsts_checkbox && {$id}_xoopsts_checkbox.prop("checked", false);
		CKEDITOR.replace("{$id}", conf);
	});
}
// xoopsts checkbox
if ({$id}_xoopsts_checkbox) {
	{$id}_xoopsts_checkbox.change(function(){
		var obj = CKEDITOR.instances.{$id},
		conf = ckconfig_{$id},
		change = false;
		if ($(this).is(":checked")) {
			change = 'bbcode';
			conf = $.extend(conf, ckconfig_bbcode_{$id});
		} else {
			change = 'html';
			conf = $.extend(conf, ckconfig_html_{$id});
		}
		obj && obj.destroy();
		$("#{$id}").data("editor", change);
		{$id}_br_checkbox && {$id}_br_checkbox.attr("disabled", false);
		{$id}_br_checkbox && {$id}_br_checkbox.prop("checked", false).attr("disabled", true);
		{$id}_smiley_checkbox && {$id}_smiley_checkbox.prop("checked", false).attr("disabled", (change == 'bbcode'));
		{$id}_bbcode_checkbox && {$id}_bbcode_checkbox.prop("checked", false);
		CKEDITOR.replace("{$id}", conf);
	});
}
// form submit
$("#{$id}").closest("form").bind("submit", function(){
	if ({$id}_br_checkbox) {
		($("#{$id}").data("editor") == "bbcode") && {$id}_br_checkbox.prop("checked", true);
		($("#{$id}").data("editor") == "html") && {$id}_br_checkbox.prop("checked", false);
		{$id}_smiley_checkbox && {$id}_smiley_checkbox.attr("disabled", false);
		{$id}_br_checkbox && {$id}_br_checkbox.attr("disabled", false);
	}
});
EOD;
			}
		}
	}

}

}

if( ! is_numeric( $mydirname{0} ) ) {
	// If you want to name the directory from 0-9, make a site preload.
	eval( 'class '.ucfirst( $mydirname ).'_PicoPreload extends PicoPreloadBase { var $mydirname = "'.$mydirname.'" ; }' ) ;
}


?>