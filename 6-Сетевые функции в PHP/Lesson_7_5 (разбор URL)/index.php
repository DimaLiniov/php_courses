<?php
    $url = 'http://mysite.local/?page=1&ref=partner';
    $arr = parse_url($url);
    //print_r($arr);
    parse_str($arr['query'],$query);
    //print_r($query);
    if (isset($query['ref'])) {
        setcookie('ref',$query['ref'], time()+1000);
        //
    }
    unset($query['ref']);
    $query = http_build_query($query);
    $url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
    //echo $url;
    if (isset($_GET['redirect'])){
        header("Location: $url");
        }
        print_r($_COOKIE['ref']);
?>
<form action="index.php" method="get">
    <input type="submit" value="Redirect" name="redirect">
</form>

<!-- <?php
    $url = 'http://myrusakov.ru/abc.html?id=7&page=8&x=9';
    echo $url.'<br />';
    $arr = parse_url($url);
    print_r($arr);
    echo '<br />';
    parse_str($arr['query'], $query);
    $query['y'] = 10;
    unset($query['x']);
    print_r($query);
    echo '<br />';
    $query = http_build_query($query);
    echo $query.'<br />';
    $url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$query;
    echo $url.'<br />';
?> -->