@extends('layouts.main')

@section('title', 'MSU-ISRP | Extra Academic Services')

@section('content')

    <div class="col-lg-9 col-md-8 sub-content">
        <form method="POST">
            {{ csrf_field() }}

            @include('layouts.previous-next-control')


            <div class="display-3 text-center">Extra Academic Services</div>
            <hr> 

        </form>
    </div>
@endsection

@section('foot')
    <script type="application/javascript">
        $(document).ready(function(){
            $('#extra-academic-activities').addClass('active');
        });
    </script>
@endsection
