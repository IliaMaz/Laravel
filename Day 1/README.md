## MVC

Today's plan:

    - Design patterns
    - Can ask for this in Interview (50/50 depends on the company) Relates to OOP

    - Des P:

        - A pattern / template
        - Solve common problems
        - Born from exp
        - Concept use in many languages

    - What is MVC :

## Gang of Four (GoF)

    "The Bible analogy for us" <A book exists, read it -> GoF>
    - Design Patterns
    - Elements of resuable Object-Oriented Software

## UML

    - Unified Modeling Language
        -- Similar to designing a DB.
            -- In actuality it is designing your application
            -- Looks similar to a flowchart but it shows the full application

## MVC is a Des. Pat.

    - A base which you build components around

    - Model - View - Controller
        - Organize code
        - Define roles for files
        - Seperate the logic from the code

        -- Model
            - Retrieve & organize the data (Probably in a DB but can be from file) want to retrieve as assoc, the model will do this.
                -- The model can be split in 2
                    - Model
                    - DAO - Data Access Object (Also a DesPat)
                        - Retrieves one of the movies
                        - Makes object out of the incoming data based on existing class
        -- View
            - Focuses on display, html and some simple php to visualize what you want (This part only works with the view)
        -- Controller
            - Manages the logic that makes decisions, in a way, an intermediary that connects the Model and the View.
                - ex: The controller will ask the model for some data, the model returns some results.
                - Then the controller will take this data, change if need be, and move it over to View.

## Steps in the MVC

    - Controller receives the request from the user
    - Asks the model for the data, doesn't care about the how
    - Model translates, controller requests & retrieves information & returns it.
    - Controller now has the data and can send it to the view.
    - View displays data coming from controller

## Reasons for MVC

    - If done correctly:
        -- Reusable
        -- Easy to work with many people
        -- It's scalable
