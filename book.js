function addBook(){
	var xmlhttp = new XMLHttpRequest();
	var url_string = window.location.href;
    var url = new URL(url_string);
    var paramValue = url.searchParams.get("id");
	xmlhttp.open("GET", "addbook.php?id="+paramValue);
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
           if (xmlhttp.status!= 200) {
               return;
           }
        }
    }
    xmlhttp.send();
}
bbtn.onclick=addBook;