# Order_of_service_system
Call order automation system
A system to automate the processes of receiving and closing services on the street. For example, some air-conditioning cleaning or detection service.

# How it works
It works in a simple way. Primarily there are two types of users, 1-administrators and 2-employees.
  1- Admin users are those who can create external service orders and pass them on to 2-employee users. Admin users also have access to
  all values, days, hours, and number of orders in an overview of calls, organizing the data in tables and graphs;
  2- Employee Users are those who receive service calls from users 1-administrators to run on the servers. Employee users also have an
  overview of their performance in terms of service orders, with these data being organized into specific tables and graphs for each
  employee.

# Downloading and Starting to use the system
  1- You must download or clone the repository;
  2- Open your phpMyAdmin and create a database called sistema_ordem_de_servico;
  3- Open the file on your localhost (it is a PHP system, that is, you need PHP and APACHE to work), and implement in the url of localhost '/install/createTables.php'. This will create all necessary tables and will put all information on the tables;
  4- Now, you just much put in Login and password the values "admin", and ready! You are in the system like a 1-admin;
  5- If you want test the type 2-Employee, you much put on in Login and Password the values "user", and ready! You are in the system like a 2-Employee.


Technology:
  1. HTML
  2. CSS
  3. PHP
  4. MYSQL
