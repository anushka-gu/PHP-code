WAP in php to check the scope of a variable
<br>
<?php
    // Defining function
    function test(){
      $greet = "Hello World!";
      echo $greet;
  }
   
  test(); // Outputs: Hello World!
   
  $greet; // Generate undefined variable error
  echo "<br>";
  echo "This Program is written by Aaryan Goel 0221BCA163"
?>