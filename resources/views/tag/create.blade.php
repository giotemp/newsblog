<x-layout>

    


        <form method="POST" action="{{route('tag.store')}}">
            @csrf
          <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Nome del tag</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1">
            </div>
    
 
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    
    

</x-layout>