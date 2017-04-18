# AWS-EC2 APACHE SERVER FOR PHP files

Here is the steps to create a MYSQL DataBase in AWS
1) Refer to the below link 
https://aws.amazon.com/getting-started/tutorials/create-mysql-db/
Create the MYSQL DB
2) Create the AWS EC2 Instance.
3) Create a security group for EC2 instance enabling HTTP/ HTTPS 0.0.0.0/0 or your IP address and SSH
4) Add that security group to the EC2 instance. 
5) Change the security group of MYSQL to newly created security group of the AWS EC2.
6) Login to through ssh command to the ec2 instance. 
   command: ssh -i key.pem ec2-user@ xx.xx.xx  (where xx.xx.xx is public-IP-address)
7) Update the instance commnad: 'yum update -y'
8) Install apache server command: 'yum install httpd -y'  
9) Install PHP command: 'php php-mysql -y'
10) Keep the apache server on all the time. command: 'chkconfig httpd on'
11) Place your Homepage in index.php command /var/www/html/index.php
11) Place your project files at  /var/www/html/myfirsweb.php

#AWS-MYSQL
1) Install command: 'sudo yum install mysql-server'
2) login to mysql: 'mysql -h  xxxxxxxxxxxx.us-west-2.rds.amazonaws.com (mysql endpoint) -P 3306  -p password
3) Create tables
4) Insert values

last step
In web browser type your EC2 public IP address. 
Example: 11.11.11.11 (public IP address of EC2) 

