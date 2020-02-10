# f4b3l10

## setup local enviroment
1. using debian linux in laptop
1. install php, composer, curl, git
````
sudo apt-get install curl php-cli php-mbstring git unzip
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
sudo apt-get install snapd
sudo snap install heroku --classic
sudo ln -s /snap/bin/heroku /usr/local/bin/heroku
````
## test heroku
