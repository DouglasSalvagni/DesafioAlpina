# MY CUSTOM WORDPRESS THEME

### Prerequisites

Before starting, you will need to have the following tools installed on your machine:
- [x] XAMPP
- [x] Wordpress
- [x] Text Editor

### 🛠 Used Guide
- [Guide Tutorial](https://www.escolawp.com/2011/01/guia-completo-para-criar-template-wordpress/)

### Issues and Solutions

#### Tutorial create a issue in Custom Comments Template
- [Tutorial](https://www.escolawp.com/2010/12/criando-template-comentarios-wordpress/)
#### Error:
- Fatal error: Uncaught Error: Call to undefined function ereg() in C:\xampp\htdocs\wp-content\themes\mycustomtheme\functions.php:76
- Fatal error: Uncaught Error: Call to undefined function ereg_replace() in C:\xampp\htdocs\wp-content\themes\mycustomtheme\functions.php:79

#### Solituins:
- [ereg()](https://stackoverflow.com/questions/54682040/fatal-error-uncaught-error-call-to-undefined-function-ereg#:~:text=use-,preg_match,-()%20instead%20of%20ereg)
- [ereg_replace()](https://stackoverflow.com/questions/39469264/fatal-error-uncaught-error-call-to-undefined-function-ereg-replace-php-7#:~:text=%24jquery_click_hook%20%3D-,preg_replace,-(%22%5B%5EA-Za-z0))

#### After you get a warning statement, witch I temporary solve using @
-Warning: preg_match(): Unknown modifier ']' in C:\xampp\htdocs\wp-content\themes\mycustomtheme\functions.php on line 76
-Warning: preg_replace(): Unknown modifier '/' in C:\xampp\htdocs\wp-content\themes\mycustomtheme\functions.php on line 79