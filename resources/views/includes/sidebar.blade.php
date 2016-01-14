<div class="sidebar-inner">

    <div class="sidebar-top">
        <a href="{{ \Config::get('app.url')  }}">@lang('global.wiki')</a>
        <a href="#" class="sidebar-toggle pull-right"><i class="fa fa-close hidden-lg-up"></i></a>
    </div>

    <ul class="menu">
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-languages" class="has-submenu collapsed">
                @lang('global.languages')
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-languages" class="submenu collapse">
                @foreach(Config::get('app.available_locales') as $locale)
                    <li><a href="{{ url($locale['langcode']) }}">@lang('global.lang.' . $locale['langcode'])</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="#" data-toggle="collapse" data-target="#submenu-versions" class="has-submenu collapsed">
                @lang('global.versions')
                <span class="pull-right"><span class="menu-icon fa fa-fw"></span></span>
            </a>
            <ul id="submenu-versions" class="submenu collapse">
                @foreach(Config::get('app.versions') as $version)
                    <li>
                        <a href="{{ url(App::getLocale() . '/' . str_replace('_', '.', $version)) }}">
                            {{ str_replace('_', '.', $version) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="divider"></li>

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
                    <a href="#">@lang('global.community_forums')</a>
                </li>
                <li>
                    <a href="#">@lang('global.github')</a>
                </li>
            </ul>
        </li>
    </ul>
</div>