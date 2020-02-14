# f4b3l10
my history
## setup local dev
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

## add DB in heroku server
using postgres as db, becouser its free, we didnt need to input credit card or anything

1. go to [dashboard](https://dashboard.heroku.com) heroku, tabs **Resources**
    ![alt text](readme/add-db-in-heroku.png "Logo Title Text 1")
1. in **Add Ons** input find **Heroku Postgress** add to app
1. check our db credencial, open shell in code folder, and exec 
    ````
    cd ~/workspace/f4b3l10
    heroku pg:credentials:url
    ````
    and give us the `dbname`, `host`, `user`, `password` and `connection url` 
    ````
    Connection information for default credential.
    Connection info string:
        "dbname=dc0mibeasec3mi host=ec2-52-202-185-87.compute-1.amazonaws.com port=5432 user=pfnsmuzrkovcch password=adee30357641570bb8587f6c781333bb5893fc7888e29b4c6cb96236b2b9f7c7 sslmode=require"
    Connection URL:
    postgres://pfnsmuzrkovcch:adee30357641570bb8587f6c781333bb5893fc7888e29b4c6cb96236b2b9f7c7@ec2-52-202-185-87.compute-1.amazonaws.com:5432/dc0mibeasec3mi
    ````
1. test with [DBeaver](https://dbeaver.io/)
![DBeaver](readme/pg-test-heroku.png "test pg with dbeaver")

## the flow and db
first flow in [draw.io](https://drive.google.com/file/d/1GkqPpBcGJcMTRZfMRgRz5-CQbPDFmYSo/view?usp=sharing)  
 ![code flow](readme/flow.png "flow code")

db structure  
 ![db structure](readme/f4b3l10-db.png "db structure")

