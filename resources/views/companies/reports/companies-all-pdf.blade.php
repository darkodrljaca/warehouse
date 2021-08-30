<table class="table table-bordered mb-5">
    <thead>
        <tr class="table-danger">
            <th scope="col">Назив</th>
            <th scope="col">Место</th>
            <th scope="col">Држава</th>                   
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->name }}</td>
            <td>{{ $d->city->name }}</td>
            <td>{{ $d->city->country->name }}</td>                   
        </tr>
        @endforeach
    </tbody>
</table>