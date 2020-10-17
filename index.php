<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="shortcut icon" type="image/png" href="Images/favicon.png"/>
        		<script>
			function numberValidation(NUM)
  			{
				var VAR1 = /^[0-9]+$/;
				if(NUM.value.match(VAR1))
     				{
      					return true;
     				}
   				else
     				{
     					alert("Only numbers are allowed in this field.");
     					return false;
     				}
  			}
		</script>
    </head>
    <style>
body {
        background-image: url("../Images/abdullahimage.jpeg");
    
        background-repeat: no-repeat;
	background-position: right top; 
        background-color:SlateBlue ;    	 
 
</style>
    <body>
       
				<center><b><h1 style="color:DodgerBlue;">"Welcome to Abdullah's Converter"</h1></b></center>
		<Form name="Converter" action="ANS.php"   method="POST">
		<center>

		<table border="0" width="100%" height="90%" background-color: green;>

				<tr>
					<td width="20%">	 &nbsp; 	</td>
					<td width="20%"> 	&nbsp;		</td>
				
				</tr>
				<tr>
					
					<td colspan="2"  >
					<center>
						Converter:
							<select name="PROG">
								<option value="1">Binary_to_Decimal_Converter</option>
								<option value="2">Binary to Octal Converter</option>
								<option value="3">Binary to Hexadecimal Converter</option>
								<option value="4">Decimal to binary Converter</option>
								<option value="5">Decimal to Octal Converter</option>
								<option value="6">Decimal to Hexadecimal Converter</option>
								<option value="7">Hexadecimal to Decimal Converter</option>
								<option value="8">Octal to hexadecimal Converter</option>
								<option value="9">Hexadecimal to Octal Converter</option>
								<option value="10">Angle (Degree to radian)</option>
							</select>
					</center>
					</td>
				
					<td width="40%" rowspan="11"> </td>
					 
				
				</tr>

				
				<tr >
					<td colspan="2">	
						Enter the value: <input type="text"   name="value"  >
					</td>
								
			
				</tr>


			
				<tr >
				
					<td height="5%"> 	<center> &nbsp;&nbsp;<input type="reset">  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"> </center> </td>
					<td>&nbsp</td>
			
				</tr>
				<tr>
					<td colspan="2" rowspan="7">	 &nbsp; 	</td>
					
				
				
			</table>
		</center>
    </body>
</html>
