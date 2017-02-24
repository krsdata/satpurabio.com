<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>
<body>

<h3>Client side IP geolocation </h3>

<hr/>
<div id="ip"></div>
<div id="address"></div>
<hr/>Full response: <pre id="details"></pre>
</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$.get("http://ipinfo.io", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#address").html("Location: " + response.city + ", " + response.region);
    $("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");
</script>