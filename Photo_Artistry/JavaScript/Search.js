function get(id)
{
	return document.getElementById(id);
}

function search(e)
{
	if(e.value == "") 
	{
		get("result").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
		     	xhr.open("GET","Search_Photographer.php?key="+e.value,true);
		     	xhr.onreadystatechange = function()
		     	{
		     		if (this.readyState == 4 && this.status == 200) 
		     		{
		     			get("result").innerHTML = this.responseText;
		     		}
		     	};

		     	xhr.send();
}