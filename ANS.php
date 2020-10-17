<b>
<?php
$_PROG =strtoupper($_POST["PROG"]);

		if(!is_numeric($_POST["value"]))
					{ echo "Enter Numbers not Alphabet";
						}
		else
		{
?>
</b>

<b>
<?php

if($_PROG == "1")
echo "The Number in decimal :",base_convert($_POST["value"],  2,  10);

else if($_PROG == "2")
echo  "The Number in Octal :",ucfirst(base_convert($_POST["value"],  2,  8));

if($_PROG == "3")
echo  "The Number in Hexadecimal :",strtoupper(base_convert($_POST["value"],  2,  16));

if($_PROG == "4")
echo "The Number in binary :", base_convert($_POST["value"],  10,  2);

if($_PROG == "5")
echo "The Number in Octal :", base_convert($_POST["value"],  10,  8);

if($_PROG == "6")
echo  "The Number in Hexadecimal :",strtoupper(base_convert($_POST["value"],  10,  16));

if($_PROG == "7")
echo  "The Number in decimal :",base_convert($_POST["value"],  16,  10);

if($_PROG == "8")
echo  "The Number in Hexadecimal :",strtoupper(base_convert($_POST["value"],  8,  16));

if($_PROG == "9")
echo  "The Number in Octal :",base_convert($_POST["value"],  16,  8);

if($_PROG == "10")
echo  "The Angle in Radian :",deg2rad($_POST["value"]);

?>
</b>

<?php
}
?>

