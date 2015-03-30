<?php

 define('HOST','localhost');
/*
 * DEFINE('HOST','localhost');
 * definimos nosso "HOST", no caso localhost como vamos rodar em
 * um servidor local. caso use hospedagem será o IP da hospedagem fornecido pela
 * empresa responsável
 */

    define('USER','root');
 /*
 * DEFINE('USER','root');
  * Definimos nosso usuario do banco de dados, que no caso é o nosso usuario
  * do MYSQL, o padrão em geral do MYSQL é root, mas você pode definir isso na instalação
  * ou mudar depois no próprio  MYSQL
 */

define('PASS','');
 /*
  * DEFINE('PASS','');
  * definimos a senha do banco de dados MYSQL, que no caso deixei vazio pois não
  * configurei nenhuma senha, vale lembrar que uso um servidor local, portanto ninguém além do meu pc tem acesso
  * ao meu apache. Só é possivel o acesso ao meu apache caso eu envie meu ip para algum usuario ..
*/
define('DB','curso');
 /*
 * DEFINE('DB','curso');
 * Definimos nossa database.
 */