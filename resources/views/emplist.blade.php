<html>


<head>


    <title>Employees total list</title>

</head>

<body>
    <table align="center" border="2">
        <tr>
            <th>username</th>
            <th>password</th>
            <th>DOB</th>
            <th>phone_no</th>
        </tr>



        @foreach ($empindex as $emps)
            <tr>

                <td>{{ $emps->username }}</td>
                <td>{{ $emps->password }}</td>
                <td>{{ $emps->DOB }}</td>
                <td>{{ $emps->phone_no }}</td>
            </tr>
        @endforeach

    </table>

</body>

</html>
