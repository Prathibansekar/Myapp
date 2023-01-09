<html>
    <head>
        <title>employee detail</title>
    </head>
    <body>
        <table>
            <tr> <th>username</th>
                <th>password</th>
                <th>DOB</th>
                <th>password</th>
            </tr>
            @foreach ($emp as $emp)
            <tr><td>{{$emp->username}}</td>
                <td>{{$emp->password}}</td>
                <td>{{$emp->DOB}}</td>
                <td>{{$emp->phone_no}}</td>
            </tr>


            @endforeach
            <tr>

            </tr>

        </table>

    </body>
</html>
