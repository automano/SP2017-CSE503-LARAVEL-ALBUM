/* create database */
CREATE DATABASE CREATIVE_PROJECT;

/* create new user to manipulate this database */
CREATE user 'cse330'@'localhost' identified BY 'wustl123';

/* grant privileges to a certain user so that they can only manipulate data in a certain database */
GRANT SELECT,INSERT,UPDATE,DELETE on creativeproject.* to cse330@'localhost';