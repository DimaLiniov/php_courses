<!DOCTYPE html>
<html lang='ru'>
<head>
	<title>JSON & Ajax</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
            $("h3").bind("click", function(event) {
                ajax({'func': 1});
            });
        });
        function ajax(data) {
            $.ajax({
                url: '/api.php',
                type: "POST",
                data: data,
                dataType: "text",
                error: error,
                success: success
            });
        }
        function error() {
            alert('Ошибка при загрузке данных!');
        }
        function success(result){
        	alert(result);
        }
    </script>
</head>
<body>
	<div>
<h3 style="cursor: pointer;">Проверка работы скрипта </h3>
	</div>
	<div class="result"></div>
</body>
</html>