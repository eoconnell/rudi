default:

db-reset: db-delete db-create db-init

db-create:
	touch db/database.sqlite

db-delete:
	rm -f db/database.sqlite

db-init:
	php db/create_schema.php

db-seed:
	php db/seed.php
