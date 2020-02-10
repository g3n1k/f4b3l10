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
1. created account in heroku
1. i created code in [github](https://github.com/g3n1k/f4b3l10)
1. clone
````
$ git clone https://github.com/g3n1k/f4b3l10.git
$ cd f4b3l10
````
1. add composer.json file
````
$ touch composer.json
$ echo "{ }" >> composer.json

````
1. add some code
````
$ touch index.php
$ echo "<?php echo __FILE__;?>" >> index.php
````
1. push to github
````
$ git add .
$ git commit -am "add composer.json file"
$ git push
````

1. build to heroku
````
$ git push heroku master
Counting objects: 16, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (10/10), done.
Writing objects: 100% (16/16), 1.45 KiB | 0 bytes/s, done.
Total 16 (delta 2), reused 3 (delta 0)
  ...
  ...
remote:        https://fathomless-reaches-08894.herokuapp.com/ deployed to Heroku
remote: 
remote: Verifying deploy... done.
To https://git.heroku.com/fathomless-reaches-08894.git
 * [new branch]      master -> master

````
1. now open the app with heroku
````
$ heroku open
````