<div class="row justify-content-between">
    <div class="col-3">
        @if($pageNumber > 0)
        <a href="{{ url(App\PageNames::page($pageNumber-1)) }}" class="btn btn-outline-success btn-sm"><< Previous</a>
        @endif
    </div>
    <div class="col-3 text-right">
        @if($pageNumber < 7)
        <a href="{{ url(App\PageNames::page($pageNumber+1)) }}"  class="btn btn-outline-success btn-sm">Next >></a>
        @endif
    </div>
</div>