<!DOCTYPE html>
<html>
<head>
<title>Estudos e Catecismos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="cross.ico">
<link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="bootstrap-3.3.5/css/bootstrap.css" />
<script src="bootstrap-3.3.5/js/jquery.js"></script>
<script src="bootstrap-3.3.5/js/bootstrap.min.js"></script>
<style>

p, ul, li, a {
	color: #005411;
}

strong {
	color: #6C7A89;
}
.resposta {	
	color:#000;
	/* color: #6C7A89; */
}
.titulo{
	font-weight: bold;
	color: #005411;
}

.titulo-col {
	display: inline;
}

.oculto {
	display: none;
	padding: 5px;
	margin: 5px;
	border: 1px solid #000;
}
.brand_title:hover{
	color:#fff;
} 

.bc_title {
	font-family: 'MedievalSharp', cursive;
	font-weight: bold;
	font-size: 2.5em;
	color: #26A65B;
}

</style>
<script>

$('document').ready(function() {

	$('.referencia-bb').on('click', exibeReferencia);
	
});


function exibeReferencia(e) {

	e.preventDefault();	
	var StReferencia = $(this).attr('data-id');
	var StBook = $(this).attr('data-book');
	var StChapter = $(this).attr('data-chapter');
	var StVerses = $(this).attr('data-verse');
	var StGroup = $(this).attr('data-group');
	
	$('html, body').animate({
		scrollTop: $('#navbar').offset().top-10
    }, 1000);
	
	$.ajax({
		'url' : 'bibliaxml.php',
		'method' : 'get',
		data:{StBook: StBook, StChapter: StChapter, StVerses: StVerses},
	}).done(function(data){
		//var ArResult = jQuery.parseJSON(data);
		//console.log(ArResult);
		var StTextVerse	= '';		
		$('.oculto').css("display","none");
		$('[data-id='+StGroup+']').html(data).show('fast');		
		$(document).unbind("scroll");
	});
}

</script>
</head>