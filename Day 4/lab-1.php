﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Таблица умножения</title>
<style type="text/css">
td{padding:10px;border:1px solid #369;}
</style>
<script type="text/javascript">
var cell = 10;
var row = 10;
	
function createDOM() {
	
	let relative = document.querySelector("#relative");

		for (let i = 1; i<=row; i++){
			let tr = document.createElement("tr"); 
			for (let j=1; j<=cell; j++){
				let td = document.createElement("td");
				tr.appendChild(td);
				td.innerHTML = i*j;
			}
			table.appendChild(tr);
		}
	/* Создайте в элементе div таблицу с помощью методов DOM */
}
</script>
</head>
<body>
<a href="javascript:createDOM();">Создать таблицу с помощью методов DOM</a><br>
<div id="d">
	<table id="table"> </table>
</div>
</body>
</html>