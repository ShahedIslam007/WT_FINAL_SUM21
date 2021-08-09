<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page</title>
	<script type="text/javascript">
		     function loadDoc()
		     {
		     	var xhr = new XMLHttpRequest();
		     	xhr.open("GET","my_profile.php",true);
		     	xhr.onreadystatechange = function()
		     	{
		     		if (this.readyState == 4 && this.status == 200) 
		     		{
		     			get("demo").innerHTML = this.responseText;
		     		}
		     	};

		     	xhr.send();
		     }

		     function get(id)
		     {
		     	return document.getElementById(id);
		     }
	</script>
</head>
<body>
      <button onclick="loadDoc()">Click me</button>
      <div id="demo"></div>
</body>
</html>