@extends('layouts.main')

@section('title', 'MSU-ISRP | Productivity')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Productivity</div>
            <hr> 

        </form>
    </div>
@endsection


@section('foot')
    <script type="application/javascript">
        $(document).ready(function(){
            $('#productivity').addClass('active');
        });
    </script>
@endsection

