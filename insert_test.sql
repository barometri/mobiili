
--Maat ja tiimit

------------------------------------------------------------------

INSERT INTO TEAM
VALUES ('O0001', '0001', 'Softech');

INSERT INTO COUNTRY
VALUES ('T0001', 'England');

------------------------------------------------------------------

INSERT INTO TEAM
VALUES ('O0002', '0002', 'Intel');

INSERT INTO COUNTRY
VALUES ('T0002', 'United States(US)');


------------------------------------------------------------------

INSERT INTO TEAM
VALUES ('O0003', '0003', 'Medion');

INSERT INTO COUNTRY
VALUES ('T0003', 'Germany');

------------------------------------------------------------------

INSERT INTO TEAM
VALUES ('O0004', '0004', 'Hightech');

INSERT INTO COUNTRY
VALUES ('T0004', 'China');

------------------------------------------------------------------

INSERT INTO TEAM
VALUES ('O0005', '0005', 'Rovio');

INSERT INTO COUNTRY
VALUES ('T0005', 'Finland');

------------------------------------------------------------------

Henkilökunta

-------------------------------------------------------------------

INSERT INTO Person_Team
VALUES ('90001', '10001', '00001', 'Manager');

INSERT INTO Person
VALUES ('10001', '50001', 'John', 'Smith', '2015-02-01', 
'john.smith@gmail.com', '0555235013', 'asdasdasd12');

INSERT INTO Person_Level
VALUES ('10001', 'Master');


------------------------------------------------------------------

INSERT INTO Person_Team
VALUES ('90002', '10002', '00002', 'Project Manager');

INSERT INTO Person
VALUES ('10002', '50002', 'Spencer', 'Sander', '2015-03-06', 
'spencer.sander@gmail.com', '05543589013', 'asdasdasd13');

INSERT INTO Person_Level
VALUES ('50002', 'Master');


------------------------------------------------------------------

INSERT INTO Person_Team
VALUES ('90003', '10003', '00003', 'Web developer');

INSERT INTO Person
VALUES ('10003', '50003', 'Kathy', 'Braum', '2015-02-10', 
'kathy.braum@gmail.com', '0577788713', 'asdasdasd14');

INSERT INTO Person_Level
VALUES ('50003', 'Master');

------------------------------------------------------------------

INSERT INTO Person_Team
VALUES ('90004', '10004', '00004', 'Graphic designer');

INSERT INTO Person
VALUES ('10004', '50004', 'Heidi', 'Wilkinson', '2015-01-03', 
'heidi.wilkinson@gmail.com', '0999235013', 'asdasdasd15');

INSERT INTO Person_Level
VALUES ('50004', 'Master');


------------------------------------------------------------------

INSERT INTO Person_Team
VALUES ('90005', '10005', '00005', 'Manager');

INSERT INTO Person
VALUES ('10005', '50005', 'Juha', 'Rantanen', '2015-02-02', 
'juha.rantanen@gmail.com', '04491235013', 'asdasdasd16');

INSERT INTO Person_Level
VALUES ('50005', 'Master');


------------------------------------------------------------------



--Kysymykset

------------------------------------------------------------------

INSERT INTO Sent_Questionnaire
VALUES ('P0001', '10001', 'QI0001', 'yes' );

INSERT INTO Questionnaire
VALUES ('QI0001', '10001', '2015-03-03', 'no');

INSERT INTO Questionnaire_Question
VALUES ('QQ001','QU101', 'QI0001', '2015-05-05', 'no');

INSERT INTO Question
VALUES ('QU101','QC001', 'QT111', 'content');

INSERT INTO Question_Type
VALUES ('QT111', 'Question');

INSERT INTO Question_Category
VALUES ('QC001', 'category name');


------------------------------------------------------------------

INSERT INTO Sent_Questionnaire
VALUES ('P0002', '10002', 'QI0002', 'no' );

INSERT INTO Questionnaire
VALUES ('QI0002', '10002', '2015-03-03', 'no');

INSERT INTO Questionnaire_Question
VALUES ('QQ002','QU102', 'QI0002', '2015-06-05', 'no');

INSERT INTO Question
VALUES ('QU102','QC002', 'QT112', 'content');

INSERT INTO Question_Type
VALUES ('QT112', 'Question');

INSERT INTO Question_Category
VALUES ('QC002', 'category name');

------------------------------------------------------------------

INSERT INTO Sent_Questionnaire
VALUES ('P0003', '10003', 'QI0003', 'yes' );

INSERT INTO Questionnaire
VALUES ('QI0003', '10003', '2015-04-03', 'no');

INSERT INTO Questionnaire_Question
VALUES ('QQ003','QU103', 'QI0003', '2015-03-05', 'no');

INSERT INTO Question
VALUES ('QU103','QC003', 'QT113', 'content');

INSERT INTO Question_Type
VALUES ('QT113', 'Question');

INSERT INTO Question_Category
VALUES ('QC003', 'category name');

------------------------------------------------------------------

INSERT INTO Sent_Questionnaire
VALUES ('P0004', '10004', 'QI0004', 'yes' );

INSERT INTO Questionnaire
VALUES ('QI0004', '10004', '2015-05-05', 'no');

INSERT INTO Questionnaire_Question
VALUES ('QQ004','QU104', 'QI0004', '2015-05-05', 'no');

INSERT INTO Question
VALUES ('QU104','QC004', 'QT114', 'content');

INSERT INTO Question_Type
VALUES ('QT114', 'Question');

INSERT INTO Question_Category
VALUES ('QC004', 'category name');

------------------------------------------------------------------

INSERT INTO Sent_Questionnaire
VALUES ('P0005', '10005', 'QI0005', 'no');

INSERT INTO Questionnaire
VALUES ('QI0005', '10005', '2015-03-03', 'no');

INSERT INTO Questionnaire_Question
VALUES ('QQ005','QU105', 'QI0005', '2015-04-07', 'no');

INSERT INTO Question
VALUES ('QU105','QC005', 'QT115', 'content');

INSERT INTO Question_Type
VALUES ('QT115', 'Question');

INSERT INTO Question_Category
VALUES ('QC005', 'category name');

-----------------------------------------------------------------


Kysymysten vastaukset ja kategoriat
------------------------------------------------------------------

INSERT INTO Category
VALUES ('QC001', 'Category name1');

INSERT INTO Person_Answer
VALUES ('UQ401', 'QU101', 'content');

------------------------------------------------------------------

INSERT INTO Category
VALUES ('QC002', 'Category name2');

INSERT INTO Person_Answer
VALUES ('UQ402', 'QU102', 'content2');


------------------------------------------------------------------


INSERT INTO Category
VALUES ('QC003', 'Category name3');

INSERT INTO Person_Answer
VALUES ('UQ403', 'QU103', 'content3');
-------------------------------------------------------------------

INSERT INTO Category
VALUES ('QC004', 'Category name4');

INSERT INTO Person_Answer
VALUES ('UQ404', 'QU104', 'content4');

-----------------------------------------------------------------------------

INSERT INTO Category
VALUES ('QC005', 'Category name5');

INSERT INTO Person_Answer
VALUES ('UQ405', 'QU105', 'content');

-----------------------------------------------------------------------------