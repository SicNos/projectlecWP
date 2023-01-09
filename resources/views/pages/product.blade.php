@extends('layouts.app')

@section('content')

<style>
    body{
        background-color: #161618;
    }
    .card{
        background: rgb(255, 255, 255, 0.2)
    }
    .card .image{
        padding: 0px;
    }
    .card .details {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(99,93,102);
    background: linear-gradient(90deg, rgba(99,93,102,1) 0%, rgba(48,46,50,1) 100%);
    transition: .9s;
    transform-origin: left;
    transform: perspective(2000px) rotateY(-90deg);
}
.card:hover .details {
    transform: perspective(2000px) rotateY(0deg);
}
.card .details .center {
    padding: 0px;
    text-align: center;
    background: #fff;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.card .details .center h5 {
    margin: 0;
    padding: 0;
    line-height: 20px;
    font-size: 20px;
    text-transform: uppercase;
}
.card .details .center h5 p {
    font-size: 14px;
    color: #262626;
}
</style>
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb mt-2">
                <ol class="breadcrumb mt-5">
                    <li class="breadcrumb-item"><a href="/" class="text-light text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Laptop</li>
                </ol>
            </nav>
        </div>
    </div>
        <div class="col-md-3">
            <form action="{{ url('/product/search')}}" class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Search" aria-label="search" name="search">
                <button class="btn btn-outline-light bi bi-search" type="submit"></button>
            </form>
        </div>
    </div>

    <section class="products mt-5 mb-5">
        <div class="row mt-4">
           @foreach($barangs as $barang)
           <div class="col-md-3">
              <div class="card">
                 <div class="card-body text-center">
                    <img src="{{ asset('img/'.$barang->images) }}"  style="width: 100%" class="img-fluid image ">
                    <div class="row mt-2">
                       <div class="col-md-12 details">
                          <h5><p class="mt-5 text-light">{{ $barang->namabarang }}</p class="text-light"> </h5>
                             <h5 class="text-secondary">{{ $barang->keterangan }}</h5>
                          <h5 class="text-light">Rp. {{ number_format($barang->harga) }}</h5>
                          <div class="row mt-5">
                             <div class="col-md-12">
                                <a href="{{ url('barang') }}/{{ $barang->id }}" class="btn btn-outline-light"><i class="bi bi-eye"></i> Detail</a>
                             </div>
                          </div>
                       </div>
                    </div>

                 </div>
              </div>
           </div>
           @endforeach
        </div>
     </section>
        <div class="row">
            <div class="col">
                {{ $barangs->links() }}
            </div>
        </div>
    </section>
 @endsection
