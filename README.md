# Bubble tea app

## Installation/Running the project

Download the zipped project file and extract it to a folder on your computer.
Open the extracted folder in your code editor or terminal.

Prerequisites:

- PHP (version XX or higher)
- Composer (for managing PHP dependencies)
- Node.js (version XX or higher) and npm (Node Package Manager)
- A database system (e.g., MySQL, PostgreSQL)
- Xampp

Open the terminal in the project folder and run "composer install"
Then install frontend dependencies with "npm install.

Configure the .env file in the project if needed, should already have set to my own phpmyadmin account.

Configure these details if not:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

then seed and migrate with php artisan

Run with Xampp.

## About the project.
This laravel project lets you add your own custom bubble tea from selectable options, which is then saved and shown on the homepage of the website.

## How to access the home page
Use this link http://localhost/bobas to access the main page of the site and from there will be clickable links to guide yourself to the next page.

## Description of each page

### Home page
The main page at http://localhost/bobas showcases the titles of the saved custom bubble tea in the main content as links. The header contains a navigation bar to the home page, add a new boba page and about page. This navigation bar is shown on every webpage.

### Add a new boba page
The add a new boba tea page allows you to create and save your own bubble tea to our database and showcased on the home page as links. There are many selectable options to choose from to make your own boba and will be able to name it yourself.

Here is a direct link to the add a new boba page: http://localhost/bobas/create.

### About page
This page provides a brief description about the website.

Here is a direct link to the about page: http://localhost/bobas/about.

### Boba showcase page
Clicking on a boba tea link from the homepage directs you to the showcase page of that individual custom bubble tea. Here it shows what ingredients the custom bubble tea has. There is also and edit and delete button. The edit button directs you to the edit page and delete button removes the saved boba from the database and homepage.

### Edit page
After clicking on the showcase page from the homepage and clicking the edit button. You can change your selection of ingredients for the custom boba tea and rename it. The save button will update the database and homepage.

## Additional features
### CSS and Responsive Design
I have used CSS to style the webpages to be more colourful for a bubble tea app, I made a fully functional and clean navigation bar and all the webpages have been implemented with web responsive design in mind, shrinking the webpage adjusts the layout of the website. I've used hover states to change colour to make it feel my interactable. The CSS is mostly consistent throughout apart from some of the main content in new pages.

### Eloquent Relationships
I've implemented a one-to-many relationship with boba and review in my project. A boba tea can have many reviews but a review can only be under one boba. I implemented a new review database along with a model and controller to store and delete reviews. The reviews are showcased at the bottom when you click on a boba tea.

### Authorisation and Authentication
I've implemented user-access, admin-access and a admin-or-user access for my project. Admins will have full control over the website, Users will have limited access but can add new boba, create and delete reviews. Guests can only see the showcased boba tea and reviews while some buttons are hidden and restricted from use. My implementation included the use of Controllers, gates, middleware route restriction and auth restrictions.

Below showcases the seeded users. Copy paste the email and password for logging into the website which will allow you to access hidden and restricted functions. Admin is role_id = 1 and User is role_id = 2
        DB::table('users')->insert(['name' => 'Kate Hutton', 'email' => 'k.l.hutton@hudstudent.ac.uk', 'password' => Hash::make('password'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Yousef Miandad', 'email' => 'y.miandad@hudstudent.ac.uk', 'password' => Hash::make('letmein'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Sunil Laxman', 'email' => 's.laxman@hudstudent.ac.uk', 'password' => Hash::make('password2'), 'role_id' => 1]);

### Tailwind CSS
I've tried implementing tailwind along with my original css but it kept breaking my original design and responsive design. So I decided to show my understanding through implementing it on the login page. I had trouble getting the margins, padding and certain font-sizes to work correctly.