@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Client</th>
                    <th scope="col">Price</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Description</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">Buyer</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->user->getName()}}</td>
                    <td>{{$order->getPrice()}}</td>
                    @if($order->isPaid())
                        <td>Оплачено</td>
                    @else
                        <td>Не Оплачено</td>
                    @endif
                    <td>{{ $order->getDescription() }}</td>
                    <td>{{$order->getContactInfo()}}</td>
                    <td><a href="{{route('user.show', $order->user->id)}}" type="button" class="btn btn-primary">Покупатель</a></td>
                </tr>
                </tbody>
            </table>
    </div>
</div>
@endsection
