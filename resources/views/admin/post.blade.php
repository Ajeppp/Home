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
        <h1>Halaman edit post</h1>    
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
              <th>Title</th>
              <th>Content</th>
              <th>Post Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach($posts as $post)
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <td>
               {{ $post -> title }}
              </td>
              <td>
               {{ $post -> content }}
              </td>
              <td>
                {{ $post -> created_at }}
              </td>
              <th>
                <a href="/admin/post/{{ $post->id }}/edit">
                    <button class="btn btn-ghost btn-xs">Edit</button>
                </a>
                <form action="/admin/post/{{ $post->id }}/delete" method="POST">
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
              <th>Post Time</th>
              <th>Action</th>
            </tr>
          </tfoot>
          
        </table>
      </div>
</body>
</html>