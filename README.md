Sample Project for TalentNet.

Tech Stack:
<ul>
<li>Symfony 3.3.8</li>
<li>PHP 7.0.26-2+ubuntu16.04.1+deb.sury.org+2 (cli) (built: Dec  7 2017 20:09:40) ( NTS )</li>
<li>5.7.20-0ubuntu0.16.04.1</li>
<li>Free jqGrid</li>
</ul>


MySQL structure
~~~sql
mysql> USE TN;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> show tables
    -> ;
+--------------+
| Tables_in_TN |
+--------------+
| Category     |
| Products     |
| User         |
+--------------+
3 rows in set (0.00 sec)

mysql> DESCRIBE Category
    -> ;
+--------------+-----------------+------+-----+---------+----------------+
| Field        | Type            | Null | Key | Default | Extra          |
+--------------+-----------------+------+-----+---------+----------------+
| CategoryID   | int(6) unsigned | NO   | PRI | NULL    | auto_increment |
| CategoryName | varchar(50)     | YES  |     | NULL    |                |
| DateUpdated  | timestamp       | YES  |     | NULL    |                |
| DateCreated  | timestamp       | YES  |     | NULL    |                |
+--------------+-----------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)

mysql> DESCRIBE Products
    -> ;
+--------------+-----------------+------+-----+---------------------+-----------------------------+
| Field        | Type            | Null | Key | Default             | Extra                       |
+--------------+-----------------+------+-----+---------------------+-----------------------------+
| id           | int(6) unsigned | NO   | PRI | NULL                | auto_increment              |
| name         | varchar(30)     | YES  |     | NULL                |                             |
| categoryID   | int(6)          | YES  |     | NULL                |                             |
| SKU          | varchar(10)     | YES  |     | NULL                |                             |
| price        | decimal(15,2)   | YES  |     | NULL                |                             |
| quantity     | int(6)          | YES  |     | NULL                |                             |
| dateCreated  | timestamp       | NO   |     | CURRENT_TIMESTAMP   | on update CURRENT_TIMESTAMP |
| dateModified | timestamp       | NO   |     | 0000-00-00 00:00:00 |                             |
+--------------+-----------------+------+-----+---------------------+-----------------------------+
8 rows in set (0.00 sec)


mysql> DESCRIBE User
    -> ;
+-----------------------+-----------------+------+-----+---------+----------------+
| Field                 | Type            | Null | Key | Default | Extra          |
+-----------------------+-----------------+------+-----+---------+----------------+
| id                    | int(6) unsigned | NO   | PRI | NULL    | auto_increment |
| username              | varchar(30)     | NO   |     | NULL    |                |
| username_canonical    | varchar(30)     | NO   |     | NULL    |                |
| email                 | varchar(50)     | NO   |     | NULL    |                |
| email_canonical       | varchar(50)     | NO   |     | NULL    |                |
| enabled               | bit(1)          | NO   |     | NULL    |                |
| salt                  | varchar(200)    | YES  |     | NULL    |                |
| password              | varchar(200)    | NO   |     | NULL    |                |
| last_login            | timestamp       | YES  |     | NULL    |                |
| locked                | bit(1)          | YES  |     | NULL    |                |
| expired               | bit(1)          | YES  |     | NULL    |                |
| expires_at            | timestamp       | YES  |     | NULL    |                |
| confirmation_token    | varchar(200)    | YES  |     | NULL    |                |
| password_requested_at | timestamp       | YES  |     | NULL    |                |
| roles                 | varchar(200)    | YES  |     | NULL    |                |
| credentials_expired   | bit(1)          | YES  |     | NULL    |                |
| credentials_expire_at | datetime        | YES  |     | NULL    |                |
| DateCreated           | datetime        | YES  |     | NULL    |                |
| DateUpdated           | datetime        | YES  |     | NULL    |                |
+-----------------------+-----------------+------+-----+---------+----------------+
19 rows in set (0.00 sec)

mysql> SELECT * FROM Products;
+----+------------------------+------------+-------+---------+----------+---------------------+---------------------+
| id | name                   | categoryID | SKU   | price   | quantity | dateCreated         | dateModified        |
+----+------------------------+------------+-------+---------+----------+---------------------+---------------------+
|  1 | Pong                   |          1 | A0001 |   69.99 |       20 | 2018-07-03 09:08:42 | 2018-07-03 07:45:30 |
|  2 | GameStation 5          |          1 | A0002 |  269.99 |       15 | 2018-07-03 09:30:12 | 2018-07-03 09:30:12 |
|  3 | AP Oman PC - Aluminum  |          2 | A0003 | 1399.99 |       10 | 2018-07-03 09:09:30 | 2018-07-03 07:45:30 |
|  4 | Fony UHD HDR 55" 4k TV |          3 | A0004 | 1399.99 |        5 | 2018-07-03 09:09:37 | 2018-07-03 07:45:30 |
|  7 | sssssssssssssssssssss  |          1 | 1111  |   11.00 |       11 | 2018-07-03 09:55:02 | 2018-07-03 09:55:02 |
+----+------------------------+------------+-------+---------+----------+---------------------+---------------------+
5 rows in set (0.00 sec)

mysql> SELECT * FROM Category;
+------------+---------------------+---------------------+---------------------+
| CategoryID | CategoryName        | DateUpdated         | DateCreated         |
+------------+---------------------+---------------------+---------------------+
|          1 | Games               | 2018-07-03 09:07:45 | 2018-07-03 09:07:45 |
|          2 | Computers           | 2018-07-03 09:07:45 | 2018-07-03 09:07:45 |
|          3 | TVs and Accessories | 2018-07-03 09:07:45 | 2018-07-03 09:07:45 |
+------------+---------------------+---------------------+---------------------+
3 rows in set (0.00 sec)

mysql> SELECT * FROM User;
+----+----------+--------------------+---------------+-----------------+---------+------+--------------------------------------------------------------+---------------------+--------+---------+------------+---------------------------------------------+-----------------------+--------+---------------------+-----------------------+-------------+-------------+
| id | username | username_canonical | email         | email_canonical | enabled | salt | password                                                     | last_login          | locked | expired | expires_at | confirmation_token                          | password_requested_at | roles  | credentials_expired | credentials_expire_at | DateCreated | DateUpdated |
+----+----------+--------------------+---------------+-----------------+---------+------+--------------------------------------------------------------+---------------------+--------+---------+------------+---------------------------------------------+-----------------------+--------+---------------------+-----------------------+-------------+-------------+
|  1 | bobby    | bobby              | bobby@foo.com | bobby@foo.com   |        | NULL | XXX | 2018-07-03 08:14:59 | NULL   | NULL    | NULL        | AAA | NULL                  | a:0:{} | NULL                | NULL                  | NULL        | NULL        |
+----+----------+--------------------+---------------+-----------------+---------+------+--------------------------------------------------------------+---------------------+--------+---------+------------+---------------------------------------------+-----------------------+--------+---------------------+-----------------------+-------------+-------------+
1 row in set (0.00 sec)

~~~

Two open URLs accessible without authentication:

/CategoryLookup
and 
/Inventory/RegularInventoryLookup 

The rest of the URLs need authentication.

This is a fully working app at this point. With jqGrid the data is always live and shows the data in a nicer tabular form and at the same point utilizes the power of REST APIs.



