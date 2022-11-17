<!-- // To call this page, in the browser type a route that doesn't exist like:
// http://localhost/test/route -->

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bootstrap 5 404 Error Page</title>
        <link href="/Frontend/bootstrap-5.2.2-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>


    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span><?php echo 'PAGE NOT FOUND'; ?></p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                  </p>
                <a href="/" class="btn btn-primary">Go Home</a>
            </div>
        </div>
    </body>


</html>

