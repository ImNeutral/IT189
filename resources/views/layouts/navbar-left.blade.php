<div class="col-lg-3 col-md-4">
    <div class="btn-group-vertical navbar-style" role="group" aria-label="Vertical button group">

        <a class="btn btn-light btn-nav" href="#">Basic Information</a>
        <a class="btn btn-light btn-nav" href="#">I - Educational Attainment</a>
        <a class="btn btn-light btn-nav" href="#">II - Work Experience</a>
        <a class="btn btn-light btn-nav" href="#">III - Productivity</a>
        <a class="btn btn-light btn-nav" href="#">IV - Teaching Efficiency Rating</a>
        <a class="btn btn-light btn-nav" href="#">V - Professional Growth</a>
        <a href="{{ route('get.extra-academic-activities') }}"
        class="btn btn-light btn-nav {{ Request::is('extra-academic-activities') ? 'active' : ''}}" 
        href="#">VI - Extra-academic Activities</a>
        <a class="btn btn-light btn-nav" href="#">VII - Extension Services</a>

        <a class="btn btn-light btn-nav" id="basic-information"          >Basic Information</a>
        <a class="btn btn-light btn-nav" id="educational-attainment"     >I - Educational Attainment</a>
        <a class="btn btn-light btn-nav" id="work-experience"            >II - Work Experience</a>
        <a class="btn btn-light btn-nav" id="productivity"               >III - Productivity</a>
        <a class="btn btn-light btn-nav" id="teaching-efficiency-rating" >IV - Teaching Efficiency Rating</a>
        <a class="btn btn-light btn-nav" id="professional-growth"        >V - Professional Growth</a>
        <a class="btn btn-light btn-nav" id="extra-academic-activities"  >VI - Extra-academic Activities</a>
        <a class="btn btn-light btn-nav" id="extension-services"         >VII - Extension Services</a>

    </div>
</div>