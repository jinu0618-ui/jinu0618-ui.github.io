
create database amusment park;
use amusment park;
create table scores (
	date char(32)	 not null primary key,
	name char(32)  	character set utf8,		
	enter child      int(3),
	enter adult		int(3),
	BIG3 child 	    int(3),
	BIG3 adult		int(3),
	free child      int(3),
	free adult		int(3),
	yearchild 	    int(3),
	yearadult		int(3),
);
describe scores;
