# Tutorial Blog using PHP & MySQL by [CodeWithAwa](https://codewithawa.com)
## [Intro](https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database)
## [The Database](https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database---db-design)
## [Backend (Admin Area)](https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database---backend)
## [Admin post creation](https://codewithawa.com/posts/how-to-create-a-blog-in-php-and-mysql-database---admin-posts)

**Objectives**
>  I'll show you how to build a complete blog application from scratch using PHP and MySQL database.

**Concepts**
* HTML
* CSS
* Javascript (JQuery)
* PHP
* MySQL

**Preworks and Notes**

[PHP for Beginners - Become a PHP Master - CMS Project](https://www.udemy.com/course/php-for-complete-beginners-includes-msql-object-oriented/)

**Use Case**
> A blog as you know it is an application where some users (Admin users) can create, edit, update and publish articles to make them available in the public to read and maybe comment on. Users and the public can browse through a catalog of these articles and click to anyone to read more about the article and comment on them.

**Entity Diagram**

![ERD](https://live.staticflickr.com/65535/52092669140_06e81db88f.jpg)

**Bussiness Requirement**

1. A user registration system that manages two types of users: Admin and Normal Users
2. The blog will have an admin area and a public area separate from each other
3. The admin area will be accessible only to logged in admin users and the public area to the normal users and the general public
4. In the admin section, two types of admins exist: 
    * Admin:
        * Can create, view, update, publish/unpublish and delete ANY post.

        * Can also create, view, update and delete topics.

        * An Admin user (and only an Admin user) can create another admin user or Author

        * Can view, update and delete other admin users
        
    * Author:
        * Can create, view, update and delete only posts created by themselves
        They cannot publish a post. All publishing of posts is done by the Admin user.

5. Only published posts are displayed in the public area for viewing
6. Each post is created under a particular topic
7. A many-to-many relationship exists between posts and topics.
8. The public page lists posts; each post displayed with a featured image, * author, and date of creation.
9. The user can browse through all posts listings under a particular topic by clicking on the topic
10. When a user clicks on a post, they can view the full post and comment at the bottom of the posts.
11. A Disqus commenting system is implemented which allows users to comment using social media accounts with platforms like Facebook, GooglePlus, Twitter.
