<x-layout>
  
  
  <form method="POST" action="{{route('register')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">username</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome completo</label>
      <input type="text" name="fullname" class="form-control @error('fullname') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('fullname')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Città</label>
      <input type="text" name="city" class="form-control @error('city') is-invalid  @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      @error('city')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" id="exampleInputPassword1">
      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
      <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid  @enderror" id="exampleInputPassword1">
      @error('password_confirmation')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</x-layout>