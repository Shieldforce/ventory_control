<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ $header['crudName'] }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route("$route[0].main.index") }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route("$route[0].$route[1].index") }}">{{ $header['ambient'] }}</a></li>
                    <li class="breadcrumb-item active">{{ $header['controller'] }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
