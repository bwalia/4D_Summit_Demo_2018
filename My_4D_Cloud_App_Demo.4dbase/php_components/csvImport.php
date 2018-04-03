<?php

function __csvImportFile($pFilePathStr)
{
$tResult='';
$handle=fopen($pFilePathStr,'r'); 
$results = array();
$line=0;
			while (($data = fgetcsv($handle,5000, ",")) !== FALSE)
			{
				for ($x=0; $x < count($data); $x++) {
                $results[$x][] = $data[$x];
				}

			}

fclose($handle);

$tResult = json_encode($results);

return $tResult;
}

?>