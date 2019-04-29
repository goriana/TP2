## Blog project - Web development 

This repository contains a functional basic blog, there is no supplementary branches and all the content of the blog was saved in the master branch.

## Installation guide

Open your git terminal

For create a copy of the repository 

- Tape `git clone` and the repository url:

```
git clone ssh://git@github.com/goriana/TP2.git
```

## Blog structure

The blog is composed by  

- Homepage showing the list of the available articles

The Home page is composed by a menu that contains the three main sections of the blog, then we can find the title and in the body we will find an unordered list with the links of the articles availables in the post table.

This page will be the first view of our blog and will allow us to redirect to the user to the content.

- Articles page, showing their title, body, update information and author.

The Articles page has the menu, the title of the blog and all the information of the articles.

- Single page, showing an article and given the case one or more comments.

This view is the response for the method show() of our ArticleController, once the user has chosen an article from the Homepage list the single blade will appear, showing in the first place the article information followed by a comment if the id of the comment references te same id of the article.

- Contact page, that contains a simple form.

The contact page has the same menu and title, then a simple form that does data validation, if the information submitted is wrong, a message will be displayed. 

## Blog control

At your terminal go to the project location, here are some of the main commands for testing the project

| Command  | Result |
| ------------- | ------------- |
| `php artisan migrate:refresh --seed`  | Our user, post and contact databases will be filled with information  |
| `php artisan serve`  | The Laravel development server will be initialized   |

Once your server has been initialized, at you browser you can tape: http://localhost:8000/ you'll be redirected to the Homepage, same result if you tape http://localhost:8000/Home

For getting to the articles section you can 
- tape http://localhost:8000/Articles 
- click on Articles menu

For getting to a single article section you can 
- tape http://localhost:8000/id  the id will be the number of the article that you want to consult
- click on one of the articles displayed at the Homepage

For getting to the contact section you can 
- tape http://localhost:8000/Contact
- click on Contact menu


## Main remarks

It was an interesting exercise, once completed the TP2, the concepts of the course (MVC, Controllers, Databases, Migrations, etc) were clearer.
I wasn't related with this structure of work but with this activity ( reading documentation, reading the supports and changing the code until it works ) the model seems to simplify a lot of concepts that before for me weren't related.


