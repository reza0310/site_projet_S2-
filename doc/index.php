<?php
set_include_path($_SERVER['DOCUMENT_ROOT']."/site_s2");
echo(str_replace("quatro", "active", str_replace("%php%", file_get_contents("page.html"), file_get_contents("header.html", true))));
?>