# Geek News

An experimental website that uses Laravel as the main application and Headless Wordpress as the admin. 

## Project Structure
* geek-news - The Laravel Application
* geek-news-backend - The Wordpress Installation
* The master branch for this repo will _always_ remain as a clean installation so that anyone can start this experiment from scratch.

## Pre-requisites before Installation
* Make sure to have all dependencies necessary to use Homestead: https://laravel.com/docs/5.6/homestead
  * You DON'T need to have homestead installed globally. This project only uses homestead as a local dev dependency

## How To Install

1. Clone this repo
2. To your host file, add the following lines (note: you can change the urls however you want as long as you update the `geek-news/Homestead.yaml` file):

```
192.168.10.10 geeknews.local
192.168.10.10 geeknewsbackend.local
```

3. Then from the `geek-news` sub-folder, run `vagrant up`
4. After installation, your should be able to visit the previously configured urls. `geeknews.local` should bring up the laravel application. `geeknewsbackend.local` will bring up the wordpress installation page.

### Wordpress Install
* The currently provisioned database for this wordpress project is: `geek_news_wp`. The credentials for which are just the default homestead credentials.
* After installation, you will have to change your permalinks setting to something _other than_ "plain": otherwise, you will not be able to preview rest api endpoints in your browser.
* Make sure to activate the `geeknews` theme and de-activate and or delete the default `twentyseventeen` theme. The geeknews theme is much more simplistic and designed specifically for using wordpress as a rest api data store. NOTE: Some code is from [Postlight's Headless WP Starter](https://github.com/postlight/headless-wp-starter)
