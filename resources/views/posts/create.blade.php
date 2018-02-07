@extends ('layouts.master')

@section ('content')
  <div class="col-sm-8 blog-main">
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" >
      </div>
      {{--  <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>  --}}
      <div class="form-group">
        <label for="category">Select a category</label>
        <select multiple class="form-control" id="category" name="category" >
          <option>Web Development</option>
          <option>Food</option>
          <option>Disney</option>
          <option>Sports</option>
          <option>Miscellaneous</option>
        </select>
      </div>
      <div class="form-group">
        <label for="body">Write Away!</label>
        <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>

      @include ('layouts.errors')

      </form>

  </div>
@endsection