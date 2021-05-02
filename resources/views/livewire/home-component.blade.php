<div class="container-fluid">
    <h4 class="page-title">Dashboard</h4>
    <div class="row">
        <div class="col-md-3">
            <a href="/supplier">
            <div class="card card-stats card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                {{count($supplier->where('status', 'Pending')->all())}}
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <p class="card-category">Pending Supplier</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/material">
            <div class="card card-stats card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                {{count($material->where('status', 'Pending')->all())}}
                            </div>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <p class="card-category">Pending Material</p>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
