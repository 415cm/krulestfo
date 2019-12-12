<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style/styles1.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

body{
background-color: #e1e1e1;
background-size: 1500px;
margin: auto;
/*width: 100%;*/
}

/* Add a black background color to the top navigation */
.topnav {
    background-color: #76d0e4;
    overflow: hidden;
	width: 100%;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #8b9ca0;
  color: white;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}

.logo{
left: 45%;
position: absolute;
/*(width: 1500px;*/
z-index: 99;
color: white;
font-family: "Roboto", sans-serif;
}

a, p, h1, h2, h3{
	font-family: "Roboto", sans-serif;
}

.selectWrapper{
  border-radius:36px;
  display:inline-block;
  overflow:hidden;
  background:#cccccc;
  border:1px solid #cccccc;
  float: right;
}
.selectBox{
  width:200px;
  height:40px;
  border:0px;
  outline:none;
  padding-left: 15px;
}
/*
.content-container {
  height: 100%;
  width: 60%;
  margin: auto;
  margin-top: 80px;
  margin-bottom: 80px;
  background-color: white;
  
}

#data-section {
  
  height: 400px;
}
*/

.login-page {
  width: 1200px;
  padding: 8% 0 0;
  margin: auto;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 1200px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #8b9ca0;
  width: 120px;
  height: 60px;
  border: 0;
  padding: 15px;
  margin: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;

 
}
.form button:hover,.form button:active,.form button:focus {
  background: #ddd;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #8b9ca0;
  text-decoration: none;
}

a:link {
  text-decoration: none;
}

button{
	margin-top: 15px;
}

.buttons{
display: flex;
  flex-flow: row wrap;
  align-items: center;
  	
}


li{
    list-style:none;
    
}


label,input{
    display: inline-block;
    vertical-align: middle;
	margin-right: 10px;
	margin-left: 10px;
}

tr.border_bottom td {
  border-bottom:1pt dotted black;
}

.pole1{
	word-wrap:break-word; 
	width:110px;
}

.pole2{
	word-wrap:break-word; 
	width:60px;
}

/* DivTable.com */
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: none;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}

</style>
</head>
<table class="art">
 <p>Zaznacz, które pola chcesz wyeksportować</p>
 
 <!-- Checkboxy -->
	<tr>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
	<!--
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:80px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:30px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:100px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:30px;"/>
	</td>
	-->
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
 </tr>
 
 <!-- Nagłówki kolumn -->
 
 <tr class="border_bottom">
	<td>
		<label for="checkid" class="pole1"/><a >Tytuł artykułu</a></label>
	</td>
	<td>
		<label for="checkid" class="pole1"/><a >Autor Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid" class="pole2"/>% udziału autora1</label>
	</td>
	<!--
	<td>
		<label for="checkid"><a href="autor.html">Autor2 Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid">% udziału autora2</label>
	</td>
	<td>
		<label for="checkid"><a href="autor.html">Autor3 Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid">% udziału autora3</label>
	</td>
	-->
	<td>
		<label for="checkid" class="pole1"/>Opis artykułu</label>
	</td>
	<td>
		<label for="checkid" class="pole1"/>Data publikacji</label>	
	</td>
	<td>
		<label for="checkid" class="pole1"/>Czasopismo</label>	
	</td>
	<td>
		<label for="checkid" class="pole1"/>Konferencja</label>	
	</td>
	<td>
		<label for="checkid" class="pole2"/>Impact factor</label>	
	</td>
	<td>
		<label for="checkid" class="pole2"/>DOI</label>	
	</td>
  </tr>
<?php
if (!headers_sent()) {
  foreach (headers_list() as $header)
    header_remove($header);
}
header("Content-type: application/vnd.ms-word");  
header("Content-Disposition: attachment;Filename=".rand().".doc");
require 'conn.php';
$sql = "SELECT * FROM artikel WHERE id > 0";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){    
      echo "<tr>
      <td>
        <label for='checkid' class='pole1'/><a method='get' href='readarticle.php?id=".$row['id']."'>".$row['titel']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole1'/><a  method='get' href='autor.php?autor1=".$row['autor1']."'>".$row['autor1']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['author1prozent']."%</label>
      </td>
      <!--
      <td>
        <label for='checkid'><a href='autor.html'>Autor2 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora2</label>
      </td>
      <td>
        <label for='checkid'><a href='autor.html'>Autor3 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora3</label>
      </td>
      -->
      <td>
        <label for='checkid' class='pole1'/>".$row['beschreib']."</label>
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['veroffentlich']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['zeitschrift']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['konferenz']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['doi']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['impactfactor']."</label>	
      </td>";}}
      
      ?>
 </table>
    </html>

