<?php
include('__tools/ConsolePerf_start.php');

$listAdjectives = file_get_contents('lists/list-adjectives.txt');
$listAdjectives = explode("\n",$listAdjectives);

$listAdverbs = file_get_contents('lists/list-adverbs.txt');
$listAdverbs = explode("\n",$listAdverbs);

$listColors = file_get_contents('lists/list-colors.txt');
$listColors = explode("\n",$listColors);

$listEmotions = file_get_contents('lists/list-emotions.txt');
$listEmotions = explode("\n",$listEmotions);

$listNouns = file_get_contents('lists/list-nouns.txt');
$listNouns = explode("\n",$listNouns);

$listPrepositions = file_get_contents('lists/list-prepositions.txt');
$listPrepositions = explode("\n",$listPrepositions);

$listPronouns = file_get_contents('lists/list-pronouns.txt');
$listPronouns = explode("\n",$listPronouns);

$listVerbs = file_get_contents('lists/list-verbs.txt');
$listVerbs = explode("\n",$listVerbs);

//////////////////////////////////////////////////////////////////////

$Adjectives = array_rand($listAdjectives);
$getAdjectives = $listAdjectives[$Adjectives];
$adj = $getAdjectives;

$Adverbs = array_rand($listAdverbs);
$getAdverbs = $listAdverbs[$Adverbs];
$adv = $getAdverbs;

$Colors = array_rand($listColors);
$getColors = $listColors[$Colors];
$col = $getColors;

$Emotions = array_rand($listEmotions);
$getEmotions = $listEmotions[$Emotions];
$emo = $getEmotions;

$Nouns = array_rand($listNouns);
$getNouns = $listNouns[$Nouns];
$noun = $getNouns;

$Prepositions = array_rand($listPrepositions);
$getPrepositions = $listPrepositions[$Prepositions];
$prep = $getPrepositions;

$Pronouns = array_rand($listPronouns);
$getPronouns = $listPronouns[$Pronouns];
$pro = $getPronouns;

$Verbs = array_rand($listVerbs);
$getVerbs = $listVerbs[$Verbs];
$verb = $getVerbs;







//echo $pro . ' ';

echo $emo . ' ';

echo $col . ' ';

echo $noun . ' ';

echo $adv . ' ';

echo $verb . ' ';

echo $adj . ' ';

//echo $prep . ' ';





























include('__tools/ConsolePerf_stop.php');