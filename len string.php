len string

<?php
$str = "Hello World!";
$count = 0;

for ($i = 0; ; $i++) {
    if ($str[$i] === '') {
        break;
    }
    $count++;
}

echo "Length of the string is: $count";
?>



$str = "Welcome to PHP TTT";
  $len=strlen($str);
  $nov =0;
  echo " The given string :", $str, "<br/>"
  for($i=0; $i<strlen($str); $i++)
  {
    if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
    {
      $nov++;
    }
  }
  echo " number of vowels in the given string : ", $nov, "<br/>";