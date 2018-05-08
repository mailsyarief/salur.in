@extends('layouts.app')
@section('masuk','active')
@section('content')

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    DASHBOARD AGENCY
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
