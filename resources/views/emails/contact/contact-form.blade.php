@component('mail::message')
    <center>
        <table style="width: 100%;" border="2" cellpadding="2">
            <tbody>
            <tr>
                <td><strong>NOM:</strong></td>
                <td> {{$data['nom']}} </td>
            </tr>
            <tr>
                <td><strong>EMAIL:</strong></td>
                <td> {{$data['email']}} </td>
            </tr>
            <tr>
                <td><strong>TÉLÉPHONE:</strong> </td>
                <td>{{$data['tel']}}</td>
            </tr>
            <tr>
                <td><strong>OBJET:</strong> </td>
                <td>{{$data['objet']}}</td>
            </tr>
            <tr>
                <td><strong>MESSAGE:</strong> </td>
                <td>{{$data['message']}}</td>
            </tr>
            </tbody>
        </table>
    </center>
@endcomponent
