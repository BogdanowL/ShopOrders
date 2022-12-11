@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3>Создать заказ</h3>
            <form class="mb-5 mt-3" method="POST" action="{{route('order.store')}}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Выбрать клиента</label>
                    <select name="user_id" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach($users as $user)

                            <option  value="{{$user->id}}">{{$user->getName()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Цена</label>
                    <input name="price" type="text" class="form-control"  >
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Описание</label>
                    <input name="description" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Комментарий</label>
                    <input name="comment" type="text" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>

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
                @foreach($orders as $order)
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

                    <td><a href="{{route('order.show', $order->id)}}" type="button" class="btn btn-primary">Подробно</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection
