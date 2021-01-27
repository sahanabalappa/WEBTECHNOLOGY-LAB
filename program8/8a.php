<DOCTYPE html>
<?php
	extract($_POST);
	if(isset($save))
	{
		switch($ch)
		{
			case '+':$res=$fn+$sn;
			         break;
			
			case '-':$res=$fn-$sn;
			         break;
			
			case '*':$res=$fn*$sn;
			         break;
			
			case '/':$res=$fn/$sn;
			         break;
		}
	}
?>
<html>
<head>
	<title>Simple Calculator</title>
</head>

<body>
	<h2 align="center">Simple Calculator</h2>
	<form method="post">
		<table align="center" border="1" size="50%">
		<tr>
			<th>Enter the 1st number</th><th><input type="number" name="fn"/></th>
		</tr>
		<tr>
			<th>Enter the 2nd number</th><th><input type="number" name="sn"/></th>
		</tr>
		<tr>
			<th>Select your choice</th>
			<th>
			<select name="ch">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select>
			</th>
		</tr>
		<tr>
			<th colspan="2"><input type="submit" name="save" value="Show Result"/></th>
		</tr>
		<tr>
			<th>Your Result</th><th><input type="number" readonly="readonly" disabled="disabled" value="<?php echo $res;?>"/></th>
		</tr>
		</table>
	</form>		
</body>
</html>