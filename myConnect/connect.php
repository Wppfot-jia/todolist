<?PHP
$server = 'localhost';
 
$username = 'root'; 
 
$password = '';
 
$conn = @mysql_connect($server,$username,$password); 

mysql_select_db('todos');

mysql_query("set names utf8");
?>