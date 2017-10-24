<?php 

/**
 * That's the script responsible for to bring the verses and to help the studies of catechism and confession of faith.
 * My idea it is to help my local church with the studies of our symbols of faith.
 * The bible texts are in xml files.
 * 
 * @author Richard Garcia https://github.com/RichardDev
 */


$StVersao = 'acf/acf-';
if (!$_REQUEST)
	die("Illegal use of this page!");
# Reading xml file.
$StLoadFile =  $StVersao.$_REQUEST['StBook'].'.xml';
$ArXml = simplexml_load_file($StLoadFile);
$ItChapter = $_REQUEST['StChapter'] - 1;
	# Get more than one verse from a chapter ex: Gn 1. 1-10
	if (preg_match('/[0-9]+-[0-9]/', $_REQUEST['StVerses'])) 
	{
		$ArVerses = explode('-', $_REQUEST['StVerses']);		
		$ItUltimo = (int) end($ArVerses);		
		for ($i = $ArVerses[0]; $i <= $ItUltimo; $i++) {			
			$ItVerse = $i - 1;
		 	echo($ArXml->chapter[$ItChapter]->verse[$ItVerse]) ."<br />";
		}
	}
	# Get more than one verse but it is another pattern ex: Mt 1.1,5,7 
	elseif (preg_match('/,/', $_REQUEST['StVerses'])) 
	{	
		$ArVerses = explode(',', $_REQUEST['StVerses']);		
		foreach($ArVerses as $Verses) {
			$Verses = $Verses-1;			
			echo ($ArXml->chapter[$ItChapter]->verse[$Verses]) ."<br />";
		}	
	}
	# Get all verses from a chapter ex: Ex 22
	elseif($_REQUEST['StVerses'] == '*')		
	{	
		$ItVerse = $_REQUEST['StVerses'] - 1;		
		foreach($ArXml->chapter[$ItChapter] as $Verses) {
			echo  $Verses ."<br />";			
		}
	}	
	# Get just one verse of a chapter ex: Rm 1.16
	else
	{
		$ItVerse = $_REQUEST['StVerses'] - 1;					
		echo $ArXml->chapter[$ItChapter]->verse[$ItVerse] ."<br />";
	}
	
?>
