<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">@lang('translation.Dashboards')</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-menu">@lang('translation.tenantsCategory')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="shopping-bag"></i>
                        <span data-key="t-dashboard">@lang('translation.tenantsCategory')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
{{--                        <li><a href="{{url('tenants-category')}}" data-key="t-level-1-1">@lang('translation.tenantsCategory')</a></li>--}}

                        <li><a href="{{url('tenants-sub-category')}}" data-key="t-level-1-1">@lang('translation.tenantsCategory')</a></li>
                        {{--                        <li>--}}
{{--                        <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">@lang('translation.tenantsCategory')</a>--}}
{{--                            <ul class="sub-menu" aria-expanded="true">--}}
{{--                                @if(isset($tenants_category))--}}
{{--                                    @foreach($tenants_category as $tenantsCategory)--}}
{{--                                        <li><a href="javascript: void(0);" data-key="t-level-2-1">{{$tenantsCategory->tenants_category_name_en}}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="shopping-bag"></i>
                        <span data-key="t-dashboard">@lang('translation.tenants')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('tenants')}}" data-key="t-level-1-1">@lang('translation.tenantsList')</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
