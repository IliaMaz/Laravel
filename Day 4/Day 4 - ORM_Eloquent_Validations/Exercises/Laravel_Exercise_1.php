<?php 

/*
	
	Get back to our online books website (see exercise_1 of Day2 Laravel)

	You should improve your project using Eloquent model

	- Step 1 :
		
		Run the command : 'php artisan make:model Book'

		A Book Model has been created. You can find it in 'app/Book.php'.
		
		This model will be automatically linked to our database.
		To do this, Eloquent use "snake case", plural name of the class will be used as the table name.
		If you want to use another name, add this property to the model : 
			protected $table = 'my_table';

		Eloquent will also assume that each table has a primary key column named id.
		If you want to use another column name for primary key, add this property : 
			protected $primaryKey = 'my_id';
		
	- Step 2 :

		Let's edit our book controller !
		The controller should ask the eloquent model for datas that he needs.

		1. Edit the index() method.
		Remove the SELECT query and replace it by this : $books = App\Book::all();
		
		You can var_dump($books) if you want to check what it does.
		Program should still works at this point.

	- Step 3 : 
		You'll find all informations here : https://laravel.com/docs/7.x/eloquent
		
		Change every method of your controller that uses Raw SQL Queries.
		Now you should use Eloquent model to :
			- Get all the books
			- Get a specific book
			- Create a new book
			- Edit an existing book
			- Delete a book	

	- Step 4 : 

		Now, you'll have to try to make relationship between Author and Book.
		Informations here : https://laravel.com/docs/7.x/eloquent-relationships#one-to-many

		Edit the book detail page.
		Show the author informations using eloquent relationships.

*/

 ?>