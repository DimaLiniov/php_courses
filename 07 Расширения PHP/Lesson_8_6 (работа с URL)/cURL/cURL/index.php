<?php
    include_once 'phpQuery.php';

    function print_arr($arr){
    	echo '<pre>'.print_r($arr,true).'</pre>';
    }

    function get_content($url){
   		$ch=curl_init($url);
		curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$res=curl_exec($ch);
		curl_close($ch);
		return $res;
    }

    function parser($url){
    	$fp=fopen('file.txt','w');
    	$file=get_content($url);
    	$doc=phpQuery::newDocument($file);
    		foreach ($doc->find('.products-list .products-list__item') as $article) {
    			$article=pq($article);
    			//$article->find('.product-item__name .product-item__name-link')->prepend('Ноутбук: ');
    			//$article->find('.product-item__name .product-item__name-link')->remove();
    			$text=$article->find('.product-item__name .product-item__name-link')->text();
    	
    			$data=$article->find('.product-options__item-initial')->text();
    	
    			$price=$article->find('.price-box__content-i')->text();
    	
    	    fwrite($fp, $text.$data.'Цена: '.$price);
    		}
    		fclose($fp);
    }
    
	$url='https://comfy.ua/notebook/';
	parser($url);