
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h1>{{ $title }}</h1>
	
	@if(Auth::check())
		<p>Logged in as:</p>
		
		<p>
			Name: {{ Auth::user()->name }}<br>
			Email: {{ Auth::user()->email }}<br>
			
			<a href="{{ url('user/account') }}">My Account</a> | 
			<a href="{{ url('user/logout') }}">Logout</a> <!-- Can use url() or route() helper functions for URL -->
		</p>
	@else
		<p>
			<a href="{{ route('user.logout') }}">Login</a> | 
			<a href="{{ route('user.register') }}">Register</a> 
		</p>
	@endif
		
@endsection
