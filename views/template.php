<html>
<head>
    <meta charset="UTF-8">
    <title>Painel - <?php echo $viewData['company_name'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/plain" rel="author" href="<?=BASE_URL;?>humans.txt" />
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="shortcut icon" href="<?=BASE_URL;?>/assets/images/woza-shout.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper d-flex">
        <div class="sideMenu bg-mattBlackRed rounded-right">
            <div class="sidebar">
                <img src="" alt="" class="rounded-circle">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?=BASE_URL;?>/" class="nav-link">
                            <i class="material-icons icon py-3">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 2H1v12h14V2zM1 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H1z"/>
                                <path fill-rule="evenodd" d="M7.5 14V2h1v12h-1zm0-8H1V5h6.5v1zm7.5 5H8.5v-1H15v1z"/>
                                </svg>
                            </i>
                            <span class="text">Inicio</span>
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=BASE_URL;?>/users" class="nav-link">
                            <i class="material-icons icon py-3">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                                </svg>
                            </i>
                            <span class="text">Usuário</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon py-3">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                </svg>
                            </i>
                            <span class="text">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=BASE_URL;?>/permissions" class="nav-link">
                            <i class="material-icons icon py-3">
                                settings
                            </i>
                            <span class="text">Pemissões</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="material-icons icon py-3">
                                computer
                            </i>
                            <span class="text">Demo</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <button class="navbar-toggler sideMenuToggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand font-weight-bold" href="#"><?php echo $viewData['company_name'];?></a>
            <button class="sideMenuToggler rounded-circle bg-light border border-white">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="#e32636" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <button class="navbar-toggler sideMenuToggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle tira rounded-circle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?=BASE_URL;?>/assets/images/default-avatar.png" alt="" class="rounded-circle  bg-light border border-white img-fluid" style="max-width: 2rem;">                   
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="border-bottom d-block text-center">
                                <p class="text-secondary"><?php echo $viewData['user_email'];?></p>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                                </svg>
                                Setting
                            </a>
                            <a class="dropdown-item" href="<?=BASE_URL;?>/login/logout">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                    <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                                    <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"/>
                                </svg>
                                logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>   
    </nav>
    
    <div class="container px-5 p-sm-0">
    <?php
        $this->loadViewInTemplate($viewName, $viewData);
        ?>
    </div>
        
    <script type="text/javascript" src="<?=BASE_URL;;?>/assets/js/jquery-3.4.js"></script>
    <script type="text/javascript" src="<?=BASE_URL;;?>/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?=BASE_URL;;?>/assets/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="<?=BASE_URL;;?>/assets/js/script.js"></script>
</body>
</html>
