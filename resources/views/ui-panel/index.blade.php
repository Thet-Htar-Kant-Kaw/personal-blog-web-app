@extends('ui-panel.master')
@section('content')
    <!-- ABOUT ME AND MY SKILLS -->
    <div class="about-me px-5">
        <div class="row">
            <div class="col-md-5">
                <br>
                <div id="about">
                    <h2 class="text-center">ABOUT ME</h2><br>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia
                        velit maiores quaerat. Sit cumque sapiente facere numquam, doloribus
                        laboriosam fugiat molestiae! Veritatis, exercitationem earum ratione
                        et error similique doloremque.
                    </P>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate quia
                        velit maiores quaerat. Sit cumque sapiente facere numquam, doloribus
                        laboriosam fugiat molestiae! Veritatis, exercitationem earum ratione
                        et error similique doloremque.
                    </P><br>
                    <div class="row py-3 fs-4">
                        <div class="col-md-6 mb-2">
                            <div class="total-project">
                                <i class="fa-solid fa-diagram-project pb-2"></i><br>
                                <strong>{{ $projects->count() }}</strong>
                                <p>Total Projects</p>
                            </div>
                        </div>
                        @if ($studentCount)
                            <div class="col-md-6">
                                <div class="total-student">
                                    <i class="fa fa-users pb-2"></i><br>
                                    <strong>{{ $studentCount->count }}</strong>
                                    <p>Total Students</p>
                                </div>
                            </div>                            
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7 px-5">
                <br>
                <h2 class="text-center">MY SKILLS</h2><br>
                @foreach ($skills as $skill)
                    <div class="row mb-4">
                        <div class="col-md-10">
                            <div class="progress mt-2">
                                <div class="progress-bar" style="width: {{ $skill->percentage }}%;">
                                    {{ $skill->percentage }}%
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            {{ $skill->name }}
                        </div>
                    </div>
                @endforeach
                {{ $skills->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <!-- PROJECTS -->
    <br>
    <div class="projects px-5" id="projects">
        <h2 class="text-center">MY PROJECTS</h2><br><br>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 mb-2">
                    <div class="project">
                        <a href="{{ $project->url }}" target="_blank">
                            <i class="fa-solid fa-diagram-project pb-2"></i><br>
                            <strong>{{ $project->name }}</strong>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- BLOGS -->
    <br><br>
    <div class="latest-post px-5" id="blogs">
        <h2 class="text-center">LATEST POSTS</h2><br><br>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 col-sm-6 mb-3 post">
                    <a href="{{ url('/posts/' . $post->id . '/details') }}">
                        <h5>{{ $post->title }}</h5><br>
                        <img src={{ asset('storage/post-images/' . $post->image) }} alt=""><br><br>
                        <small>{{ date('d-M-Y', strtotime($post->created_at)) }} | by {{ $post->user->name }}</small><br><br>
                        <p>
                            {{ Str::substr($post->content, 0, 200) }}
                        </p>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
