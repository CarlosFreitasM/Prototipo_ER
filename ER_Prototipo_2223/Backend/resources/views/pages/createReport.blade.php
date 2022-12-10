@extends ('layout.layouts')

@section('content')
    @foreach($tecReports as $report)
        <p>{{ $report->fullname_cliente }}</p>
    @endforeach
@endsection