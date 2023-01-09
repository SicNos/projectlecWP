@extends('layouts.app')
@section('content')
<style>
    body{
        background: rgb(99,93,102);
        background: linear-gradient(90deg, rgba(99,93,102,1) 0%, rgba(48,46,50,1) 100%);
    }
    .img {
        transition: transform .9s ease-in-out;
        padding: 0px;
    }
    img:hover {
        transform: rotate(360deg);
    }
    .card{
        background: rgb(255, 255, 255, 0)
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

<div class="slider " style="margin-top: 50px;">

    <!-- slide -->
    <div id="carouselExample" class="carousel slide shadow-lg">
  <div class="carousel-inner shadow-lg">
    <div class="carousel-item active">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjJ6f5RJOuC72F1Kkbzn9aAXyzylg_otTkuNmJUfbY-POHv4uBOZYPc8aSOskPP2xvu3BO-NX6p4nPcVFKgfEJyQKMxac_JUQY_ofvr4Cv3cl8U36CCAkpuyOcZb48qw3m40BpNnLGSpp8pAdq3tqZk68gorx4nfJJwMInm6iIb7slEbkZ-FMXg8cmd" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiWPIb3qMuTWa1FPs-SyVTe-1EqAHvAGwkSHnVJ7PlZ7fCLmmmdsmNe_7AUjf5yY4DsTj3qLHRlnUq4XuHXkEdJiueyioAwmMU9CYOHQsEDRC8OmDLv3qxAM1KZ8p4IF1C1BHV2QEwmfP7T5HDsbHHrYGh1qldppE0xsic7QEJudXxMhUsdYXNRjWDt" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjJ6f5RJOuC72F1Kkbzn9aAXyzylg_otTkuNmJUfbY-POHv4uBOZYPc8aSOskPP2xvu3BO-NX6p4nPcVFKgfEJyQKMxac_JUQY_ofvr4Cv3cl8U36CCAkpuyOcZb48qw3m40BpNnLGSpp8pAdq3tqZk68gorx4nfJJwMInm6iIb7slEbkZ-FMXg8cmd" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
    <section class="pilih-brand mt-4">
       <h3><p class="text-light">Category</p class="text-light"></h3>
       <div class="row mt-4">
          @foreach($categories as $kategori)
          <div class="col">
             <a href="/categories/{{ $kategori->id }}">
                <div >
                   <div class="text-center" >
                      <img src="{{ asset('img/'.$kategori->images) }}" style="width: 90%" class="img-fluid img rounded-circle img-thumbnail">
                   </div>
                </div>
             </a>
          </div>
          @endforeach
       </div>
    </section>

    <section class="products mt-5 mb-5">
       <h3>
          <p class="text-light">Latest Release</p class="text-light">
          <a href="/product" class="btn btn-outline-light" ><i class=""></i> Lihat Semua </a>
       </h3>
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
 </div>
@endsection
