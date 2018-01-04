<div class="col-lg-3 col-md-4">
    <div class="btn-group-vertical navbar-style" role="group" aria-label="Vertical button group">
        <a class="btn btn-light btn-nav" href="#">Basic Information</a>
        <a class="btn btn-light btn-nav" href="#">I - Educational Attainment</a>
        <a class="btn btn-light btn-nav" href="#">II - Work Experience</a>
        <a class="btn btn-light btn-nav" href="#">III - Productivity</a>
        <a class="btn btn-light btn-nav" href="#">IV - Teaching Efficiency Rating</a>
        <a class="btn btn-light btn-nav" href="#">V - Professional Growth</a>
        <a href="{{ route('get.extra-academic-activities') }}"
        class="btn btn-light btn-nav {{ Request::path() === '/extra-academic-activities/' ? 'active' : ''}}" 
        href="#">VI - Extra-academic Activities</a>
        <a class="btn btn-light btn-nav" href="#">VII - Extension Services</a>
    </div>
</div>