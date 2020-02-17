<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH.'/libraries/simple_html_dom.php');


/**
<meta property="og:type" content="og:product" />
<meta property="og:title" content="Meja Laptop Thomas" />
<meta property="og:image" content="https://m2fabelio.imgix.net/catalog/product/cache/image/265x265/beff4985b56e3afdbeabfc89641a4582/t/h/Thomas_C_Table_0.jpg" />
<meta property="og:description" content="" />
<meta property="og:url" content="https://fabelio.com/ip/thomas-c-table.html" />
<meta property="product:price:amount" content="699000"/>
<meta property="product:price:currency" content="IDR"/> 

 <form action="https://fabelio.com/checkout/cart/add/uenc/aHR0cHM6Ly9mYWJlbGlvLmNvbS9pcC90aG9tYXMtYy10YWJsZS5odG1s/product/9820/" method="post"
          id="product_addtocart_form">
 **/    

function fabelio($url = null){
        
        if(!$url) $url = 'http://localhost/target/fab01.html';
        
        $html = file_get_html($url);
        
        $_['title'] = seek($html, 'meta[property=og:title]', 'content');
        $_['price'] = (int)seek($html, 'meta[property=product:price:amount]', 'content');
        $_['image'] = seek($html, 'meta[property=og:image]', 'content');
        $_['url']   = seek($html, 'meta[property=og:url]', 'content');
        
        $_tmp       = explode('product/',seek($html, 'form[id=product_addtocart_form]', 'action'));
        $_['id']    = str_replace('/', '', $_tmp[1]);
        
        $timezone   = 7;
        $_['time']  = gmdate('Y-m-d H:i:s', time() + 3600*($timezone+date("I")));
        
        return $_;
    }

function seek($html, $find, $target){
        
        foreach($html->find($find) as $a) {
            return $a->$target;
        }
    }
