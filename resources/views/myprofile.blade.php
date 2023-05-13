<x-layout>
    Username : {{Auth::user()->name}} <br>
    Email : {{Auth::user()->email}} <br>
Nome Completo = {{Auth::user()->detail->fullname}} <br>
   Città = {{Auth::user()->detail->city}} <br>


   <div class="container">
    <div class="row">
        @foreach (Auth::user()->articles as $article)
            <div class="col-4" style="margin-bottom: 20px">
                <div class="card">
                    <h5 class="card-header">{{$article->title}}</h5>
                    <div class="card-body">                          
                        <p class="card-text">{{$article->body}}</p>
                      Autore : <a href="{{route('author.articles',$article->user_id)}}">{{$article->user->detail->fullname}}</a>
                    </div>
                  </div>
            </div>
            
        @endforeach
    </div>
</div>


</x-layout>