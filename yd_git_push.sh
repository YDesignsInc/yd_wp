#!/bin/bash

#Git commit that also saves the DB state.

#Get the name of the project
cdir=${PWD}
pdir="$(dirname "$cdir")"
name="${pdir##*/}"
echo "you are in $name. It will be used as the DB name"
read -p 'Press enter to continue'

#make the backup dir if it doesn't exist.
mkdir -p backups

mysqldump -uwp -pwp $name > backups/dbbackup.sql
git add -A
echo "Enter your commit comments"
read comment

git commit -m "$comment"
git push