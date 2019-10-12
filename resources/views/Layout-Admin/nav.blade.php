<div class="nano-content">

    <ul>
        <li class="yay-user-info">
            <a href="page-profile.html">
                <img src="{{ asset('asset-admin/assets/_con/images/user.jpg') }}" alt="John Doe" class="circle">
                <h3 class="yay-user-info-name">John Doe</h3>
                <div class="yay-user-location">
                    <i class="fa fa-map-marker"></i> Las Vegas, NV
                </div>
            </a>
        </li>

        <li class="label">Menu</li>

        <li class="open">
            <a href="{{ route('/dashboard') }}" class="yay-sub-toggle waves-effect waves-blue"> <i class="fa fa-dashboard"></i> Dashboards
                <span class="yay-collapse-icon mdi-navigation-expand-more"></span>
            </a>
            <ul>

                <li>
                    <a href="{{ route('/dashboard') }}" class=" waves-effect waves-blue">  Home   </a>

                </li>
                <li>
                    <a href="{{ route('product') }}" class=" waves-effect waves-blue">  Product   </a>

                </li>

            </ul>
        </li>
    </ul>

</div>