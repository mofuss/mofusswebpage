var csv = [];

$(function(){
	console.log("Finished Loading!!");
	loadCSV('scopus');
});

function arrayStr2Num(array){
	var n = array.length;
	var mapped = [];
	for(var i=0; i<n; i++){
		var result = array[i].map(Number);
		//mapped.push(result);
		mapped[result[0]]=result;
	}
	return mapped;
}

function loadCSV(file){
	$.getJSON('http://132.247.186.48/assetsHome/scopus/getCSV.php', {file: file}, function(data){
		csv = data;
		console.log("data: ", csv);
		populateTable();
		/*
		if(file == 'consumo'){
			fwc = arrayStr2Num(data);
		}
		else{
			mun = data;
		}
		//console.log('mapped data: ', fwc);
		*/
	});
}

function populateTable(){
	var n = csv.length;
	var cadena = "<header class='section-header'><h1 class='fw-200'>Publications</h1></header><div class='container' id='scopus'><div data-provide='shuffle'><ul class='nav nav-center nav-bold nav-uppercase nav-pills1 nav-dot mb-7' data-shuffle='filter'><li class='nav-item'><a class='nav-link active' href='#' data-shuffle='button'>All</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='article'>ARTICLES</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='articleP'>ARTICLES IN PRESS</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='bookC'>BOOK CHAPTERS</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='conference'>CONFERENCE PAPERS</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='editorial'>EDITORIALS</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='review'>REVIEWS</a></li></ul><div class='row gap-y' data-shuffle='list' id=''>";
	//var cadena = "<header class='section-header'><h1 class='fw-200'>Publications</h1></header><div class='container' id='scopus'><div data-provide='shuffle'><ul class='nav nav-center nav-bold nav-uppercase nav-pills1 nav-dot mb-7' data-shuffle='filter'><li class='nav-item'><a class='nav-link active' href='#' data-shuffle='button'>All</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='bookC'>Book Chapter</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='article'>Article</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='articleP'>Article in Press</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='conference'>Conference Paper</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='review'>Review</a></li><li class='nav-item'><a class='nav-link' href='#' data-shuffle='button' data-group='editorial'>Editorial</a></li></ul><div class='row gap-y' data-shuffle='list' id=''>";
	for(var i = 1; i < n; i++){
		var linea = csv[i];
		var autor = linea[0];
		var titulo = linea[2];
		var anio = linea[3];
		var source = linea[4];
		var volume = linea[5];
		var issue = linea[6];
		var tipo = linea[14];
		var link = linea[13];
		console.log("tipo: ", tipo);
		console.log('Editorial' == tipo);
		/*
		if(tipo == 'Article in Press')
			var group = 'articleP';
		else if(tipo == 'Article')
			var group = 'article';
		else if(tipo == 'Conference Paper')
			var group = 'conference';
		else if(tipo == 'Review')
			var group = 'review';
		else if('Book Chapter')
			var group = 'bookC';
		else if(tipo == 'Editorial'){
			console.log("ENTREEEEE");
			var group = 'editorial';
		}*/
		var group = '';
		switch(tipo){
			case 'Article in Press':
				group = 'articleP';
				break;
			case 'Article':
				group = 'article';
				break;
			case 'Conference Paper':
				group = 'conference';
				break;
			case 'Review':
				group = 'review';
				break;
			case 'Book Chapter':
				group = 'bookC';
				break;
			case 'Editorial':
				group = 'editorial';
				break;
		}
		var hover = '';
		if(link != '')
			hover = "<a class='mb-1 hover-move-up' href='"+link+"' target='_blank'>";
		//else
		//	var group = '';
		//cadena += "<div class='col-md-6' data-shuffle='item' data-groups="+group+"><a class='hover-move-up mb-5' href='#'><h6 class='fw-5001 mb-0'>Titulo: <small class='small-2 text-light ls-1'>"+titulo+"</small><br>Autores: <small class='small-2 text-light ls-1'>"+autor+"</small><br>Anio: <small class='small-2 text-light ls-1'>"+anio+"</small><br>Source: <small class='small-2 text-light ls-1'>"+source+"</small></h6></a></div>";
		cadena += "<div class='col-md-12' data-shuffle='item' data-groups="+group+">"+hover+"<h6 class='fw-5001 mb-0'>"+anio+". "+titulo+"<br><small class='small-2 text-light ls-1'>"+autor+" "+source+" "+volume+" "+issue+"</small><br></h6></a></div>";
	}
	cadena += "</div></div></div>";
	//$('#scopus').html(cadena);
	$('#publications').html(cadena);
	$("body").append('<script src="assetsHome/TheSaaS/js/page.min.js"></script>');
	$("body").append('<script src="assetsHome/TheSaaS/js/script.js"></script>');
	//console.log('Cadena: ', cadena);

}