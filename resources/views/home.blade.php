@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"><script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"><script>

</script>
@endsection
