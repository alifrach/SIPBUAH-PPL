<div class="sidebar-fixed position-fixed">

    <a class="logo-wrapper waves-effect">
      <img src="{{ asset('assets/img/logosipbuah.png') }}" class="img-fluid" alt="">
    </a>

    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item active waves-effect">
        <i class="fa fa-pie-chart mr-3"></i>Dashboard
      </a>
      <a href="#" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-user mr-3"></i>Profil</a>
      <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-users mr-3"></i>User</a>
      <a href="#" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-table mr-3"></i>Katalog</a>
    </div>

</div>
