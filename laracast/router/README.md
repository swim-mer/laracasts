


#### Using the database

MySQL database located in database_name.sql file inside /database
Load this into new database locally:
    `mysqladmin -uuser -ppassword create localDatabase`
    `mysql -uuser -ppassword localDatabase < database_name.sql`

Save and update the database into sql file:
    `mysqldump -uuser -ppassword -R database_name > .sql`

Run server in same directory as index.php on command line:
    `php -S localhost:8888`
