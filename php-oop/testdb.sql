create database mydb2;

use mydb2;

create table users(
 id int not null auto_increment,
    name varchar(100) not null,
    tel varchar(12) not null,
    primary key(id)
);

insert into users (name, tel) values ('Mick', '099999999');
insert into users (name, tel) values ('ikkyu', '088888888');
insert into users (name, tel) values ('Tle', '07877777777');
insert into users (name, tel) values ('Boom', '0222222222');
insert into users (name, tel) values ('Benz', '01111111111');

select * from users;

create table food( 
 id int not null auto_increment,
    name varchar(150),
    price int,
    price_extra int,
    primary key (id)
);


update users set name='xxxx', email='xxxx', address='xxxx', tel='xxxx'
WHERE id=2;

insert into food(name, price,pric_extra) values ('Tomyumkung','40','50');
insert into food(name, price,pric_extra) values ('Tomkrakai','30','40');
insert into food(name, price,pric_extra) values ('Kaijauwmuusub','25','30');
insert into food(name, price,pric_extra) values ('Kangpanang','30','45');

select * from food;