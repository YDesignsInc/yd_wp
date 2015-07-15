#!/bin/bash

#This script will deploy the wordpress site to devshed so that we can easily share our changes to the client.
grunt push_db --target=staging
grunt push_files --target=staging