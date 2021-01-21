@section('subsearch')
    <?php use App\Helpers\dateHelper; ?>
    <div class="container-fluid p-0 bg-secondary search">
        <div class="container-fluid p-4 d-flex justify-content-between flex-column flex-lg-row">
            <form class="search-form" action="{{ route('search') }}" method="get">
                <div class="form-group d-flex">
                    <input class="form-control me-4" type="text" name="search_input" id="search_input" placeholder="Search article..." autocomplete="off">
                    <button class="btn btn-light" type="submit">Search</button>
                </div>
            </form>
            <h2 class="date">{{dateHelper::showDate()}}</h2>
        </div>
    </div> 
@show