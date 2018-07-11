DROP DATABASE mconstructor;

CREATE DATABASE mconstructor;

use mconstructor;

CREATE TABLE people (
	peo_id int AUTO_INCREMENT NOT NULL,
    peo_name varchar(60) NOT NULL,
    peo_birth_day DATE,
    peo_gender ENUM('M','F'),
    peo_origin varchar(40),
    peo_email varchar(40) NOT NULL,
    
    PRIMARY KEY(peo_id)
);

CREATE TABLE users (
	user_id int AUTO_INCREMENT NOT NULL,
    user_name varchar(40),
    user_password varchar(40) NOT NULL,
    
    -- foreign key
	user_peo_id int NOT NULL,
    
    PRIMARY KEY(user_id)
); /* Faz ligação com a tabela "people" */

CREATE TABLE actors (
	act_id int AUTO_INCREMENT NOT NULL,
    act_artistic_name varchar(60),
    act_salary decimal(65,2),
    
    -- foreign key
    act_peo_id int NOT NULL,
    
    PRIMARY KEY(act_id)
); /* Faz ligação com a tabela "people" */

CREATE TABLE movies (
	mov_id int AUTO_INCREMENT NOT NULL,
    mov_title varchar(40) NOT NULL,
    mov_sub_title varchar(60),
    mov_description TEXT,
    
    mov_user_id int NOT NULL,
    
    PRIMARY KEY(mov_id)
); /* Faz ligação com a tabela "users" */

CREATE TABLE scenes (
	sce_id int AUTO_INCREMENT NOT NULL,
    sce_name varchar(40) NOT NULL,
    sce_date date,
    sce_description TEXT,
    
    -- foreign key
    sce_mov_id int NOT NULL,
    
    PRIMARY KEY(sce_id)
); /* Faz ligação com a tabela "movies" */

CREATE TABLE shots /* planos */ (
	shot_id int AUTO_INCREMENT NOT NULL,
    shot_shot_number int,
    shot_begin time,
    shot_end time,
    shot_describe TEXT,
    
    -- foreign key
    shot_sce_id int NOT NULL,
    
    PRIMARY KEY(shot_id)
);	/* Faz ligação com a tabela "scenes" */

CREATE TABLE characters (
	cha_id int AUTO_INCREMENT NOT NULL,
    cha_character_name int NOT NULL,
	cha_type ENUM('main','secondary','extras') NOT NULL,
    cha_character_description TEXT,
    
    -- foreign key
    cha_act_id int NOT NULL,
    cha_mov_id int NOT NULL,
    
    PRIMARY KEY(cha_id)
); /* Faz ligação com a tabela "actors" e com a tabela "movies" */

CREATE TABLE staff (
	sta_id int AUTO_INCREMENT NOT NULL,
    sta_salary decimal(65,2),
    
    -- foreign key
    sta_peo_id int NOT NULL,
    
    PRIMARY KEY(sta_id)
); /* Faz ligação com a tabela "people" */

CREATE TABLE staff_function(
	sf_id int AUTO_INCREMENT NOT NULL,
    sf_function varchar(80),
    sf_description TEXT,
    
    PRIMARY KEY(sf_id)
);

CREATE TABLE scenes_staff(
	ss_id int AUTO_INCREMENT NOT NULL,
    
    -- foreign key
	ss_sce_id int NOT NULL,
    ss_sta_id int NOT NULL,
    ss_sf_id int NOT NULL,
    
    PRIMARY KEY(ss_id)
); /* Faz ligação com as tabelas "scenes", "staff" e "staff_function" */

CREATE TABLE scenes_actors (
	sa_id int AUTO_INCREMENT NOT NULL,
    sa_take_num int,
    sa_description TEXT,
    
    -- foreign keys
    sa_sce_id int NOT NULL,
    sa_act_id int NOT NULL,
    
    PRIMARY KEY(sa_id)
); /* Faz ligação com a tabela "scenes" e a tabela "actors" */

CREATE TABLE objects (
	obj_id int AUTO_INCREMENT NOT NULL,
    obj_name varchar(40),
    obj_price decimal(65,2),
    obj_amount int,
    obj_origin varchar(40),
    obj_description TEXT,
    
    PRIMARY KEY(obj_id)
); /* Faz ligação com a tabela "actor_scene" */

