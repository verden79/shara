﻿var result;

window.onload = function() {
    /* result = document.getElementById('result'); */
$("#result").text(ymaps.geolocation.city);



}





function DropDown(el) {
 this.dd = el;
/*  this.placeholder = this.dd.children('span'); */
 this.opts = this.dd.find('ul.dropdown > li');
 this.val = '';
 this.index = -1;
 this.initEvents();
}
DropDown.prototype = {
 initEvents : function() {
 var obj = this;

 obj.dd.on('click', function(event){
 $(this).toggleClass('active');
/*  $('.navigation').toggleClass('active'); */
 return false;
 });

 obj.opts.on('click',function(){
 var opt = $(this);
 obj.val = opt.text();
 obj.index = opt.index();
 
/*  obj.placeholder.text('Gender: ' + obj.val); */
 });
 },
 getValue : function() {
 return this.val;
 },
 getIndex : function() {
 return this.index;
 }
}

$(function() {
 
 var dd = new DropDown( $('#dd') );
 
 $(document).click(function() {
 $('.wrapper-dropdown-1').removeClass('active');
/*  $('.navigation').removeClass('active'); */
 });
});








