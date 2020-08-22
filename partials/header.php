<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taunggyi Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/taunggyi_info/index.php">Taunggyi Information</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/taunggyi_info/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/taunggyi_info/pagodas/pagodas.php">Pagodas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/taunggyi_info/places/places.php">Places</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/taunggyi_info/hotels/hotels.php">Hotels</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">Services<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul class="wrap_dropdown">
                            <li><a class="dropdown-item" href="#"><small>Planes</small></a></li>
                            <li><a class="dropdown-item" href="#"><small>Trains</small></a></li>
                            <li><a class="dropdown-item" href="#"><small>Express Bus</small></a></li>
                            <li><a class="dropdown-item" href="#"><small>Taxi & Carry</small></a></li>
                        </ul>
                </li>
                </ul>
                <form class="form-inline search_gp my-2 my-lg-0" action="search.php" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" placeholder="search..." class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-info" name="submit_search" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

