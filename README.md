<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


Here are the API endpoints that were created:

BASE_URL = "http://localhost:85/projects/Employee/public"


REST API URL for department

GET {BASE_URL}/api/departments — Return all departments
GET {BASE_URL}/api/departments/{id} — Return the department with the specified id
POST {BASE_URL}/api/departments — Add a new department
PUT {BASE_URL}/api/departments/{id} — Update the employee with the specified id
DELETE {BASE_URL}/api/deparments/{id} — Delete the employee with the specified id

REST API URL for employee

GET {BASE_URL}/api/employees — Return all employees
GET {BASE_URL}/api/employees/{id} — Return the employee with the specified id
POST {BASE_URL}/api/employees — Add a new employee
PUT {BASE_URL}/api/employees/{id} — Update the employee with the specified id
DELETE {BASE_URL}/api/employees/{id} — Delete the employee with the specified id

REST API URL for employee phone numbers

GET {BASE_URL}/api/contacts — Return all employees phone numbers
GET {BASE_URL}/api/contacts/{id} — Return the phone number for an employee with the specified id
POST {BASE_URL}/api/contacts — Add a new phone number for an employee
PUT {BASE_URL}/api/contacts/{id} — Update the phone number with the specified id
DELETE {BASE_URL}/api/contacts/{id} — Delete the phone number with the specified id



REST API URL for employee addresses

GET {BASE_URL}/api/addresses — Return all employees addresses
GET {BASE_URL}/api/addresses/{id} — Return the adrress with the specified id
POST {BASE_URL}/api/addresses — Add a new address
PUT {BASE_URL}/api/addresses/{id} — Update the employee address with the specified id
DELETE {BASE_URL}/api/addresses/{id} — Delete the employee address with the specified id