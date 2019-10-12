<nav class="navbar-left position-fixed">
    <ul class="menubar">
        @foreach(config("menu.admin.sidebar") as $key)
        <li class="menu-item {{ array_key_exists('route',$key) ? request()->route()->getName() == $key['route'] ? 'active' : '' : ''}}{{ array_key_exists('url',$key) ? request()->path() == $key['url'] ? 'active' : '' : ''}}" {{array_key_exists('attr',$key) ? $key['attr'] : ""}}>
            <a href="{{ (array_key_exists('route', $key) && !empty($key['route'])) ? route($key['route']) : url($key['url'] ?? '#')}}">
                <span>
                    {!!$key['icon']!!}
                </span>
                <span>{{$key['title']}}</span>
            </a>
        </li>
        @endforeach
    </ul>
</nav>
