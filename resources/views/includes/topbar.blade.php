<div class="top-bar">

    <ul class="nav hidden-lg-up pull-left mr-3">
        <li class="nav-item">
            <a href="#" class="sidebar-toggle nav-link">
                <i class="fa fa-bars fa-margin-right"></i> Menu
            </a>
        </li>
    </ul>

    <div class="nav">
        @if(count(config('app.available_locales')) > 1)
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                    @lang('global.language') ({{ strtoupper(App::getLocale()) }})
                </a>
                <div class="dropdown-menu">
                    @foreach(config('app.available_locales') as $locale)
                        <a href="{{ url($locale['langcode']) }}" class="dropdown-item small">
                            @lang('global.lang.' . $locale['langcode'])
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="navbar-text">
            Version:
        </div>
        @foreach(Config::get('app.versions') as $version)
            @php $version = str_replace('_', '.', $version); @endphp
            <div class="nav-item @if($current_version == $version) active @endif">
                <a href="{{ url(App::getLocale() . '/' . $version . $current_url) }}"
                        class="nav-link">
                    {{ $version }}
                </a>
            </div>
        @endforeach
    </div>

</div>