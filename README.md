Hello Saumya Singh,


I have completed the assessment test. This project is built using Laravel 10 (a PHP framework) and MySQL (for the database). The frontend uses Sneat Dashboard FREE – Bootstrap 5 (https://themeselection.com/item/sneat-dashboard-free-bootstrap/). 
The project environment and requirements are configured using Docker or without dokcer.


how to setup Project:

using Dokcer: 
    -> Clone the project to your local system.
    -> create new database folder
    -> To start the project:
        -> using command "sudo docker compose up --build -d" or "docker compose up --build"
        -> use this url http://localhost:9011/login
    -> To stop the project:
        -> using command "sudo docker compose down"
    -> database 
        -> use command "sudo docker compose exec php php artisan migrate"
    

using direct:
    -> Clone the project to your local system.
    -> To start the project:
       -> go to in SRC Folder
       -> Start terminal in SRC Folder
       -> in terminal user command "php artisan serve"
       -> use this url http://localhost:9011/login
    -> database 
        -> use command "php artisan migrate"
       
