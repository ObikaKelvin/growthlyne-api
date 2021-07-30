# Brera Club

This is the official repository of the Brera Club platform. Both the marketing part of the website and the application itself are included in this repository.

The website works on CodeIgniter 4 (PHP) with the addition of our team's internal CodeIgniter 4 Ecommerce extension, MySQL and Apache.

## How To Install

1. If you haven't yet, you must create a Github account with your company email. **This account may ONLY be used for working on company-related projects.** Your Github account must use the following settings:
   1. Email: your company email
   2. Username: first letter of your first name + your last name + "brera". Like this:
      - `anesicbrera`
      - `kobikabrera`
      - etc.
2. **You are required to set up 2FA with your company Github account.**
3. You need to be invited to the brerasolutions/breraclub repository on Github to edit the code. Please ask your manager to invite you.
4. You need to be invited to Brera's Repman account, and you need to get an access token. Please ask your manager to invite you and generate a new token. **IMPORTANT: NEVER SHARE YOUR REPMAN TOKEN WITH ANYONE!**
5. Once you've received access to both platforms and your personal Repman token, follow these instructions.

### Installing Composer

If you've already installed Composer, you can skip this step.

To check if you already have Composer, open your terminal and type `composer -V`. A message like this should appear:

`Composer version 2.0.11 2021-02-24 14:57:23`

If it doesn't (you get an error), it means Composer is not installed on your computer — or not installed properly.

Please follow the official [Composer Documentation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) to install Composer.

### Installing NPM

If you've already installed NPM, you can skip this step.

To check if you already have NPM, run the following command in your terminal: `npm -v`. A similar line to this should get printed:

`6.14.11`

This means your device is running NPM. If you get an error, you will have to install NPM.

Please follow the official [NPM Documentation](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm) to install NPM.

### Installing XAMPP

**XAMPP is required for development.** You are not allowed to use LAMP, WAMP, MAMP and any other PHP development environment.

To install XAMPP, firstly delete all other PHP development environments (if any are installed.)

Next, please follow the official [XAMPP Documentation](https://www.apachefriends.org/index.html) to install XAMPP.

### Setting Up The Project

1. Create a new folder on your computer, in a **safe location.** (Do not create it in a folder shared with the network, or on a folder outside of your user account.)
2. Name the folder `brerasolutions`.
3. Create a new folder inside, called `breraclub`.
4. Enter the folder and open your terminal into that folder. (On Windows: Shift + Click > Open Command Prompt Here)
5. Clone this git repository directly into that folder. You can do this by running `git clone https://github.com/brerasolutions/breraclub .` — don't forget the dot (`.`) at the end!
6. Set your Repman token by running this command: `composer config --global --auth http-basic.brerasolutions.repo.repman.io token your_token`.
7. Once the Git repository is downloaded, run `composer install` and `npm install` to install all the dependencies. (When running `composer install`, you may be required to enter your Repman token again.)
8. Run XAMPP and start the Apache and MySQL services.
9. When the Apache server is started, open the [phpMyAdmin interface](http://localhost/phpmyadmin/), and create a new database. Name it `breraclub`.
10. Rename the `env` file into `.env`. The default settings are configured for XAMPP, but you may have to modify them to suit your XAMPP settings. (Try testing the default values first.)
11. Run all the migrations via `php spark migrate -all`.
    * In case you encounter error `Main connection [SQLite3]: Class 'SQLite3' not found` while attempting the migration, open your `.env` file, enable database test credentials by uncommenting them, and make them the same as your default database credentials.
12. Run the project using `php spark serve`. (If you get an error, you may have to configure the `.env` file again.)

## Project Structure

- `app` — CodeIgniter folder.
- `public` — CodeIgniter folder.
- `res` — for pre-compiling resources (Typescript, Sass, etc.)
  - `src` — folder with resource sources (uncompiled files.)
  - `out` — resources folder with final/compiled files.
- `tests` — CodeIgniter folder.
- `writable` — CodeIgniter folder.
