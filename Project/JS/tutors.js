function get(id){
	return document.getElementById(id);
}

function search(e){
     var xhr = new XMLHttpRequest();
		xhr.open("GET","all_Lsuggestions.php?key="+e.value,true);
		xhr.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				get("search-result").innerHTML = this.responseText;
			}
		};
		xhr.send();	
}