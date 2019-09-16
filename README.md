# Baruch Underground Listing of Professor Ability

![home-page](/home.png?raw=true "bulpa Homepage")

This is the public repo for bulpa, a professor reviewing website created for [Baruch College](http://baruch.cuny.edu).
This project is created and maintained by [Ricky Shin](https://www.rickyshin.com). 

The concept of reviewing professors is not new (see: Rate My Professor), but having a college-specific site for professor reviews can lead to more accurate reviews.

# TODO
* write-review.php form submits to database (isApproved boolean should default False)
* add reCaptcha in write.review.php to (hopefully) prevent spam
* Let "Department" column in all-professors.php to show dname string, not the assigned internal ID.
* Pre-Zicklin Courses page (query reviews table where course = the pre-zick courses & isApproved = True)
* Zicklin Courses page (same as above)