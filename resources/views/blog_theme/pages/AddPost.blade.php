@extends("blog_theme.main")
@section("posts")

<form action="/store" method="POST"  class="form-horizontal">
{{ csrf_field() }}
@csrf
<h2 class="pl-3">Pridėti įrašą</h2>

<div class="form-group mt-5">

    <div class="col-sm-10">
            <label for="">Naujienos pavadinimas</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Pavadinimas">
        
    </div>
</div>
<div class="form-group">

    <div class="col-sm-10">
            <label for="">Naujienos turinys</label>
         <textarea class="form-control" rows="5" id="body" name="body" placeholder="Turinys"></textarea>
    </div>
</div>
<div class="form-group">
            <div class="col-sm-10">
                <label for="">Kategorija</label>
                 <select name="category" id="category" class="form-control">
                     <option value="x" disabled selected>Category placeholder</option>
                 </select>
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