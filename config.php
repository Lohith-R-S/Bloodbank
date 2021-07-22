<?php

// Database Details

// define( "DB_HOST", "localhost" );
// define( "DB_USER", "root" );
// define( "DB_PASSWORD", "" );
// define( "DB_NAME", "bloodbank" );

// $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
//     if ( !$connection ) {
//         echo mysqli_error( $connection );
//         throw new Exception( "Database cannot Connect" );
//     }

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>