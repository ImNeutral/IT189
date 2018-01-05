@extends('layouts.main')

@section('title', 'MSU-ISRP | Educational Attainment')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Educational Attainment</div>
            <hr>


        </form>
    </div>
@endsection


@section('foot')
    <script type="application/javascript">
        $(document).ready(function(){
            $('#educational-attainment').addClass('active');
        });
    </script>
@endsection

