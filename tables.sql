create table category_info
(
	category_id int auto_increment
		primary key,
	category_name text not null,
	institution text not null,
	description text not null
)
;

create table file_info
(
	file_id int auto_increment
		primary key,
	note_id int not null,
	name text not null,
	file_link text not null,
	time timestamp default CURRENT_TIMESTAMP null
)
;

create table note_info
(
	note_id int auto_increment
		primary key,
	title text not null,
	description text not null,
	topic int not null
)
;

create table topic_info
(
	tid int auto_increment
		primary key,
	topic_name text not null,
	institution text not null,
	description text not null,
	category int not null
)
;

create table user_info
(
	uid int auto_increment
		primary key,
	name text not null,
	email text not null,
	phone text not null,
	institution text not null,
	place text not null,
	password text not null
)
;

