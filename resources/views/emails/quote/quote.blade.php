@component('mail::message')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="3" scope="col">DEMANDE UN DEVIS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>

        </tr>
        </tbody>
    </table>



    <center>
        <table style="width: 100%;" border="2" cellpadding="2">
            <tbody>
            <tr>
                <td>NOM:</td>
                <td> {{$data['nom']}} </td>
            </tr>
            <tr>
                <td>PRÉNOM:</td>
                <td>{{$data['prenom']}} </td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td> {{$data['email']}} </td>
            </tr>
            <tr>
                <td>TÉLÉPHONE:</td>
                <td>{{$data['telephone']}}</td>
            </tr>
            <tr>
                <td>MESSAGE:</td>
                <td>{{$data['message']}}</td>
            </tr>
            </tbody>
        </table>
    </center>
    <h3>services: </h3> {{$data['services']}}
@endcomponent
