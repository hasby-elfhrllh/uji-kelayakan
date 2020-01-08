@extends('ruangs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Data Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ruangs.create') }}"> Create New Data Ruang</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Ruang</th>
            <th>Nama Ruang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ruangs as $ruang)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ruang->id_ruang }}</td>
            <td>{{ $ruang->nama_ruang }}</td>
            <td>{{ $ruang->keterangan }}</td>
            <td>
                <form action="{{ route('ruangs.destroy',$ruang->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('ruangs.edit',$ruang->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     <div ><a href="http://localhost/inventaris/public/admin" class="btn btn-success">Kembali Ke Menu</a>
  
    {!! $ruangs->links() !!}
      
@endsection