CREATE TABLE objects_scenes (
	os_id int AUTO_INCREMENT NOT NULL,
	
    -- foreign key
    os_obj_id int NOT NULL,
    os_sce_id int NOT NULL,
    
    PRIMARY KEY(os_id)
);

CREATE TABLE scripts (
	scr_id int AUTO_INCREMENT NOT NULL,
    scr_title varchar(40),
    scr_sub_title varchar(60),
    scr_annotation TEXT,
    
    -- foreign key
    src_sce_id int NOT NULL,
    
    PRIMARY KEY(scr_id)
); /* Faz ligação com a tabela "scenes" */

CREATE TABLE scripts_actors (
	sa_id int AUTO_INCREMENT NOT NULL,
    
    -- foreign key
    sa_scr_id int NOT NULL,
    sa_act_id int NOT NULL,
    
    PRIMARY KEY(sa_id)
); /* Faz ligação com a tabela "script" e com a tabela "actors" */

CREATE TABLE locations (
	loc_id int AUTO_INCREMENT NOT NULL,
    loc_name varchar(60) NOT NULL,
    loc_country varchar(75),
    
    PRIMARY KEY(loc_id)
);

CREATE TABLE scenes_locations (
	sl_id int AUTO_INCREMENT NOT NULL,
    
    -- foreign key
    sl_sce_id int NOT NULL,
    sl_loc_id int NOT NULL,
    
    PRIMARY KEY(sl_id)
); /* Faz ligação com a tabela "scenes" e com a tabela "locations" */

CREATE TABLE equipments (
	equip_id int AUTO_INCREMENT NOT NULL,
    equip_model varchar(60),
    equip_amount int,
    equip_price decimal(65,2),
    
    PRIMARY KEY(equip_id)
);

CREATE TABLE day_for_filming (
	dff_id int AUTO_INCREMENT NOT NULL,
    dff_date datetime,
    dff_description TEXT,
    
    PRIMARY KEY(dff_id)
);

CREATE TABLE scenes_equipments (
	se_id int AUTO_INCREMENT NOT NULL,
    
    -- foreign key
    se_equip_id int NOT NULL,
    se_dff_id int NOT NULL,
    se_sce_id int NOT NULL,
    
    PRIMARY KEY(se_id)
); /* Faz ligação com a tabela "equipments" e com a tabela "day_for_filming" */




/* Foreign Keys */

ALTER TABLE users ADD CONSTRAINT users_fk_peo
FOREIGN KEY (user_peo_id) REFERENCES people (peo_id);

ALTER TABLE actors ADD CONSTRAINT actors_fk_peo
FOREIGN KEY (act_peo_id) REFERENCES people (peo_id);

ALTER TABLE movies ADD CONSTRAINT movies_fk_user
FOREIGN KEY (mov_user_id) REFERENCES users (user_id);

ALTER TABLE scenes ADD CONSTRAINT scenes_fk_mov
FOREIGN KEY (sce_mov_id) REFERENCES movies (mov_id);

ALTER TABLE shots ADD CONSTRAINT shots_fk_sce
FOREIGN KEY (shot_sce_id) REFERENCES scenes (sce_id);

ALTER TABLE characters ADD CONSTRAINT characters_fk_act
FOREIGN KEY (cha_act_id) REFERENCES actors (act_id);

ALTER TABLE characters ADD CONSTRAINT characters_fk_mov
FOREIGN KEY (cha_mov_id) REFERENCES movies (mov_id);

ALTER TABLE staff ADD CONSTRAINT staff_fk_peo
FOREIGN KEY (sta_peo_id) REFERENCES people (peo_id);

ALTER TABLE scenes_staff ADD CONSTRAINT staff_fk_sce
FOREIGN KEY (ss_sce_id) REFERENCES scenes (sce_id);

ALTER TABLE scenes_staff ADD CONSTRAINT staff_fk_sta
FOREIGN KEY (ss_sta_id) REFERENCES staff (sta_id);

