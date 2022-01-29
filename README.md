# vAPI [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social)](https://twitter.com/intent/tweet?text=Check%20out%20vAPI%20on%20Github!&url=https://github.com/roottusk/vapi&via=vk_tushar&hashtags=apisecurity,apitop10,owasp)

[![Docker](https://img.shields.io/badge/docker-support-%2300D1D1)](https://github.com/roottusk/vapi#installation-docker) 
[![Build Status](https://app.travis-ci.com/roottusk/vapi.svg?branch=master)](https://app.travis-ci.com/roottusk/vapi)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blueviolet.svg)](https://www.gnu.org/licenses/gpl-3.0)
[![Version](https://img.shields.io/badge/version-v1.1-blue)](https://github.com/roottusk/vapi) 
[![PHP](https://img.shields.io/badge/php-7.3^-yellow)](https://github.com/roottusk/vapi)
[![Laravel](https://img.shields.io/badge/Laravel-8-orange)](https://github.com/roottusk/vapi)
[![Issues](https://img.shields.io/github/issues-closed/roottusk/vapi?color=%23eb3434)](https://github.com/roottusk/vapi/issues)
<p align="center">
<img src="vapi_logo.png" >
</p>

vAPI is Vulnerable Adversely Programmed Interface which is Self-Hostable API that mimics OWASP API Top 10 scenarios in the means of Exercises. 


# Requirements

* PHP
* MySQL
* PostMan
* MITM Proxy

# Installation (Docker)

```bash
docker-compose up -d
```

## Updating 

You can clone new code but may need to run the following for a fresh spin before running `docker-compose`

```bash
docker rm -f $(docker ps -a -q)
docker volume rm $(docker volume ls -q)
```

# Installation (Manual)

## Copying the Code

```bash
cd <your-hosting-directory>
```

```bash
git clone https://github.com/roottusk/vapi.git
```

## Setting up the Database

Import `vapi.sql` into MySQL Database

Configure the DB Credentials in the `vapi/.env`


## Starting MySQL service

Run following command (Linux)

```bash
service mysqld start
```

## Starting Laravel Server

Go to `vapi` directory and Run 

```bash
php artisan serve
```

## Setting Up Postman

- Import `vAPI.postman_collection.json` in Postman
- Import `vAPI_ENV.postman_environment.json` in Postman

OR

Use Public Workspace 

https://www.postman.com/roottusk/workspace/vapi/

# Usage

Browse `http://localhost/vapi/` for Documentation

After Sending requests, refer to the Postman Tests or Environment for Generated Tokens

# Presented At
[OWASP 20th Anniversary](https://owasp20thanniversaryevent20.sched.com/event/ll1k)

[Blackhat Europe 2021 Arsenal](https://www.youtube.com/watch?v=7_Q5Rlm7Too)

[HITB Cyberweek 2021, Abu Dhabi, UAE](https://cyberweek.ae/2021/hitb-armory/)

[@Hack, Riyadh, KSA](https://athack.com/speakers?keys=Tushar)


# Upcoming



# Mentions and References
[1] https://apisecurity.io/issue-132-experian-api-leak-breaches-digitalocean-geico-burp-plugins-vapi-lab/

[2] https://dsopas.github.io/MindAPI/references/

[3] https://dzone.com/articles/api-security-weekly-issue-132

[4] https://owasp.org/www-project-vulnerable-web-applications-directory/

[5] https://github.com/arainho/awesome-api-security

[6] https://portswigger.net/daily-swig/introducing-vapi-an-open-source-lab-environment-to-learn-about-api-security

[7] https://apisecurity.io/issue-169-insecure-api-wordpress-plugin-tesla-3rd-party-vulnerability-introducing-vapi/

# Walkthroughs/Writeups/Videos

[1] https://cyc0rpion.medium.com/exploiting-owasp-top-10-api-vulnerabilities-fb9d4b1dd471

[2] https://www.youtube.com/watch?v=0F5opL_c5-4&list=PLT1Gj1RmR7vqHK60qS5bpNUeivz4yhmbS (Turkish Language)

# Acknowledgements

* The icon and banner uses image from [Flaticon](https://www.flaticon.com/free-icon/bug_190835)

