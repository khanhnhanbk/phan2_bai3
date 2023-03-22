<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Add product</h1>
        <!-- form -->
        <div class="row">
            <div class="col">
                <form action="code.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name product" required="">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Description" required="">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" required="">
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="image" id="image" placeholder="Image url" required="">
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary" type="submit" name="add">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>