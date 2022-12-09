<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
  @if(auth()->user()->role != 1 ) 
      <script>window.location.href = "/";</script>
  @endif
    {{-- @extends('admin.main')

    @section('container')
        <h1>Halaman edit user</h1>    
    @endsection --}}
    <a href="/admin">back</a>
    {{-- <table class="table-fixed">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table> --}}

    <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <th>Name</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach($users as $user)
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
                <div class="flex items-center space-x-3">
                  <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                      <img src="https://gpdi-hebron.com/website/images/banner/gpdi-hebron-gading-serpong-41181523042016.png" alt="" />
                    </div>
                  </div>
                  <div>
                    <div class="font-bold">{{ $user -> name }}</div>
                    <div class="text-sm opacity-50">United States</div>
                  </div>
                </div>
              </td>
              <td>
                {{ $user -> email }}
                <br/>
                <span class="badge badge-ghost badge-sm">
                    @if($user -> role == 1)
                        Admin
                    @else
                        User
                    @endif
                </span>
              </td>
              <th>
                <a href="/admin/user/{{ $user->id }}/edit">
                    <button class="btn btn-ghost btn-xs">Edit</button>
                </a>
                <form action="/admin/user/{{ $user->id }}/role" method="post">
                    @csrf
                    @method('patch')
                    <button class="btn btn-ghost btn-xs" type="submit">
                        @if($user -> role == 1)
                            Make User
                        @else
                            Make Admin
                        @endif
                    </button>
                </form>
                <form action="/admin/user/{{ $user->id }}/delete" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-ghost btn-xs" type="submit">Delete</button>
                </form>
              </th>
            </tr>
            @endforeach
          </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </tfoot>
          
        </table>
      </div>
</body>
</html>