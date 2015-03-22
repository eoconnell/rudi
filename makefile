all:

db-reset: db-delete db-create db-init

db-create:
	touch database.sqlite

db-delete:
	rm database.sqlite

db-init:
	php create_schema.php

db-seed:
	php seed.php
