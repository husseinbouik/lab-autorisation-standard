@extends('layouts.app')
@section('title','Menmber managment')
@section('content')


<div class="content-wrapper" style="min-height: 1302.4px;">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List of Members</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a href="{{ route('users.create') }}" class="btn btnAdd">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class=" p-0">
                                <form class="" method="GET" action="{{ route('users.index') }}">
                                    <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                        <input type="search" class="form-control form-control-lg" name="searchUsers" id="searchUsers" placeholder="Recherche" value="{{ !empty($search) ? $search : '' }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                                </form>
                        
                        </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            @include('users.table') {{-- Include the table partial --}}

                        </div>
                   
                    </div>

                </div>
            </div>
        </div>

    </section>

 

</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        function fetch_data(page, search) {
            $.ajax({
                url: "{{ route('users.index') }}?page=" + page + "&searchUsers=" + search,
                success: function(data) {
                    $('tbody').html(data);
                }
            });
        }

        $('body').on('click', '.pagination a', function (param) {
            param.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var search = $('#searchUsers').val();
            fetch_data(page, search);
        });

        $('body').on('keyup', '#searchUsers', function () {
            var search = $('#searchUsers').val();
            var page = $('#hidden_page').val();
            fetch_data(page, search);
        });

        fetch_data(1, '');
    });
</script>
@endsection
