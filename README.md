# Welcome to Art with Lissa!

**Description:** The theme of this application is to showcase artwork and creative projects. This is a place where you will find a variety of different artworks and projects, including digital art, paintings, drawings, and more. The administrator of the site could create, keep notes, write a blog (future feature) and share their art in a personalized digital gallery.
Technology stack:
-	Laravel
-	VueJS
-	MySQL

<img src="https://github.com/melissakipp/artwithlissa/blob/main/resources/images/readme/20230114_landingpage.png" alt="Landing page">
<img src="https://github.com/melissakipp/artwithlissa/blob/main/resources/images/readme/20230114_login.png" alt="Login form">
<img src="https://github.com/melissakipp/artwithlissa/blob/main/resources/images/readme/20230114_dashboard.png" alt="Dashboard">

**Dependencies**
To get started with the application, you will need to have the following software installed on your computer:
-	[Node.js](https://nodejs.org/) & NPM (Node Package Manager)
-	[Composer](https://getcomposer.org/)
-	[Laravel](https://laravel.com/docs/9.x/installation#choosing-your-sail-services)
-	[Docker](https://www.docker.com/)
-	[TablePlus]( https://tableplus.com/)

## Installation: Using Sail
<p>After the software is installed, you can proceed with the following steps:</p>

1. Clone the repository to your local machine by running the following command:
```shell
git clone https://github.com/melissakipp/artwithlissa.git
```

2. Navigate to the root directory of the project using the command line and run the following command to install the required dependencies:
```shell
composer install

npm install
```

## Configuration
To set up database with TablePlus
1.	“Create a new connection…” 
2. Example: Development Configurations

<img src="https://github.com/melissakipp/artwithlissa/blob/main/resources/images/readme/20230114_database-configs.png" alt="Landing page">

<p><em>NOTE: the .env and TablePlus connection configurations need to match. Run the next command to make a copy of the .env file and rename it.</em></p>

```shell
cp .env.example .env
```

3. Once all the dependencies are installed, you can start the application by running the following command:
```shell
./vendor/bin/sail up
```

<p><em>NOTE: You can run this command with the option -d, which will run the docker in the background.</em></p>

```shell
./vendor/bin/sail up -d
```

<p>Open a second terminal</p>

```shell
./vendor/bin/sail php artisan migrate
```


<p>Open a third terminal</p>

```shell
npm run dev
```

The application should now be running on your localhost. You can access it by opening a web browser and navigating to http://localhost

## License
This project is open-sourced software licensed under the MIT license.

