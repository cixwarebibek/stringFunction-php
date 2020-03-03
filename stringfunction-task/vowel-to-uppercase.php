<html>
<body>
<?php
        $str="Lorem ipsum dolor sit amet, esse consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla esse pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt esse mollit anim id est laborum.";
        $vowels=array("a","e","i","o","u");
        $replaceval=array('<span class="C1"> A </span>','<span class="C2">E</span>','<span class="C3">I</span>','<span class="C4">O</span>','<span class="C5">U</span>');
        echo str_replace($vowels,$replaceval,$str);
?>

<style>
     .C1{
         color:red;
     }
     .C2{
         color:green;
     }
     .C3{
         color:blue;
     }
     .C4{
         color:orange;
     }
     .C5{
         color:yellow;
     }

</style>
</body>
</html>
