<?php
include('__tools/ConsolePerf_start.php');

$wordlist= file_get_contents('wordlist.txt');
$wordlist = explode("\n",$wordlist);
$colorlist = array('#CD4A4A', '#FF5349', '#FFA089', '#A5694F', '#FF8243', '#D68A59', '#FFCF48', '#BAB86C', '#C5E384', '#1DF914', '#FFCC00', '#6DAE81', '#45CEA2', '#158078', '#199EBD', '#1A4876', '#1F75FE', '#979AAA', '#7366BD', '#926EAE', '#CDA4DE', '#FC74FD', '#FF1DCE', '#DE5D83', '#FC2847', '#CB4154');
$passes = 3;

$nounlist= file_get_contents('nouns.txt');
$nounlist = explode("\n",$nounlist);

$adjectiveslist= file_get_contents('adjectives.txt');
$adjectiveslist = explode("\n",$adjectiveslist);

$verbslist= file_get_contents('verbs.txt');
$verbslist = explode("\n",$verbslist);

//if ($passes > bcsub(count($colorlist), 1)) {
//	echo 'ERROR';
//	exit;
//}

$nounarray = array_rand($nounlist);
$adjarray = array_rand($adjectiveslist);
$verbarray = array_rand($verbslist);

echo  $adjectiveslist[$adjarray] . $nounlist[$nounarray] . $verbslist[$verbarray];











//echo '<center>';
//
//for ($i = $passes; $i >= 1; $i--) {
//		$c = count($colorlist);
//		$num = array_rand($colorlist);
//		$word = array_rand($wordlist);
//
//		echo '<span style="color:' . $colorlist[$num] . ';font-family:verdana;font-size:72px;font-weight:bold;">' . $wordlist[$word] . '</span>';
//
//		$color =  $colorlist[$num];
//		unset($colorlist[$num]);
//	}
//
//echo '</center>';







include('__tools/ConsolePerf_stop.php');



