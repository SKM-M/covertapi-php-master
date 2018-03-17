<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
// Include the required concrete conversion class
include('../Word2PDF.php');

try {
// Instantiate the class
	$word2pdf = new ConvertAPI\Word2Pdf();
// Convert the file
	$word2pdf->convert(__DIR__.'/6equkc.docx', __DIR__.'/output.pdf');
} catch (Exception $e) {
	var_dump($e->getMessage());
}