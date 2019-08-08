create table wine(
	id int not null primary key,
	country varchar(50),
	description varchar(150),
	designation varchar(30),
	points int,
	price int,
	province varchar(30),
	region_1 varchar(30),
	region_2 varchar(30),
	variety varchar(50),
	winery varchar(30)
);

LOAD DATA LOCAL INFILE "C:\\Users\\priya_000\\Documents\\winery\\data.csv" INTO TABLE WINE
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(id,country,description,designation,points,price,province,region_1,region_2,variety,winery);