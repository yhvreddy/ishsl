<style>
    .menulabel{
        box-shadow: 0px 0px 2px 0px #fff;
        margin: 4px 0px 4px 6px !important;
    }
    .menulabel .nav-link{
        padding: 0.5em 1.50em 0.5em 1.50em !important;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
                <div class="profile-image">
                    <img src="https://via.placeholder.com/37x37" alt="image">
                </div>
                <div class="profile-name">
                    <p class="name">
                        Login userName
                    </p>
                    <p class="designation">
                        User role or mail-id
                    </p>
                </div>
            </div>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="../dashboard">
                <i class="mdi mdi-shield-check menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Hospitals" aria-expanded="false" aria-controls="ui-Hospitals">
                <i class="mdi mdi-hospital-building menu-icon"></i>
                    <span class="menu-title">Hospitals</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Hospitals">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">New Hospital</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Hospitals List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../hospital/hospital_types.php">Hospital Types</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../hospital/specialization_types.php">Hospital Specialization's</a></li>
                    <li class=""></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-bloodBank" aria-expanded="false" aria-controls="ui-bloodBank">
                <i class="mdi mdi-hospital menu-icon"></i>
                    <span class="menu-title">Blood Bank</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-bloodBank">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">New Blood Bank</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blood Banks List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../bloodbank/bloodgroup_types.php">Blood Groups</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Donner" aria-expanded="false" aria-controls="ui-Donner">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">Blood Donners</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Donner">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Add Blood Donner</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blood Donners List</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Ambulance" aria-expanded="false" aria-controls="ui-Ambulance">
                <i class="mdi mdi-ambulance menu-icon"></i>
                    <span class="menu-title">Ambulance</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Ambulance">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">New Ambulance</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Ambulance's List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../ambulance/ambulance_types.php">Ambulance Types</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Charities" aria-expanded="false" aria-controls="ui-Charities">
                <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Charities</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Charities">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">New Charity</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Charity List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../charity/charity_types.php">Charity Types</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../charity/donations_types.php">Donation's Types</a></li>
                </ul>
            </div>
        </li>
        
        <li class="nav-item active menulabel">
            <a class="nav-link" href="javascript:(0);">
                <i class="mdi mdi-laptop menu-icon"></i>
                <span class="menu-title">Master Data</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-Locations" aria-expanded="false" aria-controls="ui-Locations">
                <i class="mdi mdi-home-map-marker menu-icon"></i>
                    <span class="menu-title">Locations</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-Locations">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../locations/countries.php"> Countries </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../locations/states.php"> States </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../locations/districts.php"> Districts </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../locations/cities.php"> Cities </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="../locations/locations.php"> Locations </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../accident_types/accident_types.php">
                <i class="mdi mdi-link-variant-off menu-icon"></i>
                <span class="menu-title">Accident Types</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="../roles/roles.php">
                <i class="mdi mdi-shield-check menu-icon"></i>
                <span class="menu-title">Roles</span>
            </a>
        </li>

    </ul>
</nav>