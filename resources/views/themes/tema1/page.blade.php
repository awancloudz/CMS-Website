@extends($themes)

@section('content')
    @foreach($pages as $page)
        @include($folder)
    @endforeach
    <br><br><br>
@endsection

@section('footer')
	@include($footer)
@stop
