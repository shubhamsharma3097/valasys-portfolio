@extends('website.layouts.layout')
@section('title', 'Valasys - Home')
@section('content')

    <div class="container">
        <div align="center" style="background-color: Red; width:100%; height: 100%">
            <h1>HELLO MAIN DIV</h1>
        </div>
            <div style="background-color: Green; width:70%; height: 70%">
                <h2>HELLO INNER DIV</h2>
            </div>
                <div style="background-color: Purple; width:50%; height: 50%">
                    <h3>HELLO INNER DIV</h3>
                </div>
    </div>

@endsection
@push('js')
@endpush
