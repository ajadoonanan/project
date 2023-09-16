<style>
    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover,
    .form-control-borderless:active,
    .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
</style>



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br />
    <div class="row justify-content-center my-5">
        <div class="col-12 col-md-10 col-lg-8">
            <form action="{{ route('store') }}" method="GET" class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input name="search" class="form-control-lg form-control-borderless" type="search"
                            placeholder="Topics or keywords">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>
</div>