// For an introduction to the Blank template, see the following documentation:
// http://go.microsoft.com/fwlink/?LinkID=397704
// To debug code on page load in Ripple or on Android devices/emulators: launch your app, set breakpoints, 
// and then run "window.location.reload()" in the JavaScript Console.


function but(n,idd)
{
   
    $.post( "serv.php",  {  id: idd,    ak: n  },  onAjaxSuccess ); 
}   



function onAjaxSuccess(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
 document.getElementById('bbox').innerHTML = data;
 }  


function bon(data)
{
  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
 document.getElementById('bbal').innerHTML = data;
 }  