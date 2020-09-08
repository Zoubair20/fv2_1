<style>
    .tab{
        width: 100%;
    }
    .tab, .th, .td {
        border: 1px groove gray;
    }

    .th, .td {
        padding: 10px;
        /*text-align: center;*/
    }
    .th-size{
        font-size: 20px;
    }
</style>
@component('mail::message')
    <table class="tab">
        <thead>
        <tr>
            <th class="th th-size" colspan="2" scope="col">RECRUTEMENT FORM: {{$data['recrut']}}</th>
        </tr>
        </thead>
        <tbody class="justify-content-center">
        <tr>
            <th class="th" scope="row">NOM: </th>
            <td class="td"> {{$data['nom']}} </td>
        </tr>
        <tr>
            <th class="th" scope="row">PRÉNOM: </th>
            <td class="td">{{$data['prenom']}} </td>
        </tr>
        <tr>
            <th class="th" scope="row">EMAIL: </th>
            <td class="td">{{$data['email']}}</td>
        </tr>
        <tr>
            <th class="th" scope="row">TÉLÉPHONE: </th>
            <td class="td">{{$data['telephone']}}</td>
        </tr>
        <tr>
            <th class="th">NIVEAU D'ÉTUDE: </th>
            <td class="td">{{$data['niveau']}}</td>
        </tr>
        <tr>
            <th class="th">ANNEES D'EXPÉRIENCES: </th>
            <td class="td">{{$data['annee']}}</td>
        </tr>
        <tr>
            <th class="th" scope="row">MESSAGE: </th>
            <td class="td">{{$data['message']}}</td>
        </tr>
        </tbody>
    </table>
@endcomponent
