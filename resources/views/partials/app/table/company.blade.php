<a href="{{ route('company.add') }}" class="table-data__tool-right">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
        <i class="zmdi zmdi-plus"></i>
        add item
    </button>
</a>

<table class="table table-data2">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>description</th>
            <th>date</th>
            <th>status</th>
            <th style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(count($companies) <= 0)
            <tr>
                <td colspan=7 style="text-align: center;"> 
                    Belum Ada Data Yang Tersedia 
                </td>
            </tr>
        @else
            @foreach($companies as $company)
                <tr class="tr-shadow">
                    <td>{{ $company->name }}</td>
                    <td>
                        <span class="block-email">{{ $company->email }}</span>
                    </td>
                    <td class="desc">Magang</td>
                    <td>{{ $company->created_at }}</td>
                    <td>
                        <span class="status--process">Manager</span>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{ route('company.edit', $company->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                            </a>
                            <a href="{{ route('company.delete', $company->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $companies->links() }}