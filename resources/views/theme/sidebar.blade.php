<?php
/**
 * Created by PhpStorm.
 * User: armando
 * Date: 27/02/18
 * Time: 12:17
 */
?>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            @foreach ($menus as $key => $item)
                @if ($item['parent'] != 0)
                    @break
                @endif
                @include('partials.menu-item', ['item' => $item])
            @endforeach
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
