
use mahindra;

/* 
LOAD DATA LOCAL INFILE '/var/www/html/uploads/student.csv'
INTO TABLE student
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(id,name); */


LOAD DATA LOCAL INFILE  
'/var/www/html/uploads/STF.csv'
INTO TABLE stf
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(id,StateUT,District,date_c,MaxTemp,MinTemp,RainFall,MeanRh,MeanTemp,p,month_c,date_d)