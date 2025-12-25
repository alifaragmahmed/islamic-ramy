<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">
                <img src="{{ asset(getSettingValue('logo')) }}" alt="">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{--  <!-- Dashboards -->
      <li class="menu-item active open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboards">Dashboards</div>
          <div class="badge bg-danger rounded-pill ms-auto">5</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/dashboards-crm.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="CRM">CRM</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="index.html" class="menu-link">
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="eCommerce">eCommerce</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="Logistics">Logistics</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
          <li class="menu-item">
            <a
              href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
              target="_blank"
              class="menu-link">
              <div data-i18n="Academy">Academy</div>
              <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
            </a>
          </li>
        </ul>
      </li> --}}


        <li class="menu-item {{ request()->routeIs('admin.home') ? 'active' : '' }} ">
            <a href="{{ route('admin.home') }}" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">{{ __('lang.home_dash') }}</div>
            </a>
        </li>


        <li class="menu-item {{ request()->routeIs('admin.slider') || request()->is('admin-panel/metatags/home') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="home">{{ __('lang.home') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.slider') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.sliders') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.meta', 'home') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'home') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- about --}}
        <li class="menu-item {{ request()->routeIs('admin.about') || request()->routeIs('admin.step*') || request()->is('admin-panel/metatags/about') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="home">{{ __('lang.about') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                    <a href="{{ route('admin.about') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.about_us') }}</div>
                    </a>
                </li>
                {{-- <li class="menu-item {{ request()->routeIs('admin.step')?'active':'' }}">
            <a href="{{ route('admin.step') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.work_steps') }}</div>
            </a>
          </li> --}}
                <li class="menu-item {{ request()->is('admin-panel/metatags/about') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'about') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- serives --}}
        {{-- <li class="menu-item {{ request()->routeIs('admin.service*') || request()->routeIs('admin.servicecat*') || request()->is('admin-panel/metatags/service') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="home">{{ __('lang.services') }}</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('admin.service*') ? 'active' : '' }}">
                    <a href="{{ route('admin.service') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.services') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/service') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'service') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- blogs --}}
        {{-- <li class="menu-item {{ request()->routeIs('admin.blog*') || request()->is('admin-panel/metatags/blogs') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="home">{{ __('lang.blogs') }}</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('admin.blog*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blog') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.blogs') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/blogs') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'blogs') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        {{-- projects --}}
        {{-- <li class="menu-item {{ request()->routeIs('admin.project*') || request()->is('admin-panel/metatags/project')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-briefcase"></i>
          <div data-i18n="home">{{ __('lang.projects_manage') }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ request()->routeIs('admin.project')?'active':'' }}">
            <a href="{{ route('admin.project') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.projects') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('admin-panel/metatags/project')?'active':'' }}">
            <a href="{{ route('admin.meta','project') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li> --}}

        {{-- projects management --}}
        {{-- <li class="menu-item {{request()->routeIs('admin.cat*') || request()->routeIs('admin.brand*') || request()->routeIs('admin.product*') || request()->is('admin-panel/metatags/products')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-briefcase"></i>
          <div data-i18n="home">{{ __('lang.projects_manage') }}</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ request()->routeIs('admin.brand')?'active':'' }}">
            <a href="{{ route('admin.brand') }}"  class="menu-link ">
              <div data-i18n="CRM">{{ __('lang.brands') }}</div>
            </a>
          </li>
          <li class="menu-item {{ request()->routeIs('admin.cat')?'active':'' }}">
              <a href="{{ route('admin.cat') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.categories') }}</div>
              </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.product')?'active':'' }}">
              <a href="{{ route('admin.product') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.projects') }}</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin-panel/metatags/products')?'active':'' }}">
            <a href="{{ route('admin.meta','products') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li> --}}
        {{-- packages management --}}
        {{-- <li class="menu-item {{request()->routeIs('admin.package.cat*')  || request()->routeIs('admin.package*') || request()->is('admin-panel/metatags/packages')?'active open':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-briefcase"></i>
          <div data-i18n="home">{{ __('lang.package_managment') }}</div>
        </a>
        <ul class="menu-sub">

          <li class="menu-item {{ request()->routeIs('admin.cat')?'active':'' }}">
              <a href="{{ route('admin.package.cat') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.package_categories') }}</div>
              </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.package*')?'active':'' }}">
              <a href="{{ route('admin.package') }}"  class="menu-link ">
                <div data-i18n="CRM">{{ __('lang.packages') }}</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin-panel/metatags/packages')?'active':'' }}">
            <a href="{{ route('admin.meta','packages') }}" class="menu-link">
              <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
            </a>
          </li>
        </ul>
      </li> --}}


        {{-- parteners --}}
        {{-- <li class="menu-item {{ request()->routeIs('admin.partener*') ? 'active' : '' }}">
            <a href="{{ route('admin.partener') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="parteners">{{ __('lang.parteners') }}</div>
            </a>
        </li> --}}


        {{-- features --}}
        <li class="menu-item {{ request()->routeIs('admin.feature*') ? 'active' : '' }}">
            <a href="{{ route('admin.feature') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-diamond"></i>
                <div data-i18n="features">{{ __('lang.features') }}</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('admin.message*') ? 'active' : '' }}">
            {{-- <a href="{{ route('admin.message') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-diamond"></i>
                <div data-i18n="messages">{{ __('lang.messages') }}</div>
            </a>
        </li> --}}

        <li class="menu-item {{ request()->routeIs('admin.why_chooses*') || request()->is('admin-panel/metatags/why_chooses') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="home">{{ __('lang.why_chooses') }}</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('admin.why_chooses*') ? 'active' : '' }}">
                    <a href="{{ route('admin.why_chooses') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.why_chooses') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/why_chooses') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'why_chooses') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.gallery*') || request()->is('admin-panel/metatags/gallery') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="home">{{ __('lang.gallery') }}</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item {{ request()->routeIs('admin.gallery*') ? 'active' : '' }}">
                    <a href="{{ route('admin.gallery') }}" class="menu-link ">
                        <div data-i18n="CRM">{{ __('lang.gallery') }}</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin-panel/metatags/gallery') ? 'active' : '' }}">
                    <a href="{{ route('admin.meta', 'gallery') }}" class="menu-link">
                        <div data-i18n="Analytics">{{ __('lang.metatag') }}</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item {{ request()->routeIs('admin.customer_opinions*') ? 'active' : '' }}">
            <a href="{{ route('admin.customer_opinions') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-diamond"></i>
                <div data-i18n="customer_opinionss">{{ __('lang.customer_opinions') }}</div>
            </a>
        </li>
        {{-- <li class="menu-item {{ request()->routeIs('admin.guards*')?'active':'' }}">
        <a href="{{ route('admin.guards') }}"  class="menu-link  ">
            <i class="menu-icon tf-icons bx bx-diamond"></i>
          <div data-i18n="guardss">{{ __('lang.guards') }}</div>
        </a>
      </li> --}}

        {{-- counter --}}
        <li class="menu-item {{ request()->routeIs('admin.counter*') ? 'active' : '' }}">
            <a href="{{ route('admin.counter') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div data-i18n="counters">{{ __('lang.counters') }}</div>
            </a>
        </li>
        {{-- faq --}}
        {{-- <li class="menu-item {{ request()->routeIs('admin.faq*') ? 'active' : '' }}">
            <a href="{{ route('admin.faq') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="faqs">{{ __('lang.faqs') }}</div>
            </a>
        </li> --}}

        {{-- settings --}}
        <li class="menu-item {{ request()->routeIs('admin.setting') ? 'active' : '' }}">
            <a href="{{ route('admin.setting') }}" class="menu-link  ">
                <i class="menu-icon tf-icons bx bx-abacus"></i>
                <div data-i18n="settings">{{ __('lang.settings') }}</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('admin.meta', 'contact') ? 'active' : '' }}">
            <a href="{{ route('admin.meta', 'contact') }}" class="menu-link">
                <div data-i18n="Analytics">{{ __('lang.contact_metatag') }}</div>
            </a>
        </li>

    </ul>
</aside>
