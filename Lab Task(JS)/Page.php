<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page</title>
</head>
<body>
      <form>
      	    <input type="text" name="uname" onkeyup="getVal(this)" placeholder="Username"><br>
      	    <span id="op"></span><br>
      	    <input type="password" placeholder="Password"><br>
      </form>
      <button id="btn_g" onclick="viewGoogle()">Login With Google</button><br>
      <span onmouseover="viewInfo()" onmouseout="hideInfo()">Aiub</span>
      <p id="aiub_info" style="display: none;">
      	  American International University-Bangladesh (Bengali: আমেরিকান ইন্টারন্যাশনাল ইউনিভার্সিটি-বাংলাদেশ), commonly known by its acronym AIUB, is an accredited private university in Dhaka, Bangladesh. The university is an independent organization with own Board of Trustees. It offers several degree programs at graduate and undergraduate level from four faculties, particularly in the field of engineering and business studies.
      </p>
      <form id="g_form" style="display: none;">
      	     <input type="text" placeholder="gmail"><br>
      	     <input type="password" placeholder="gmail password"><br>
      </form>
      <script type="text/javascript" src="Page.js"></script>
</body>
</html>