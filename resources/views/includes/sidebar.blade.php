<div class="sidebar-inner">

    <div class="sidebar-top">
        <a href="{{ \Config::get('app.url')  }}">@lang('global.wiki')</a>
        <a href="#" class="sidebar-toggle pull-right"><i class="fa fa-close hidden-lg-up"></i></a>
    </div>

    <ul class="menu">
        <li>
            <a href="#">Sample Link</a>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-sample" class="has-submenu collapsed">
                Sample Header
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-sample" class="submenu collapse">
                <li><a href="#">Sample Sub Link</a></li>
                <li><a href="#">Sample Sub Link</a></li>
            </ul>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-sample2" class="has-submenu collapsed">
                Sample Header
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-sample2" class="submenu collapse">
                <li><a href="#">Sample Sub Link</a></li>
                <li><a href="#">Sample Sub Link</a></li>
            </ul>
        </li>
    </ul>
</div>