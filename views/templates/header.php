<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--THƯ VIỆN BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
    <!--THƯ VIỆN FONT AWASOME-->
    <script src="https://kit.fontawesome.com/f15068147b.js" crossorigin="anonymous"></script>
    <!--THƯ VIỆN GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!--CSS MDB-->
    <link rel="stylesheet" href="assets/css/mdb/mdb.min.css" />
    <!--CSS FOR HEADER-->
    <link rel="stylesheet" href="assets/css/templates/header.css?v=<?php echo time(); ?>">
    <!--CSS FOR SIDEBAR-->
    <link rel="stylesheet" href="assets/css/templates/sidebar.css">
    <!--CSS FOR NEWSFEED-->
    <link rel="stylesheet" href="assets/css/newsfeed/newsfeed2.css?v=<?php echo time(); ?>">
    <!--CSS FOR SEARCH-->
    <link rel="stylesheet" href="assets/css/templates/search.css">
    <!--CSS FOR USERPROFILE-->
    <link rel="stylesheet" href="assets/css/profile/userProfile.css">
    <!--FaceBook LOGO-->
</head>

<body>
    <!--HEADER-->
    <header class="container-fluid">
        <nav class="navbar navbar-light bg-light fixed-top fb-navbar">
            <div class="container-fluid inner-fb-navbar">
                <div class="navbar-left">
                    <a class="navbar-brand" href="index.php">
                        <div class="fb_logo icon" style="justify-content:flex-end;margin-left:8px">
                            <img src="assets/images/logo.jpg" alt="">
                        </div>
                    </a>
                    <form class="d-flex" action="index.php?controller=template&action=search" method="post"
                        autocomplete="off">
                        <input name="search-input" class="form-control me-2 search-input" type="search"
                            placeholder="Tìm kiếm..." aria-label="Search">
                        <button style="background-color:#fff;" name="search-btn" class="search-button" type="submit">
                            <span  class="material-icons-round search-icon">
                                search
                            </span>
                        </button>
                    </form>
                </div>
                <div class="col-md 4 navbar-center">
                    <div style="background-color: #F26398" class="navbar-center-list">
                        <div class="nav-item">
                            <a class="nav-link active navbar-center-item" aria-current="page" href="index.php">
                                <div class="home icon" title="Home">
                                    <span class="material-icons-round home-icon" style="color:#fff;">
                                        home
                                    </span>
                                </div>
                                <div class="underline" style="background-color:#1877F2"> </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-right">
                    <div  class="nav-item">
                        <?php
                if ($row_user_ava)
                foreach ($row_user_ava as $user_ava){
            ?>
                        <a style="background-color: #fff" id="user" class="text-decoration-none link-dark"
                            href="index.php?controller=profile&action=index">
                            <div  id="user-ava">
                                <img src="<?php echo $user_ava['UserAva'] ?>" alt="">
                            </div>
                            <div id="user-name">
                                <b><?php echo $user_ava['UserName'];?></b>
                            </div>
                        </a>
                        <?php
                }
            ?>
                    </div>


                    <div class="nav-item">
                        <button style="background-color:#fff;" class="notifications-1 button" title="Notifications">
                            <span  class="material-icons-round notifications-icon">
                                notifications
                            </span>
                        </button>
                      
                    </div>
                    <div class="nav-item">
                        <button style="background-color:#fff;" class="account button" title="Account">
                            <span class="material-icons-round account-icon">
                                arrow_drop_down
                            </span>
                        </button>
                        <div class="log-out">
                            <a class="item-logout link-dark" href="index.php?controller=login">
                                <span class="material-icons-outlined">
                                    logout
                                </span>
                                <b>Log-out</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>