<?php
function eineFunktion(&$param)
{
	$param = $param * 2;
}
function nochEineFunktion($param)
{
	$param = $param / 2;
}
$var1 = 10;
$var2 = 20;
$var3 = 30;
$var4 = 0;
$var4 = &$var1;
echo "var4: $var4<br>"; // Ausgabe: [. . .]

eineFunktion($var4);
echo "var1: $var1 und $var4<br>"; // Ausgabe: [. . .]

if ($var4 > $var2) {
    echo 'ja<br>';
	$var4 = $var2;
}
else {
    echo 'nein<br>';
	$var4 = &$var3;
}
echo 'jetzt ist es '.$var4.'<br>';
nochEineFunktion($var4);

echo "var4: $var4<br>"; // Ausgabe: [. . .]

eineFunktion($var3);

echo "var1: $var1<br>"; // Ausgabe: [. . .]

echo "var2: $var2<br>"; // Ausgabe: [. . .]
?>
