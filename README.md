## Start Environment
```text
docker-compose up -d
```
## Import database
```text
get database file from folder
./db/
and import to database malaga
```
## Config
edit file `./src/app/config.php`
edit config connect database
```text
"database"=>[
				"type"=>"mysql",
				"dbName"=>"malaga",
				"serverName"=>"db",
				"port"=>"3306",
				"user"=>"root",
				"password"=>"toomba",
				"options"=>[],
				"cache"=>false
		],
```
P/s: when run on production please remove `src/app/controllers/Admin.php`