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
	
var referal1;
var referal2level;
var referal3level;

if(data1.ref == 0){
	
}
else{
	referal1 = eval(s1);
	InitReferallList('lisreferal1', 'lisreferal1li', referal1);


}

	
function InitReferallList(idul, idli, referaldata){
	var ul = document.getElementById(idul);
	var li = document.getElementById(idli);
	var isone = true;
	for(var i = 0; i < referaldata.length; i++){
		
		var liclone = li.cloneNode(true);
			liclone.id = "ref" + referaldata[i].id;
			liclone.innerHTML = innertext(i, referaldata)
			li.parentNode.insertBefore(liclone, li.nextSibling);
	}
	
	if (document.querySelector(idul)) {
		location.reload(true);
	}
	$('#' + idli).attr('style', 'display: none;');
}



var array = [];
var index = 0;

function ClikForList(elem){
	var id = parseInt(elem.id.replace(/\D+/g,""));
	viewuserprofile(id, referal1);

	
	if(s2 != 'undefined'){
	
		referal2level = eval(s2);
		
		if(array.length > 0){
			for(var ind = 0; ind < array.length; ind++){
				$("#" + array[ind]).remove();
			}
			index = 0;
			array.length = 0;
			$('#btref2').attr('style', 'border-top: 2px solid #FFFFFF;');
		}
		
		
		for(var i = 0; i < referal2level.length; i++){
			//в s2 ищем parentid == 2
			if(referal2level[i].parentId == id){
				$('#btref2').attr('style', 'border-top: 2px solid #7abd2c;');
				addonerowforlist('lisreferal2li', 'lisreferal2', i, referal2level, 1);
			
			}
		}
	}
}

function Click3ForList(elem){
	var id = parseInt(elem.id.replace(/\D+/g,""));
	viewuserprofile(id, referal3level);
}

var array1 = [];
var index1 = 0;
function Clik2ForList(elem){
	var id = parseInt(elem.id.replace(/\D+/g,""));
	
	viewuserprofile(id, referal2level);
	if(s3 != 'undefined'){
		referal3level = eval(s3);
	
		if(array1.length > 0){
			for(var ind = 0; ind < array1.length; ind++){
				$("#" + array1[ind]).remove();
			}
			index1 = 0;
			array1.length = 0;
			$('#btref3').attr('style', 'border-top: 2px solid #FFFFFF;');
		}
		
		
		for(var i = 0; i < referal3level.length; i++){
			//в s2 ищем parentid == 2
			if(referal3level[i].parentId == id){
				$('#btref3').attr('style', 'border-top: 2px solid #7abd2c;');
				addonerowforlist('lisreferal3li', 'lisreferal3', i, referal3level, 2);
			
			}
		}
	}
}


function viewuserprofile(id, reflist){
	for(var i = 0; i < reflist.length; i++){
		if(reflist[i].id == id){
			$("#nameprof").text(reflist[i].login);
			$("#mailprof").text(reflist[i].email);
			$("#phoneprof").text(reflist[i].phone);
			$("#websiteprof").text(reflist[i].web);
			$("#fotos").attr('src', '../' + reflist[i].photo);
			$("#otzuv").text(reflist[i].kvo_otziv + ' отзывов');
			$(".userinfo").attr('style', 'display: block;');
						
			 if (document.querySelector('userinfo')) {
				location.reload(true);
			}
			break;
		}
	}
}

function addonerowforlist(li, ul ,i, reflist, code){
	$("#" + li).attr('style', 'display: block;');
	
	var lil = document.getElementById(li);
	
	var liclone = lil.cloneNode(true);
	liclone.id = "ref" + reflist[i].id;
	if(code == 1)
		array[index++] = liclone.id;
	else
		array1[index1++] = liclone.id;
	liclone.innerHTML = innertext(i, reflist);
	lil.parentNode.insertBefore(liclone, lil.nextSibling);
	
	if (document.querySelector(ul)) {
		location.reload(true);
	}
	$("#" + li).attr('style', 'display: none;');
}


function innertext(i, reflist){
	return "<div style=\"float: left; width: 50%; height: 100%;\">" +
										"<div class=\"imguser\"><img src=\"" + reflist[i].photo + "\"></img></div>" +
										"<div class=\"namemailu\">" +
											"<h4>" + reflist[i].login + "</h4>" +
											"<p>" + reflist[i].email + "</p>" +
										"</div>" +
									"</div>" +
									"<div style=\"float: right; width: 50%; height: 100%; text-align: center;\">" +
										
										"<div class=\"balfriends\">" +
											"<div style=\"background: darkgray;\">" +
												"<p><b>" + reflist[i].bonus + "</b></p>" +
												"<p><b>баллов</b></p>" +
											"</div>" +
										"</div>" +
										"<div class=\"balfriends\">" +
											"<div>" +
												"<p><b>" + reflist[i].referal_count + "</b></p>" +
												"<p><b>друзей</b></p>" +
											"</div>" +
										"</div>" +
										
									"</div>";
}
	
	
	
	
	
	//document.getElementById("mailprof").innerHTML = email;