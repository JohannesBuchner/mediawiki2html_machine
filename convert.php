

// holding the wiki markup in the variable $text
	$html = $text;
	$html = html_entity_decode($html);
	$html = str_replace('&ndash;','-',$html);
	$html = str_replace('&quot;','"',$html);
	$html = preg_replace('/\&amp;(nbsp);/','&${1};',$html);
 
	
	$html = str_replace('{{PAGENAME}}',$title,$html);
	
	// Table
	$html = convertTables($html);
	
	$html = simpleText($html);

