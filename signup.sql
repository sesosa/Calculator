DROP TABLE IF EXISTS userTb; 

CREATE TABLE userTb (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(30) NOT NULL,
  password varchar(240) NOT NULL,
  CONSTRAINT username PRIMARY KEY (id)
  );
  
DROP TABLE IF EXISTS teachingTb; 

CREATE TABLE teachingTb (
  id int(11) NOT NULL AUTO_INCREMENT,
  taskName varchar(100) NOT NULL,
  points float(5) NOT NULL,
  CONSTRAINT id PRIMARY KEY (id)
  );
 
DROP TABLE IF EXISTS researchTb; 

CREATE TABLE researchTb (
  id int(11) NOT NULL AUTO_INCREMENT,
  taskName varchar(100) NOT NULL,
  points float(5) NOT NULL,
  CONSTRAINT id PRIMARY KEY (id)
  );
  
DROP TABLE IF EXISTS serviceTb; 

CREATE TABLE serviceTb (
  id int(11) NOT NULL AUTO_INCREMENT,
  taskName varchar(100) NOT NULL,
  points float(5) NOT NULL,
  CONSTRAINT id PRIMARY KEY (id)
  );
  

INSERT INTO `sesosac1_Calculator`.`teachingTb` (`id`, `taskName`, `points`) VALUES (NULL, '3 credit hours of on-campus or online teaching class (30 students max)', '3'), (NULL, '1 credit hour of lab class (30 students max)', '3'), (NULL, 'Additional section of the same class (less than 5 students)', '1'), (NULL, 'Additional section of the same class (5 to 15 students)', '1.5'), (NULL, 'Additional section of the same class (more than 15 students)', '3'), (NULL, '3 credit hours of selected topics class', '3'), (NULL, 'Developing materials for a new course[1]', '1'), (NULL, 'Substantial revision of materials in an existing course[2]', '0.5'), (NULL, '3 credit hours of research class for an individual student[3]', '1'), (NULL, 'Mentoring a CSU student for a work project', '0.5');

INSERT INTO `sesosac1_Calculator`.`researchTb` (`id`, `taskName`, `points`) VALUES (NULL, 'Attendance of a workshop, conference, and training', '0.2'), (NULL, 'Publication of a peer-reviewed conference paper[1]', '3'), (NULL, 'Publication of a peer-reviewed Journal paper', '4'), (NULL, 'Publication of a peer-reviewed short paper or extended abstract [2]', '1.5'), (NULL, 'Publication of a presentation abstract', '0.5'), (NULL, 'Submission of a proposal for an internal funding at CSU', '1'), (NULL, 'Submission of a new research proposal to an external funding agency[3]', '3'), (NULL, 'Submission of a revised research proposal to an external funding agency [4]', '1'), (NULL, 'Submission of a “one-page” white paper/proposal to an external funding agency', '0.25'), (NULL, 'Working on a project funded by CSU', '0.5'), (NULL, 'Working on a project awarded by an external funding agency (less than $10,000)', '0.5'), (NULL, 'Working on a project awarded by an external funding agency ($10,000 - $25,000)', '1'), (NULL, 'Working on a project awarded by an external funding agency ($25,001 - $100,000)', '2'), (NULL, 'Working on a project awarded by an external funding agency (more than $100,000)', '3');

INSERT INTO `sesosac1_Calculator`.`serviceTb` (`id`, `taskName`, `points`) VALUES (NULL, 'Serving as a chair of university, college, or school committee', '1.5'), (NULL, 'Serving as a member of university, college, or school committee', '0.5'), (NULL, 'Working on an uncompensated, untitled administrative task[1]', '1'), (NULL, 'Working on a recruitment or an outreach activity', '0.5'), (NULL, 'Serving on a master thesis committee (excluding the thesis committee chair[2])', '0.25'), (NULL, 'Serving on or chairing an editorial board of a peer-reviewed journal', '0.5'), (NULL, 'Serving on or chairing a program committee of a peer-reviewed conference', '0.5'), (NULL, 'Serving on a proposal review panel for an external funding agency', '0.5'), (NULL, 'Writing a review for an article submitted to a peer-reviewed conference', '0.25'), (NULL, 'Writing a review for an article submitted to a peer-reviewed journal', '0.25'), (NULL, 'Academic advising of students in the school of computer science (40 students max)', '0.5'), (NULL, 'Additional academic advisees (more than 40 students)', '0.25'), (NULL, 'Supervising an internship of an undergraduate or graduate student', '0.25'), (NULL, 'Develop and submit a proposal for a new course', '0.25');





