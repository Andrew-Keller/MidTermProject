<?php
function csvFileToArray($fname){
	if (file_exists($fname)){
		global $filearray;
		$filearray= [];
		$file = fopen($fname, 'r');
		$i = 0;
		while ($record = fgetcsv($file)) {
			$filearray[$i] = array(0 => $record[0],1 => $record[1]);
			$i=$i+1;}fclose($file);return $filearray;}

	else{return array("File doesn't exist");}}


function csvFileToArrayPlusReturn($index,$fname){
	if (file_exists($fname)){
		global $filearray;
		$filearray= [];
		$file = fopen($fname, 'r');
		$i = 0;
		while ($record = fgetcsv($file)) {
			$filearray[$i] = array(0 => $record[0],1 => $record[1]);
			$i=$i+1;}fclose($file);return $filearray[$index];}

	else{return array("File doesn't exist");}}




function AddRecordToCSV($fname,$index0,$index1){
	if (file_exists($fname)){
	
		$file = fopen($fname, 'a');
		fputcsv($file, $index0,$index1);
		fclose($file);
		}

	else{return array("File doesn't exist");}}

function ModifyLine($csv,$index,$quote,$author){
	


}

function EmptyLine($csv,$lineIndex){


} 

function DeleteLine($csv,$LineIndex){


}
?>