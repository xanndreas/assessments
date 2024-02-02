@foreach($sale as $it)
    <tr>
        <th>{{ $it->id ?? ''}}</th>
        <td>{{ $it->customer->name ?? '' }}</td>
        <td>{{ $it->customer->description ?? ''}}</td>
        <td>{{ $it->total_sales ?? ''}}</td>
        <td>{{ $it->created_at ?? ''}}</td>
    </tr>
@endforeach

