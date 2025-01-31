<ul class="navbar-nav ml-auto">


<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->titre}}</span>
        <img class="img-profile rounded-circle" src="{{asset('assets/images/profil.png')}}">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/profil">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profil
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Déconnexion
        </a>
    </div>
</li>

</ul>

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">De vouloir déconnecter.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
        <!-- <a class="btn btn-danger" href="{{route('logout')}}">Déconnecter</a> -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Deconnexion') }}
            </a>
        </form>
    </div>
</div>
</div>
</div>
