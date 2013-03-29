$().ready(load);
$().change(load);

function load()
{
/*$("#tab1").click(function(){
alert ("HOI!");
});*/
 $( "#tabs" ).tabs({
beforeLoad: function( event, ui ) {
ui.jqXHR.error(function() {
ui.panel.html(
"Couldn't load this tab." );
});
}
});
}

//options for actions handled on success. not working yet
/*,
ajaxOptions: {
success: function () {
alert("succes!");
}
*/

//$("#tab2").load("practicum1/html/Main.html", function(){
//onload
//});