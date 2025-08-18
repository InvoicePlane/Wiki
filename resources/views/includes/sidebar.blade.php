<div class="sidebar-inner">

    <div class="sidebar-top">
        <a href="{{ config('app.url')  }}">@lang('global.wiki')</a>
        <a href="#" class="sidebar-toggle pull-right d-lg-none d-xl-none"><i class="fa fa-close"></i></a>
    </div>

    <ul class="menu">

        @if($sidebar_content)
            {!! $sidebar_content !!}
        @endif

        <li class="divider"></li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-links" class="has-submenu collapsed">
                @lang('global.links')
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-links" class="submenu collapse">
                <li>
                    <a href="https://invoiceplane.com">@lang('global.website')</a>
                </li>
                <li>
                    <a href="https://community.invoiceplane.com">@lang('global.community_forums')</a>
                </li>
                <li>
                    <a href="https://github.com/InvoicePlane">@lang('global.github')</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
