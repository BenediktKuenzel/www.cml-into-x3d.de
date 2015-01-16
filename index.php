<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>CML2X3D</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   <base target="iframe1">
   
<script language="javascript" type="text/javascript">

function startUpload(){
document.getElementById('f1_upload_process').style.visibility = 'visible';
document.getElementById('f1_upload_form').style.visibility = 'hidden';
return true;
}

function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
		 
      }
      else {
         result = '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      document.getElementById('f1_upload_form').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
      document.getElementById('f1_upload_form').style.visibility = 'visible';     
 
      return true;   
}


function openView(value)
{

if(navigator.userAgent.indexOf("Firefox") != -1)
{
  var link =("http://www.cml-into-x3d.de/anzeige.html?file=/uploads/" +value);
document.getElementById('iframe1').src = link;
giveLink(link);

}



else {
   var replaced = value.replace(/^.*[\\\/]/, '');
var link =("http://www.cml-into-x3d.de/anzeige.html?file=/uploads/" + replaced);

document.getElementById('iframe1').src = link;
giveLink(link);

}
}
function giveLink(linktxt)
{
var a = document.getElementById("generierterLink");
    a.href = linktxt;
	a.textContent = "Link zur 3d-Ansicht";
    

}

</script>   
</head>

<body>



	<div id="anleitung">
	<p>
			<span style="font-family:arial,helvetica,sans-serif;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; So geht&#39;s:</strong></span></p>
		<ol>
			<li>
				<span style="font-family:arial,helvetica,sans-serif;">Molek&uuml;linfos von einer Datenbank laden (z.B.: www.rcsb.org)</span></li>
			<li>
				<span style="font-family:arial,helvetica,sans-serif;">mittels openBabel in CML konvertieren </span></li>
			<li>
				<span style="font-family:arial,helvetica,sans-serif;">mit einer aktuellen Version von Firefox oder Chrome hochladen und betrachten</span></li>
		</ol>
		<p>
			<span style="font-family:arial,helvetica,sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mittels dieses Links k&ouml;nnen sie ihre 3D-Ansicht &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weiterleiten:<a href id="generierterLink"> </a></span></p>
	
	</div>



       
	   <div id="container">
           <div id="content">
                <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="openView(myfile.value);startUpload(); " >
                     <p id="f1_upload_process">Loading...<br/><img src="http://www.cml-into-x3d.de/loader.gif" /><br/></p>
                     <p id="f1_upload_form" align="center"><br/>
                         <label>File:  
                              <input name="myfile" id="nameoffile" type="file" size="30" />
                         </label>
                         <label>
                             <input type="submit"  name="submitBtn" class="sbtn" value="Upload" />
                         </label>
                     </p>
                     
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                 </form>
             </div>
             <div id="footer"><a href="http://www.cml-into-x3d.de/" target="_blank">CML2X3D</a>&nbsp;&nbsp;&nbsp;&nbsp;
			 <a href="http://www.x3dom.org/" target="_blank">x3dom</a> </div>
         </div>
		


		<div id="bg"> </div>
		
		
		<div id="anzeige">
		<iframe name="iframe1" frameborder="0" marginwidth="0" marginheight="0" scrolling="auto"id="iframe1" src="http://www.cml-into-x3d.de/anzeige.html"  ></iframe>  
		</div>
		
		 </body>   

</html>