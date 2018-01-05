@extends('layouts.main')

@section('title', 'MSU-ISRP | Teaching Efficiency Rating')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Teaching Efficiency Rating</div>
            <hr> 

        </form>
    </div>
@endsection


@section('foot')
    <script type="application/javascript">
        $(document).ready(function(){
            $('#teaching-efficiency-rating').addClass('active');
        });
    </script>
@endsection

