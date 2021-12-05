<?php
$exemplo = "<script>alert('virus')</script>";
$exemplo = strip_tags($exemplo);
echo $exemplo;
$str = "A 'quote' is <b>bold</b>";

$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo "<br>";
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_NOQUOTES);
?>

