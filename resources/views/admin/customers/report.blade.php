<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$Title}}</title>
    <style>
@page {
	header: page-header;
    footer: page-footer;
    margin-top: 300px;
}
html,body,.body{
    box-sizing: border-box;
}
.body-page{
    padding: 35px 0 0;
    direction: ltr;
    /* background: #ddd; */
    width: 100%;
}
.dir-rtl{
	direction:rtl !important;
}
.dir-ltr{
	direction:ltr !important;
}
.float-r{
	float:right !important;
}
.float-l{
	float:left !important;
}
.header{
    padding: 25px 10px;
    width: 20%;
    font-size: 10px;
    text-align: center;
    background: #02572f;
    color: #fff;
    float: left;
}
.footer{
    padding: 5px 10px;
    width: 20%;
    font-size: 10px;
    text-align: center;
    background: #02572f;
    color: #fff;
}
.report-header{
    float: right;
    width: 40%;
    display: inline-block;
}
.date{
    float: right;
    padding: 10px;
    width: 40%;
    font-size: 12px;
    text-align: center;
}
.image{
    width: 100%;
    text-align: center;
    clear: both;
    padding: 5px 50px 30px 10px;

    /* background: #02572f; */
}
.company{
    width: 100%;
    /* background: #255; */
}
.name{
    background-color: #dedede;
    padding: 10px;
    margin: 10px;
    width: 95px;
    font-size: 12px;
    float: right;
}
.off_name{
    padding: 10 20px;
    float: right;
    width: 180px;
}
.rep_name{
    padding: 10px;
    display: inline-block;
    width: 200px;
    float: left;
    font-size: 12px;
    text-align: center;
    margin: 10px auto;
    background: #02572f;
    color: #fff;
    clear: both;
}
.right{
    margin: 250px 0;
}
.right, .left{
    float: right;
    width:50%;
}
tbody tr{
    background: #dedede;
}
thead tr th{
    font-weight: 100;
    font-size: 12px;
    padding: 10px;
}
tbody tr td{
    color: #222 !important;
    font-size: 12px;
    font-size: 12px;
    text-align: center;
}

    </style>
</head>
<body>
    <hr>
    <div class="body">
        <span>
            <div class="body-page">
                <htmlpageheader name="page-header">
                    <div class="header">
                        <span>صفحة رقم : {PAGENO} / {nbpg}</span>
                    </div>
                    <div class="report-header">
                        <span>
                            {{-- <div class="date">
                                <span>تاريخ  : {{$Today}}</span>
                            </div> --}}
                            {{-- <div class="date">
                                <span dir="rtl">{{ __('titles.user_name') }} : {{$User->user_name}}</span>
                            </div> --}}
                        </span>
                    </div>
                    <br>
                    <div class="image" dir="rtl">
                        <span><img height="100" style="text-align: right;" src="{{public_path('img/logo.PNG')}}" /></span>
                    </div>
                    <div class="rep_name">
                        <span>{{$Title}}</span>
                    </div><br><br>
                    <div dir="rtl" class="company">
                        <span>
                            <div class="name">
                                <span>اسم الشركة :</span>
                            </div>
                            <div class="off_name">
                                <span>
                               مزارع جمال جمعة
                                </span>
                            </div>
                        </span>
                    </div>

                </htmlpageheader>

                <htmlpagefooter name="page-footer">
                    <div class="footer">
                        <span>{{$Title}}</span>
                    </div>
                </htmlpagefooter>
            </div>
        </span>
    </div>
    <table dir="rtl" style="background-color: #02572f;color:#fff;width:100%;">
        <thead>
            <tr>
                <th>#</th>
                <th>كود</th>
                <th>العميل</th>
                <th>العنوان</th>
                <th>موبايل</th>
                <th>بريد الكتروني</th>
                <th>الحالة</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $i => $customer)
                <tr>
                    <td style="padding: 10px;">{{++$i}}</td>
                    <td>{{$customer->code}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->mobile}}</td>
                    <td>{{$customer->email}}</td>
                    <td>@if($customer->status=='1')فعال @else غير فعال @endif</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
