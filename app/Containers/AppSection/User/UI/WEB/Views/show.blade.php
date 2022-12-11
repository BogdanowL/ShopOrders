@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Клеинт</h2>
            <table class="table mt-3">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">All Orders Sum</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Not Paid</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->getName()}}</td>
                    <td>{{$user->getEmail()}}</td>
                    <td>{{$user->getPhone()}}</td>
                    <td>{{$user->getContactInfo()}}</td>
                    <td>{{$allOrdersSum}}</td>
                    <td>{{$paidSum}}</td>
                    <td>{{$notPaidSum}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br> <br> <br> <br>
        <div class="row justify-content-center">
            <h2>Заказы</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Client</th>
                    <th scope="col">Price</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Description</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">Full info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->orders as $order)
                    <tr>
                        <th scope="row">{{$order->id}}</th>
                        <td>{{$order->user->getName()}}</td>
                        <td>{{$order->getPrice()}}</td>
                        @if($order->isPaid())
                            <td>Оплачено</td>
                        @else
                            <td>Не Оплачено</td>
                        @endif
                        <td>{{ Str::limit($order->getDescription(), 25) }}</td>
                        <td>{{Str::limit($order->getContactInfo(), 25) }}</td>
                        <td><a href="{{route('home')}}" type="button" class="btn btn-primary">Вcе заказы</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
