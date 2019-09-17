# Baruch Underground Listing of Professor Ability

![home-page](/home.png?raw=true "bulpa Homepage")

Tech Stack: Bootstrap, php, MySQL

This is the public repo for bulpa, a professor reviewing website created for [Baruch College](http://baruch.cuny.edu) students. bulpa is not affiliated with the City University of New York or Baruch College.

The concept of reviewing professors is not new (see: Rate My Professor), but having a (relatively) smaller dataset makes it easier to maintain more accurate professor names and reviews.

This project is created and maintained by [Ricky Shin](https://www.rickyshin.com).

# TODO
* Let "Department" column in all-professors.php to show dname string, not the assigned internal ID.
* Focus more on querying reviews table for all-professors.php. Or maybe get rid of that all together and focus more on utilizing reviews table? Something to think about.
* Google Analytics (easy/low priority)
* After site is live: push updated config.php (currently in '.gitignore' to protect reCAPTCHA API key)
* Search box in top right corner posting to course.php?id=
* Clean up unused pages, if any.
* Admin Page - displays reviews in descending order (by timestamp), wihere isApproved = '0'. Maybe fork [this](https://github.com/henry7720/Verification-Page)?

# WISHLIST
* Pagination
* Most popular professor (a/k/a professors with most reviews)
* Bad reviewers/spammers can be shadowbanned through admin page (they will get "submitted" page but query not run.)
