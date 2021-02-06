create table if not exists tb_restaurantes (
id int auto_increment not null primary key,
nome varchar(40) not null,
cidade varchar(30) not null,
endereço varchar(40) not null,
telefone varchar(11) not null
) default charset utf8;