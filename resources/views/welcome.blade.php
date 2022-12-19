@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-md-2 mt-3 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card p-3">
                <h3>{{$movie->original_title}}</h3>
                <ul class="list-unstyled text-uppercase">
                    <li>nationality: {{$movie->nationality}}</li>
                    <li>date: {{$movie->date}}</li>
                    <li>vote: {{$movie->vote}}</li>
                </ul>

            </div>
            <!-- /.card -->
        </div>
        @empty
        <div class="col">
            <div class="card">non ci sono film</div>
            <!-- /.card -->
        </div>
        @endforelse
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
@endsection