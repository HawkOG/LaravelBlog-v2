@extends("blog_theme.main")
@section("posts")

<form action="/createCat" method="POST"  class="form-horizontal">
{{ csrf_field() }}

<h2 class="pl-3">Pridėti kategoriją</h2>

<div class="form-group mt-5">
    <div class="col-sm-10">
            <label for="">Kategorijos pavadinimas</label>
        <input type="text" class="form-control" id="cattitle" name="cattitle" placeholder="Pavadinimas">
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-outline-success btn-block">Paskelbti</button>
    </div>
</div>
</form>
</div>
@endsection