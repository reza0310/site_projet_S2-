<?php
set_include_path($_SERVER['DOCUMENT_ROOT']."/S2");
echo(str_replace("septa", "active", str_replace("%php%", file_get_contents("page.html"), file_get_contents("header.html", true))));
?>
