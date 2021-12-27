@extends('layouts.admin')
@section('content')
<div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 m-auto">
                  <div class="contact-form">
                    <h3>عرض المنتجات</h1>
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">الرقم</th>
                            <th scope="col">اسم المنتج</th>
                            <th scope="col">سعر المنتج</th>
                            <th scope="col">عدد المنتج</th>
                            <th scope="col">التفاصيل</th>
                            <th scope="col">الاجرائات</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $index => $product)
                          <tr>
                            <th scope="row">{{++$index}}    </th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->amount}}</td>
                            <td>{{$product->details}}</td>
                              <td>
                              <a class="btn btn-outline-primary" href="{{url('editProd').'/' .$product->id}}"><span>تعديل</span></a>
                              <a class="btn btn-outline-danger"  href="{{url('destroy/'.$product->id)}}"><span>حذف</span></a>
                              </td>

                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                  </div>
@endsection
