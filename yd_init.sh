#!/bin/bash

sudo ln -s /vagrant/yd_wp/yd_setup.sh    /usr/local/bin/yd_setup
sudo ln -s /vagrant/yd_wp/yd_stage_up.sh /usr/local/bin/yd_stage_up
sudo ln -s /vagrant/yd_wp/yd_git_push.sh /usr/local/bin/yd_git_push
sudo ln -s /vagrant/yd_wp/yd_git_pull.sh /usr/local/bin/yd_git_pull
sudo chmod +x /usr/local/bin/yd_*
