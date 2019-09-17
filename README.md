# Baruch Underground Listing of Professor Ability

![home-page](/home.png?raw=true "bulpa Homepage")

Tech Stack: Bootstrap, php, MySQL

This is the public repo for bulpa, a professor reviewing website created for [Baruch College](http://baruch.cuny.edu) students. bulpa is not affiliated with the City University of New York or Baruch College.

The concept of reviewing professors is not new (see: Rate My Professor), but having a (relatively) smaller dataset makes it easier to maintain more accurate professor names and reviews.

This project is created and maintained by [Ricky Shin](https://www.rickyshin.com).

# TODO
* In write-review.php, implement auto complete used in all-professors.php & fetch.php
* Let "Department" column in all-professors.php to show dname string, not the assigned internal ID.
* Pre-Zicklin Courses page (query reviews table where course = the pre-zick courses & isApproved = 1 [True])
* Zicklin Courses page (same as above)
* Admin Page (meaning.. authentican 💀, or lazy way: .htaccess or password protect with hashed password in db?), Select * from 'reviews'  where isApproved = 0; | checkbox & submission sets isApproved = 1 [True]. 
* Google Analytics (easy/low priority)
* Scrape all professors from Baruch directory
* After site is live: push updated config.php (currently in '.gitignore' to protect reCAPTCHA API key)
* Privacy Policy informing users of IP collection

# WISHLIST
* Pagination
* Most popular professor (a/k/a professors with most reviews)
* Bad reviewers/spammers can be shadowbanned through admin page (they will get "submitted" page but query not run.)
