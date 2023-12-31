<link rel="stylesheet" href="/css/navbar.css">

<div class="sidenav" data-aos="slide-right" data-aos-duration="500">
    <div class="logo">
        <img src="/img/HRconnect_Name.png" />
    </div>
    <div class="navbar">
        <!-- DASHBOARD -->
        <a href="/Admin/Dashboard"><i class="fa-solid fa-table-cells-large"></i><span class="hide">DASHBOARD</span></a>
        <a href="/Admin/Organization"><i class="fa-solid fa-sitemap"></i><span class="hide"> ORGANIZATION</span></a>
        <a href="/Admin/Employee"><i class="fa-solid fa-user"></i><span class="hide"> EMPLOYEES</span></a>
        <a href="/Admin/Attendance"><i class="fa-solid fa-id-card-clip"></i><span class="hide"> ATTENDANCE</span></a>
        <a href="/Admin/Leave"><i class="fa-solid fa-right-from-bracket"></i><span class="hide"> LEAVE</span></a>
        <a href="/trial"><i class="fa-solid fa-credit-card"></i><span class="hide"> PAYROLL</span></a>

        <a disabled href="/trial"><i class="fa-solid fa-user-group"></i><span class="hide"> RECRUITMENT</span></a>
        <hr style="color: white; font-weight: 700;">
        <a href="/Admin/CreateUser"><button class="CreateUser"><span class="hide">Create User</span></button></a>

        <div class="messege">
            @include('Layout.Messege')
        </div>


        {{-- <div class="navbarhead">
            <div class="dropdown" data-aos="slide-left" data-aos-duration="4000">
                <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false"
                    data-bs-offset="900,10">
                    <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                </button>
                <ul class="dropdown-menu me-3">
                    <li><a class="dropdown-item" href="/Profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/trial">Setting</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                </ul>
            </div>
        </div> --}}


        <div class="dropdown">
            <img class="profile_picture" src="/img/user_profiles/{{$employee_picture->picture}}" alt="{{$employee_picture->first_name}} pictures" onclick="toggleDropdown()">
            <div class="dropdown-content" id="myDropdown">
                <a href="/trial">Profile</a>
                <a href="/trial">Setting</a>
                <a href="/logout">Log out</a>
            </div>
        </div>

        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("myDropdown");
                dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
            }

            window.onclick = function(event) {
                if (!event.target.matches('.profile_picture')) {
                    var dropdown = document.getElementById("myDropdown");
                    if (dropdown.style.display === "block") {
                        dropdown.style.display = "none";
                    }
                }
            }
        </script>





    </div>
</div>

<head>

</head>