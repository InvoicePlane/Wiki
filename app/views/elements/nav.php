<nav id="mainmenu" class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#mainmenu-navbar-collapse-1">
                <?php echo trans('global.menu') ?> <i class="fa fa-bars fa-margin-left"></i>
            </button>
            <div id="logo"></div>
        </div>

        <div class="collapse navbar-collapse" id="mainmenu-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="/"><?php echo trans('global.home') ?></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo trans('global.wiki') ?>
                        <i class="fa fa-caret-down fa-margin-left"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/getting-started"><?php echo trans('global.getting_started') ?></a></li>
                        <li><a href="/modules"><?php echo trans('global.modules') ?></a></li>
                        <li><a href="/settings"><?php echo trans('global.settings') ?></a></li>
                        <li><a href="/system"><?php echo trans('global.system') ?></a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://invoiceplane.com">InvoicePlane.com</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i> <i class="fa fa-caret-down fa-margin-left"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        $languages = Config::get('app.available_locales');
                        foreach ($languages as $language) { ?>
                            <li>
                                <a href="/<?php echo $language['langcode'] ?>">
                                    <?php echo $language['lang'] ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>