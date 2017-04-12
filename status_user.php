<html>
<head>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script>
var refreshId = setInterval(function()
{
$('#responsecontainer').load('show.php');
}, 1000);
</script>
</head>
<body>
<div id="responsecontainer">
</div>
</body>
</html>