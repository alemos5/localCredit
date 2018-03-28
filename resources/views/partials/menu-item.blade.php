@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['name']) }}"><i class="{{ $item['fa'] }}"></i> {{ $item['name'] }}</a>
    </li>
@else
    <li>
        <a href="#"><i class="{{ $item['fa'] }}"></i> {{ $item['name'] }} <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li>
                        <a href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}">{{ $submenu['name'] }} </a>
                    </li>
                @else
                    @include('partials.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif