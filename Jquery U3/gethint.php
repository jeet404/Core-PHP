<?php
// Array with names
$arr = Array("Aarya","Bharat", "Chintan", "Dhara","Ajay","Chandan","Bhavesh","Dhaval");
// get the q parameter from URL
$query = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($query !== "") {
  $query = strtolower($query);
  $length=strlen($query);
  foreach($arr as $name) {
    if (stristr($query, substr($name, 0, $length))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>