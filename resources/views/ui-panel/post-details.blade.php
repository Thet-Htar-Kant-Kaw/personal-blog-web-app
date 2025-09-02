@extends('ui-panel.master')
@section('title', 'Posts')  
@section('content')
    <div class="container">
        <div class="post-detail">
            <div>
                <h3>{{ $post->title }}</h3><br>
                <span class="badge rounded-pill text-bg-secondary">{{ $post->category->name }}</span><br><br>
                <img src={{ asset('storage/post-images/' . $post->image) }} alt="{{ $post->image }}" style="border: 1px solid gray; height: 400px;"><br><br>
                <span>
                    <i class="fa-solid fa-calendar-days"></i>
                    &nbsp;{{ date('d-M-Y', strtotime($post->created_at)) }}
                </span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                    <i class="fa-solid fa-user"></i>
                    &nbsp;{{ $post->user->name }}
                </span><br><br>                                  
                <p>
                    {{ $post->content }}
                </p>
                {{-- <button class="btn love-btn btn-sm">
                    <i class="fa-solid fa-heart"></i>
                    &nbsp;&nbsp;<span class="text-white">50</span>
                </button> --}}
                <form method="POST">
                    @csrf
                    <button type="submit" formaction="{{ url('/like/' . $post->id)}}" class="btn like-btn btn-sm"
                        @if ($likeStatus)
                            @if ($likeStatus->type == 'like')
                                disabled
                            @endif
                        @endif                        
                        >

                            <i class="fa-solid fa-thumbs-up"></i> &nbsp;&nbsp;
                            
                        @if ($likes)
                            <span class="text-white">{{ $likes->count() }}</span>                            
                        @else
                            <span class="text-white">0</span>                        
                        @endif
                    </button>

                    <button type="submit" formaction="{{ url('/dislike/' . $post->id)}}" class="btn like-btn btn-sm"
                        @if ($likeStatus)
                            @if ($likeStatus->type == 'dislike')
                                disabled
                            @endif
                        @endif                        
                    >
                        <i class="fa-solid fa-thumbs-down"></i>&nbsp;&nbsp;

                        @if ($dislikes)
                            <span class="text-white">{{ $dislikes->count() }}</span>                            
                        @else
                            <span class="text-white">0</span>                        
                        @endif
                    </button>
                    
                    <button type="button" class="btn cmt-btn btn-sm" data-bs-toggle="collapse" data-bs-target="#commentSection">
                        <i class="fa-solid fa-comment"></i>
                        &nbsp;&nbsp;<span class="text-white">{{ $comments->count() }}</span>
                    </button>
                </form>
               
            </div>
            
            <br><br>
            <div class="comment-box container border border-secondary-subtle rounded p-3 w-50">
                <form action="{{ url('/comment/' . $post->id) }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <textarea name="text" class="form-control fs-5" rows="3" placeholder="Enter your comments here..." required></textarea>
                        <button type="submit" class="btn">
                            <i class="fa-solid fa-paper-plane fs-4 px-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!----------- comments section --------------->
            <div class="collapse comment-section" id="commentSection">
                <div class="container">
                    @foreach ($comments as $comment)
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-2 d-flex justify-content-end align-items-start">
                                <img src="{{ asset('images/thkk.jpg') }}" alt="">
                            </div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <h5>{{ $comment->user->name }}</h5>
                                <p>
                                    {{ $comment->text }}
                                </p>
                            </div>    
                        </div>                        
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
@endsection