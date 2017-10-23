<?php 

/**
 * That's the script responsible for to bring the verses and to help the studies of catechism and confession of faith.
 * My idea it is to help my local church with the studies of our symbols of faith.
 */


$StVersao = 'acf/acf-';
if (!$_REQUEST)
	die("Illegal use of this page!");
# Lendo xml
$StLoadFile =  $StVersao.$_REQUEST['StBook'].'.xml';
$ArXml = simplexml_load_file($StLoadFile);
$ItChapter = $_REQUEST['StChapter'] - 1;

	if (preg_match('/[0-9]+-[0-9]/',$_REQUEST['StVerses'])) 
	{
		$ArVerses = explode('-', $_REQUEST['StVerses']);		
		$ItUltimo = (int) end($ArVerses);		
		for($i = $ArVerses[0]; $i <= $ItUltimo; $i++) {			
			$ItVerse = $i - 1;
		 	echo($ArXml->chapter[$ItChapter]->verse[$ItVerse]) ."<br />";
		}
	} 
	elseif (preg_match('/,/', $_REQUEST['StVerses'])) 
	{	
		$ArVerses = explode(',', $_REQUEST['StVerses']);		
		foreach($ArVerses as $Verses) {
			$Verses = $Verses-1;			
			echo ($ArXml->chapter[$ItChapter]->verse[$Verses]) ."<br />";
		}	
	}
	elseif($_REQUEST['StVerses'] == '*')		
	{	
		$ItVerse = $_REQUEST['StVerses'] - 1;
		#var_Dump($ItChapter);
		#print_R($ArXml->chapter[$ItChapter]);
		foreach($ArXml->chapter[$ItChapter] as $Verses) {
			echo  $Verses ."<br />";
			#echo $ArXml->chapter[$ItChapter]->verse[$ItVerse] ."<br />";
		}
	}
	else
	{
		$ItVerse = $_REQUEST['StVerses'] - 1;
		#var_Dump($ItChapter);
		#print_R($ArXml->chapter[$ItChapter]);			
		echo $ArXml->chapter[$ItChapter]->verse[$ItVerse] ."<br />";
		
	}
	
?>