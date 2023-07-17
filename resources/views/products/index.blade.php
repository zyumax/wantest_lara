<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      body {
          padding-top: 70px;
      }
    </style>
  </head>
  <body>
    <h1>商品一覧画面</h1>
    <div class="card" style="width: 18rem;">
      {{-- <div class="card-body"> --}}
        @foreach($products as $product)
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <p class="card-title">{{ $product->name }}</p>
            <p class="card-title">{{ $product->price }}</p>
            <p class="card-title">{{ $product->remark }}</p>
            <p class="card-title">{{ $product->evaluation }}</p>
          </div>
          <form method="post" action="{{route('product.destroy', $product)}}">
            @csrf
            {{-- @method('delete') --}}
            <button class="btn btn-danger">削除</button>
          </form>
          <a href="{{route('product.edit', $product)}}">
            編集
          </a>
        </div>
        @endforeach
    {{-- </div> --}}
      {{-- <form method="post" action="{{route('product.destroy', $product)}}">
        @csrf
        <button>削除</button>
      </form> --}}
    </div> 
    <div style="margin-top: 20px">
      <a href="{{route('product.create')}}">
        <button type="button" class="btn btn-success">作成</button>
      </a>
    </div>
  </body>
</html>