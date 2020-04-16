<?php 

/*

	We have an online books website.

	- Step 1 : 

		Create a new database with the table books.
		This table should contain : id (int), title (varchar), price (float)

	- Step 2 :

		In Laravel, you have to create the route to show all the books.
		Route should looks like this : '/books'.

	- Step 3 :

		Insert a new book.
		First, create a route using get method '/book/create' that display a form with all the mandatory fields.
		The form use post method.

		Create a second route using post method '/book/create'.
		This route should be call when submitting the form.

	- Step 4 :
		
		Edit the route that shows all the books.
		Now, for each book, there is a link to 'edit' the book.

		You have to create a route to edit a book, it should looks like this '/book/update/4'. This route use get method.
		On this page you have a form with all the fields (the fields should be filled with data from the book).

		When form submitted it will use put method.


	- Step 5 :
		Edit the route that shows all the books.
		Now, for each book, there is a link to 'delete' the book.
		You delete the book receiving an id. The route should look like this '/delete/3'

 ?>

