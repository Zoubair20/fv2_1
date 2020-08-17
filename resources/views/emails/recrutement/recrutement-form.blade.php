@component('mail::message')
<center>
    <table style="width: 100%;" border="2" cellpadding="2">
        <tbody>
        <tr>
            <td><strong>NOM:</strong></td>
            <td> {{$data['nom']}} </td>
        </tr>
        <tr>
            <td><strong>PRÉNOM:</strong> </td>
            <td>{{$data['prenom']}} </td>
        </tr>
        <tr>
            <td><strong>EMAIL:</strong></td>
            <td> {{$data['email']}} </td>
        </tr>
        <tr>
            <td><strong>TÉLÉPHONE:</strong> </td>
            <td>{{$data['telephone']}}</td>
        </tr>
        <tr>
            <td><strong>NIVEAU D'ÉTUDE:</strong> </td>
            <td>{{$data['niveau']}}</td>
        </tr>
        <tr>
            <td><strong>ANNEES D'EXPÉRIENCES:</strong></td>
            <td>{{$data['annee']}}</td>
        </tr>
        <tr>
            <td><strong>MESSAGE:</strong> </td>
            <td>{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>
</center>
@endcomponent
