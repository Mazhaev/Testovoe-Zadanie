<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>БД</title>
</head>
<body>
	<?php

				mysql_connect("localhost","root","toor") or die ("Connection lost");

				mysql_query("CREATE DATABASE analytics");

				mysql_select_db("analytics") or die (mysql_error());

				mysql_query("CREATE TABLE log_list (api VARCHAR(50),date_connection VARCHAR(50),time_connection VARCHAR(50),id_session VARCHAR(50),INFO VARCHAR(50),ip_address VARCHAR(50),request VARCHAR(50))");

					mysql_query("LOAD DATA LOCAL INFILE 'logs.txt'
							INTO TABLE log_list
							FIELDS TERMINATED BY ' '
							LINES TERMINATED BY '|' 					            (api,date_connection,time_connection,id_session,INFO,ip_address,request)");
					mysql_query("ALTER TABLE log_list DROP COLUMN api");
					mysql_query("ALTER TABLE log_list DROP COLUMN INFO");
	?>
	
</table>
</body>
</html>