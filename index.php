<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List To Do</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <main class="app">
        <section class="greeting">
            <h2 class="title">
                What's Your Project, <input type="text" id="name" placeholder="Name here">
            </h2>
        </section>

        <section class="create-todo">
            <h3>Create a To Do List</h3>

            <form id="new-todo-form">
                <h4>What's on your to do list ?</h4>
                <div class="row">
                    <div class="col">
                        <input type="text" name="content" id="content" placeholder="e.g. make a" />
                    </div>
                    <div class="col">
                        <input type="time" name="time" id="time" />
                    </div>
                    <div class="col">
                        <input type="date" name="date" id="date" />
                    </div>
                </div>
                <h4>Pick a Category</h4>
                <div class="options">
                    <label>
                        <input type="radio" name="category" id="category1" value="business" />
                        <span class="bubble business"></span>
                        <div>Team</div>
                    </label>
                    <label>
                        <input type="radio" name="category" id="category2" value="personal" />
                        <span class="bubble personal"></span>
                        <div>Personal</div>
                    </label>

                </div>
                <input type="submit" value="Add todo">
            </form>
        </section>

        <section class="todo-list">
            <h3>TODO LIST :</h3>
            <div class="list" id="todo-list">              

            </div>
        </section>

    </main>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>