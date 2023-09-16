@extends('layouts.admin')



   @section('content')
  <div class="container">
    <h1 class="text-center mt-5 mb-5 text-light">Заказы</h1>
   <table class="table">
    <thead>
      <tr>
        <th class="text-light" scope="col">id</th>
        <th class="text-light" scope="col">Имя</th>
        <th class="text-light" scope="col">Кол. суток</th>
        <th class="text-light" scope="col">Номер</th>
        <th class="text-light" scope="col">Car</th>
        <th class="text-light" scope="col">Удалить</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $orders)

      <tr>
        <th class="text-light" scope="row">{{$orders->id}}</th>
        <td class="text-light">{{$orders->name}}</td>
        <td class="text-light">{{$orders->days}}</td>
        <td class="text-light">{{$orders->number}}</td>
        <td class="text-light">{{$orders->car}}</td>
        <td class="text-light"><form action="{{ route('admin.destroy', $orders) }}" method="POST" style="display: inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-dark">Удалить</button>
      </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
   </div>
        
   @endsection