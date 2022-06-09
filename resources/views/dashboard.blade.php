@extends('layouts.app')

@section('content')
<div>Your Name is: {{session("user")}}</div>
<h2>This is Dashboard</h2>
@endsection