create table introduction
(
  id int unsigned primary key not null auto_increment,
  title varchar(200) not null,
  content text not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);

create table menu
(
  id int unsigned primary key not null auto_increment,
  title varchar(200) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp 
);
create table promotion
(
  id int unsigned primary key not null auto_increment,
  name varchar(200) not null,
  day varchar(255) not null,
  content varchar(255) not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table promotion_detail
(
  id int unsigned primary key not null auto_increment,
  promotion_id int unsigned,
  name varchar(200) not null,
  day varchar(255) not null,
  img varchar(255) null,
  content text not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table articles
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);

create table articles_detail
(
  id int unsigned primary key not null auto_increment,
  articles_id int unsigned,
  name varchar(255) not null,
  day  varchar(255) null,
  content text null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table news
(
  id int unsigned primary key not null auto_increment,
  img varchar(255) null,
  title varchar(255) not null,
  day varchar(255) null,
  content varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table news_detail
(
   id int unsigned primary key not null auto_increment,
   news_id int unsigned,
   img varchar(255) null,
   name varchar(255) not null,
   day varchar(255) null,
   content text null,
   created_at timestamp null default current_timestamp,
   updated_at timestamp null default current_timestamp
);
create table images_cs1
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_cs2
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_cs3
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_cs4
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_cs5
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_food
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table images_customer
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  img varchar(255) null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table contact
(
  id int unsigned primary key not null auto_increment,
  address varchar(255) not null,
  hostline varchar(200) not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);

create table policy_and_regulation
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  content text null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);

create table address
(
  id int unsigned primary key not null auto_increment,
  name varchar(255) not null,
  address varchar(255) not null,
  phone varchar(255) not null,
  business_registration_certificate_number varchar(200) not null,
  register varchar(200) not null,
  email varchar(255) not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp
);
create table users
(
  id int unsigned primary key not null auto_increment,
  name varchar(200) not null,
  email varchar(255) not null,
  password varchar(50) not null,
  created_at timestamp null default current_timestamp,
  updated_at timestamp null default current_timestamp 
)