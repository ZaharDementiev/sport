@extends('layout.app')

@section('content')
    <div id="fh5co-trainer">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Fitness Expert</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            @if(!$trainers)
                <p>Вы еще не выбрали зал</p>
            @else
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Выбрать</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $count = 0 @endphp
                    @foreach($trainers as $trainer)
                        <tr>
                            <th scope="row">{{++$count}}</th>
                            <td>{{$trainer->name}}</td>
                            <td><a href="{{route('choose.trainer', $trainer->id)}}">Выбрать</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif
        </div>
    </div>
@endsection
