<html>
<body>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>

<form action="homework4.php" method="get">
고객성명: <input type="text" name="name">
<input type="submit"value="합계"><br>
</form>

<table>
  <tr>
    <th>No</th>
    <th>구분</th>
    <th colspan="2"> 어린이</th>
    <th colspan="2"> 어른</th>
    <th>비고</th>
  </tr>
  <tr>
    <td>1</td>
    <td>입장권</td>
    <td>7,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>10,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>입장</td>
  </tr>
  <tr>
    <td>2</td>
    <td>BIG3</td>
    <td>12,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td>
    <td>16,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>입장+입장+놀이3종</td>
  </tr>
  <tr>
    <td>3</td>
    <td>자유이용권</td>
    <td>21,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>26,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>입장+놀이자유</td>
  </tr>
  <tr>
   <td>4</td>
    <td>연간이용권</td>
    <td>70,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>90,000</td>
    <td>
        <select name="select">
<option value="1" selected>1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    </td>
    <td>입장+놀이자유</td>
  </tr>
</table>

<?php 
if (isset($_GET["name"]) ){
 echo "고객이름 : ". $_GET["name"]. "<br>";
}
?> 
</body>
</html>