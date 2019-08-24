@extends($themes)

@section('content')
    @foreach($blogpost as $post)
        {!! $post->description !!}
    @endforeach
@endsection
