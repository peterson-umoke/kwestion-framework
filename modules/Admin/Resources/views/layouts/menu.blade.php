<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    @foreach(config('menu.admin.sidebar') as $menu)
                        @if(array_key_exists('category',$menu))
                            <li class="site-menu-category">{{$menu['category']}}</li>
                        @endif
                        @if(array_key_exists('children',$menu))
                            <li class="site-menu-item has-sub {{Nav::isRoute($menu['route'],'active open')}}">
                                <a href="javascript:void(0)">
                                    <i class="site-menu-icon {{$menu['icon'] ?? 'wb-grid-4'}}" aria-hidden="true"></i>
                                    <span class="site-menu-title">{{$menu['title']}}</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    @foreach($menu['children'] as $child)
                                        <li class="site-menu-item {{Nav::isRoute($child['route'],'active')}}">
                                            <a class="animsition-link"
                                               href="{{Route::has($child['route']) ?  route($child['route']) : url($child['url'] ?? "#")}}">
                                                <span class="site-menu-title">{{$child['title']}}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="site-menu-item {{Nav::isRoute($menu['route'])}}">
                                <a href="{{Route::has($menu['route']) ?  route($menu['route']) : url($menu['url'] ?? "#")}}"><span
                                        class="site-menu-icon {{$menu['icon'] ?? 'wb-grid-4'}}"></span><span
                                        class="site-menu-title">{{$menu['title']}}</span></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <style>
        .site-menubar-footer a {
            width: 50%;
        }
    </style>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
