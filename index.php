<!DOCTYPE html>
<html>
<head>
<title>Pocetna stranica</title>
<style>
.linkovi {
float : left;
margin : 10px;
padding : 10px;
max-width : 300px;
height : 500px;
border: 5px solid red;
}
a {
text-decoration: none;
}

</style>
</head>
<body>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Klikni za prikaz datuma i vremena.</button>
<p id='demo'></p>
<div class='linkovi'>
<p>Linkovi na fajlove:</p>
<a href='dcb.pdf'>Link na jedan od mojih osobnih prezentacija u vezi Direct Carrier Billing-a</a> 
<p>
<a href='tomislav_cv.pdf'> Moj CV</a></p>
<p><a href='tmpreporuka.pdf'>Preporuka - Tisak Media</a></p>
</div>

<p>
<img src='opglogo.jpg'
style='width:300px; height:200px;'>
</p>

<script>
window.alert('Dobrodosli - Testing browser side scriptinga');
</script>
</body>
</html>
