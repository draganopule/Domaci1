<?php

//funkcija koja generise validan URL query string
function generateUrlQuery($params)
{
    $url = '';
    $keyArray = array_keys($params);
    for($i = 0; $i < count($keyArray);$i++){
        $url = $url . $keyArray[$i] . "=" . urlencode($params[$keyArray[$i]]);
        if($i != count($keyArray)-1){
            $url = $url . "&";
        }
    }

   return $url;
}

//funkcija koja generise href atribut za <a> tag
function generateHref($pageName, $params)
{
    return $pageName . "?" . generateUrlQuery($params);
}

//funkcija koja vraca html listu svih GET parametara koji su proslijedjeni trenutnoj stranici
function formatGetParams()
{
    $html = '<ul>';
    foreach($_GET as $key => $value){
        $html = $html . '<li>' . $key . ': ' . $value . '</li>';
    }
    $html = $html . '</ul>';
    return $html;
}