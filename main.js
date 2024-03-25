function searchOpen(){
	window.location.href='/find.php';
	
	
}
function mainOpen(){
	window.location.href='/';
	
}
function bagOpen(){
	window.location.href='/bag.php';
	
}
function bookLoad(value){
	window.location.href='/book.php?id='+value;
}
search.onclick=searchOpen;
home.onclick=mainOpen;
bag.onclick=bagOpen;


