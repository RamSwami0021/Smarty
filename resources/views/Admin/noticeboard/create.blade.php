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
                            <h2 class="content-header-title float-start mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Index
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Notice board</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.noticeboard.store') }}" method="POST" enctype="multipart/form-data" id="noticeboardForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon">Title</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="first-name-icon" class="form-control" name="title" placeholder="Title" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="file">File Upload</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="file" id="file" class="form-control" name="file" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label">Status</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="status" id="active" value="active" required>
                                                            <label class="form-check-label" for="active">Active</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive" required>
                                                            <label class="form-check-label" for="inactive">Inactive</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label">Popularity</label>
                                                    <div class="input-group input-group-merge">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="popularity" id="popular" value="popular" required>
                                                            <label class="form-check-label" for="popular">Popular</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="popularity" id="not-popular" value="not-popular" required>
                                                            <label class="form-check-label" for="not-popular">Not Popular</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
