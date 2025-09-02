@extends('ui-panel.master')
@section('title', 'Posts')  
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                @foreach ($posts as $post)
                <div class="blog">
                    <h4>{{ $post->title}}</h4><br>
                    <img src={{ asset('storage/post-images/' . $post->image) }} alt="" style="border: 1px solid gray; height:400px "><br><br>
                    <span class="badge rounded-pill text-bg-secondary mx-3">{{ $post->category->name }}</span>
                    <small>{{ date('d-M-Y', strtotime($post->created_at)) }} | by Thet Htar</small><br><br>
                    <p>
                        {{ Str::substr($post->content, 0, 200) }}
                    </p>
                    <a href="{{ url('/posts/'. $post->id .'/details') }}">
                        <button class="btn btn-sm fw-bold">
                            Read More
                        </button>
                    </a>                                        
                </div>
                @endforeach
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="sidebar px-5">
                    <form action="{{ route('search-posts') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="input-group">
                                <input type="text" name="search_data" value="{{ request('search_data') }}" class="form-control" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <br><br><br>
                    <h5>Categories</h5>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="{{ url('/search-posts-by-category'. '/'. $category->id ) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>                                
    </div>
@endsection