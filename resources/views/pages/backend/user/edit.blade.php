@extends('layouts.backend.main')

@section('content')
          <div class="container-fluid rounded bg-white p-3">
                <div class="mb-2">
                     <a class="btn btn-dark" href="{{ route('user.index') }}"><i class="bi bi-arrow-left"></i></a>
               </div>
               <form class="w-75" method="POST" action="{{ route('user.update', $user) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 w-50">
                         <label for="name" class="form-label">Username</label>
                         <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3 w-50">
                         <label for="email" class="form-label">Email</label>
                         <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    
                     {{-- <div class="mb-3 w-50">
                         <label for="role" class="form-label">Role</label>
                         <select class="form-select" id="inputGroupSelect01" name="role">
                              <option value="admin">Admin</option>
                              <option value="employee">Employee</option>
                         </select>
                    </div> --}}
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>

          </div>
@endsection