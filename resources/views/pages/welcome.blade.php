@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        
        </div> <!-- end of header .row -->
		
		<div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

			@foreach($posts as $post)
            <div class="col-sm-3 col-xs-6">

                    <a href="{{ url('blog/'.$post->slug) }}">

<img src="{{ asset('images/'.$post->image)}}" height="120" width="220"/>
</a> 
				
				<hr>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
				
            </div> 
			@endforeach
		</div>

        
@stop