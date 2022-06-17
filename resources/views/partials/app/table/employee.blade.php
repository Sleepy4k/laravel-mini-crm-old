<a href="{{ route('employee.add') }}" class="table-data__tool-right">
    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
        <i class="zmdi zmdi-plus"></i>
        Add Item
    </button>
</a>

<table class="table table-data2">
    <thead>
        <tr>
            <th>
                Index
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Company
            </th>
            <th>
                Email
            </th>
            <th>
                Phone
            </th>
            <th style="text-align: center;">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($employees) <= 0)
            <tr>
                <td colspan=7 style="text-align: center;"> 
                    Belum Ada Data Yang Tersedia 
                </td>
            </tr>
        @else
            @foreach ($employees as $index => $employee)
                <tr class="tr-shadow">
                    <td>
                        {{ $index + 1 }}
                    </td>
                    <td>
                        {{ $employee->first_name }}
                    </td>
                    <td>
                        {{ $employee->last_name }}
                    </td>
                    <td>
                        <span class="block-email">
                            {{ $employee->company }}
                        </span>
                    </td>
                    <td class="desc">
                        {{ $employee->email }}
                    </td>
                    <td>
                        {{ $employee->phone }}
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{{ route('employee.edit', $employee->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                            </a>
                            <a href="{{ route('employee.delete', $employee->id) }}" class="delete-confirm">
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

{{ $employees->links() }}