# le-petit-darmanin

[lepetitdarmanin.fr](https://lepetitdarmanin.fr)


## Init

### Build

Build, migrate & seed
 
- `docker compose up -d --build`
- `docker compose run --rm php php artisan key:generate`
- `docker compose run --rm php php artisan migrate`
- `docker compose run --rm php php artisan db:seed`
- `docker compose run --rm php php artisan optimize:clear`