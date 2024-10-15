<?php
declare(strict_types=1);

require __DIR__ . "/kirby/bootstrap.php";

$customRoutes = [
	[
		"path"  => "feed-de.xml",
		"route" => "de/feed",
	],
	[
		"path"  => "feed-en.xml",
		"route" => "en/feed",
	],
];

$kirby = kirby();
$staticSiteGenerator = new JR\StaticSiteGenerator($kirby);
$staticSiteGenerator->setCustomRoutes($customRoutes);
/*removed because addes unnessecary complexity*/
/*$staticSiteGenerator->setIgnoreUntranslatedPages(true);*/
$files = $staticSiteGenerator->generate("./build");