@extends('layouts.main')

@section('child')
<div class="container-fluid mt-5">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse margin-top: auto;">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/admin">
              <span data-feather="user"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/siswa">
              <span data-feather="users"></span>
              Event
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-bottom: 250px; margin-top: 50px;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <h4>Hai, {{ Auth::user()->role }} {{ Auth::user()->name }}</h4>
      <div class="table-responsive">
        <table class="table table-striped table-sm align-middle table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Jenis Event</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->tanggal }}</td>
              <td><a href="{{ $data->link }}">{{ $data->lokasi }}</a></td>
              <td>{{ $data->kategoriEvent }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection