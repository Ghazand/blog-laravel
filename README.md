<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## The Blog functional modules
->Database seeding through seeder so no need to manually create data.


->User registration page to write posts or comment on specific posts.
->User authentication and using middleware to redirect to different routes.
-> The user can create a post only if registered in the database through auth middleware.
->Admin middleware to see all posts, see all users, delete, and update posts, and the users.
->Relationship between different sections for instance user, and post. A post can have many comments, each comment belongs to a specific user. A post belongs to a category, and each post has some category. It is a one-to-one relationship.
-> Searching based on the category of the post, or based on the title or body of the post.
-> Email subscription through Mailchimp API.
->Laravel blade components.
