
/* if (typeof a !=="undefined") */
if(s0 != 0){
	var data1 = eval(s0);

	$("#bal").text(data1.bonus);

		switch(data1.akk) {
		   case '0':
			  $("#akk").text('no akk');
			  prostoyakk();
			  break;
		   case '1':
			  $("#akk").text('prostoy');
			  prostoyakk();
			  break;
		   case '2':
			  $("#akk").text('premium');
			  noprostoyakk();
			  break;
		   case '3':
			  $("#akk").text('vip');
			  noprostoyakk();
			  break;
		   default:
			  $("#akk").text('no akk');
			  prostoyakk();
			  break;
		}

	function prostoyakk(){
		$('#plain').attr('style', 'margin-top: 0;');
		$('#noplain').attr('style', 'display: block;');
	}
	function noprostoyakk(){
		$('#plain').attr('style', 'margin-top: 0.8em;');
	}
}

var tovaru;
if(tov != 'undefined'){
	tovaru = eval(tov);
	for(var i = 0; i < tov.length; i++){
		console.log(tov[i].id);
	}
	
	initlisttovarow();
	
/* 	$(function() {
    $('#light-pagination').pagination({
        items: tovaru.length,
        itemsOnPage: 9,
        cssStyle: 'light-theme'
    });
}); */
}



function initlisttovarow(){
	var ul = document.getElementById('listul');
	var lip = document.getElementById('listlip');
	/* var lil = document.getElementById('listlil'); */
	for(var i = tovaru.length - 1; i >= 0 ; i--){
		

		var liclone = lip.cloneNode(true);
		liclone.id = "tovr" + tovaru[i].id;
		liclone.innerHTML = innerhtml(i, tovaru)
		lip.parentNode.insertBefore(liclone, lip.nextSibling);
		var kolzv = tovaru[i].zvezd;
		for(var id = 0; id < kolzv; id++){
			$('#i' + id).attr('src', './img/star1.png');
		}

	}
	
	if (document.querySelector('listul')) {
		location.reload(true);
	}
	
	$('#' + lip.id).attr('style', 'display: none;');
	/* $('#' + lil.id).attr('style', 'display: none;'); */
}

function innerhtml(index, array){
return	"<div id=\"one\">" +
			"<p id=\"opisanie\">" + array[index].shotdesk +
			
			"<p style=\" white-space: nowrap; overflow: hidden;text-overflow: ellipsis;\">Возможность детям попробовать себя</p></p>" +
		"</div>" +
		"<div id=\"two\">" +
			"<img id=\"i0\" src=\"./img/star1.png\" ></img>" +
			"<img id=\"i1\" src=\"./img/star.png\" ></img>" +
			"<img id=\"i2\" src=\"./img/star.png\" ></img>" +
			"<img id=\"i3\" src=\"./img/star.png\" ></img>" +
			"<img id=\"i4\" src=\"./img/star.png\" ></img>" +
			"<span id=\"otsuv\">" + array[index].kvo_otziv + " отзывов</span>" +
		"</div>" +
		"<div id=\"three\" style=\"background: url(" + array[index].img + ") 100% 100% no-repeat; background-size: cover;\">" +
				"<div id=\"skidka\">" +
					
					"<p>скидка до: <p><b id=\"skidkarub\">" +
					"10 000 руб" +
					"</b></p></p>" +
				"</div>" +
				"<div id=\"metro\">" +
					"<p id=\"adres\" style=\"margin-left: 0.5em; float: left;\">" +
					array[index].location +
					"</p>" +
					"<p id=\"kolusertov\" style=\"margin-right: 0.5em; float: right;\">купили " +
					"5900" +
					"+ чел</p>" +
				"</div>" +
		"</div>" +
		"<div id=\"fo\">" +
			"<div id=\"buyinfo\">" +
				"<del id=\"delprice\" style=\"margin-left: 0.5em; float: left; font-size: 12px; text-decoration: \">от " +
				array[index].priceBegin +

				" руб.</del>" +
				"<p style=\"margin-right: 0.5em; color:#6ca33a; float: right;\"><b id=\"normprice\">от " +
				array[index].priceEnd +
				" руб.</b></p>" +
			"</div>" +
			
			"<div id=\"buy\">" +
				"<div id=\"bleft\">" +
					"<div>" +
						"<p id=\"kolbal\" style=\"float: right; margin-right: 0.3em; margin-top: 0.5em;\">" +
						array[index].summaBonuSpent +

						" бал</p>" +
					"</div>" +
					"<p>Остаток: " +
					"18 000 " +
					"руб.</p>" +
				"</div>" +
				"<div id=\"bright\">" +
					"<input type=\"button\" value=\"Оплатить\"></input>" +
				"</div>" +
			"</div>" +
		"</div>" +
		"<div id=\"five\">" +
			"<span>Подробнее</span>" +
		"</div>"
}
