/* Inserts */

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
INSERT INTO scene_staff(ss_sce_id,ss_sta_id,ss_sf_id) VALUES(1,1,1);

-- Equipments
INSERT INTO equipments(equip_model,equip_amount,equip_price) VALUES('HELIUM 8K S35',4,54500);
INSERT INTO day_for_filming(dff_date,dff_description) VALUES('1915-04-12','');
INSERT INTO scenes_equipments(se_equip_id,se_dff_id) VALUES(1,1);

-- Locations
INSERT INTO locations(loc_name,loc_country) VALUES('New York','United States');
INSERT INTO scenes_locations(sl_sce_id,sl_loc_id) VALUES(1,1);

-- Objects
INSERT INTO objects(obj_name, obj_amount, obj_origin, obj_description) VALUES('obect one',4,'Lituania','Description');
INSERT INTO objects_scenes(os_obj_id,os_sce_id) VALUES(1,1);








/* --- User 1 --- */
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Francis Ford Coppola','1939-04-07','M','Detroit','francis@gmail.com');
INSERT INTO users(user_name,user_password,user_peo_id) VALUES('coppola','godfather','2');

-- Movies
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('The Godfather','The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',2);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('The Godfather: Part II','The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.',2);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('Apocalypse Now','During the Vietnam War, Captain Willard is sent on a dangerous mission into Cambodia to assassinate a renegade Colonel who has set himself up as a god among a local tribe.',2);
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('Dracula','Love never dies','The centuries old vampire Count Dracula comes to England to seduce his barrister Jonathan Harkers fiancée Mina Murray and inflict havoc in the foreign land.',2);

-- Scenes
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The marriage','1971-02-01',2);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Family man','1971-04-10',2);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Revenge','1971-08-02',2);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Controll','1971-12-26',2);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Glorious end','1972-02-13',2);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Michael return','1973-02-03',3);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('New Business','1973-05-12',3);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The mole','1973-09-24',3);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('I know','1973-09-27',3);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Bloody end','1974-01-04',3);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Vietnam','1975-02-14',4);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Call that man','1975-12-04',4);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Survive','1977-05-08',4);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('These is the end','1976-09-20',4);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('New king','1979-01-02',4);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Dracula is alive','1991-03-10',5);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The murder','1991-05-03',5);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Dracula twist','1991-06-09',5);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Just one more Dracula','1991-09-10',5);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Dracula is dead','1991-10-23',5);


/* --- User 2 --- */
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Christopher Nolan','1970-07-30','M','London','chrisN@gmail.com');
INSERT INTO users(user_name,user_password,user_peo_id) VALUES('BigNolan','littleNolan','3');

-- Movies
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('Memento','A man juggles searching for his wifes murderer and keeping his short-term memory loss from being an obstacle.',3);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('The Dark Knight','When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.',3);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('Inception','A thief, who steals corporate secrets through the use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a CEO.',3);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('Following','A film by Christopher Nolan','A young writer who follows strangers for material meets a thief who takes him under his wing.',3);

-- Scenes
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('End','2000-01-05',6);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Pre-end','2000-01-10',6);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Middle','2000-02-03',6);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Solution','2000-02-10',6);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Begin','2000-03-01',6);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The joke','2007-02-30',7);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The plan','2007-04-27',7);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The batman','2007-07-25',7);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The face','2007-09-20',7);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The end','2007-11-10',7);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('You come to kill me?','2009-05-01',8);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Ideia','2009-08-06',8);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Search a team','2009-09-18',8);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('No, you come to save me...','2009-10-01',8);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Good bad dream','2009-11-22',8);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The poet','1997-06-20',9);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('That man','1997-08-13',9);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Hello','1997-09-15',9);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Smash room','1998-02-01',9);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Remember','1998-02-23',9);


/* --- User 3 --- */
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Stanley Kubrick','1928-07-26','M','Manhattan','stan28@gmail.com');
INSERT INTO users(user_name,user_password,user_peo_id) VALUES('kubrick','moon1969','4');

-- Movies
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('2001: A Space Odyssey','Humanity finds a mysterious, obviously artificial object buried beneath the Lunar surface and, with the intelligent computer HAL 9000, sets off on a quest.',4);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('A Clockwork Orange','In the future, a sadistic gang leader is imprisoned and volunteers for a conduct-aversion experiment, but it does not go as planned.',4);
INSERT INTO movies(mov_title,mov_description,mov_user_id) VALUES('The Shining','A family heads to an isolated hotel for the winter where an evil spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from the past and of the future.',4);
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb','An insane general triggers a path to nuclear holocaust that a War Room full of politicians and generals frantically tries to stop.',4);

