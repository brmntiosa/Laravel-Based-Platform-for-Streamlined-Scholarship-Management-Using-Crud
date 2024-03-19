@extends ('layouts.app')
@section ('content')

{{$chanelNames}} <br>
{!!chanelDescriptions!!} <br>

@foreach ($homes as $value)
{{$value}} <br>
@endforeach
@endsection 