<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.home.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('translations') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Translations</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('service.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Services</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('client.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Clients</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('testimonial.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Testimonials</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('team.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Teams</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.contact.edit') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Contact</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.quotation.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Quotations</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.message.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Messages</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.applicant.index') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Applicants</span>
            </a>
        </li>


{{--        <li class="nav-item nav-category">UI Elements</li>--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
{{--                <i class="menu-icon mdi mdi-floor-plan"></i>--}}
{{--                <span class="menu-title">UI Elements</span>--}}
{{--                <i class="menu-arrow"></i>--}}
{{--            </a>--}}
{{--            <div class="collapse" id="ui-basic">--}}
{{--                <ul class="nav flex-column sub-menu">--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>--}}
{{--                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </li>--}}

    </ul>
</nav>
