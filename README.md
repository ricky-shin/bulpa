# Baruch Underground Listing of Professor Ability

![home-page](/home.png?raw=true "bulpa Homepage")

Tech Stack: Bootstrap, php, MySQL

This is the public repo for bulpa, a professor reviewing website created for [Baruch College](http://baruch.cuny.edu).
This project is created and maintained by [Ricky Shin](https://www.rickyshin.com). 

The concept of reviewing professors is not new (see: Rate My Professor), but having a college-specific site for professor reviews can lead to more accurate reviews.

# TODO
* write-review.php textarea not POSTing, why? Also require all fields to be, well, required.
* add reCaptcha in write.review.php to (hopefully) prevent spam
* Let "Department" column in all-professors.php to show dname string, not the assigned internal ID.
* Pre-Zicklin Courses page (query reviews table where course = the pre-zick courses & isApproved = 1 [True])
* Zicklin Courses page (same as above)
* Admin Page (meaning.. authentican 💀, or lazy way: .htaccess or password protect with hashed password in db?), Select * from 'reviews'  where isApproved = 0; | checkbox & submission sets isApproved = 1 [True]. 
* Google Analytics (easy/low priority)

# WISHLIST
* Pagination
