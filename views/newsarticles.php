<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $data => $newsItem) {
	
	echo '<article>';
	echo '<h1>'.$newsItem['title'].'</h1>';
	echo '<img src=img/'. $newsItem['image'] . '><br>';
	echo '<content>'.$newsItem['content'].'</content>';
	echo '</article>';
}

echo '</section>';