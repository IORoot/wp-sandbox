<div id="top"></div>

<div align="center">

<img src="https://londonparkour.com/wp-content/uploads/Essential/Logos/Favicon.png" style="width:200px;"/>

<h3 align="center">London Parkour Infrastructure & Deployments</h3>

<p align="center">

The docker-compose infrastructure and methods of deploying code / updates to the website.

</p>

</div>

## 1. Traffic / Server Infrastructure

## 2. <a name='Usage'></a>Usage

the local and live sites, the VUMP parts should be the same if you are using the same infrastructure on both.

## 2.1 The Actions-Runner

There is a self-hosted github runner on the box with a user `/home/runner`. There are currently three runners, one for the store, one for sandbox.com and one for the nginx-proxy-manager.
You can start / stop / status the runner with the commands:

```bash
/home/runner/actions-runner-sandbox/svc.sh start
/home/runner/actions-runner-sandbox/svc.sh stop
/home/runner/actions-runner-sandbox/svc.sh status
/home/runner/actions-runner-sandbox/svc.sh install
/home/runner/actions-runner-sandbox/svc.sh uninstall
```

## 2.2 PHP

You can configure the `php.ini` file by editing the `/config/php/uploads.ini` file and restarting the `wordpress` container.

## 3. Things to check:

-   `.env`
-   `.env.live` has been put into github correctly.
-   `fastcgi_pass sandboxcom_wordpress:9000;` line in the `config/nginx/nginx-conf-live/nginx.conf` file.
-   correct ports / ssl in the [manager](manager.sandbox.com)

## 4. <a name='Changelog'></a>Changelog

v1.0.0

-   Initial deployment to docker for infrastucture.
