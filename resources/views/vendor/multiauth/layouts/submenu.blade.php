@foreach(config("menu.admin.sidebar") as $key)
@if(((array_key_exists('route', $key) && request()->route()->getName() == $key['route']) || (array_key_exists('url', $key) && request()->path() == $key['url'])) && array_key_exists('children', $key) && !empty($key['children']))
<div class="aside-navbar">
    <ul class="submenubar">
        @foreach($key['children'] as $key)
        <li class="menu-item {{ array_key_exists('route',$key) ? request()->route()->getName() == $key['route'] ? 'active' : '' : ''}}{{ array_key_exists('url',$key) ? request()->path() == $key['url'] ? 'active' : '' : ''}}" {{array_key_exists('attr',$key) ? $key['attr'] : ""}}>
            <a href="{{ (array_key_exists('route', $key) && !empty($key['route'])) ? route($key['route']) : url($key['url'] ?? '#') }}">
                <span>{{$key['title']}}</span>
                @if ((array_key_exists('route',$key) && request()->route()->getName() == $key['route']) || (array_key_exists('url',$key) && request()->path() == $key['url']))
                <span class="icon">
                    <svg class="lnr lnr-chevron-right">
                        <use xlink:href="#lnr-chevron-right"></use>
                    </svg>
                </span>
                @endif
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endif
@endforeach
