<?php

# seta o PHP.INI
ini_set("default_charset", "UTF-8");
ini_set("date.timezone", "America/Belem");
ini_set("display_errors", true);

# define os parametros de conexão com o banco de dados
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "p@\$\$w0rd");
define("DB_DB", "maindb");

# carrega a classe MYSQLi
require "classes/database.php";

# define a chave privada para Json Web Token - JWT
//define("PRIVATE_KEY", "chavePrivadaParaJsonWebToken");

# carrega as funções Json Web Token
//require "classes/jwt.php";

?>