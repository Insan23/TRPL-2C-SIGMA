<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 22/10/2017
 * Time: 16:32
 */
?>

<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>Σ</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Σ</b> SIGMA</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img id="user-img-small" src="assets/img/user2-160x160.jpg" class="user-image"
                                 alt="User Image">
                            <span id="name-small" class="hidden-xs">
                                <?php echo $_SESSION['Nama'] ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php
                                    if ($_SESSION['Level'] == "KoorAgen") {
                                        echo "?controller=profil&action=koAgenProfil";
                                    } else if ($_SESSION['Level'] == "Manajer") {
                                        echo "?controller=profil&action=manajerProfil";
                                    }
                                    ?>" class="btn btn-default btn-flat">Profil Saya</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat" data-toggle="modal"
                                       data-target="#modal-sign-out">
                                        Sign out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
