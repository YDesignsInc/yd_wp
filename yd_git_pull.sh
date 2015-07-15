#!/bin/bash

#Git commit that also pulls in the DB state.


#Get the name of the project
cdir=${PWD}
pdir="$(dirname "$cdir")"
name="${pdir##*/}"
echo "you are in $name. It will be used as the DB name"
read -p 'Press enter to continue'

git pull

#make backup-db folder if it doesn't exist.
mkdir -p ../backup-db/

#let's play it safe and backup the DB.
mysqldump -uwp -pwp $name > ../backup-db/incase-db.sql


echo "DB is about to be overwritten.  There should be a copy of the db in ../backup-db/incase-db.sql file."
read -p 'Press enter to continue'

mysql -uwp -pwp -Nse 'show tables' $name | while read table; do mysql -uwp -pwp -e "truncate table $table" $name; done
mysql -uwp -pwp $name < backups/dbbackup.sql

echo "Visit the system and if the page isnt working right remember to go to settings->permalink first!"
