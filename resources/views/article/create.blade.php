<x-layout>


    <form method="POST" action="{{route('article.store')}}">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="exampleInputTitle1">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Testo</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
    </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>