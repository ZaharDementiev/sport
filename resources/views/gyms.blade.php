@extends('layout.app')

@section('content')
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Город</th>
                            <th scope="col">Адрес</th>
                            <th scope="col">Выбрать</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $count = 0 @endphp
                    @foreach(\App\Models\Address::all() as $gym)
{{--                        <form action=""></form>--}}
                        <tr>
                            <th scope="row">{{++$count}}</th>
                            <td>{{$gym->city}}</td>
                            <td>{{$gym->address}}</td>
{{--                            <input type="hidden" value="{{$gym->id}}" name="id">--}}
                            <td><a href="{{route('choose.gym', $gym->id)}}">Выбрать</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
