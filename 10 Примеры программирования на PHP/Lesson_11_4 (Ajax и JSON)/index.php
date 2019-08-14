<!DOCTYPE html>
<html lang='ru'>
<head>
    <title>Ajax и JSON</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
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
        function success(result) {
            var result = $.parseJSON(result);
            var str = '';
            for (var i in result)
                str += '<b>' + i + '</b>: ' + result[i] + '<br />';
            $('#result').empty();
            $('#result').append(str);
        }
    </script>
</head>
<body>
    <div>
        <h3 style='cursor: pointer;'>Получить случайного пользователя из БД</h3>
    </div>
    <div id="result"></div>
</body>
</html>