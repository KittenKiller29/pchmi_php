function searchItems(){
	let elem1=document.getElementById('lv');
    vl=elem1.querySelectorAll('div');

    for(let i=0;i<vl.length;i++){
        vl[i].remove();
    }
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("POST", "searchscript.php");
	xmlhttp.setRequestHeader('Content-Type', 'application/json');
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
           if (xmlhttp.status!= 200) {
               return;
           }
           let elem2=document.createElement('div');
           let data1=JSON.parse(xmlhttp.responseText);
           if(data1.length==0){
           		elem2.classList.toggle('headtxt');
           		let txt=document.createTextNode('Ничего не найдено :(');
                elem2.appendChild(txt);
           		elem1.appendChild(elem2);
           		return;
           }
           for(let i=0;i<data1.length;i++){
           		elem2=document.createElement('div');
           		elem2.classList.toggle('listrow');
           		let elem3=document.createElement('div');
           		elem3.classList.toggle('item');
           		elem3.style.backgroundImage="url("+data1[i][0]+")";
           		elem2.appendChild(elem3);
           		elem3=document.createElement('div');
           		elem3.classList.toggle('textitem');
           		elem4=document.createElement('div');
           		elem4.appendChild(document.createTextNode(data1[i][1]+', '+data1[i][2]+', '+data1[i][3]));
           		elem4.classList.toggle('headtxt4');
           		elem3.appendChild(elem4);
           		elem4=document.createElement('div');
           		elem4.appendChild(document.createTextNode(data1[i][4]));
           		elem4.classList.toggle('headtxt5');
           		elem3.appendChild(elem4);
           		elem2.appendChild(elem3);
           		elem3=document.createElement('div');
           		elem3.classList.toggle('costbox');
           		elem4=document.createElement('div');
           		elem4.appendChild(document.createTextNode('Цена '+data1[i][5]+'руб'));
           		elem4.classList.toggle('headtxt6');
           		elem3.appendChild(elem4);
           		elem4=document.createElement('div');
           		elem4.appendChild(document.createTextNode('Перейти'));
           		elem4.classList.toggle('buybtn');
           		elem4.onclick=( () => {
           			bookLoad(data1[i][6]);
           			
           		});	
           		
           		elem3.appendChild(elem4);
           		elem2.appendChild(elem3);
           		elem1.appendChild(elem2);
           }
        }
    };
    let data=[
    document.getElementById('name1').value,
    document.getElementById('name2').value,
    document.getElementById('name3').value,
    document.getElementById('name4').value,
    document.getElementById('name5').value];
    xmlhttp.send(JSON.stringify(data));
}
searchb.onclick=searchItems;
