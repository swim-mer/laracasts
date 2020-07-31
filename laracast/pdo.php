<?php
/* MySQL database located in mytodos.sql
    Load this into new database locally:
      mysqladmin -uuser -ppassword create localDatabase
      mysql -uuser -ppassword localDatabase < mytodos.sql

    Save and update the database into sql file:
      mysqldump -uuser -ppassword -R database > mytodos.sql

*/


/* PDO : PHP Data Object
    offers interface to connect with database
    define with:
      new PDO('dsm:host=hostaddress;dbname=database', 'username', 'password');

      dsm (deep security manager) = connection string;
                                    specifies information about data source
                                    and the means of connecting to it.

    local PDO object:
      $pdo new PDO('mysql:host=127.0.0.1,dbname=mytodos', 'root', '');
*/

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'user', 'password');
} catch (PDOException $e) {
  die('Could not connect. ' . $e->getMessage());
}


// prepare an sql query with $PDO_Object->prepare();
// select everything from todos table inside mytodos database
$statement = $pdo->prepare('select * from todos');

// execute a prepared sql query
$statement->execute();

// fetch all results of query (be careful using this with very large DBs)
var_dump($statement->fetchAll());

// in order to fetch again, statement must be executed again
$statement->execute();

// fetch only the object
$tasks__ = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($tasks__);

// get only the description of the first item in object array
var_dump($tasks__[0]);

// load query results into a Task class object
$task_objects = $statement->fetchAll(PDO::FETCH_CLASS, 'Task')
