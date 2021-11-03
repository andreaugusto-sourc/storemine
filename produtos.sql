Create table produtos(
idProduto integer unsigned not null auto_increment,
nomeProduto varchar(30) not null,
descriProduto text not null,
precoProduto FLOAT not null ,
imgProduto varchar(60) not null,
img2Produto varchar(60) not null,
qtdProduto integer not null,
tipoProduto varchar(25) not null,
primary key(idProduto)
);


