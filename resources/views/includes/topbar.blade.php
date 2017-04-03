<div class="top-bar">

    <ul class="nav hidden-lg-up pull-left mr-3">
        <li class="nav-item">
            <a href="#" class="sidebar-toggle nav-link">
                <i class="fa fa-bars fa-margin-right"></i> Menu
            </a>
        </li>
    </ul>

    <ul class="nav justify-content-end pull-right">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">
                @lang('global.languages')
            </a>
            <div class="dropdown-menu dropdown-menu-right text-right">
                @foreach(Config::get('app.available_locales') as $locale)
                    <a href="{{ url($locale['langcode']) }}" class="dropdown-item small">
                        @lang('global.lang.' . $locale['langcode'])
                    </a>
                @endforeach
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
               aria-expanded="false">
                @lang('global.version') {{ $current_version }}
            </a>
            <div class="dropdown-menu dropdown-menu-right text-right">
                @foreach(Config::get('app.versions') as $version)
                    <a href="{{ url(App::getLocale() . '/' . str_replace('_', '.', $version) . $current_url) }}"
                       class="dropdown-item small">
                        {{ str_replace('_', '.', $version) }}
                    </a>
                @endforeach
            </div>
        </li>
    </ul>

</div>