create database amusementpark;
use amusementpark;
create table users (
	date            char(32)	 not null primary key,
	name            char(32)  	character set utf8,		
	enterchild      int(3),
	enteradult		int(3),
	BIG3child 	    int(3),
	BIG3adult		int(3),
	freechild       int(3),
	freeadult		int(3),
	yearchild 	    int(3),
	yearadult		int(3)
);
describe users;
