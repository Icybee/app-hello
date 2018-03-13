<?php

namespace Icybee;

/* @var $app \ICanBoogie\Application */

use ICanBoogie\ErrorCollection;
use Icybee\Modules\Pages\Page;
use Icybee\Modules\Sites\Site;
use Icybee\Modules\Users\User;

$app = require_once __DIR__ . '/bootstrap.php';
$language = "en";

set_exception_handler(function ($e) {
	echo $e;
});

$app->modules->install($errors = new ErrorCollection);

if (!$app->models['users']->exists(1))
{
	User::from([
		User::USERNAME => "geralt",
		User::EMAIL => "geralt@witcher.com",
		User::PASSWORD => 'yennifer',
	])->save();
}

if (!$app->models['sites']->exists(1))
{
	Site::from([
		Site::EMAIL => "geralt@witcher.com",
		Site::TIMEZONE => "UTC",
		Site::LANGUAGE => $language,
		Site::TITLE => "Kaer Morhen",
		Site::STATUS => Site::STATUS_OK,
	])->save();
}

$app->models['nodes']->truncate();
$app->models['pages']->truncate();

if (!$app->models['pages']->exists(1))
{
	// home
	Page::from([
		Page::TITLE => "Kaer Morhen",
		Page::IS_ONLINE => true,
		Page::UID => 1,
		Page::SITE_ID => 1,
		Page::LANGUAGE => $language,
		Page::WEIGHT => 0
	])->save();

	// page
	Page::from([
		Page::TITLE => "Novigrad",
		Page::IS_ONLINE => true,
		Page::UID => 1,
		Page::SITE_ID => 1,
		Page::LANGUAGE => $language,
		Page::WEIGHT => 1
	])->save();

	// page
	Page::from([
		Page::TITLE => "Oxenfurt",
		Page::IS_ONLINE => true,
		Page::UID => 1,
		Page::SITE_ID => 1,
		Page::LANGUAGE => $language,
		Page::WEIGHT => 2
	])->save();
}
