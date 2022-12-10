@extends ('layout.layouts')

@section('content')
    @foreach($reports as $report)
        <p>{{ $report->fullname_cliente }}</p>
    @endforeach
@endsection