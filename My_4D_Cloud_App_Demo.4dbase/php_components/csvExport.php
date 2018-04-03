<?php

function __csvExportToFile($pFilePathStr, $pLineDataJSON)
{

$returnDebugLogTxt='HELLO WORLD';

return $returnDebugLogTxt;
}

function __csvExportToFile1($pFilePathStr, $pLineDataJSON)
{

$returnDebugLogTxt = $pFilePathStr . '\n' . $pLineDataJSON . '\n';
$handle=fopen($pFilePathStr,'w+');

$list =  json_decode($pLineDataJSON);
$returnDebugLogTxt=count($list);

foreach ($list as $fields) {
fputcsv($handle, $fields);
$returnDebugLogTxt = $returnDebugLogTxt . $fields . '\n';
}

 
fclose($handle);

/*
$handle=fopen($pFilePathStr,'w+'); 

$list =  json_decode($pLineDataJSON);

foreach ($list as $fields) {
fputcsv($handle, $fields);
$returnDebugLogTxt = $returnDebugLogTxt . $fields . '\n';
}

fclose($handle);

$returnDebugLogTxt = $returnDebugLogTxt . filesize($pFilePathStr) . '\n';
*/

return $returnDebugLogTxt;
}


?>