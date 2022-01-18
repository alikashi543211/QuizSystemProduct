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