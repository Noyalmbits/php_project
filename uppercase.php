<?php
//1.conncatenation
$part1="coding in";
$part2="php programing";
$fulltext=$part1.$part2;
echo"1.combined text:".$fulltext."<br>";
//2.case Conversion
$uppertext=strtoupper($fulltext);
echo"2.Uppercase Text:".$uppertext."<br>";
//3.string Length
$length=strlen($uppertext);
echo"3.total Charcters:".$length."<br>";
//4.word postion
$postion=strpos($uppertext,"PHP");
echo"4.postion of php:".$postion."<br>";
//5.substring Extraction
$extractedword = substr($uppertext, 10, 11);
echo "5. Extracted word: " . $extractedword . "<br>";
?>