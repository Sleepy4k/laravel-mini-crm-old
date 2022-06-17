<table class="table table-data2">
    <thead>
        <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Index
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Kategori
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Deskripsi
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Subject
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                User
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Konten
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Dibuat Pada
            </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Update Terakhir
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($activities) <= 0)
            <tr>
                <td colspan=8 style="text-align: center;"> 
                    Belum Ada Data Yang Tersedia 
                </td>
            </tr>
        @else
            @foreach ($activities as $index => $activity)
                <tr class="tr-shadow">
                    <td>
                        {{ $index + 1 }}
                    </td>
                    <td>
                        {{ $activity->log_name }}
                    </td>
                    <td>
                        {{ $activity->description }}
                    </td>
                    <td>
                        @if ($activity->subject_id)
                            {{ $activity->subject_id }}
                        @else
                            -
                        @endif
                        |
                        @if ($activity->subject_type)
                            {{ $activity->subject_type }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if ($activity->causer_id)
                            {{ $activity->causer_id }}
                        @else
                            -
                        @endif
                        |
                        @if ($activity->causer_type)
                            {{ $activity->causer_type }}
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        {{ $activity->properties }}
                    </td>
                    <td>
                        {{ $activity->created_at }}
                    </td>
                    <td>
                        {{ $activity->updated_at }}
                    </td>
                </tr>
                <tr class="spacer"></tr>
            @endforeach
        @endif
    </tbody>
</table>

{{ $activities->links() }}