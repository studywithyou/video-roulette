<?php

$conf = include '../config.php';

include '../include/video_roulette.class.php';

$app = new VideoRoulette($conf);

$result = $app->report($_POST['hash']);

if ($result) {
	echo "Reported";
} else {
	echo "Error report";
}
