@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="title">
            <h1>GET AWAY</h1>
            <h2>Quando il prezzo non conta</h3>
                <p>Ti senti baciato dalla fortuna? sei disposto ad accettare anche la cattiva sorte? Salta a bordo dei
                    nostri treni,
                    per scoprire cosa si prova a spendere soldi per vivere esperienze del tutto casuali. Scopri cosa si
                    prova nel
                    partire da una città e giungere alla stessa identica stazione, qualche ora dopo. Potrebbe capitarti di
                    spendere
                    diecimila euro per viaggiare da Milano a Torino, ma potresti anche spendere un solo euro per un treno
                    Torino -
                    Napoli</p>
        </div>
        <table>
            <thead>
                <th>Company</th>
                <th>From</th>
                <th>Destination</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Train Number</th>
                <th>Couch</th>
                <th>Price</th>
            </thead>
            @foreach ($trains as $train)
                <tbody>
                    <td>
                        <h3>{{ $train->company }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->from }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->destination }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->departure }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->arrival }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->train_number }}</h3>
                    </td>
                    <td>
                        <h3>{{ $train->couch }}</h3>
                    </td>
                    <td>
                        <h3>€ {{ $train->price }}</h3>
                    </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
