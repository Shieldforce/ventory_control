@extends("$route[0].template.index")

@section("content")
    <div class="content-wrapper">
        @includeIf("$route[0].template.header_views")

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </section>

    </div>
@endsection
