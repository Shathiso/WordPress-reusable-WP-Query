
@extends('layouts.app')

@section('content')

{!! CustomQuery::custom_wp_query('event-registrations', 'DESC', 5, 'event-title', 'event-image', 'event-content' ) !!}
@endsection