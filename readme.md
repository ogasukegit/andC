# AndC website front-end

This is the front-end code for the AndC company website. This was developed on PHP to make use of templating and component includes, but there is no other back-end code. This is intended to be connected to a backend code-base such as a CMS.

**IMPORTANT NOTES**
- Please remove the temporary data that is hard-coded in some of the views.
- Please set the path to the assets directory in settings.php.

### Stack and tools used
- **PHP (vanilla)** - for templating and component sharing
- **npm** - (https://www.npmjs.com/) for installing necessary packages
- **gulp** - (https://gulpjs.com/) build tool used to compile Sass
- **Sass** - (https://sass-lang.com/) CSS preprocessor used to add vendor prefixes, concatenate stylesheets, and allow for better CSS to be used
- **jQuery** (v3.5.1) - (https://jquery.com/) for some interactive components

### Development
1. Run a server that supports PHP (e.g. MAMP)
1. Install all necessary packages by running: ```npm install```
1. Build styles from Sass by running:
    - ```gulp build``` to build the assets once
    - ```gulp watch``` to watch for changes as you develop
