function get(id){
	return document.getElementById(id);
}

function Search(e){
     var xhr = new XMLHttpRequest();
		xhr.open("GET","P_Suggestion.php?key="+e.value,true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("Search").innerHTML = this.responseText;
			}
		};
		xhr.send();	
}