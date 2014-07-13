<?php

class PicoTagHandler {

var $mydirname ;

function PicoTagHandler( $mydirname )
{
	$this->mydirname = $mydirname ;
}

// get content_ids separated by comma 1,2,4,16
function getContentIdsCS( $label )
{
	$db = XoopsDatabaseFactory::getDatabaseConnection() ;

	$sql = "SELECT content_ids FROM ".$db->prefix($this->mydirname."_tags")." WHERE label=".$db->quoteString( $label ) ;
	if( ! $trs = $db->query( $sql ) ) {
		if( $GLOBALS['xoopsUser']->isAdmin() ) echo $db->logger->dumpQueries() ;
		exit ;
	}

	if( $db->getRowsNum( $trs ) <= 0 ) {
		return false ;
	} else {
		list( $content_ids_sc ) = $db->fetchRow( $trs ) ;
		return preg_replace( '/[^0-9,]/' , '' , $content_ids_sc ) ;
	}
}

}


class PicoTag {

var $mydirname ;

function PicoTag( $mydirname , $label )
{
}

}

?>