@extends('layouts.admin')

@section('content')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Utilisateurs</h1>
      <p class="masthead-subheading font-weight-light mb-0">{{ $users->total() }} Enregistrements</p>

    </div>
</header>

<section class="page-section portfolio" id="portfolio">

  <div class="container-fluid">

    <div class="row m-2">

      <div class="col">
            <form method="GET" action="{{ route('admin.users.index') }}">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" value="{{ $search }}" placeholder="Rechercher..." name="search">
                  <div class="input-group-append">
                    <a class="btn btn-secondary" href="{{ route('admin.users.index') }}"><i class="fas fa-times"></i></a>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </div>
            </form>
      </div>

      <div class="col">
        {{ $users->links() }}
      </div>

    </div>

    <table class="table table-striped">

      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"><a href="/admin/users?sort_by=name&search={{ $search }}">Nom</a></th>
          <th scope="col">Email</th>
          <th scope="col"><a href="/admin/users?sort_by=created_at&search={{ $search }}">Date</a></th>
          <th scope="col">Roles</th>
          <th scope="col"><a href="/admin/users?sort_by=scores_count&search={{ $search }}">Parties jouées</a></th>
          <th scope="col">Dernière partie</th>
          <th scope="col">Inscription</th>
          <th></th>
        </tr>
      </thead>

      <tbody>

        @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td><a href="{{ route('user.profil', $user) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
            <td>
              @foreach ($user->roles as $role)
                <span class="badge badge-info">{{ $role->name }}</span>
              @endforeach
            </td>
            <td>{{ $user->scores->count() }}</td>
            <td>@if($user->scores->count()){{ date('d/m/Y H:i', strtotime(optional($user->scores->last())->created_at)) }}@endif</td>
            <td>@if($user->provider) {{ $user->provider }} @else Blinest @endif</td>
            <td>
              <form action="{{ url('/admin/users', ['id' => $user->id]) }}" method="post" onsubmit="return confirm('Êtes-vous sûr?');">
                  <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                  @method('delete')
                  @csrf
              </form>
            </td>
          </tr>        
        @endforeach

      </tbody>

    </table>

  </div>


</section>


@endsection