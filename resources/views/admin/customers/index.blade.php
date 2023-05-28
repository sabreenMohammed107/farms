@extends('layout.main')
@section('add-style')
    <style>
        .isDisabled {
            color: currentColor;
            cursor: not-allowed;
            opacity: 0.5;
            text-decoration: none;
            pointer-events: none;
        }
    </style>
@endsection
@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2"> بيانات العملاء</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item text-muted">العملاء</li>


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
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="بحث" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add customer-->
                        <!--begin::Add product-->
                        <!--end::Add product-->

                        <a href="{{ route('customers.show', 1) }}" disabled target="_blank"
                            class="btn btn-primary
                        @if ($rows->isEmpty()) isDisabled @endif ">طباعة</a>

                        <!--end::Add customer-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                    aria-label=" " style="width: 29.25px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" style="display: none" type="checkbox"
                                            data-kt-check="true"
                                            data-kt-check-target="#kt_ecommerce_category_table .form-check-input"
                                            value="1">
                                    </div>
                                </th>

                                <th class="min-w-250px sorting" tabindex="0" aria-controls="kt_ecommerce_category_table"
                                    rowspan="1" colspan="1" aria-label="العميل: activate to sort column ascending">
                                    اسم العميل</th>

                                <th class="text-end min-w-70px sorting sorting_desc" tabindex="0"
                                    aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                    aria-label="Category Type: activate to sort column ascending" aria-sort="descending">
                                    كود العميل</th>
                                <th class="text-end min-w-70px sorting sorting_desc" tabindex="0"
                                aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                aria-label="Category Type: activate to sort column ascending" aria-sort="descending">
                                    الحالة </th>

                                <th class="text-end min-w-70px sorting sorting_desc" tabindex="0"
                                    aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                    aria-label="Category Type: activate to sort column ascending" aria-sort="descending">
                                    العنوان </th>
                                <th class="text-end min-w-100px sorting sorting_desc" tabindex="0"
                                    aria-controls="kt_ecommerce_category_table" rowspan="1" colspan="1"
                                    aria-label="Category Type: activate to sort column ascending" aria-sort="descending">
                                    موبايل</th>
                                <th class="text-end min-w-70px">بريد الكتروني</th>
                                <th class="text-end min-w-70px pe-2 sorting_disabled">تفاصيل</th>
                                <th class="text-end min-w-70px pe-2 sorting_disabled">تعديل </th>
                                <th class="text-end min-w-70px pe-2 sorting_disabled">حذف</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            @foreach ($rows as $index => $row)
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" style="display: none" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::Category=-->
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-5">
                                                <!--begin::Title-->

                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1"
                                                    data-kt-ecommerce-category-filter="category_name"
                                                    style="display: none">  {{ $row->name ?? '' }}</a>
                                                <span class="fw-bolder ms-3"> {{ $row->name ?? '' }} </span>
                                                <input type="hidden" name="" id=""
                                                data-kt-ecommerce-category-filter="category_id" value="{{ $row->id }}">
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category=-->

                                    <!--end::SKU=-->
                                    <!--begin::Qty=-->
                                    <td class="text-end ">
                                        <!--begin::Badges-->

                                        <div class="badge badge-light-primary">{{ $row->code }}</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end ">
                                        <span class="fw-bolder ms-3">
                                            {{-- {{ $row->status }} --}}
                                            @if ($row->status == '1')
                                                فعال
                                            @else
                                                غير فعال
                                            @endif
                                        </span>
                                    </td>
                                    <!--end::Qty=-->
                                    <td class="text-end pe-0">
                                        <span class="fw-bolder ms-3">
                                            {{ $row->address ?? '' }}
                                        </span>
                                    </td>
                                    <td class="text-end pe-0 sorting_1">
                                        <span class="fw-bolder ms-3">
                                            {{ $row->mobile ?? '' }}
                                        </span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bolder ms-3">
                                            {{ $row->email ?? '' }}
                                        </span>
                                    </td>

                                    <td class="text-end pe-0">

                                        <a data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_targetEdit{{ $row->id }}"
                                            class="menu-link px-3">عرض</a>
                                    </td>
                                    <td class="text-end pe-0">
                                        <a href="{{ route('customers.edit', $row->id) }}"
                                            class="menu-link px-3">تعديل</a>
                                    </td>
                                    <td class="text-end pe-0">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-ecommerce-category-filter="delete_row">حذف</a>


                                        <form id="delete_{{ $row->id }}"
                                            action="{{ route('customers.destroy', $row->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                                            @method('DELETE')

                                            <button type="submit" value=""></button>
                                        </form>
                                    </td>
                                    <!--end::Price=-->
                                    <!--begin::Modal - New Target-->
                                    <div class="modal fade" id="kt_modal_new_targetEdit{{ $row->id }}"
                                        tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content rounded">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                        data-bs-dismiss="modal">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                    <!--begin:Form-->

                                                    <!--begin::Heading-->

                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">تفاصيل بيانات العميل</h1>
                                                        <!--end::Title-->

                                                    </div>
                                                    <!--end::Heading-->


                                                    <div class=" mb-8 row">
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">كود
                                                                العميل</label>
                                                            <span> - {{ $row->code }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">الحالة</label>
                                                            <span> - @if ($row->status == '1')
                                                                    فعال
                                                                @else
                                                                    غير فعال
                                                                @endif
                                                            </span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                العميل</label>
                                                            <span> - {{ $row->name }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    <div class=" mb-8 row">
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">العنوان</label>
                                                            <span> - {{ $row->address }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                التليفون</label>
                                                            <span> - {{ $row->phone }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <div class=" mb-8 row">
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">المحافظة</label>
                                                            <span> - {{ $row->city->name ?? '' }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                موبايل</label>
                                                            <span> - {{ $row->mobile }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>

                                                    <div class=" mb-8 row">
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">البريد
                                                                الالكتروني</label>
                                                            <span> - {{ $row->email ?? '' }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                الموقع الالكتروني</label>
                                                            <span> - {{ $row->website }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>


                                                    <div class="d-flex flex-column mb-8 fv-row">

                                                    </div>
                                                    <div class="mb-13 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">مسئول التواصل </h1>
                                                        <!--end::Title-->

                                                    </div>
                                                    <div class=" mb-8 row">
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                المسئول الاول</label>
                                                            <span> - {{ $row->emp1 }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">موبايل</label>
                                                            <span>
                                                                - {{ $row->mobile1 }}
                                                            </span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                بريد الكتروني</label>
                                                            <span> - {{ $row->email1 }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>

                                                    <div class=" mb-8 row">
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                المسئول الثاني</label>
                                                            <span> - {{ $row->emp2 }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email"
                                                                class=" col-form-label text-md-end">موبايل</label>
                                                            <span>
                                                                - {{ $row->mobile2 }}
                                                            </span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!--begin::Label-->
                                                            <label for="email" class=" col-form-label text-md-end">
                                                                بريد الكتروني</label>
                                                            <span> - {{ $row->email2 }}</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>



                                                    <!--begin::Actions-->
                                                    <div class="text-center">
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                            style="margin-right: 25px" data-bs-dismiss="modal">
                                                            <button type="reset" id="kt_modal_update_target_cancel"
                                                                class="btn btn-light me-3"
                                                                data-dismiss="modal">الغاء</button>
                                                        </div>

                                                    </div>
                                                    <!--end::Actions-->
                                                    </form>
                                                    <!--end:Form-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - New Target-->
                                    <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            @endforeach


                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->


                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
