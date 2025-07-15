<?php 
$text="HeLlO wOrLd";
         echo strtolower($text); // converts to lower case
         echo "<br>";
         echo strtoupper($text); // converts to UPPER case
         echo "<br>";
         echo strlen($text); // gives the length of the string
         echo "<br>";
         echo $text[0]; // accessing through indexing
         echo "<br>";
         $text[0]="G"; // modifying the string
         echo "<br>";
         echo $text;
         echo str_replace("GeLlO", "HoLa", $text); // replaces the given specific string
         echo "<br>";
         echo substr($text, 0,4); // extracts the substring from the given string SYNTAX ---> sunstr(string variable, starting Index, no. of characters wanted)
?>