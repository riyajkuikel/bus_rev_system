<html>
<head>
</head>
    <body>

<table border="1">
    <tr>
    <th>Name</th>
    <th>DOB></th>
    <th>address</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->dob}}</td>
            <td>{{$student->address}}</td>
            <td><img src="{{asset($student->image)}}"></td>


        </tr>

@endforeach()

</table>
    </body>

</html>
