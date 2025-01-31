<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('acceuil')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hospital-o"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SunuHopital</div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Utilities Collapse Menu -->
            <li
                class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Rendez-vous</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/attente">Nouveaux</a>
                        <a class="collapse-item" href="/approuve">Approuvés</a>                
                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Docteurs</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Recherches</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Mon Profil</span></a>
            </li>


        </ul>