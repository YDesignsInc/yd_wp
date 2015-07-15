#!/bin/bash

#store the current dir
cdir=${PWD}
pdir="$(dirname "$cdir")"
name="${pdir##*/}"
echo "you are in $name. It will be used as the site name"
read -p 'Press enter to continue'
npm install grunt-wordpress-deploy

#below currently assumes location of the vagrant yd_wp folder location
cp /vagrant/yd_wp/yd_gruntfile.js Gruntfile.js

#move the wp-config into a local configuration.
mv wp-config.php local-config.php

#replace the wp-config with a switcher.
cp /vagrant/yd_wp/configs/switch-config.php wp-config.php
cp /vagrant/yd_wp/configs/stage-config.php stage-config.php

#after copying the file over, you need to modify the Gruntfile.js to reflect the DB for local.
sed -i "s/SITENAME/$name/g" Gruntfile.js
sed -i "s/SITENAME/$name/g" stage-config.php

