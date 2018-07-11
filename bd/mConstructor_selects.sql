SELECT * FROM people;
SELECT * FROM users;
SELECT * FROM actors;
SELECT * FROM movies;
SELECT * FROM scenes;
SELECT * FROM shots;
SELECT * FROM characters;
SELECT * FROM staff;
SELECT * FROM staff_function;
SELECT * FROM scenes_staff;
SELECT * FROM scenes_actors;
SELECT * FROM objects;
SELECT * FROM objects_scenes;
SELECT * FROM scripts;
SELECT * FROM locations;
SELECT * FROM scenes_locations;
SELECT * FROM equipments;
SELECT * FROM day_for_filming;
SELECT * FROM scenes_equipments;

/*
SELECT * FROM people, users WHERE user_peo_id = peo_id AND user_password = 'admin' AND (peo_email = 'admin@gmail.co' OR user_name = 'admin');
SELECT * FROM people, users WHERE user_peo_id = peo_id;
SELECT * FROM movies WHERE mov_user_id = 1;
*/


SELECT * FROM staff, people WHERE sta_peo_id = peo_id;
SELECT * FROM equipments;

SELECT * FROM scenes, movies WHERE sce_mov_id = 1;

SELECT * FROM people ,actors WHERE act_peo_id = peo_id;

SELECT * FROM objects;

SELECT * FROM scenes;

SELECT * FROM scenes, actors, staff, objects, equipments WHERE sce_name = 'Beginning' || act_artistic_name = '' || obj_name = '' || equip_model = '';


SELECT distinct SUM(act_salary) FROM actors INNER JOIN scenes_actors on sa_act_id = act_id INNER JOIN scenes on sa_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = 1;

SELECT distinct SUM(sta_salary) FROM staff INNER JOIN scenes_staff on ss_sta_id = ss_id INNER JOIN scenes on ss_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = 1;

SELECT distinct *, (obj_price * obj_amount) as price FROM objects INNER JOIN objects_scenes on os_obj_id = obj_id INNER JOIN scenes on os_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = 1;

SELECT distinct *, (equip_price * equip_amount) as price FROM equipments INNER JOIN scenes_equipments on se_equip_id = equip_id INNER JOIN scenes on se_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = 1;


SELECT * FROM staff;

SELECT * FROM objects;

SELECT * FROM equipments;



