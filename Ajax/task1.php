<html>
<script>
function get(id){
	return document.getElementById(id);
}

function loadDoc(){
	var xhr= new XMTHttpRequest();
	xhr.open("GET","profile.php",true);
	xhr.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			get("demo").innerHTML= this.responseText;
		};
		xhr.send();
	}
	</script>
	
	<body>
	      <button onclick="loadDoc()">Click here</button>
		  <div id="demo"></div>
		  </body>
		  </html>