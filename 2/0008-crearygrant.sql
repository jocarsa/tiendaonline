CREATE USER 
'tiendaonline2'@'localhost'
IDENTIFIED VIA mysql_native_password USING '*1258825374E35E8237EC4AA80BC02F5B17277B96';

GRANT USAGE ON *.* TO 'tiendaonline'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `tiendaonline`.* TO 'tiendaonline2'@'localhost';