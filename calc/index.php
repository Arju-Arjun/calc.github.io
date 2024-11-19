<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";
if (isset($_POST['num'])) {
$num = $_POST['input'] . $_POST['num'];
} else {
$num = "";
}
if (isset($_POST['op'])) {
$cookie_value1 = $_POST['input'];
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30),
"/");
$cookie_value2 = $_POST['op'];
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30),
"/");
$num = "";
}
if (isset($_POST['equals'])) {
$num = $_POST['input'];
switch ($_COOKIE['op']) {
case "+":
$_result = $_COOKIE['num'] + $num;
break;
case "/":
$_result = $_COOKIE['num'] / $num;
break;
case "-":
$_result = $_COOKIE['num'] - $num;
break;
case "x":
$_result = $_COOKIE['num'] * $num;
break;
pow($_COOKIE['num'], $num);
case "√":
$_result = sqrt($_COOKIE['num']);
break;
case "√":
$_result = sqrt($_COOKIE['num']);
break;
case "xy":
$_result = pow($_COOKIE['num'], $num);
break;
case "%":
$_result = $_COOKIE['num'] % $num;
break;
case "π":
$_result = pi($_COOKIE['num']);
break;
case "sin":
$_result = sin($_COOKIE['num']);
break;
case "cos":
$_result = cos($_COOKIE['num']);
break;
case "tan":
$_result = tan($_COOKIE['num']);
break;
default:
$_result = "ERROR!";
}
$num = $_result;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<style>
.t {
background-color: #343434;
border-radius: 10px;
border-color: white;
}
.clear {
background-color: red;
padding: 20px 15px;
border: 1px 1px;
height: 60px;
width: 60px;
font-size: 20px;
margin: 5px;
border-radius: 8px;
border-color: white;
}
.n {
padding: 20px 15px;
border: 1px 1px;
height: 60px;
width: 60px;
font-size: 20px;
background-color: #848482;
color: white;
margin: 5px;
border-radius: 8px;
border-color: white;
}
.b {
padding: 20px 15px;
border: 1px 1px;
height: 60px;
width: 60px;
font-size: 20px;
background-color: #4e4d4d;
color: white;
margin: 5px;
border-radius: 8px;
border-color: white;
}
.input {
padding: 20px 15px;
border: 1px 1px;
width: 280px;
height: 25px;
font-size: 40px;
background-color: #b2d4e4;
border-radius: 8px;
color: black;
text-align: right;
.b:hover {
border: 5px solid #82cc7c;
}
.n:hover {
border: 5px solid #82cc7c;
}
.clear:hover {
border: 5px solid #82cc7c;
}
p {
color: white;
}
</style>
</head>
<body>
<div class="bt">
<form method="post" action="">
<center>
<br><br>
<table border="1" cellpadding="15" height=300 width=350
class="t">
<tr>
<td>
<p><b>TᕼE ᗷOYᘔ</b></p>
<input type='text' name="input" id="input"
value="<?php echo @$num ?>" class="input"
placeholder="00"><br>
</td>
</tr>
<tr>
<td>
<input type="submit" class="n" name="op"
value="√">&nbsp;
<input type="submit" class="n" name="op"
value="xy">&nbsp;
<input type="submit" class="n" name="op"
value="%">&nbsp;
<input type="submit" class="n" name="op"
value="π"><br><br>
<input type="submit" class="n" name="op"
value="sin">&nbsp;
<input type="submit" class="n" name="op"
value="cos">&nbsp;
<input type="submit" class="n" name="op"
value="tan">&nbsp;
<input type="submit" class="n" name="op"
value="/"><br><br>
<input type="submit" class="b" name="num"
value="9">&nbsp;
<input type="submit" class="b" name="num"
value="8">&nbsp;
<input type="submit" class="b" name="num"
value="7">&nbsp;
<input type="submit" class="n" name="op"
value="x"><br><br>
<input type="submit" class="b" name="num"
value="6">&nbsp;
<input type="submit" class="b" name="num"
value="5">&nbsp;
<input type="submit" class="b" name="num"
value="4">&nbsp;
<input type="submit" class="n" name="op"
value="-"><br><br>
<input type="submit" class="b" name="num"
value="3">&nbsp;
<input type="submit" class="b" name="num"
value="2">&nbsp;
<input type="submit" class="b" name="num"
value="1">&nbsp;
<input type="submit" class="n" name="op"
value="+"><br><br>
<input type="submit" class="n" name="num"
value=".">&nbsp;
<input type="submit" class="b" name="num"
value="0">&nbsp;
<input type="submit" class="n" name="equals"
value="=">&nbsp;
<input type="submit" class="clear" name="op"
value="c" onclick="clear()">&nbsp;<br><br>
</td>
</tr>
</table>
</form>
<script>
function clear() {
var inp = document.getElementById("input");
inp.value = "";
}
</script>

</body>
</html>