create table user(
	id 				int not null auto_increment,
	first_name		varchar(50) not null,
	last_name 		varchar(50) not null,
	email			varchar(50) not null,
	phone_num		varchar(20), -- Since phone is a primary commuication in Zim
	whatsup_num		varchar(50), -- whatsup is becoming popular, so people may use it to communicate
	password		varchar(20) not null,
	date_joined		date not null,
	primary key(id)
);
-- The images of all products and profiles of dande
create table image(
    id        		int not null auto_increment,
	name    		varchar(50) not null, 
    image_type      varchar(25) not null, -- for displaying purposes
    img_file        blob        not null,
    img_size      	int		  	not null, -- for displaying purposes
    primary key(id)
);	
create table product_category(
    id        		int not null auto_increment,
	name			varchar(50) not null,
	description 	varchar(1055),
	primary key(id)
);
-- this is for the region where the product is at. 
-- preferably use of a provinces.
-- a more specific location might be needed later.
create table region (
	id        		int not null auto_increment,
	name 			varchar(50) not null,
	description		varchar(1055), -- some people dont kow the province eg Harare is it a province or not
	examples		varchar(1055), -- provide well known cities in that province. comma separated values
	primary key(id)
);
create table product_condition (
	id        		int not null auto_increment,
	name			varchar(50) not null,
	description		varchar(1055),
	primary key(id)
);
create table product (
	id 				int not null auto_increment,
	category_id		int not null,
	name	 		varchar(255) not null,
	primary key(id),
	foreign key (category_id) references product_category(id)
);
create table product_listing (
	id        		int not null auto_increment,
	owner_id		int not null,
	product_id		int not null,
	region_id		int not null,
	condition_id	int not null,
	image_id		int,
	price 			decimal(10, 2),
	date_listed		date not null,
	views			int default 0, -- the number of views so that the owner can see if the product is been viewed
	likes			int default 0, -- who liked it.
	dislikes		int default 0, -- still thinking about this
	description		varchar(1055),
	primary key(id),
	foreign key (owner_id) 		references user(id),
	foreign key (product_id)		references product(id),
	foreign key (region_id)		references region(id),
	foreign key (condition_id)	references product_condition(id),
	foreign key (image_id) 		references image(id)
);
create table purchase (
	id        		int not null auto_increment,
	product_id		int not null,
	image_id		int,
	purchased_date	date not null,
	rating			int,
	comments		varchar(1055),	
	primary key(id),
	foreign key (product_id)	references product(id),
	foreign key (image_id)		references image(id)
);
create table user_history (
	id        			int not null auto_increment,
	user_id				int not null,
	rating				int,
	products_sold		int not null default 0,
	products_flagged	int not null default 0, -- bad products which were found in appropriate.
	primary key(id),
	foreign key (user_id) 			references user(id)
);
create table product_demand (
	id        			int not null auto_increment,
	user_id				int not null,
	rating				int,
	demand_date			date not null,
	wanted_before		date,
	description			varchar(1055),	
	primary key(id),
	foreign key (user_id) 			references user(id)
);
-- if someone wants to trade products
create table trade (
	id        			int not null auto_increment,
	product_id			int not null,
	trade_with_id		int not null,	
	description			varchar(1055),
	primary key(id),
	foreign key (product_id	)		references product(id),
	foreign key (trade_with_id)		references product(id)
);
create table follow (
	id        			int not null auto_increment,
	user_id				int not null,
	follow_id			int not null,
	notify_after_every	int not null,
	description			varchar(1055),
	primary key(id),
	foreign key (user_id) 			references user(id),
	foreign key (follow_id) 			references user(id)
);
-- a table for inappropriate products. 
create table flagged_products (
	id        			int not null auto_increment,
	product_id			int not null,
	reason				varchar(1055),
	related_examples	varchar(1055), -- CSV
	comments			varchar(1055),
	primary key(id),
	foreign key (product_id) 			references product(id)
);

 
 
 
 
 
 
 
 