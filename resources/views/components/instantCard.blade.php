@props(['instant'])

<div class="col">
    <div class="card shadow-sm">
      <img  class="card-img-top" src="{{ $instant->img }}" data-holder-rendered="true">

      <div class="card-body">
        <p class="card-text">{{$instant->title}}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            <form action="/instants/{{ $instant->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
            </form>
          </div>
          <small class="text-muted"> 5-💗 </small>
        </div>
      </div>
    </div>
  </div>
