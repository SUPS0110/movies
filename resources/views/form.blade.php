@include('header')
{{Form::open(['route' => ['store', 'method'=>'post']])
}}
<div class="row">
    <div class="col-4 mx-auto card p-3 m-3">
    <div class="mb-3">
        <label for="movies" class="form-label">SCREENING MOVIES</label>
        <input type="text" name="movies"class="form-control"  aria-describedby="emailHelp" placeholder="Enter new screening movie">
      </div>
      
    <div class="mb-3">
      <label for="mainlead" class="form-label">Main Lead</label>
      <input type="text" name="lead" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="ReleasedDate" class="form-label">Released Date</label>
      <input type="date" name="date" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Show Time</label><br>
        <input type="radio" name="time" value="11AM" aria-describedby="emailHelp" >11AM
        <input type="radio" name="time" value="2PM"  aria-describedby="emailHelp" >2PM
        <input type="radio" name="time"value="6PM"  aria-describedby="emailHelp" >6PM
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{Form::close()}}
  @include('footer')