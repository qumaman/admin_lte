@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Pages</h1>
@stop

@section('content')
    <div class="content p-3 p-md-5">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h2 class="mb-0">Docs</h2>
            </div>
            <div class="col-lg-6">
                <a href="https://lap.kjjdion.com/admin/docs/create" class="btn btn-primary mt-2 mt-md-0 pull-right">Create Doc</a>
            </div>
        </div>

        <table class="table dataTable no-footer dtr-inline" id="docs_datatable" role="grid" aria-describedby="docs_datatable_info"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1">Title</th><th class="sorting_disabled" rowspan="1" colspan="1">Type</th><th class="sorting_disabled" rowspan="1" colspan="1"></th></tr></thead><tbody><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0rem">
                        Documentation
                    </div></td><td>Index</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/1" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/1" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/1" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/1" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="" disabled="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0rem">
                        Page Not Found
                    </div></td><td>404</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/2" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/2" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/2" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/2" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="" disabled="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0rem" class="font-weight-bold">
                        Getting Started
                    </div></td><td>Menu Heading</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/5" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/5" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/5" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/5" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Installation
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/3" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/3" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/3" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/3" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Configuration
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/4" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/4" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/4" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/4" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0rem" class="font-weight-bold">
                        CRUD Generator
                    </div></td><td>Menu Heading</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/6" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/6" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/6" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/6" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Commands
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/7" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/7" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/7" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/7" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Configuration
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/8" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/8" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/8" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/8" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0rem" class="font-weight-bold">
                        Features
                    </div></td><td>Menu Heading</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/14" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/14" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/14" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/14" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Demo Mode
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/15" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/15" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/15" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/15" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Roles &amp; Permissions
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/16" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/16" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/16" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/16" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Activity Logs
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/17" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/17" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/17" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/17" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Documentation
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/18" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/18" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/18" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/18" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Settings
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/19" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/19" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/19" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/19" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0rem" class="font-weight-bold">
                        Functionality
                    </div></td><td>Menu Heading</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/20" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/20" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/20" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/20" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Middleware
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/21" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/21" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/21" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/21" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Traits
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/22" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/22" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/22" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/22" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Helper Functions
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/25" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/25" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/25" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/25" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        AJAX Forms
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/23" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/23" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/23" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/23" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Datatables
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/24" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/24" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/24" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/24" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Unit Tests
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/30" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/30" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/30" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/30" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0rem" class="font-weight-bold">
                        Customization
                    </div></td><td>Menu Heading</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/26" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/26" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/26" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/26" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Default Controller
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/27" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/27" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/27" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/27" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="even"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Default Views
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/28" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/28" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/28" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/28" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr><tr role="row" class="odd"><td tabindex="0"><div style="margin-left: 0.75rem">
                        Publishing Files
                    </div></td><td>Page</td><td><div class="text-right text-nowrap">
                        <a href="https://lap.kjjdion.com/admin/docs/read/29" class="btn btn-link text-secondary p-1" title="Read"><i class="fas fa-lg fa-eye"></i></a>
                        <a href="https://lap.kjjdion.com/admin/docs/update/29" class="btn btn-link text-secondary p-1" title="Update"><i class="fas fa-lg fa-edit"></i></a>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/move/29" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="PATCH">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Up" value="up">
                                <i class="fas fa-lg fa-angle-up"></i>
                            </button>
                            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Move Down" value="down">
                                <i class="fas fa-lg fa-angle-down"></i>
                            </button>
                        </form>
                        <form method="POST" action="https://lap.kjjdion.com/admin/docs/delete/29" class="d-inline-block" novalidate="" data-ajax-form="">
                            <input type="hidden" name="_token" value="VquMGofZyKG52l4rTyGmoIDzvB6jPx54jd5KJzyd">            <input type="hidden" name="_method" value="DELETE">            <button type="submit" name="_submit" class="btn btn-link text-secondary p-1" title="Delete" value="reload_datatables" data-confirm="">
                                <i class="fas fa-lg fa-trash-alt"></i>
                            </button>
                        </form>
                    </div></td></tr></tbody></table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#docs_datatable').DataTable();
        } );
    </script>
@stop