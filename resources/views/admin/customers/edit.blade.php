@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">العملاء</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
       <a href="{{route('home')}}" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('customers.index')}}" class="text-muted text-hover-primary">كل العملاء</a>
                                     </li>
                    <li class="breadcrumb-item text-muted">تعديل عميل</li>


                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->

        </div>
    </div>
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"

                action="{{ route('customers.update', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>البيانات</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="mb-3">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" name="status" type="checkbox"
                                    @if ($row->status == '0') checked @endif   value="1" id="flexCheckDefault"/>
                                    <label class="form-check-label" for="flexCheckDefault">
                                       غير فعال
                                    </label>
                                </div>

                            </div>
                            <div class="mb-3">
                            <label class="form-label required">اسم العميل</label>
                            {{-- <input type="text" id="name" value="{{ old('name') }}"
                                onkeypress="return /^(?:(?=[\p{Script=Arabic}A-Za-z])\p{L}|\s)+$/u.test(event.key)"
                                name="name" maxlength="15" class="form-control  @error('name') is-invalid @enderror"> --}}

                                <input type="text" id="name" value="{{ $row->name}}"

                                name="name" maxlength="50" class="form-control  @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label required"> العنوان</label>

                                <input type="text" id="address" value="{{ $row->address}}"

                                name="address"  class="form-control  @error('address') is-invalid @enderror">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="fs-6 fw-bold form-label ">
                                        <option value="">اختر المحافظه</option>
                                    </label>
                                    <!--end::Label-->
                                    <select  class="form-select form-select-solid dynamic"
                                        data-control="select2" dir="rtl" data-placeholder="اختر المحافظة"
                                        data-show-subtext="true" name="city_id" data-live-search="true" id="country"
                                        data-dependent="sub">
                                        <option dir="rtl" value=""></option>
                                        @foreach ($cities as $city)
                                            <option dir="rtl" value="{{ $city->id }}" {{ $row->city_id == $city->id ? "selected" :""}} >{{ $city->name ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                            </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                        <div class="mb-3">
                        <label class="form-label">بريد الكتروني</label>
                        <input type="text"
                        onkeypress="return/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/" value="{{$row->email}}" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                                </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">تليفون</label>
                                <input type="text" value="{{ $row->phone}}" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">موبايل</label>
                    <input type="text" value="{{ $row->mobile}}" name="mobile" class="form-control @error('mobile') is-invalid @enderror">
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                        </div>
                        <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">موقع الكتروني</label>
                    <input type="text" value="{{ $row->website}}"

                    onkeypress="return/^(ftp|http|https):\/\/[^ "]+$/u.test(event.key)" name="website" class="form-control @error('website') is-invalid @enderror">
                    @error('website')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                        </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="card-header mb-5">
                            <div class="card-title ">
                                <h2 >بيانات المسئول</h2>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label class="form-label "> المسئول الاول</label>

                            <input type="text" id="emp1" value="{{ $row->emp1}}"

                            name="emp1" maxlength="50" class="form-control  @error('emp1') is-invalid @enderror">
                            @error('emp1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">موبايل</label>
                    <input type="text" value="{{ $row->mobile1}}" name="mobile1" class="form-control @error('mobile1') is-invalid @enderror">
                    @error('mobile1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                        </div>
                        <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">البريد الكتروني</label>
                    <input type="text"
                    onkeypress="return/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/"  value="{{ $row->email1}}" name="email1" class="form-control @error('email1') is-invalid @enderror">
                    @error('email1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                        </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label "> المسئول الثاني</label>

                                <input type="text" id="emp1" value="{{ $row->emp2}}"

                                name="emp2" maxlength="50" class="form-control  @error('emp2') is-invalid @enderror">
                                @error('emp2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">موبايل</label>
                        <input type="text" value="{{ $row->mobile2}}" name="mobile2" class="form-control @error('mobile2') is-invalid @enderror">
                        @error('mobile2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                            </div>
                            <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label"> البريد الالكتروني</label>
                        <input type="text"
                        onkeypress="return/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/"  value="{{ $row->email2}}" name="email2" class="form-control @error('email2') is-invalid @enderror">
                        @error('email2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                            </div>
                            </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('customers.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">الغاء</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">حفظ</span>
                            <span class="indicator-progress">يرجي الانتظار...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->

            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
