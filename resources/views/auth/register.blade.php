<x-layout>
   <div class="container">
       <div class="row">
           <div class="col-md-5 mx-auto">
               <h3 class="text-primary text-center mt-3">Register form</h3>
               <div class="card p-4 my-3 shadow-sm">
                <form method="POST">
                    @csrf

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" required  name="name" value="{{ old('name') }}">
                        <x-error name='name'/>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" required  name="username" value="{{ old('username') }}">
                        <x-error name='username'/>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                        <x-error name='email'/>
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" required id="exampleInputPassword1" name="password">
                        <x-error name='password'/>
                      </div>
                       {{-- <ul>
                           @foreach ($errors->all() as $error)
                           <li class="text-danger">{{ $error }}</li>
                           @endforeach
                       </ul> --}}
                      <button type="submit" class="btn btn-primary">Submit</button>

                  </form>
               </div>
           </div>
       </div>
   </div>
</x-layout>
