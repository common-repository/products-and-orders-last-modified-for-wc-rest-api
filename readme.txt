=== Products and Orders Last Modified for WC REST API ===
Contributors: m0h4mm4d
Tags: products, orders, last-modified, for woocommerce, rest-api, rest, api, product-modified, order-modified, lastmodified, datemodify
Author URI: https://chaharbaq.com/
Author: Chaharbaq
Donate link: https://chaharbaq.com/
Requires at least: 5.0
Requires PHP: 7.0
WC tested up to: 6.1
Tested up to: 5.9
WC requires at least: 3.9
Stable tag: 1.0.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Retrieve Last Modified Products and Orders via WooCommerce REST API

== Description ==

This is a simple plugin to retrieve latest modified products and orders based on date modfied when using Woocommerce REST API.

After installing the plugin you could access the latest modified products and orders after a given date via Woocommerce REST API like this :

* *Retrieve last modified products after a given time:*  /wp-json/wc/v3/products/?modified_after=2021-01-20T11:35:00
* *Retrieve last modified orders after a given time:*    /wp-json/wc/v3/orders/?modified_after=2021-01-20T18:35:00

== Frequently Asked Questions ==

= What if the plugin disabled ? =

You will get all products listed via /wp-json/wc/v3/products/


== Changelog ==

= version 1.0.1 =
Security improvement 

= version 1.0.0 =
**First Release**

