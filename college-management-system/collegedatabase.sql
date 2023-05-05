

CREATE TABLE department (
  dept_id INT PRIMARY KEY,
  dept_name VARCHAR(50) NOT NULL
);

CREATE TABLE instructor (
  instructor_id INT PRIMARY KEY,
  instructor_name VARCHAR(50) NOT NULL,
  department_id INT NOT NULL,
  CONSTRAINT fk_department_id FOREIGN KEY (department_id) REFERENCES department (dept_id)
);


CREATE TABLE head_instructor(
	seq_nbr INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dept_id INT NOT NULL UNIQUE,
	head_instructor_id INT NOT NULL UNIQUE,
    CONSTRAINT fk_depart_id  FOREIGN KEY ( dept_id ) REFERENCES  department (dept_id),
	CONSTRAINT fk_head_instructor_id FOREIGN KEY (head_instructor_id) REFERENCES instructor (instructor_id)
);

CREATE TABLE course (
  course_id INT PRIMARY KEY,
  course_name VARCHAR(50) NOT NULL,
  dept_id INT NOT NULL,
  instructor_id INT NOT NULL,
  CONSTRAINT fk_dept_id FOREIGN KEY (dept_id) REFERENCES department (dept_id),
  CONSTRAINT fk_instructor_id FOREIGN KEY (instructor_id) REFERENCES instructor (instructor_id)
);

CREATE TABLE student (
  student_id INT PRIMARY KEY,
  student_name VARCHAR(50) NOT NULL
);

CREATE TABLE enrollment (
  enrollment_id INT PRIMARY KEY,
  student_id INT NOT NULL,
  course_id INT NOT NULL,
  CONSTRAINT fk_student_id FOREIGN KEY (student_id) REFERENCES student (student_id),
  CONSTRAINT fk_course_id FOREIGN KEY (course_id) REFERENCES course (course_id)
);

show tables;


insert into department values(101,"CS");
insert into department values(201,"CYBER");
insert into department values(302,"MATHS");
insert into department values(501,"AI");

select * from department;

delete from department;

truncate department;
SET SQL_SAFE_UPDATES = 1;

insert into department values(101,"AI");
insert into department values(102,"CS");
insert into department values(103,"Data Science");
insert into department values(104,"Machine Learning");

select * from department;



insert into instructor values(51,"John",101);
insert into instructor values(52,"Mark",102);
insert into instructor values(53,"Joe",101);
insert into instructor values(54,"Tim",103);

select * from instructor;









insert into head_instructor values(1,101,51);
insert into head_instructor values(2,102,53);


select * from head_instructor;

insert into course values(1001,"DSA",102,52);
insert into course values(1002,"Statistics",103,54);
insert into course values(1003,"Software Engineering",102,52);

select * from course;


insert into student values(7001,"Dev");
insert into student values(7002,"Cassie");
insert into student values(7003,"Ali");
insert into student values(7004,"Selina");
insert into student values(7005,"Ariana");

select * from student;



insert into enrollment values(601,7001,1001);
insert into enrollment values(602,7002,1001);
insert into enrollment values(603,7001,1002);
insert into enrollment values(604,7003,1003);

select * from enrollment;
