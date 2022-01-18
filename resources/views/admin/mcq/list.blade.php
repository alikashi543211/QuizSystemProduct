@extends('layouts.admin')

@section('title', 'MCQs')

@section('nav-title', 'MCQs')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon"><i class="material-icons">list</i></div>
                        <h5 class="card-title">MCQ List</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- @include('admin.components.date_filter_form') --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="toolbar text-right">
                                    <button type="button" id="add_mcq_btn" class="btn btn-primary">+ Add</button>
                                </div>
                            </div>
                        </div>

                        @include('admin.mcq.components.table_spinner')

                        <div class="material-datatables mt-3 theme_table_main_div">
                            <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($mcq_list->count() > 0)
                                        @foreach ($mcq_list as $item)
                                            <tr class="table_data_row">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    {{ $item->question }}
                                                </td>
                                                
                                                <td>
                                                    <button type="button" rel="tooltip" class="btn btn-primary btn-round" data-original-title="Detail" title="Detail">
                                                        <i class="material-icons">list</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="Edit" title="Edit">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="material-datatables mt-3 theme_table_main_div">
                            <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($mcq_list->count() > 0)
                                        @foreach ($mcq_list as $item)
                                            <tr class="table_data_row">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    {{ $item->question }}
                                                </td>
                                                
                                                <td>
                                                    <button type="button" rel="tooltip" class="btn btn-primary btn-round" data-original-title="Detail" title="Detail">
                                                        <i class="material-icons">list</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="Edit" title="Edit">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    @include('admin.mcq.modals.add')

@endsection

@section('js')
    <script>
        onClickAddButtonAddMcqModal();
        validateAddMcqModalForm();
        onSubmitMcqAddForm();
        onClickAddOptionPlusBtn();
        removeOption();
        onChangeCorrectOptionSelect();
        onClickOptionsBackBtn();
        onClickCorrectOptionBackBtn();
    </script>

@endsection
