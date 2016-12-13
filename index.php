<html>
<head>
	<title> Text </title>
	<script type = 'text/javascript' src = 'lib/jquery-3.0.0.min.js'></script>
	<script>
		function funcBefore(){
			$("#information").text("Ожидание данных...");
		};

		function funcSuccess(data){
			$("#information").text(data);
		};

		$(document).ready(function(){
			$("#load").bind('click', function(){
				var admin = 'Admin';
				$.ajax({
					url: "content.php",
					type: "POST",
					data: ({name: admin, number: 5}),
					dataType: "html",
					beforeSend: funcBefore,
					success: funcSuccess
				});
			});
		});
	</script>
</head>

<body>
	<p> Hello, world! </p>
	<p id = 'load' style = "cursor: pointer; width: 200px"> Загрузить данные </p>
	<div id = "information"></div>
</body>