-- Scenes
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Daughter','1967-01-01',10);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Hall lives','1967-05-10',10);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Hall dies','1967-06-02',10);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Worm hole','1967-12-26',10);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Baby','1968-02-02',10);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('ultra','1970-01-12',11);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Everything super ultra','1970-03-12',11);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The worst','1970-04-24',11);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Bad comeback','1970-05-24',11);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Everything is the same','1970-09-14',11);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Ordinary man','1978-04-04',12);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Trying write','1978-06-11',12);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('That is not my home','1979-05-08',12);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Johnny','1979-09-01',12);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Crazy one','1979-10-04',12);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Boom','1963-03-16',13);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Spy','1963-04-30',13);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('what we do','1963-07-28',13);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Good by America','1963-10-11',13);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Inevitable','1963-10-13',13);


/* --- User 4 --- */
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Alfred Hitchcock','1899-04-13','M','London','hitch@gmail.com');
INSERT INTO users(user_name,user_password,user_peo_id) VALUES('Hitchcock','motelRoom9','5');

-- Movies
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('Psycho','A new and altogether different screen excitement!!!','A Phoenix secretary embezzles $40,000 from her employers client, goes on the run, and checks into a remote motel run by a young man under the domination of his mother.',5);
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('Vertigo','Alfred Hitchcocks masterpiece','A San Francisco detective suffering from acrophobia investigates the strange activities of an old friends wife, all the while becoming dangerously obsessed with her.',5);
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('North by Northwest','Much suspense in so many directions','A hapless New York advertising executive is mistaken for a government agent by a group of foreign spies, and is pursued across the country while he looks for a way to survive.',5);
INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('The Birds','It could be the most terrifying motion picture I have ever made!','A wealthy San Francisco socialite pursues a potential boyfriend to a small Northern California town that slowly takes a turn for the bizarre when birds of all kinds suddenly begin to attack people.',5);

-- Scenes
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Steal 40k','1958-12-01',14);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Good motel','1958-12-20',14);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Good Guy','1959-02-14',14);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Whats happening!?','1959-06-26',14);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Fly','1959-07-03',14);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('These woman','1957-02-25',15);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Let me','1957-04-10',15);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('I never forget...','1957-06-12',15);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('I do not need remember','1957-06-20',15);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Happy strange ending!','1957-07-10',15);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('I Search for something','1958-01-01',16);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Something search me','1958-01-06',16);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('I never remember','1958-02-18',16);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('The airplane','1958-02-22',16);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Unexpected comeback','1959-01-10',16);

INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Good day','1962-04-23',17);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Strange afternoon','1962-06-22',17);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Many birds','1962-06-24',17);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Last attack','1962-08-02',17);
INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('Ordinary Ending','1962-09-01',17);








/* --- Actores --- */
-- Actors 1
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('George Orson Welles','1915-05-06','M','American','kane@gmail.com');
INSERT INTO actors(act_artistic_name,act_salary,act_peo_id) VALUES('Orson Welles',1000,2);
INSERT INTO scenes_actors(sa_take_num,sa_sce_id,sa_act_id) VALUES(1,1,2);


/* --- Shots --- */
-- Shots 1
INSERT INTO shots(shot_shot_number,shot_begin,shot_end,shot_describe,shot_sce_id) VALUES(1,'12:10:00','12:40:00','Kane death',1);


/* --- Scripts --- */
-- Scripts 1
INSERT INTO scripts(scr_title,scr_title,src_sub_title,src_sce_id) VALUES('Maid see kane dead','Kane dead!',1);
INSERT INTO scripts_actors(sa_scr_id,sa_act_id) VALUES(1,1);


/* --- Staff --- */
-- Staff 1
INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('Peter','1920-03-07','M','American','peter@gmail.com');
INSERT INTO staff(sta_salary,sta_peo_id) VALUES(200,3);
INSERT INTO staff_function(sf_function,sf_description) VALUES('spotlight man','Position the spotlight');
INSERT INTO scenes_staff(ss_sce_id,ss_sta_id,ss_sf_id) VALUES(1,1,1);


/* --- Equipments --- */
-- Equipments 1
INSERT INTO equipments(equip_model,equip_amount,equip_price) VALUES('HELIUM 8K S35',4,54500);
INSERT INTO day_for_filming(dff_date,dff_description) VALUES('1915-04-12','');
INSERT INTO scenes_equipments(se_equip_id,se_dff_id,se_sce_id) VALUES(1,1,1);


/* --- Locations ---*/
-- Locations 1
INSERT INTO locations(loc_name,loc_country) VALUES('New York','United States');
INSERT INTO scenes_locations(sl_sce_id,sl_loc_id) VALUES(1,1);


/* --- Objects --- */
-- Objects 1
INSERT INTO objects(obj_name, obj_price, obj_amount, obj_origin, obj_description) VALUES('obect one',350,4,'Lituania','Description');
INSERT INTO objects_scenes(os_obj_id,os_sce_id) VALUES(1,1);



