drop table req_msg;
drop table signup;
drop table contact_us;
drop table contact_patient;
drop table patient;
drop table blood;
drop table blood_donor;
drop table admin;

create table admin(admin_name varchar(20),password varchar(20),phone_no varchar(20) primary key);

create table blood_donor(donor_name varchar(20),donor_dob date,address text,sex varchar(10),age varchar(20),phone_no varchar(20) primary key,date_of_donation date,blood_group varchar(10) constraint sex_m_f check(sex in('male','female','other')));

create table blood(blood_id varchar(20) primary key,blood_amount varchar(20),b_type varchar(10) constraint b_type_ch check(b_type in('A+','A-','B+','B-','O+','O-','AB+','AB-')));

create table patient(p_age varchar(20),p_name varchar(20),bld_type varchar(10),p_sex varchar(10),p_address text,constraint bld_type_ch check(bld_type in('A+','A-','B+','B-','O+','O-','AB+','AB-')),constraint sex_m_f_chk check(p_sex in('male','female','other')));

create table contact_patient(cp_name varchar(30),cp_phone varchar(20) primary key,when_required varchar(50),cp_email varchar(20),cp_message text);

create table contact_us(cu_name varchar(30),cu_phone varchar(20)  primary key,cu_email varchar(30),cu_city varchar(20),cu_message varchar(50));

create table signup(s_username varchar(30) primary key,s_pass varchar(30),s_email varchar(30));

create table req_msg(message_id int primary key,blood_group_req varchar(10),req_msg_1 varchar(50));




/*insert into blood_donor values('as','2019/5/5','as','male','23','1234567890','2019/6/6','A+');*/
insert into admin values('Dheeraj','123','9822765174');
insert into contact_us values('Dheeraj','9822651745','ddangi66@gmail.com','pune','hiiii');



