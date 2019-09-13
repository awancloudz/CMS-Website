@extends($themes)

@section('content')
    @foreach($blogpost as $post)
        {!! $post->title !!}
    @endforeach
@endsection
