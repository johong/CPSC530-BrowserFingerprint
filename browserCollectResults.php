<?php
    include("header.php");
    include("checkTerms.php");
?>

<h2 align="center">Here are the results we were able to collect:</h2>

<?php 
    $userAgent = $_SESSION['userAgent'];
    echo("<p><b>UserAgent:</b> $userAgent</p>");

    $userIP = $_SESSION['userIP'];
    echo("<p><b>User IP Address:</b> $userIP</p>");

    $userIPCountry = $_SESSION['userIPCountry'];
    echo("<p><b>User IP Address Country:</b> $userIPCountry</p>");
?>

<html>
<body>
<div id="example"></div>
<script type="text/javascript">
var x=navigator.plugins.length; // store the total no of plugin stored 
var txt="Total plugin installed: "+x+"<br/>";
txt+="Available plugins are->"+"<br/>";
for(var i=0;i<x;i++)
{
  txt+=navigator.plugins[i].name + "<br/>"; 
}
document.getElementById("example").innerHTML=txt;
</script>
</body>
</html>