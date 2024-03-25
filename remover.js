function load(){
	var y = document.getElementsByClassName('bagelem');
	var z= document.getElementsByClassName('aaa');
	for(let i=0;i<z.length;i++){
		z[i].onclick=()=>{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", "remover.php?elem="+z[i].id);
			console.log(z[i].id);
			xmlhttp.send();
    		xmlhttp.onreadystatechange = function() {
        		if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
           			if (xmlhttp.status!= 200) {
               			return;
           			}
           		}
           		y[i].remove();
				window.location.reload();
           	}			
		}

	}

}
function openOrder(){
	window.location.href='/order.php';
}
bbtb.onclick=openOrder;
document.addEventListener('DOMContentLoaded', load);
