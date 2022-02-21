@extends('admin.layouts.main')
@section('content')
<section class="section">
<div class="section-header">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcomback, {{ auth()->user()->name }}</h1>
    </div>
</div>
</section>
@endsection