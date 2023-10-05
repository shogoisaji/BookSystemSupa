@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-10 mx-auto">
      <h1>{{ $book->title }}</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-header">
        <p class="card-text">
            <strong>説明:</strong> {{ $book->author }}
          </p> 
        </div>
        <div class="card-body">
          <p class="card-text">
            <strong>著者:</strong> {{ $book->author }}
          </p> 
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 mx-auto">
      <a href="{{ route('books.edit', [$book]) }}" class="btn btn-primary">編集</a>
      <a href="#" class="btn btn-danger">削除</a>
    </div>
  </div>

</div>
@endsection