create database todos;

set names gbk;

use todos;

create table list(
id int unsigned primary key auto_increment,
content varchar(3600) not null,
isCom tinyint default 0
)charset=utf8;