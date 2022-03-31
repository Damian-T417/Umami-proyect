create table usuarios(
  idUsuario int primary key auto_increment,
  nombreUsuario varchar(100) not null,
  password varchar(150) not null,
  create_at timestamp not null default current_timestamp
  )engine=InnoDB default charset=utf8;

create table promociones(
  idPromo int primary key auto_increment,
  nombrePromo varchar(150) not null,
  descripPromo varchar(50) not null,
  precioPromo float,
  imgPromo varchar(50),
  fechaExp date
  )engine=InnoDB default CHARSET=utf8;

create table categorias(
  idCategoria int primary key auto_increment,
  nombreCat varchar(50) not null
  )engine=InnoDB default charset=utf8;
  
create table menu(
  idPlatillo int primary key auto_increment,
  nombrePlatillo varchar(50) not null,
  descripPlatillo varchar(150) not null,
  precioPlatillo float not null,
  imgPlatillo varchar(50),
  idCategoria int not null,
  foreign key (idCategoria) references categorias(idCategoria) on delete cascade
  )engine=InnoDB default charset=utf8;