<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GPdI Hebron - {{ $title }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    {{-- @extends('admin.main')

    @section('container')
        <h1>Halaman edit cg</h1>    
    @endsection --}}

    <a href="/admin">back</a>
    
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
              <th>Contacts</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach($cgs as $cg)
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
                    <div class="font-bold">{{ $cg -> name }}</div>
                    <div class="text-sm opacity-50">United States</div>
                  </div>
                </div>
              </td>
              <td>
                {{ $cg -> email }}
                <br/>
                <span class="badge badge-ghost badge-sm">
                    {{ $cg -> phone }}
                </span>
              </td>
              <td>
                {{ $cg -> date }}
              </td>
              <td>
                {{ $cg -> time }}
              </td>
                <td>
                    {{ $cg -> location }}
                </td>
              <th>
                <a href="/admin/cg/{{ $cg -> id }}/edit">
                  <button class="btn btn-ghost btn-xs">Edit</button>
                </a>
                {{-- <form action="/admin/cg/{{ $cg->id }}/role" method="post">
                    @csrf
                    @method('patch')
                    <button class="btn btn-ghost btn-xs" type="submit">
                        @if($cg -> role == 1)
                            Make cg
                        @else
                            Make Admin
                        @endif
                    </button>
                </form>
                <form action="/admin/cg/{{ $cg->id }}/delete" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-ghost btn-xs" type="submit">Delete</button>
                </form> --}}
              </th>
            </tr>
            @endforeach
          </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Contacts</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                <th>Action</th>
            </tr>
          </tfoot>
          
        </table>
      </div>
</body>
</html>