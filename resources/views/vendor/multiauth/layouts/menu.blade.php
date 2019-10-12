<nav class="navbar-left position-fixed">
    <ul class="menubar">
        @foreach(config("menu.admin.sidebar") as  $key)
        @if(array_key_exists('children',$key) && !empty($key['children']))
        @foreach ($key['children'] as $item)
                @if ((array_key_exists('route',$item) && request()->route()->getName() == $item['route']) || (array_key_exists('url',$item) && request()->path() == $item['url']))
                    <li class="menu-item active" {{$key['attr'] ?? ""}}>
                        <a href="{{ (array_key_exists('route', $key) && !empty($key['route'])) ? route($key['route']) : url($key['url'] ?? '#')}}">
                            <span>
                                {!!$key['icon']!!}
                            </span>
                            <span>{{$key['title']}}</span>
                        </a>
                    </li>
                    @continue(2)
                @endif
            @endforeach
        @endif
        <li class="menu-item {{ array_key_exists('route',$key) ? request()->route()->getName() == $key['route'] ? 'active' : '' : ''}}{{ array_key_exists('url',$key) ? request()->path() == $key['url'] ? 'active' : '' : ''}}" {{$key['attr'] ?? ""}}>
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
