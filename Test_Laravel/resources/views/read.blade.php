<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Read</title>
        <style type="text/css">
        table,thead,th,tr,td{
            border-collapse: collapse;
            border: 1px solid black;
            padding-left: 1.5em;
        }
        </style>
    </head>
    <body>
        <br>
        <br>
        <h3><a href="create"> Create</a></h3>
        <br>
        <hr>
        <table style="width: 100%">
            <thead>
                <th>Name</th>
                <th>IC No</th>
                <th>Profile Picture</th>
                <th>Email</th>
                <th>Telephone No.</th>
                <th>Office Phone No.</th>
                <th>Race</th>
                <th>Religion</th>
                <th>Address 1</th>
                <th>Address 2</th>
                <th>Postcode</th>
                <th>City</th>
                <th>Province</th>
                <th>Note</th>
                <th>Gender</th>
                <th>Show</th>
                <th>update</th>
                <th>Delete</th>
            </thead>
            @foreach($user as $users)
            <tr>
            <td>{{$users->name}}</td>
            <td>{{$users->ic}}</td>
            <td>{{$users->picture}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->mobile}}</td>
            <td>{{$users->officephone}}</td>
            <td>{{$users->race}}</td>
            <td>{{$users->religion}}</td>
            <td>{{$users->address1}}</td>
            <td>{{$users->address2}}</td>
            <td>{{$users->postcode}}</td>
            <td>{{$users->city}}</td>
            <td>{{$users->province}}</td>
            <td>{{$users->note}}</td>
            <td>{{$users->gender}}</td>
            <td><button><a href="show/{{$users->id}}">Show</a></button></td>
            <td><button><a href="edit/{{$users->id}}">Update</a></button></td>
            <td><button><a href="delete/{{$users->id}}">Delete</a></button></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>