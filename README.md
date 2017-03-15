# Background

This is an application for owncloud who allows users to register some parameters in a database with an very simple interface.

For now there are the following parameters :
name, age, gender, address, english profil, english type, english exposure, english detail, maori profil, maori type, maori exposure, maori detail

## Installation

Download the background repository and place this in **owncloud/apps/**

Attention : The name of the repository HAVE TO be background !!

## How to change parameters of the database ?

To do somes modifications on the databases you have to manage with :

/background/db/backgroundinfo.php 

/background/controller/pagecontroller.php  (*function create*)

/background/controller/settingcontroller.php (*functions getUserValue and setBackground*)

## Publish to App Store

First get an account for the [App Store](http://apps.owncloud.com/) then run:

    make appstore_package

The archive is located in build/artifacts/appstore and can then be uploaded to the App Store.

## Running tests
After [Installing PHPUnit](http://phpunit.de/getting-started.html) run:

    phpunit -c phpunit.xml
    
## More 

To have more informations on how you can manage this application, let's see the [Owncloud Developer Manual](https://doc.owncloud.org/server/latest/developer_manual/app/index.html)...
