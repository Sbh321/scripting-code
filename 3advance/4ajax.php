<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
img{
width: 400px;
height: 300px;
}
</style>
</head>
<body>
<img id="img" src="logo.png" alt="img">
<button id="hideImage">hide</button>
<button id="showImage">show</button>
<script>
$(document).ready(function(){
$('#hideImage').click(function(){
$('#img').hide();
});
$('#showImage').click(function(){
$('img').show();
})
})
</script>
</body>
</html>