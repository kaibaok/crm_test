@if (!empty($listMenu))
<div class="mainmenu-area text-center hidden-sm hidden-xs">
    <nav>
        <div class="mainmenu">
            <ul>
                @foreach ($listMenu as $klv1 => $vlv1)
                    <li><a href="{{$vlv1['href']}}">{{$vlv1['text']}}</a>
                        @if (!empty($vlv1['children']))
                            <ul class="submenu-mainmenu">
                                @foreach ($vlv1['children'] as $klv2 => $vlv2)
                                    <li><a href="{{$vlv2['href']}}"></i>{{$vlv2['text']}} @if(!empty($vlv2['children']))<i class="fa fa-angle-right"></i>@endif</a>
                                        @if(!empty($vlv2['children']))
                                            <ul class="sub-submenu-mainmenu">
                                                @foreach ($vlv2['children'] as $klv3 => $vlv3)
                                                    <li><a href="{{$vlv3['href']}}"><i class="fa fa-circle"></i>{{$vlv3['text']}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
@endif
<!-- Mobile Menu Area start -->
@if (!empty($listMenuSP))
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            @foreach ($listMenuSP as $klv1 => $vlv1)
                                <li><a href="{{$vlv1['href']}}">{{$vlv1['text']}}</a>
                                    @if (!empty($vlv1['children']))
                                        <ul>
                                            @foreach ($vlv1['children'] as $klv2 => $vlv2)
                                                <li><a href="{{$vlv2['href']}}"></i>{{$vlv2['text']}} @if(!empty($vlv2['children']))@endif</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->
@endif