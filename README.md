WordStore v0.1
==============

A quick and simple little app designed to let the user browse a prebuilt dictionary database either by which letter a word starts on, or by putting in their own search text.

This was built using the Symfony2 framework over the course of roughly 24 working hours, and is my first from-scratch Symfony2 project.

SETUP
=====
- Standard Symfony2 project setup; configure as per usual.
- Add 'domain' variable to parameters.yml (for example, domain: /wordstore); this is a workaround for an issue I ran into with the routing and XAMPP that may not be necessary under other environments.
- Load up setup/wordstore.sql into your database

TECH STACK
==========

- Symfony2 v2.7.3
- jQuery v1.11.3
- jQuery-UI v1.11.4
- mySQL v5.6.25
- PHP v5.6.11
- FOSUserBundle v1.3.x (not yet fully implemented)

DEVELOPED UNDER
===============

- NetBeans v8.0.2
- mySQL Workbench v6.3.4.0
- XAMPP v5.6.11

KNOWN ISSUES
============
- The alignment of the book's 'spines' is out of whack due to the :before and :after pseudotags not working happily with the usual div alignment.
- FOSUserBundle is only partially implemented; temporarily removed the links the jQuery frontend works off of to disable this, but they can still be found in topBanner.html.twig.
- Getting some frontend slowdown when searching for particularly popular letters; current plan to deal with this is good old pagination.

TODO
====
- Finish implementing FOSUserBundle
- Add in faux-storefront to allow users to 'buy' words; user login/saving/loading to be done via FOSUserBundle
- Pagination for words, possibly definitions.

ACKNOWLEDGEMENTS
================

Base word dictionary by x16bkkamz6rkb78, available from http://sourceforge.net/projects/mysqlenglishdictionary/
