<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Sleek Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->

            <ul class="nav sidebar-inner" id="sidebar-menu">
            @foreach(config('nav.admin.top') as $item)
            @if(array_key_exists('menu_sub1',$item))
                <li class="has-sub">
                    <a class="sidenav-item-link collapsed" 
                        href="@empty($item['route'])  
                            {{'javascript:void(0)'}}
                            @else
                            {{route($item['route'])}}
                            @endempty" data-toggle="collapse" data-target="#{{$item['target']}}" aria-expanded="false" aria-controls="{{$item['target']}}">
                        <i class="{{$item['icon']}}"></i>
                        <span class="nav-text">{{$item['name']}}</span> <b class="caret"></b>
                    </a>
                   
                    <ul class="collapse" id="{{$item['target']}}" data-parent="#sidebar-menu" style="">
                        <div class="sub-menu">
                       
                        @foreach($item['menu_sub1'] as $item_sub1)
                        @if(array_key_exists('menu_sub2',$item_sub1))
                            <li class="has-sub">
                            <a class="sidenav-item-link collapsed" 
                                href="@empty($item_sub1['route'])  
                                    {{'javascript:void(0)'}}
                                    @else
                                    {{route($item_sub1['route'])}}
                                    @endempty" data-toggle="collapse" data-target="#{{$item_sub1['target']}}" aria-expanded="false" aria-controls="{{$item_sub1['target']}}">
                                    <span class="nav-text">{{$item_sub1['name']}}</span> <b class="caret"></b>
                            </a>
                            
                                <ul class="collapse" id="{{$item_sub1['target']}}">
                                    <div class="sub-menu">
                                    @foreach($item_sub1['menu_sub2'] as $item_sub2)
                                        <li>
                                                <a href=" 
                                                @empty($item_sub2['route'])  
                                                    {{'javascript:void(0)'}}
                                                @else
                                                {{route($item_sub2['route'])}}
                                                @endempty">
                                                {{$item_sub2['name']}}
                                                </a>
                                        </li>
                                    @endforeach    
                                    </div>
                                </ul>
                                
                            </li>
                            @else
                            <li>
                                <a href=" 
                                @empty($item_sub1['route'])  
                                    {{'javascript:void(0)'}}
                                @else
                                {{route($item_sub1['route'])}}
                                @endempty">
                                {{$item_sub1['name']}}
                                </a>
                        </li>
                            @endif
                        @endforeach
                        </div>
                    </ul>

                    
                    <li>
                    
                    </li>
                </li>
                @else

                <li>
                <a
                        href="@empty($item['route'])  
                            {{'javascript:void(0)'}}
                            @else
                            {{route($item['route'])}}
                            @endempty">
                        <i class="{{$item['icon']}}"></i>
                        <span class="nav-text">{{$item['name']}}</span>
                </a>
                </li>
                @endif
            @endforeach
            </ul>
        </div>

        <hr class="separator" />

        <!-- <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div> -->
    </div>
</aside>
