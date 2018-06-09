CREATE TABLE MFI(user_id bigint(100) primary key auto_increment not null, user_name varchar(255), pass_word varchar(255), full_name varchar(255), email varchar(255), activated enum('Y','N') default'N' null, member_type enum('admin','user') default 'user' null);
SELECT * FROM MFI;
TRUNCATE TABLE MFI;
DROP TABLE MFI;

UPDATE MFI SET Activated = 'N' WHERE user_id > 0;

CREATE TABLE Scout(entry_id bigint(100) primary key auto_increment not null, match_nm char(3), team_nm char(4), alliance enum('R','B'), start_pos enum('L','C','R'), baseline enum('Y','N'), switch_auto char(2), scale_auto char(2), switch_personal char(2), switch_other char(2), scale char(2), ex_change char(2), end_game enum('C','P','N'), result enum('W','L'), comments varchar(500), user_id bigint(100));
SELECT * FROM Scout;
TRUNCATE TABLE Scout;
DROP TABLE Scout;

SHOW DATABASES;