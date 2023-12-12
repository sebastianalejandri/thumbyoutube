<form action="imagem.php" method="post">
<input name="valor" type="text" size="100"/>
<input type='submit' value='ok' >
</form>

<?php

$url = $_POST['valor'];

echo "<a href=\"".$url."\" target=\"_new\">".$url."</a>";
echo "<br>";

$codigo = str_replace("https://www.youtube.com/watch?v=", "", $url );
//$arquivo = $_POST['valor'];

echo $codigo;
echo "<br>";


echo "<a href=\"https://i.ytimg.com/vi/".$codigo."/maxresdefault.jpg\" target=\"_new\">";
echo "<img src=\"https://i.ytimg.com/vi/".$codigo."/maxresdefault.jpg\">";
echo "</a>";

echo "<br>";
echo "<br>";


echo "<a href=\"https://i.ytimg.com/vi/".$codigo."/hqdefault.jpg\" target=\"_new\">";
echo "<img src=\"https://i.ytimg.com/vi/".$codigo."/hqdefault.jpg\">";
echo "</a>";
?>