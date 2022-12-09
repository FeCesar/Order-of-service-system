# Order Of Service System
Call order automation system
A system to automate the processes of receiving and closing services on the street. For example, some air-conditioning cleaning or detection service.

# How it works
It works in a simple way. Primarily there are two types of users, <b>administrators</b> and <b>employees</b>.
  - Admin users are those who can create external service orders and pass them on to employee users. Admin users also have access to
  all values, days, hours, and number of orders in an overview of calls, organizing the data in tables and graphs;
  
  - Employee Users are those who receive service calls from users administrators to run on the servers. Employee users also have an
  overview of their performance in terms of service orders, with these data being organized into specific tables and graphs for each
  employee.

# Downloading and Starting to use the system
  01. You must download or clone the repository
  02. Create a mysql database called sistema_ordem_de_servico
  03. Open the file on your localhost (it is a PHP system, that is, you need PHP and APACHE to work), and implement in the url of localhost '/install/createTables.php'. This will create all necessary tables and will put all information on the tables
  04. Now, you just much put in Login and password the values "admin", and ready! You are in the system like a 1-admin
  05. If you want test the type 2-Employee, you much put on in Login and Password the values "user", and ready! You are in the system like a 2-Employee.


Technologies:
  01. HTML
  02. CSS
  03. PHP
  04. MYSQL
