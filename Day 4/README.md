# Day 4

    -- Beginning of the day
        - Teacher is currently sick
        - Starting Eloquent ORM solo

## Eloquent ORM

    - The Eloquent ORM used in Laravel is an implemenation of ActiveRecord
    - Each DB table has a corresponding Model which is used to interact with it
    - Models allow querying for data as well as new records insertion 

    -- Utilising Migrations & Seeds from Day 3
        -- php artisan migrate:reset (full db reset)
        -- composer dump-autoload
        -- php artisan migrate --seed

    -- So far we have used single DB connections
        -- It is best to seperate read & write connections
        -- Read More on Laravel DOCS
    
    -- The standard location of E ORM models is under app/Http

## Defining a Model

    - The easiest way to make a model is through artisan and
        - make:model
    - Generating a migration whilst making a model is also possible
        - The following is the LDOCS example
        - php artisan make:model Flight -m(igration)
    - I follow with an analogy using my books DB
    - The output is the standard empty object with use of namespace

    - Take note that we did not tell Eloquent which table to use
        - Meaning it will automatically assume that the table of model "Book"
            is books or for model "Author" authors
    - If you want to specify a table:
        protected $table = 'my_books'; 
    - Primary key 'id' and Auto_INC are an assumption
        protected $primaryKey = 'book_id';
    - In case you want a non-numeric PK etc
        protected $incrementing = false;
    - Set key type to string
        protected $keyType = 'string';
    - Eloquent will automatically manage timestamps, in case you dont want this
        protected $timestamps = false;
    - Date format
        prot(ected) $dateFormat = 'U';
    - Customise timestamp col names
        const CREATED_AT = 'NAME'; Same for updated_at
    - By default all Eloquent models will use the standard DB connection
        prot $connection = 'connection-name';
    - Default attributes
        prot $attributes = [
            'delayed' => false,
            'available' => true
        ];

# Retrieving Models

    -- Continuing in use Exo Day 2
    -- Notes stay here 

    -- Retrieval is same as query retrieval BUT
    -- You 
        - use the model to query
        - add constraints as well
        ie:
        $flights = App\Flight::all();
        $flights = App\Flight::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();
        - You can refresh an instance using fresh() or refresh() methods
        - The refresh will re hydrate the existing mode using fresh data
        - In addition all relationships will be reloaded as well

## Collections

    - For methods such as all() and get()
        - an instance of Eloq\Collection will be returned
        - this class provides a variety of useful methods for working with results
        **
        https://laravel.com/docs/7.x/eloquent-collections#available-methods
        **
        - More on it after getting started section

    -If you need to process thousands of results
        - use chunking i.e:
        Flight::chunk(200, function ($flights) {
            foreach
        })
        - this helps conserve memory when working with large data sets
        - use cursor
        - greatly conserves memory instancing one object at a time

# Advanced Queries
    - Eloquents allows for a smooth single query to pull information from 
        related tables
    i.e:
        use App\Destination;
        use App\Flight;

        return Destination::addSelect(['last_flight' => Flight::select('name')
            ->whereColumn('destination_id', 'destinations.id')
            ->orderBy('arrived_at', 'desc')
            ->limit(1)
        ])->get();

    - The query builders orderBy function supports subqueries
    - We can return the destination ordered by Flight::select('arrived_at')
    i.e:
        return Destination::orderByDesc(
            Flight::select('arrived_at')
                ->whereColumn('destination_id', 'destinations.id')
                ->orderBy('arrived_at', 'desc')
                ->limit(1)
        )->get();

    - In addition to retrieving all of the records for a given table
         you may also retrieve single records using find, first, or firstWhere
    - these methods return a single model instance

    - You may also call the find method with an array of primary keys, which will   return a collection of the matching records:
        - $flights = App\Flight::find([1, 2, 3]);
    - The firstOr method allows us to search for a first result and if not found
    do something
    $model = App\Flight::where('legs', '>', 100)->firstOr(function () {
        // ...
    });

    - The firstOr method also accepts an array of columns to retrieve:
        $model = App\Flight::where('legs', '>', 100)
            ->firstOr(['id', 'legs'], function () {
                // ...
            });
    - The not found exceptions
        - If you wish to throw exceptions if a model is not found
        - particulary useful in routes / controllers
        $model = App\Flight::findOrFail(1);
        $model = App\Flight::where('legs', '>', 100)->firstOrFail();

    - If the exception is not caught, a 404 HTTP response is automatically sent back to the user. It is not necessary to write explicit checks to return 404 responses when using these methods
    - Very useful for us lazy devs

    - The count, sum, max and other aggregate methods return the scalar value instead of a full model instance
    i.e:
    $count = App\Flight::where('active', 1)->count();
    $max = App\Flight::where('active', 1)->max('price');

# Inserting and Updating models
    public function store(Request $request)
    {
        // Validate the request...
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->save();
    }
# Mass updates are also possible
    i.e 
    App\Flight::where('active', 1)
          ->where('destination', 'San Diego')
          ->update(['delayed' => 1]);

    !!  When issuing a mass update via Eloquent, the saving, saved, updating, and updated model events will not be fired for the updated models. This is because the models are never actually retrieved when issuing a mass update.

# 1:M & M:1

    -- Refer to BookController Day 2 Under the Laravel Project name: Exercises_Day_2

## Validation

    - By default Laravel uses ValidatesRequests