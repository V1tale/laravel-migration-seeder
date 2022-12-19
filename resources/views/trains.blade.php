@extends('layouts.layout')

@section('content')
    <div class="container">
        <h2>Lista dei treni</h2>
        <ul>
            @foreach ($trains as $train)
                <li>
                    <table>
                        <thead>
                            <th>Company</th>
                            <th>From</th>
                            <th>Destination</th>
                            <th>Departure</th>
                            <th>Arriving</th>
                            <th>Train Number</th>
                            <th>Vagon</th>
                            <th>Price</th>
                        </thead>
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
                                <h3>{{ $train->arriving }}</h3>
                            </td>
                            <td>
                                <h3>{{ $train->train_number }}</h3>
                            </td>
                            <td>
                                <h3>{{ $train->vagons }}</h3>
                            </td>
                            <td>
                                <h3>{{ $train->price }}</h3>
                            </td>
                        </tbody>
                    </table>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
