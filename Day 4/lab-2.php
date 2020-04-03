<!doctype html>

<html>
<head>
	<title>Раскрывающейся списка</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul.expandable li { list-style-image: url('img/point.gif') }
		li ul.expandable { display: none } /* выставить в none */
	</style>
	<script type="text/javascript">


		/*
			Опишите функцию setPlusIcon(), которая 
			- устанавливает для элементов li значок [+], 
				если этот элемент имеет вложенный список
			- регистрирует функцию aClick в качестве обработчика события onclick
				для всех ссылок
		*/
		/*
			Запустите функцию setPlusIcon() при загрузке страницы
		*/
		function setPlusIcon(){
		var li = document.querySelectorAll("li");
          	for(let i = 0; i < li.length; i++){
				if( li[i].getElementsByTagName("ul").length > 0 ){
				let a = li[i].getElementsByTagName("a")[0];
				a.innerHTML = "[+]"+a.innerHTML;
				}
          	}
       
          var a = document.querySelectorAll("a");
          for(let i = 0; i < a.length; i++){
             a[i].onclick = aClick;
          	}     
		}

		/*
			Опишите функцию aClick(), которая обрабатывает щелчок по ссылке
			1. Получите объект - ссылку, по которой был сделан щелчок 
			2. Найдите родительский li
			3. Найдите вложенный список
			4. Если вложенных списков нет - разрешите переход по ссылке
			5. Назначьте вложенному списку нужные свойства и поменяйте иконку
			6. Запретите переход по ссылке
		*/
		function aClick(e){
			var li = e.target.parentNode;
          var ul = li.querySelector("ul");
          if( ul.length ){
            e.preventDefault();
		  } 
		  else{
            var a = li.querySelector("a");
            if( a.innerHTML.indexOf("+") != -1 ){
              ul.style.display = "block";  
              a.firstChild.nodeValue = a.firstChild.nodeValue.replace("+","-");
            }else{
              ul.style.display = "none";
              a.firstChild.nodeValue = a.firstChild.nodeValue.replace("-","+");          
            }
          }
		}	
		
	</script>
</head>

<body onload="setPlusIcon()">
	<h1>Пример раскрывающегося списка</h1>
	<ul class="expandable">
		<li>
			<a href="#">Книги</a>
			<ul class="expandable">
				<li>
					<a href="#">Отечественные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Зарубежные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
			</ul>
		</li>
 		<li>
			<a href="#">DVD</a>
			<ul class="expandable">
				<li>
					<a href="#">Отечественные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Зарубежные</a>
					<ul class="expandable">
						<li><a href="#">Детективы</a></li>
						<li><a href="#">Научная фантастика</a></li>
						<li><a href="#">Исторические</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</body>
</html>
