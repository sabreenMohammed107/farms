<!--begin::Aside-->
<div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="#">
            <img alt="Logo" src="{{ asset('img/logo.PNG') }}" class="max-h-50px logo-default "
                style="height: 120px" />
            <img alt="Logo" src="{{ asset('img/logo.PNG') }}" class="max-h-50px logo-minimize "
                style="height: 120px" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <!--begin::Menu-->
        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
            id="kt_aside_menu" data-kt-menu="true">
            <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px"
                data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                        fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                        rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                        rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                        rx="2" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">أقسام النظام</span>
                        <span class="menu-arrow"></span>
                    </span>

                </div>




                {{-- <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="fw-bold text-muted text-uppercase fs-7">الإعدادات</span>
                    </div>
                </div> --}}



    <!-- start Event -->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">العملاء</span>
            <span class="menu-arrow"></span>
        </span>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link" href="{{ route('customers.create') }}" >
                    <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">  إضافة عميل </span>
                </a>
            </div>
        </div>
        <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link" href="{{ route('customers.index') }}" >
                    <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">  بيانات العملاء </span>
                </a>
            </div>
        </div> <div class="menu-sub menu-sub-accordion">
            <div class="menu-item">
                <a class="menu-link" href="# ">
                    <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">  كشف حساب عميل خلال مدة </span>
                </a>
            </div>
        </div>
    </div>
    <!-- end Event -->

  <!-- start Event -->
  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
    <span class="menu-link">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">الأصناف</span>
        <span class="menu-arrow"></span>
    </span>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link" href="#" >
                <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">  إضافة صنف </span>
            </a>
        </div>
    </div>
    <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link" href="#" >
                <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">  بيانات الأصناف </span>
            </a>
        </div>
    </div> <div class="menu-sub menu-sub-accordion">
        <div class="menu-item">
            <a class="menu-link" href="# ">
                <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">  إجمالي بيع الأصناف خلال مدة </span>
            </a>
        </div>
    </div>
</div>
<!-- end Event -->
                <!-- start Event -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">تسعير الأصناف</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="#>
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> تسعير أصناف العميل </span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="#>
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> قائمة أسعار أصناف العميل </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end Event -->



                <!-- start order -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">أوامر البيع</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">  إنشاءأمر بيع  </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> متابعةأوامر البيع خلال مدة   </span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> متابعةأوامر البيع لعميل خلال مدة   </span>
                            </a>
                        </div>





                    </div>
                </div>
                <!-- end Event -->



                <!-- start order -->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">فواتير المبيعات</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">    الإستعلام عن أوامر اللبيع المفتوحة  </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> طلب إصدار فاتورة أمر بيع    </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> فواتير العميل خلال مدة </span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="#>
                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title"> الإستعلام عن فاتورة </span>
                            </a>
                        </div>







                    </div>
                </div>
                <!-- end Event -->




                {{-- <div class="menu-item"> --}}
                <div class="menu-content">
                    <div class="separator mx-1 my-4"> </div>
                </div>
                {{-- </div> --}}

            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
        <a href="#" class="btn btn-light-primary w-100">Button</a>
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->
