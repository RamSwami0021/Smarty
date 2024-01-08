@extends('/Admin/Layout.app')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Gallery</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">New</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="form-control-repeater">
                    <div class="row">
                        <!-- Invoice repeater -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Images</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemname">Image</label>
                                                    <input type="file" id="file" class="form-control" name="img" required>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemquantity">Type</label>
                                                    <select class="form-select" id="itemquantity" name="image_type">
                                                        <option value="All">All</option>
                                                        <option value="Classroom">Classroom</option>
                                                        <option value="Playground">Playground</option>
                                                        <option value="Event">Event</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemquantity">Active</label>
                                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <button class="btn btn-icon btn-primary" type="submit">
                                                    <i data-feather="save" class="me-25"></i>
                                                    <span>Save</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /Invoice repeater -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
