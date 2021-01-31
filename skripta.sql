create database msimenic_20_20 default character set utf8mb4;
use msimenic_20_20;
create table ispitni_rok(
    sifra int not null primary key auto_increment,
    datum date not null,
    kolegij varchar(255) not null,
    brojPrijavljenih int not null
);
insert into ispitni_rok(datum, kolegij, brojPrijavljenih)
values ('2021-05-01','P3', 20);
