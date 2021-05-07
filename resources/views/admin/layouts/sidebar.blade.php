<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                NyoTsong Administration
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ url('/admin') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/categories/category') }}">
                    <i class="ti-panel"></i>
                    <p>Product Category</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/locations/location') }}">
                    <i class="ti-panel"></i>
                    <p>Location</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/salesNdons/sale') }}">
                    <i class="ti-archive"></i>
                    <p>Sales Products</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/salesNdons/donation') }}">
                    <i class="ti-archive"></i>
                    <p>Donation Products</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/systemfeedback') }}">
                    <i class="fa fa-archive"></i>
                    <p>System Feedbacks</p>
                </a>
            </li>
        </ul>
    </div>
</div>
