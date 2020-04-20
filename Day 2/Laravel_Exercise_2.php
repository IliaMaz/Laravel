<?php 

/*
	
	Get back to our online books website (see exercise_1 of Day2 Laravel)

	You should improve your project using Validations
	Every informations here: https://laravel.com/docs/7.x/validation

	- Step 1 :
		
		For this step, we need to go to store() method of our controller.
		This method is used to save a new book in database.
		But first, we need to implements some validation on the form.

		To do this, add this code at the beginning of the method : 
			$validatedData = $request->validate([
		        'title' => 'required|max:30',
		    ]);
		
		Try to use the form. If you doesn't respect those validations, it will redirect you back to the form page.
		All the validation errors are automatically flashed to the session.

	- Step 2 :

		The only thing you have to do is to display errors. Add this code to the view :

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
	

*/

?>