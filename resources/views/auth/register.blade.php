<x-layout>


    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">username</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome completo</label>
          <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Città</label>
        <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>