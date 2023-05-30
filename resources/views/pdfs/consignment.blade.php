<h1>Consignment</h1>


<table class="table border">
    <thead>
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Contact</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>Address Line 3</th>
            <th>City</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $consignment->id }}</td>
            <td>{{ $consignment->company }}</td>
            <td>{{ $consignment->contact }}</td>
            <td>{{ $consignment->addressline1 }}</td>
            <td>{{ $consignment->addressline2 }}</td>
            <td>{{ $consignment->addressline3 }}</td>
            <td>{{ $consignment->city }}</td>
            <td>{{ $consignment->country }}</td>
        </tr>
    </tbody>
</table>