<html>
<head>
<title>Digital Clock</title>
<meta http-equiv="refresh" content="1"/>
<style>
p{
    color:white;
    font-size:90px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
}
body
{
    background-color:green;
}
</style>
</head>
<body>
<p><?php 
    date_default_timezone_set("Asia/Kolkata");
    echo date("h:i:s A");?></p>
</body>
</html>
