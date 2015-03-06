<nav id="mainmenu" class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#mainmenu-navbar-collapse-1">
                <?php echo trans('global.menu') ?> <i class="fa fa-bars fa-margin-left"></i>
            </button>
            <a href="/">
                <div id="logo" data-toggle="tooltip" data-placement="bottom" title="<?php echo trans('global.home'); ?>">
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="mainmenu-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php echo View::make(IP::getLocAndVer(true).'.navmenu'); ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i> <?php echo trans('global.language'); ?>
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i> <?php echo trans('global.useful_links'); ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="https://invoiceplane.com" >
                                <i class="fa fa-send fa-margin-right"></i>
                                <?php echo trans('global.invoiceplane_website'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="https://community.invoiceplane.com" >
                                <i class="fa fa-comments fa-margin-right"></i>
                                <?php echo trans('global.official_forums'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="https://demo.invoiceplane.com" >
                                <i class="fa fa-flask fa-margin-right"></i>
                                <?php echo trans('global.demo'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/InvoicePlane/InvoicePlane" >
                                <i class="fa fa-github fa-margin-right"></i>
                                <?php echo trans('global.github_repo'); ?>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>