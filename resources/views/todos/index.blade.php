<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

@foreach($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->name}}</td>
        <td>Edit/Delete</td>
    </tr>
@endforeach
</html>