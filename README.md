# Baruch Underground Listing of Professor Ability

![home-page](imgs/bulpa_home.png?raw=true "bulpa Homepage")

Tech Stack: Bootstrap, php, MySQL

This project was created during my time at [Baruch College](http://baruch.cuny.edu) with the intention of providing a platform where students can submit anonymous reviews of Baruch College professors and courses. The concept of reviewing professors is not new (see: Rate My Professor), but having a (relatively) smaller dataset made it easier to maintain more accurate professor names and reviews. I've since transferred to Columbia University to study Computer Science; thus this project will no longer be maintained.

# Highlights
During the period the website was live at [https://www.bulpa.info](https://www.bulpa.info/), there was a total of:
* 942 Users Visited (85% from NY)
* 9,511 Pages Viewed
* 200+ Professors Anonymously Reviewed

Source: [Google Analytics](https://raw.githubusercontent.com/ricky-shin/bulpa/master/imgs/google-analytics.png). This was achieved through word of mouth.

# Key Features
* reCAPTCHA: [Implementing](https://raw.githubusercontent.com/ricky-shin/bulpa/master/imgs/write-review.png) Google's reCAPTCHA led to 0 spam reviews being posted
* Web-based Admin Panel: This allowed me to manually approve pending reviews without having to ssh into the server
* Mobile Compatible: Building Mobile First proved to be useful, as 47% of users were [mobile users](https://raw.githubusercontent.com/ricky-shin/bulpa/master/imgs/google-analytics-2.png)
* Kernal-based Virtual Machine: The website was hosted on a Digital Ocean virtual machine, with all DevOps functions [handled](https://raw.githubusercontent.com/ricky-shin/bulpa/master/imgs/ssh.png) by yours truly.

This project was not affiliated with the City University of New York or Baruch College.
