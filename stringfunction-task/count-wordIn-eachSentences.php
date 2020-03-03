<?php
 $str="Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.";
 $str1=explode(".",$str);
 
 echo str_word_count($str1[0]);
 echo "<br/>";
 echo str_word_count($str1[1]);
 echo "<br/>";
 echo str_word_count($str1[2]);
 echo "<br/>";
 


?>