# Final website for CS401

Name: Garrett Hansen

email: garretthansen@u.boisestate.edu

## How to run this website

This code requires php to run.
As I'm writing this I realized that the port for localhost is hard-coded,
so the site won't work unless you serve the page on localhost:3000. Sorry.

>$ php -S localhost:3000

## Bugs

 - Localhost port is hard-coded for page redirects. Not good.
 - Server-side input validation isn't complete. Code injection is possible through blog entries.
 - Sometimes the jquery file just doesn't load in time for the other files, causing issues with site functionality.

## Features

 - Create, edit/update, delete, and view all the blogs!
 - Create and edit blog functionality is on separate pages, but both conveniently redirect back to the home page
 upon submission, or upon clicking the return button located on both!
 - Deleting a blog live-updates the page and removes the blog without requiring any sort of refresh.
 - Updating a blog moves it down to the bottom of the page, providing a convenient chronological order to the blog posts.
 - Blog posts are conveniently persisted in json storage when creating/editing/deleting, meaning everything will be saved
 and present exactly as before even if the browser is closed!
