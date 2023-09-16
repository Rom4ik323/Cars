@extends('layouts.admin')



   @section('content')

    <h1 class="text-center mt-5 mb-5 text-light">Авто</h1>
    <div class="container">
    <a href="/adminpanel/auto/store"><button class="btn btn-sm btn-dark">Добавить Авто</button></a>
   <table class="table">
    <thead>
      <tr>
        <th class="text-light" scope="col">id</th>
        <th class="text-light" scope="col">name</th>
        <th class="text-light" scope="col">cost</th>
        <th class="text-light" scope="col">hs</th>
        <th class="text-light" scope="col">liters</th>
        <th class="text-light" scope="col">fuel</th>
        <th class="text-light" scope="col">drive</th>
        <th class="text-light" scope="col">edit</th>
        <th class="text-light" scope="col">delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($auto as $auto)

      <tr>
        <td class="text-light">{{$auto->id}}</td>
        <td class="text-light">{{$auto->name}}</td>
        <td class="text-light">{{$auto->cost}}</td>
        <td class="text-light">{{$auto->hs}}</td>
        <td class="text-light">{{$auto->liters}}</td>
        <td class="text-light">{{$auto->fuel}}</td>
        <td class="text-light">{{$auto->drive}}</td>
        <td><a class="text-light" href="{{ route('admin.edit', $auto) }}">Редактировать</a></td>
          <td class="text-light"><form action="{{ route('admin.destroy.auto', $auto) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">Удалить</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
   </div>
        
   @endsection