@extends('template.master')
@section('title')
Buat Pertanyaan
@endsection
@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">Isi</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <form action="{{route('question.post')}}" method="get"></form>
      @method('get')
      <table class="table">
          <thead>
           <tr>
              <td><h4>Nama</h4></td>
              <td> <h4> : </h4> </td>
              <td><input type="text" name="name"></td>
            </tr>                            
           <tr>
              <td><h4>Judul</h4></td>
              <td> <h4> : </h4> </td>
              <td><input type="text" name="title"></td>
            </tr>          
            <tr>
              <td><h4>Buat pertanyaan</h4></td>
              <td> <h4> : </h4> </td>
              <td><input type="text" name="question"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td></td>
              <td><button class="btn btn-primary" type="submit" name="submit">Submit</button></td>
            </tr>
          </tbody>
        </table>
      </form>
      </div>
      <!-- /.card-body -->
    </div>
    @endsection