HOST=localhost
PORT=8080

.PHONY: update autoload optimize unoptimize run clean

vendor:
	@composer install

update: vendor
	@composer update

autoload: vendor
	@composer dump-autoload

optimize: vendor
	@composer dump-autoload -o
	@icanboogie optimize

unoptimize:
	@composer dump-autoload
	@rm -f vendor/icanboogie-combined.php
	@icanboogie clear cache

run: vendor
	cd web && php -S $(HOST):$(PORT) index.php

clean:
	@rm -Rf vendor