ALTER TABLE scenes_staff ADD CONSTRAINT staff_fk_sf
FOREIGN KEY (ss_sf_id) REFERENCES staff_function (sf_id);

ALTER TABLE scenes_actors ADD CONSTRAINT scenes_actors_fk_sce
FOREIGN KEY (sa_sce_id) REFERENCES scenes (sce_id);

ALTER TABLE scenes_actors ADD CONSTRAINT scenes_actors_fk_act
FOREIGN KEY (sa_act_id) REFERENCES actors (act_id);

ALTER TABLE objects_scenes ADD CONSTRAINT objects_scenes_fk_scenes
FOREIGN KEY (os_sce_id) REFERENCES scenes(sce_id);

ALTER TABLE objects_scenes ADD CONSTRAINT objects_scenes_fk_objects
FOREIGN KEY (os_obj_id) REFERENCES objects(obj_id);

ALTER TABLE scripts ADD CONSTRAINT scripts_fk_sce
FOREIGN KEY (src_sce_id) REFERENCES scenes (sce_id);

ALTER TABLE scenes_locations ADD CONSTRAINT scenes_locations_fk_scr
FOREIGN KEY (sl_sce_id) REFERENCES scripts (scr_id);

ALTER TABLE scripts_actors ADD CONSTRAINT script_actors_fk_act
FOREIGN KEY (sa_act_id) REFERENCES actors (act_id);

ALTER TABLE scenes_equipments ADD CONSTRAINT scenes_equip_fk_equip
FOREIGN KEY (se_equip_id) REFERENCES equipaments (equip_id);

ALTER TABLE scenes_equipments ADD CONSTRAINT scenes_equip_fk_dff
FOREIGN KEY (se_dff_id) REFERENCES day_for_filming (dff_id);

ALTER TABLE scenes_equipments ADD CONSTRAINT scenes_equip_fk_sce
FOREIGN KEY (se_sce_id) REFERENCES scenes (sce_id);




/* First insert */
-- Users
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('admin','1986-09-05','M','Portugal','admin@gmail.com');
INSERT INTO users(user_name,user_password,user_peo_id) VALUES('admin','admin','1');

-- Movies
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('Citizen Kane','Its terrific','Following the death of a publishing tycoon, news reporters scramble to discover the meaning of his final utterance.',1);

-- Scenes
INSERT INTO scenes(sce_name,sce_date,sce_description,sce_mov_id) VALUES('Beginning','1940-09-01','Completely directed by Orson Welles',1);

-- Shots
INSERT INTO shots(shot_shot_number,shot_begin,shot_end,shot_describe,shot_sce_id) VALUES(1,'12:10:00','12:40:00','Kane death',1);

-- Actors
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('George Orson Welles','1915-05-06','M','American','kane@gmail.com');
INSERT INTO actors(act_artistic_name,act_salary,act_peo_id) VALUES('Orson Welles',1000,2);
INSERT INTO scenes_actors(sa_take_num,sa_sce_id,sa_act_id) VALUES(1,1,2);

-- Staff
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Peter','1920-03-07','M','American','peter@gmail.com');
INSERT INTO staff(sta_salary,sta_peo_id) VALUES(200,3);
INSERT INTO staff_function(sf_function,sf_description) VALUES('spotlight man','Position the spotlight');
INSERT INTO scenes_staff(ss_sce_id,ss_sta_id,ss_sf_id) VALUES(1,1,1);

-- Equipments
INSERT INTO equipments(equip_model,equip_amount,equip_price) VALUES('HELIUM 8K S35',4,54500);
INSERT INTO day_for_filming(dff_date,dff_description) VALUES('1915-04-12','');
INSERT INTO scenes_equipments(se_equip_id,se_dff_id,se_sce_id) VALUES(1,1,1);

-- Locations
INSERT INTO locations(loc_name,loc_country) VALUES('New York','United States');
INSERT INTO scenes_locations(sl_sce_id,sl_loc_id) VALUES(1,1);

-- Objects
INSERT INTO objects(obj_name, obj_price, obj_amount, obj_origin, obj_description) VALUES('obect one',350,4,'Lituania','Description');
INSERT INTO objects_scenes(os_obj_id,os_sce_id) VALUES(1,1);