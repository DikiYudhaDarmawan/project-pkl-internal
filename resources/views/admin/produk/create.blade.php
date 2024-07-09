@extends('layouts.admin')
@section('content')
        <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control "id="nama_produk" name="nama_produk" placeholder="Enter Your Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">deskripsi</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control "id="deskripsi" name="deskripsi" placeholder="Enter Your Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">harga</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control "id="harga" name="harga" placeholder="Enter Your Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">stok</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control "id="stok" name="stok" placeholder="Enter Your Name" />
                          </div>
                        </div>
                         <div class="mb-3">
                                <label class="form-label"> Kategori</label>
                                <select class="form-control" name="kategori_id">
                                    @foreach ($kategoris as $data)
                                    <option value="{{ $data->id }}">{{ $data->category_name}}</option>
                                    @endforeach
                                </select>
                         </div>
                           <div class="mb-3">
                                <label class="form-label">Cover</label>
                                <input type="file" class="form-control" name="cover">
                            </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

@endsection