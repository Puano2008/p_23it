@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Products</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('p.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>images</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($product as $pro)
                                  <tr>
                                  <td>{{$product->firstItem()+ $loop->index}}</td>
                                  <td>{{$pro->name}}</td>
                                  <td>
                                    <img src="{{asset('backend/product/resize/'.$pro->image)}}" alt="" width="30%">
                                  </td>
                                  <td>{{$pro->price}}</td>
                                  <td>{{$pro->description}}</td>
                                  <td>{{$pro->created_at}}</td>
                                  <td>{{$pro->updated_at}}</td>
                                  <td>

                                    <a href="{{url('admin/product/edit/'.$pro->procduct_id)}}" class="btn btn-warning">แก้ไข</a>
                                    <a href="{{url('admin/product/delete/'.$pro->procduct_id)}}" class="btn btn-danger">ลบ</a>
                                  </td>
                                  </tr>
                                </tbody>
                                @endforeach
                              </table>
                            </div>
                          </div>
                        </div>
@endsection
