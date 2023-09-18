@include('header')
<h1 class="display-3 text-center">MOVIES</h1>
<div class="d-flex flex-row-reverse">
    <a href="{{route('add')}}" type="button" class="btn btn-success"><i class="bi bi-plus-square"></i></a>
    </div>
    <hr>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">SN</th>
            <th scope="col">SCREENING MOVIES</th>
            <th scope="col">MAIN LEAD</th>
            <th scope="col">RELEASED DATE</th>
            <th scope="col">SHOW TIME</th>
            <th scope="col">ACTIONS</th><tbody><tr>                
          </tr>
        </thead>
        <?php $id=1;?>
  
        @foreach ($movies as $mv )
        <tr>
          <th scope="row">{{$id++}}</th>
        <td>{{$mv->movie}}</td>
        <td>{{$mv->lead}}</td>
        <td>{{$mv->date}}</td>
        <td>{{$mv->time}}</td>
        <td>  <!-- Button trigger modal -->
            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$mv->id}}">
              <i class="bi bi-pencil-square"></i>
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal-{{$mv->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
            {{Form::open(['route' => ['update',$mv->id], 'method'=>'patch'])}}
<div class="row">
    <div class="col-8 mx-auto card ">
    <div class="mb-3">
        <label for="movies" class="form-label">SCREENING MOVIES</label>
        <input type="text" name="movies" value="{{$mv->movie}}" class="form-control"  aria-describedby="emailHelp"></div>
      
    <div class="mb-3">
      <label for="mainlead" class="form-label">Main Lead</label>
      <input type="text" name="lead" value="{{$mv->lead}}"  class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="ReleasedDate" class="form-label">Released Date</label>
      <input type="date" name="date" value="{{$mv->date}}" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="time" class="form-label">Time</label><br>
        @if($mv->time=="11AM")
        <input type="radio" value="{{$mv->time}}" name="time" checked  aria-describedby="emailHelp" >11AM
        <input type="radio" value="{{$mv->time}}"name="time"  aria-describedby="emailHelp" >2PM
        <input type="radio" value="{{$mv->time}}"name="time"  aria-describedby="emailHelp" >6PM
        
        @elseif($mv->time=="2PM")
        <input type="radio" value="{{$mv->time}}" name="time" aria-describedby="emailHelp" >11AM
        <input type="radio" value="{{$mv->time}}"name="time" checked aria-describedby="emailHelp" >2PM
        <input type="radio" value="{{$mv->time}}"name="time"  aria-describedby="emailHelp" >6PM
        
        @else
        <input type="radio" value="{{$mv->time}}" name="time"   aria-describedby="emailHelp" >11AM
        <input type="radio" value="{{$mv->time}}"name="time"  aria-describedby="emailHelp" >2PM
        <input type="radio" value="{{$mv->time}}"name="time" checked aria-describedby="emailHelp" >6PM
    @endif
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{{Form::close()}}
            </div>
        </div>
        </div>
  </div>
        <a href="{{route('delete',$mv->id)}}" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></a>
        </td>
          </tr>
          @endforeach
  </table>
  @include('footer')