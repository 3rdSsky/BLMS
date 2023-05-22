<html>
<head>
<meta charset="utf-8">
<title>Show/Hide div on dropdown value change</title>
 
<style>
.myDiv{
  display:none;
    padding:10px;
    margin-top:20px;
}  
#showOne{
    border:1px solid red;
}
#showTwo{
    border:1px solid green;
}
#showThree{
    border:1px solid blue;
}
</style> 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" target="_blank" rel="noreferrer noopener">https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js</a>"></script>
</head>
<body>
<select id="myselection">
  <option>Select Option</option>
  <option value="One">One</option>
  <option value="Two">Two</option>
  <option value="Three">Three</option>
</select>
<div id="showOne" class="myDiv">
  You have selected option <strong>"One"</strong>.
</div>
<div id="showTwo" class="myDiv">
  You have selected option <strong>"Two"</strong>.
</div>
<div id="showThree" class="myDiv">
  You have selected option <strong>"Three"</strong>.
</div> 
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      

<script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
      var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script> 
    
</body>