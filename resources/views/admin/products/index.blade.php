@extends('layouts.top')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <h2>Product</h2>
            <div>
                <a href="{{route('admin.products.create')}}" class="btn btn-success">Tambah Produk</a>
            </div>
            <br/>
            
        

    <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Create At</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1;
                        @endphp
                        @foreach($products as $product)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['created_at']}}</td>
                            <td>
                            <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('admin.products.show',$product->id)}}" class="btn btn-success">Detail</a>
                            @csrf
                                    @method('Delete')
                            <a href="{{route('admin.products.destroy',$product->id)}}" method="post" class="btn btn-danger" onclick="return confirm('Yakin Mau di Hapus ?')" type="submit">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                         
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Create At</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>
<br><br>
</div>

@endsection