@extends('welcome')
@section('title')
    Laravel page
@endsection
@section('messages')
    @foreach ($messages as $message) {{-- changed timezone --}}
        @if($message->created_at->format("Y") == date('Y'))
            <li> {{ $message->id }} message: {{ $message->content }} created on {{ $message->created_at->format("Y-m-d H:i") }} </li> {{-- optional --}}
        @endif
    @endforeach
    {{ $someString }}
@endsection