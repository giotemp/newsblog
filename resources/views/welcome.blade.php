<x-layout>

    <div class="container">
        <h1>Ultime notizie dal mondo</h1>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-4" style="margin-bottom: 20px">
                    <div class="card">
                        <h5 class="card-header">{{$article->title}}</h5>
                        <div class="card-body">                          
                            <p class="card-text">{{$article->body}}</p>
                          Autore : <a href="{{route('author.articles',$article->user_id)}}">{{$article->user->detail->fullname}}</a>
                            <hr>
                          Tags : 
                          @foreach ($article->tags as $tag)
                            <a href="" style="
                                background: gray;
                                border-radius:10px;
                                text-decoration: none;
                                color:white;
                                padding:5px;"
                            
                            >{{$tag->name}}</a>
                          @endforeach

                        </div>
                      </div>
                </div>
                
            @endforeach
        </div>
    </div>
    
</x-layout>