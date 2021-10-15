create table data_users(
    id int not null PRIMARY KEY AUTO_INCREMENT,
    name_user varchar(255),
    name_employe varchar(255),
    address_user varchar(255),
    contact_user int(11),
    feedback int(1),
    visit_date DATE
);

INSERT INTO data_users(name_user,name_employe,address_user,contact_user,feedback,visit_date)
VALUES('jose','mathues','retiro',1231324,1,20180710);

SELECT * FROM data_users where visit_date BETWEEN "2017-08-10"  AND "2022-01-10" 