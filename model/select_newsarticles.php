<?php

$result = $mysqli->query("SELECT * FROM newsarticles");
$result = Content($result);
