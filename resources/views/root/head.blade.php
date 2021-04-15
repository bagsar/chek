  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>«Чекарт»</title>
<link rel="shortcut icon" href="images/favicon.ico">
  <!-- Google Font: Source Sans Pro -->
      <style>
      /*! CSS Used from: http://127.0.0.1:8000/plugins/fontawesome-free/css/all.min.css */
.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1;}
.fa-align-left:before{content:"\f036";}
.fa-bars:before{content:"\f0c9";}
.fa-chart-pie:before{content:"\f200";}
.fa-expand-arrows-alt:before{content:"\f31e";}
.fa-minus:before{content:"\f068";}
.fa-th:before{content:"\f00a";}
.fa-th-large:before{content:"\f009";}
.fas{font-family:"Font Awesome 5 Free";}
.fas{font-weight:900;}
/*! CSS Used from: http://127.0.0.1:8000/dist/css/adminlte.min.css */
:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:"Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;}
*,::after,::before{box-sizing:border-box;}
html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent;}
aside,footer,nav,section{display:block;}
body{margin:0;font-family:"Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff;}
hr{box-sizing:content-box;height:0;overflow:visible;}
h1,h3,h5,h6{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ol,ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:none;}
img{vertical-align:middle;border-style:none;}
table{border-collapse:collapse;}
th{text-align:inherit;text-align:-webkit-match-parent;}
label{display:inline-block;margin-bottom:.5rem;}
button{border-radius:0;}
button:focus:not(:focus-visible){outline:0;}
button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;}
button,input{overflow:visible;}
button,select{text-transform:none;}
[role=button]{cursor:pointer;}
select{word-wrap:normal;}
[type=button],button{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none;}
input[type=checkbox]{box-sizing:border-box;padding:0;}
[type=search]{outline-offset:-2px;-webkit-appearance:none;}
h1,h3,h5,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit;}
h1{font-size:2.5rem;}
h3{font-size:1.75rem;}
h5{font-size:1.25rem;}
h6{font-size:1rem;}
hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1);}
.container-fluid{width:100%;padding-right:7.5px;padding-left:7.5px;margin-right:auto;margin-left:auto;}
.row{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-7.5px;margin-left:-7.5px;}
.col-lg-1,.col-lg-12,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-sm-6{position:relative;width:100%;padding-right:7.5px;padding-left:7.5px;}
@media (min-width:576px){
.col-sm-6{-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
@media (min-width:992px){
.col-lg-1{-webkit-flex:0 0 8.333333%;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%;}
.col-lg-4{-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
.col-lg-5{-webkit-flex:0 0 41.666667%;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%;}
.col-lg-6{-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
.col-lg-7{-webkit-flex:0 0 58.333333%;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%;}
.col-lg-12{-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
.table{width:100%;margin-bottom:1rem;color:#212529;background-color:transparent;}
.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6;}
.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6;}
.table-bordered{border:1px solid #dee2e6;}
.table-bordered td,.table-bordered th{border:1px solid #dee2e6;}
.table-bordered thead th{border-bottom-width:2px;}
.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05);}
.form-control{display:block;width:100%;height:calc(2.25rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;box-shadow:inset 0 0 0 transparent;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.form-control{transition:none;}
}
.form-control::-ms-expand{background-color:transparent;border:0;}
.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057;}
.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:inset 0 0 0 transparent;}
.form-control::-webkit-input-placeholder{color:#939ba2;opacity:1;}
.form-control::-moz-placeholder{color:#939ba2;opacity:1;}
.form-control:-ms-input-placeholder{color:#939ba2;opacity:1;}
.form-control::-ms-input-placeholder{color:#939ba2;opacity:1;}
.form-control::placeholder{color:#939ba2;opacity:1;}
.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1;}
.form-control-sm{height:calc(1.8125rem + 2px);padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem;}
.form-group{margin-bottom:1rem;}
.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.btn{transition:none;}
}
.btn:hover{color:#212529;text-decoration:none;}
.btn:focus{outline:0;box-shadow:none;}
.btn:disabled{opacity:.65;box-shadow:none;}
.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff;box-shadow:none;}
.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc;}
.btn-primary:focus{color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 0 rgba(38,143,255,.5);}
.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff;}
.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545;box-shadow:none;}
.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130;}
.btn-danger:focus{color:#fff;background-color:#c82333;border-color:#bd2130;box-shadow:0 0 0 0 rgba(225,83,97,.5);}
.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545;}
.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem;}
.dropdown{position:relative;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem;box-shadow:0 .5rem 1rem rgba(0,0,0,.175);}
.dropdown-menu-right{right:0;left:auto;}
.dropdown-menu[x-placement^=top]{right:auto;bottom:auto;}
.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0;}
.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa;}
.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff;}
.dropdown-item:disabled{color:#6c757d;pointer-events:none;background-color:transparent;}
.dropdown-menu.show{display:block;}
.input-group{position:relative;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:stretch;-ms-flex-align:stretch;align-items:stretch;width:100%;}
.input-group>.form-control{position:relative;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;min-width:0;margin-bottom:0;}
.input-group>.form-control:focus{z-index:3;}
.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0;}
.input-group:not(.has-validation)>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group-prepend{display:-webkit-flex;display:-ms-flexbox;display:flex;}
.input-group-prepend{margin-right:-1px;}
.input-group-text{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem;}
.input-group-text input[type=checkbox]{margin-top:0;}
.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0;}
.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0;}
.custom-select{display:inline-block;width:100%;height:calc(2.25rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;vertical-align:middle;background:#fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat;border:1px solid #ced4da;border-radius:.25rem;box-shadow:inset 0 1px 2px rgba(0,0,0,.075);-webkit-appearance:none;-moz-appearance:none;appearance:none;}
.custom-select:focus{border-color:#80bdff;outline:0;box-shadow:inset 0 1px 2px rgba(0,0,0,.075);}
.custom-select:disabled{color:#6c757d;background-color:#e9ecef;}
.custom-select::-ms-expand{display:none;}
.custom-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057;}
.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.custom-select{transition:none;}
}
.nav{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:.5rem 1rem;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.nav-pills .nav-link{border-radius:.25rem;}
.navbar{position:relative;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem .5rem;}
.navbar-nav{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none;}
.navbar-nav .nav-link{padding-right:0;padding-left:0;}
.navbar-expand{-webkit-flex-flow:row nowrap;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;}
.navbar-expand .navbar-nav{-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;}
.navbar-expand .navbar-nav .nav-link{padding-right:1rem;padding-left:1rem;}
.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5);}
.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7);}
.card{position:relative;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:0 solid rgba(0,0,0,.125);border-radius:.25rem;}
.card-body{-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem;}
.card-title{margin-bottom:.75rem;}
.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:0 solid rgba(0,0,0,.125);}
.card-header:first-child{border-radius:calc(.25rem - 0) calc(.25rem - 0) 0 0;}
.breadcrumb{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem;}
.breadcrumb-item+.breadcrumb-item{padding-left:.5rem;}
.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:"/";}
.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline;}
.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none;}
.breadcrumb-item.active{color:#6c757d;}
.pagination{display:-webkit-flex;display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem;}
.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6;}
.page-link:hover{z-index:2;color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6;}
.page-link:focus{z-index:3;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem;}
.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;}
.page-item.active .page-link{z-index:3;color:#fff;background-color:#007bff;border-color:#007bff;}
.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6;}
.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.badge{transition:none;}
}
.badge:empty{display:none;}
.badge-danger{color:#fff;background-color:#dc3545;}
.bg-primary{background-color:#007bff!important;}
.bg-secondary{background-color:#6c757d!important;}
.bg-success{background-color:#28a745!important;}
.bg-info{background-color:#17a2b8!important;}
.bg-warning{background-color:#ffc107!important;}
.bg-danger{background-color:#dc3545!important;}
.bg-light{background-color:#f8f9fa!important;}
.bg-dark{background-color:#343a40!important;}
.bg-white{background-color:#fff!important;}
.border-0{border:0!important;}
.d-none{display:none!important;}
.d-block{display:block!important;}
.d-flex{display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;}
@media (min-width:576px){
.d-sm-inline{display:inline!important;}
.d-sm-inline-block{display:inline-block!important;}
}
.flex-column{-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important;}
.justify-content-center{-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important;}
.align-items-center{-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important;}
.float-right{float:right!important;}
@media (min-width:576px){
.float-sm-right{float:right!important;}
}
.m-0{margin:0!important;}
.mr-1{margin-right:.25rem!important;}
.mb-1{margin-bottom:.25rem!important;}
.mt-2{margin-top:.5rem!important;}
.mb-2{margin-bottom:.5rem!important;}
.mt-3{margin-top:1rem!important;}
.mb-3{margin-bottom:1rem!important;}
.mb-4{margin-bottom:1.5rem!important;}
.p-0{padding:0!important;}
.p-3{padding:1rem!important;}
.pb-3{padding-bottom:1rem!important;}
.ml-auto{margin-left:auto!important;}
.text-center{text-align:center!important;}
.font-weight-light{font-weight:300!important;}
.text-light{color:#f8f9fa!important;}
@media print{
*,::after,::before{text-shadow:none!important;box-shadow:none!important;}
a:not(.btn){text-decoration:underline;}
thead{display:table-header-group;}
img,tr{page-break-inside:avoid;}
h3,p{orphans:3;widows:3;}
h3{page-break-after:avoid;}
body{min-width:992px!important;}
.navbar{display:none;}
.badge{border:1px solid #000;}
.table{border-collapse:collapse!important;}
.table td,.table th{background-color:#fff!important;}
.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important;}
}
.animation__shake{-webkit-animation:shake 1.5s;animation:shake 1.5s;}
.preloader{display:-webkit-flex;display:-ms-flexbox;display:flex;background-color:#f4f6f9;height:100vh;width:100%;transition:height .2s linear;position:fixed;left:0;top:0;z-index:9999;}
.wrapper,body,html{min-height:100%;}
.wrapper{position:relative;}
.wrapper .content-wrapper{min-height:calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px));}
@media (min-width:768px){
body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header{transition:margin-left .3s ease-in-out;margin-left:250px;}
}
@media (min-width:768px) and (prefers-reduced-motion:reduce){
body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header{transition:none;}
}
@media (max-width:991.98px){
body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer,body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header{margin-left:0;}
}
.content-wrapper{background-color:#f4f6f9;}
.content-wrapper>.content{padding:0 .5rem;}
.main-sidebar,.main-sidebar::before{transition:margin-left .3s ease-in-out,width .3s ease-in-out;width:250px;}
@media (prefers-reduced-motion:reduce){
.main-sidebar,.main-sidebar::before{transition:none;}
}
@media (max-width:767.98px){
.main-sidebar,.main-sidebar::before{box-shadow:none!important;margin-left:-250px;}
}
.layout-fixed .brand-link{width:250px;}
.layout-fixed .main-sidebar{bottom:0;float:none;left:0;position:fixed;top:0;}
.layout-fixed .control-sidebar{bottom:0;float:none;position:fixed;top:0;}
.layout-fixed .control-sidebar .control-sidebar-content::-webkit-scrollbar{width:.5rem;height:.5rem;}
.layout-fixed .control-sidebar .control-sidebar-content::-webkit-scrollbar-thumb{background-color:#a9a9a9;}
.layout-fixed .control-sidebar .control-sidebar-content::-webkit-scrollbar-track{background-color:transparent;}
.layout-fixed .control-sidebar .control-sidebar-content::-webkit-scrollbar-corner{background-color:transparent;}
.layout-fixed .control-sidebar .control-sidebar-content{height:calc(100vh - calc(3.5rem + 1px));overflow-y:auto;-ms-overflow-style:-ms-autohiding-scrollbar;scrollbar-width:thin;scrollbar-color:#a9a9a9 transparent;}
.main-footer{background-color:#fff;border-top:1px solid #dee2e6;color:#869099;padding:1rem;}
.content-header{padding:15px .5rem;}
.content-header h1{font-size:1.8rem;margin:0;}
.content-header .breadcrumb{background-color:transparent;line-height:1.8rem;margin-bottom:0;padding:0;}
.main-header{border-bottom:1px solid #dee2e6;z-index:1034;}
.main-header .nav-link{height:2.5rem;position:relative;}
.main-header .navbar-nav .nav-item{margin:0;}
.brand-link{display:block;font-size:1.25rem;line-height:1.5;padding:.8125rem .5rem;transition:width .3s ease-in-out;white-space:nowrap;}
.brand-link:hover{color:#fff;text-decoration:none;}
[class*=sidebar-dark] .brand-link{border-bottom:1px solid #4b545c;}
[class*=sidebar-dark] .brand-link{color:rgba(255,255,255,.8);}
[class*=sidebar-dark] .brand-link:hover{color:#fff;}
.brand-link .brand-image{float:left;line-height:.8;margin-left:.8rem;margin-right:.5rem;margin-top:-3px;max-height:33px;width:auto;}
.main-sidebar{height:100vh;overflow-y:hidden;z-index:1038;}
.main-sidebar a:-moz-focusring{border:0;outline:0;}
.sidebar::-webkit-scrollbar{width:.5rem;height:.5rem;}
.sidebar::-webkit-scrollbar-thumb{background-color:#a9a9a9;}
.sidebar::-webkit-scrollbar-track{background-color:transparent;}
.sidebar::-webkit-scrollbar-corner{background-color:transparent;}
.sidebar{height:calc(100% - (3.5rem + 1px));overflow-x:none;overflow-y:initial;padding-bottom:0;padding-left:.5rem;padding-right:.5rem;padding-top:0;-ms-overflow-style:-ms-autohiding-scrollbar;scrollbar-width:thin;scrollbar-color:#a9a9a9 transparent;}
.user-panel{position:relative;}
[class*=sidebar-dark] .user-panel{border-bottom:1px solid #4f5962;}
.user-panel,.user-panel .info{overflow:hidden;white-space:nowrap;}
.user-panel .image{display:inline-block;padding-left:.8rem;}
.user-panel img{height:auto;width:2.1rem;}
.user-panel .info{display:inline-block;padding:5px 5px 5px 10px;}
.nav-sidebar .nav-item>.nav-link{margin-bottom:.2rem;}
.nav-sidebar .nav-item>.nav-link .right{transition:-webkit-transform ease-in-out .3s;transition:transform ease-in-out .3s;transition:transform ease-in-out .3s,-webkit-transform ease-in-out .3s;}
@media (prefers-reduced-motion:reduce){
.nav-sidebar .nav-item>.nav-link .right{transition:none;}
}
.nav-sidebar .nav-link>p>.right{position:absolute;right:1rem;top:.7rem;}
.nav-sidebar>.nav-item{margin-bottom:0;}
.nav-sidebar>.nav-item .nav-icon{margin-left:.05rem;font-size:1.2rem;margin-right:.2rem;text-align:center;width:1.6rem;}
.nav-sidebar>.nav-item .nav-icon.fas{font-size:1.1rem;}
.nav-sidebar .nav-link p{display:inline;margin:0;white-space:normal;}
#sidebar-overlay{background-color:rgba(0,0,0,.1);bottom:0;display:none;left:0;position:fixed;right:0;top:0;z-index:1037;}
[class*=sidebar-dark-]{background-color:#343a40;}
[class*=sidebar-dark-] .user-panel a:hover{color:#fff;}
[class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:active{color:#c2c7d0;}
[class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link,[class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus{background-color:rgba(255,255,255,.1);color:#fff;}
[class*=sidebar-dark-] .sidebar a{color:#c2c7d0;}
[class*=sidebar-dark-] .sidebar a:focus,[class*=sidebar-dark-] .sidebar a:hover{text-decoration:none;}
@media (min-width:992px){
.sidebar-mini .nav-sidebar,.sidebar-mini .nav-sidebar .nav-link{white-space:nowrap;}
}
.sidebar-mini .main-sidebar .nav-link{width:calc(250px - .5rem * 2);transition:width ease-in-out .3s;}
@media (prefers-reduced-motion:reduce){
.sidebar-mini .main-sidebar .nav-link{transition:none;}
}
.nav-sidebar{position:relative;}
.nav-sidebar:hover{overflow:visible;}
.nav-sidebar .nav-item>.nav-link{position:relative;}
.main-sidebar .brand-text,.sidebar .nav-link p,.sidebar .user-panel .info{transition:margin-left .3s linear,opacity .3s ease,visibility .3s ease;}
@media (prefers-reduced-motion:reduce){
.main-sidebar .brand-text,.sidebar .nav-link p,.sidebar .user-panel .info{transition:none;}
}
.control-sidebar{bottom:calc(3.5rem + 1px);position:absolute;top:calc(3.5rem + 1px);z-index:1031;}
.control-sidebar,.control-sidebar::before{bottom:calc(3.5rem + 1px);display:none;right:-250px;width:250px;transition:right .3s ease-in-out,display .3s ease-in-out;}
@media (prefers-reduced-motion:reduce){
.control-sidebar,.control-sidebar::before{transition:none;}
}
.control-sidebar::before{content:"";display:block;position:fixed;top:0;z-index:-1;}
.control-sidebar-dark{background-color:#343a40;}
.control-sidebar-dark,.control-sidebar-dark a{color:#c2c7d0;}
.control-sidebar-dark a:hover{color:#fff;}
.control-sidebar-dark h5,.control-sidebar-dark h6{color:#fff;}
.nav-pills .nav-link{color:#6c757d;}
.nav-pills .nav-link:not(.active):hover{color:#007bff;}
.navbar-light{background-color:#f8f9fa;}
.navbar-white{background-color:#fff;color:#1f2d3d;}
label:not(.form-check-label):not(.custom-file-label){font-weight:700;}
.card{box-shadow:0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2);margin-bottom:1rem;}
.card-body::after,.card-header::after{display:block;clear:both;content:"";}
.card-header{background-color:transparent;border-bottom:1px solid rgba(0,0,0,.125);padding:.75rem 1.25rem;position:relative;border-top-left-radius:.25rem;border-top-right-radius:.25rem;}
.card-header>.card-tools{float:right;margin-right:-.625rem;}
.card-title{float:left;font-size:1.1rem;font-weight:400;margin:0;}
.btn:disabled{cursor:not-allowed;}
.table:not(.table-dark){color:inherit;}
.content-wrapper{height:100%;}
.connectedSortable{min-height:100px;}
.img-circle{border-radius:50%;}
@media print{
.content-header,.main-header,.main-sidebar{display:none!important;}
.content-wrapper,.main-footer{-webkit-transform:translate(0,0);transform:translate(0,0);margin-left:0!important;min-height:0!important;}
.layout-fixed .content-wrapper{padding-top:0!important;}
}
.elevation-2{box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)!important;}
.elevation-3{box-shadow:0 10px 20px rgba(0,0,0,.19),0 6px 6px rgba(0,0,0,.23)!important;}
.elevation-4{box-shadow:0 14px 28px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.22)!important;}
.bg-primary{background-color:#007bff!important;}
.bg-primary{color:#fff!important;}
.bg-secondary{background-color:#6c757d!important;}
.bg-secondary{color:#fff!important;}
.bg-success{background-color:#28a745!important;}
.bg-success{color:#fff!important;}
.bg-info{background-color:#17a2b8!important;}
.bg-info{color:#fff!important;}
.bg-warning{background-color:#ffc107!important;}
.bg-warning{color:#1f2d3d!important;}
.bg-danger{background-color:#dc3545!important;}
.bg-danger{color:#fff!important;}
.bg-light{background-color:#f8f9fa!important;}
.bg-light{color:#1f2d3d!important;}
.bg-dark{background-color:#343a40!important;}
.bg-dark{color:#fff!important;}
.bg-lightblue{background-color:#3c8dbc!important;}
.bg-lightblue{color:#fff!important;}
.bg-navy{background-color:#001f3f!important;}
.bg-navy{color:#fff!important;}
.bg-olive{background-color:#3d9970!important;}
.bg-olive{color:#fff!important;}
.bg-lime{background-color:#01ff70!important;}
.bg-lime{color:#1f2d3d!important;}
.bg-fuchsia{background-color:#f012be!important;}
.bg-fuchsia{color:#fff!important;}
.bg-maroon{background-color:#d81b60!important;}
.bg-maroon{color:#fff!important;}
.bg-indigo{background-color:#6610f2!important;}
.bg-indigo{color:#fff!important;}
.bg-purple{background-color:#6f42c1!important;}
.bg-purple{color:#fff!important;}
.bg-pink{background-color:#e83e8c!important;}
.bg-pink{color:#fff!important;}
.bg-orange{background-color:#fd7e14!important;}
.bg-orange{color:#1f2d3d!important;}
.bg-teal{background-color:#20c997!important;}
.bg-teal{color:#fff!important;}
.bg-cyan{background-color:#17a2b8!important;}
.bg-cyan{color:#fff!important;}
.bg-white{background-color:#fff!important;}
.bg-white{color:#1f2d3d!important;}
.bg-gray{background-color:#6c757d!important;}
.bg-gray{color:#fff!important;}
.bg-gray-dark{background-color:#343a40!important;}
.bg-gray-dark{color:#fff!important;}
.bg-gray{background-color:#adb5bd;color:#1f2d3d;}
.bg-white{background-color:#fff;color:#1f2d3d!important;}
/*! CSS Used from: http://127.0.0.1:8000/plugins/overlayScrollbars/css/OverlayScrollbars.min.css */
.os-host{position:relative;overflow:visible!important;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-ms-flex-line-pack:start;align-content:flex-start;-webkit-box-align:start;-ms-flex-align:start;-ms-grid-row-align:flex-start;align-items:flex-start;}
.os-content:before,.os-content:after{content:'';display:table;width:.01px;height:.01px;line-height:0;font-size:0;flex-grow:0;flex-shrink:0;visibility:hidden;}
.os-viewport{-ms-overflow-style:scrollbar!important;}
.os-viewport-native-scrollbars-invisible.os-viewport{scrollbar-width:none!important;}
.os-viewport-native-scrollbars-invisible.os-viewport::-webkit-scrollbar,.os-viewport-native-scrollbars-invisible.os-viewport::-webkit-scrollbar-corner{display:none!important;width:0!important;height:0!important;visibility:hidden!important;background:0 0!important;}
.os-content-glue{box-sizing:inherit;max-height:100%;max-width:100%;width:100%;pointer-events:none;}
.os-padding{box-sizing:inherit;direction:inherit;position:absolute;overflow:visible;padding:0;margin:0;left:0;top:0;bottom:0;right:0;width:auto!important;height:auto!important;z-index:0;}
.os-host-overflow>.os-padding{overflow:hidden;}
.os-viewport{direction:inherit!important;box-sizing:inherit!important;resize:none!important;outline:0!important;position:absolute;overflow:hidden;top:0;left:0;bottom:0;right:0;padding:0;margin:0;-webkit-overflow-scrolling:touch;}
.os-content{direction:inherit;box-sizing:border-box!important;position:relative;display:block;height:100%;width:100%;height:100%;width:100%;visibility:visible;}
.os-resize-observer,.os-resize-observer-host{box-sizing:inherit;display:block;visibility:hidden;position:absolute;top:0;left:0;height:100%;width:100%;overflow:hidden;pointer-events:none;z-index:-1;}
.os-resize-observer-host{padding:inherit;border:inherit;border-color:transparent;border-style:solid;box-sizing:border-box;}
.os-resize-observer-host.observed{display:flex;flex-direction:column;justify-content:flex-start;align-items:flex-start;}
.os-resize-observer-host>.os-resize-observer,.os-resize-observer-host.observed>.os-resize-observer{height:200%;width:200%;padding:inherit;border:inherit;margin:0;display:block;box-sizing:content-box;}
.os-resize-observer-host.observed>.os-resize-observer,.os-resize-observer-host.observed>.os-resize-observer:before{display:flex;position:relative;flex-grow:1;flex-shrink:0;flex-basis:auto;box-sizing:border-box;}
.os-resize-observer-host.observed>.os-resize-observer:before{content:'';box-sizing:content-box;padding:inherit;border:inherit;margin:0;}
.os-size-auto-observer{box-sizing:inherit!important;height:100%;width:inherit;max-width:1px;position:relative;float:left;max-height:1px;overflow:hidden;z-index:-1;padding:0;margin:0;pointer-events:none;-webkit-box-flex:inherit;-ms-flex-positive:inherit;flex-grow:inherit;-ms-flex-negative:0;flex-shrink:0;-ms-flex-preferred-size:0;flex-basis:0;}
.os-size-auto-observer>.os-resize-observer{width:1000%;height:1000%;min-height:1px;min-width:1px;}
.os-resize-observer{-webkit-animation-duration:.001s;animation-duration:.001s;-webkit-animation-name:os-resize-observer-dummy-animation;animation-name:os-resize-observer-dummy-animation;}
.os-host-transition>.os-scrollbar,.os-host-transition>.os-scrollbar-corner{-webkit-transition:opacity .3s,visibility .3s,top .3s,right .3s,bottom .3s,left .3s;transition:opacity .3s,visibility .3s,top .3s,right .3s,bottom .3s,left .3s;}
.os-scrollbar,.os-scrollbar-corner{position:absolute;opacity:1;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)';z-index:1;}
.os-scrollbar-corner{bottom:0;right:0;}
.os-scrollbar{pointer-events:none;}
.os-scrollbar-track{pointer-events:auto;position:relative;height:100%;width:100%;padding:0!important;border:0!important;}
.os-scrollbar-handle{pointer-events:auto;position:absolute;width:100%;height:100%;}
.os-scrollbar.os-scrollbar-unusable,.os-scrollbar.os-scrollbar-unusable *{pointer-events:none!important;}
.os-scrollbar.os-scrollbar-unusable .os-scrollbar-handle{opacity:0!important;}
.os-scrollbar-horizontal{bottom:0;left:0;}
.os-scrollbar-vertical{top:0;right:0;}
.os-scrollbar-auto-hidden,.os-host-resize-disabled.os-host-scrollbar-horizontal-hidden>.os-scrollbar-corner,.os-host-scrollbar-horizontal-hidden>.os-scrollbar-horizontal,.os-host-resize-disabled.os-host-scrollbar-vertical-hidden>.os-scrollbar-corner,.os-host-scrollbar-vertical-hidden>.os-scrollbar-vertical,.os-scrollbar-horizontal.os-scrollbar-auto-hidden+.os-scrollbar-vertical+.os-scrollbar-corner,.os-scrollbar-horizontal+.os-scrollbar-vertical.os-scrollbar-auto-hidden+.os-scrollbar-corner,.os-scrollbar-horizontal.os-scrollbar-auto-hidden+.os-scrollbar-vertical.os-scrollbar-auto-hidden+.os-scrollbar-corner{opacity:0;visibility:hidden;pointer-events:none;}
.os-host-resize-disabled.os-host-scrollbar-horizontal-hidden>.os-scrollbar-vertical{top:0;bottom:0;}
.os-host-resize-disabled.os-host-scrollbar-vertical-hidden>.os-scrollbar-horizontal{right:0;left:0;}
.os-scrollbar:hover{opacity:1!important;visibility:visible!important;}
.os-host-overflow{overflow:hidden!important;}
.os-theme-light>.os-scrollbar-horizontal{right:10px;height:10px;}
.os-theme-light>.os-scrollbar-vertical{bottom:10px;width:10px;}
.os-theme-light>.os-scrollbar-corner{height:10px;width:10px;}
.os-theme-light>.os-scrollbar-corner{background-color:transparent;}
.os-theme-light>.os-scrollbar{padding:2px;box-sizing:border-box;background:0 0;}
.os-theme-light>.os-scrollbar.os-scrollbar-unusable{background:0 0;}
.os-theme-light>.os-scrollbar>.os-scrollbar-track{background:0 0;}
.os-theme-light>.os-scrollbar-horizontal>.os-scrollbar-track>.os-scrollbar-handle{min-width:30px;}
.os-theme-light>.os-scrollbar-vertical>.os-scrollbar-track>.os-scrollbar-handle{min-height:30px;}
.os-theme-light.os-host-transition>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle{-webkit-transition:background-color .3s;transition:background-color .3s;}
.os-theme-light>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle,.os-theme-light>.os-scrollbar>.os-scrollbar-track{border-radius:10px;}
.os-theme-light>.os-scrollbar>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(255,255,255,.4);}
.os-theme-light>.os-scrollbar:hover>.os-scrollbar-track>.os-scrollbar-handle{background:rgba(255,255,255,.55);}
.os-theme-light>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-light>.os-scrollbar-vertical .os-scrollbar-handle:before{content:'';position:absolute;left:0;right:0;top:0;bottom:0;display:block;}
.os-theme-light.os-host-scrollbar-horizontal-hidden>.os-scrollbar-horizontal .os-scrollbar-handle:before,.os-theme-light.os-host-scrollbar-vertical-hidden>.os-scrollbar-vertical .os-scrollbar-handle:before{display:none;}
.os-theme-light>.os-scrollbar-horizontal .os-scrollbar-handle:before{top:-6px;bottom:-2px;}
.os-theme-light>.os-scrollbar-vertical .os-scrollbar-handle:before{left:-6px;right:-2px;}
/*! CSS Used from: https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css */
table.dataTable{width:100%;margin:0 auto;clear:both;border-collapse:separate;border-spacing:0;}
table.dataTable thead th,table.dataTable tfoot th{font-weight:bold;}
table.dataTable thead th{padding:10px 18px;border-bottom:1px solid #111;}
table.dataTable thead th:active{outline:none;}
table.dataTable tfoot th{padding:10px 18px 6px 18px;border-top:1px solid #111;}
table.dataTable thead .sorting,table.dataTable thead .sorting_desc{cursor:pointer;*cursor:hand;background-repeat:no-repeat;background-position:center right;}
table.dataTable thead .sorting{background-image:url("https://cdn.datatables.net/1.10.24/images/sort_both.png");}
table.dataTable thead .sorting_desc{background-image:url("https://cdn.datatables.net/1.10.24/images/sort_desc.png")!important;}
table.dataTable tbody tr{background-color:#fff;}
table.dataTable tbody td{padding:8px 10px;}
table.dataTable,table.dataTable th,table.dataTable td{box-sizing:content-box;}
.dataTables_wrapper{position:relative;clear:both;*zoom:1;zoom:1;}
.dataTables_wrapper .dataTables_filter{float:right;text-align:right;}
.dataTables_wrapper .dataTables_filter input{border:1px solid #aaa;border-radius:3px;padding:5px;background-color:transparent;margin-left:3px;}
.dataTables_wrapper .dataTables_info{clear:both;float:left;padding-top:.755em;}
.dataTables_wrapper .dataTables_paginate{float:right;text-align:right;padding-top:.25em;}
.dataTables_wrapper .dataTables_paginate .paginate_button{box-sizing:border-box;display:inline-block;min-width:1.5em;padding:.5em 1em;margin-left:2px;text-align:center;text-decoration:none!important;cursor:pointer;*cursor:hand;color:#333!important;border:1px solid transparent;border-radius:2px;}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{cursor:default;color:#666!important;border:1px solid transparent;background:transparent;box-shadow:none;}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{color:white!important;border:1px solid #111;background-color:#585858;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));background:-webkit-linear-gradient(top, #585858 0%, #111 100%);background:-moz-linear-gradient(top, #585858 0%, #111 100%);background:-ms-linear-gradient(top, #585858 0%, #111 100%);background:-o-linear-gradient(top, #585858 0%, #111 100%);background:linear-gradient(to bottom, #585858 0%, #111 100%);}
.dataTables_wrapper .dataTables_paginate .paginate_button:active{outline:none;background-color:#2b2b2b;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));background:-webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:-o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);background:linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);box-shadow:inset 0 0 3px #111;}
.dataTables_wrapper .dataTables_filter,.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate{color:#333;}
.dataTables_wrapper:after{visibility:hidden;display:block;content:"";clear:both;height:0;}
@media screen and (max-width: 767px){
.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate{float:none;text-align:center;}
.dataTables_wrapper .dataTables_paginate{margin-top:.5em;}
}
@media screen and (max-width: 640px){
.dataTables_wrapper .dataTables_filter{float:none;text-align:center;}
.dataTables_wrapper .dataTables_filter{margin-top:.5em;}
}
/*! CSS Used from: https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css */
table.dataTable{clear:both;margin-top:6px!important;margin-bottom:6px!important;max-width:none!important;border-collapse:separate!important;border-spacing:0;}
table.dataTable td,table.dataTable th{-webkit-box-sizing:content-box;box-sizing:content-box;}
div.dataTables_wrapper div.dataTables_filter{text-align:right;}
div.dataTables_wrapper div.dataTables_filter label{font-weight:normal;white-space:nowrap;text-align:left;}
div.dataTables_wrapper div.dataTables_filter input{margin-left:.5em;display:inline-block;width:auto;}
div.dataTables_wrapper div.dataTables_info{padding-top:.85em;}
div.dataTables_wrapper div.dataTables_paginate{margin:0;white-space:nowrap;text-align:right;}
div.dataTables_wrapper div.dataTables_paginate ul.pagination{margin:2px 0;white-space:nowrap;justify-content:flex-end;}
table.dataTable>thead>tr>th:active{outline:none;}
table.dataTable>thead>tr>th:not(.sorting_disabled){padding-right:30px;}
table.dataTable>thead .sorting,table.dataTable>thead .sorting_desc{cursor:pointer;position:relative;}
table.dataTable>thead .sorting:before,table.dataTable>thead .sorting:after,table.dataTable>thead .sorting_desc:before,table.dataTable>thead .sorting_desc:after{position:absolute;bottom:.9em;display:block;opacity:.3;}
table.dataTable>thead .sorting:before,table.dataTable>thead .sorting_desc:before{right:1em;content:"↑";}
table.dataTable>thead .sorting:after,table.dataTable>thead .sorting_desc:after{right:.5em;content:"↓";}
table.dataTable>thead .sorting_desc:after{opacity:1;}
@media screen and (max-width: 767px){
div.dataTables_wrapper div.dataTables_filter,div.dataTables_wrapper div.dataTables_info,div.dataTables_wrapper div.dataTables_paginate{text-align:center;}
div.dataTables_wrapper div.dataTables_paginate ul.pagination{justify-content:center!important;}
}
table.table-bordered.dataTable{border-right-width:0;}
table.table-bordered.dataTable th,table.table-bordered.dataTable td{border-left-width:0;}
table.table-bordered.dataTable th:last-child,table.table-bordered.dataTable td:last-child{border-right-width:1px;}
table.table-bordered.dataTable tbody td{border-bottom-width:0;}
/*! CSS Used from: http://127.0.0.1:8000/css/custom.css */
@media (max-width: 576px){
.d-lnone1{display:block!important;}
}
.d-lnone1{display:none;}
.brand-link .brand-image{float:left;line-height:.8;margin-left:.8rem;margin-right:.5rem;margin-top:-8px;max-height:43px;width:auto;}
.elevation-3{box-shadow:0 10px 30px rgba(0,0,0,.10),0 6px 6px rgba(0,0,0,.10)!important;}
tfoot input{width:100%;padding:3px;box-sizing:border-box;}
tfoot{display:table-header-group;}
thead{display:table-footer-group;}
td{text-align:center;border-left:1px #d2d2d2 solid;}
th{text-align:center;border-top:1px #d2d2d2 solid;border-bottom:1px #d2d2d2 solid;border-left:1px #d2d2d2 solid;}
.table.dataTable  td{font-family:Verdana, Geneva, Tahoma, sans-serif;font-size:14px;}
#example{font-family:Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";}
.buttonsToHide{display:none;}
.buttons-csv,.buttons-copy,.buttons-excel,.dataTables_filter{display:none;}
.dataTables_wrapper .dataTable td{padding:0rem 0rem;}
table.table-bordered.dataTable tbody td{border:1px solid #0000001f;border-radius:2px;}
.dataTables_wrapper{overflow:auto;}
.dataTables_wrapper .dataTable th{padding:0rem 0rem;}
.serch{width:50px;box-sizing:border-box;border:1px solid #ebedf3;border-radius:4px;font-size:16px;background-color:white;background-image:url('http://127.0.0.1:8000/images/searchicon.png');background-position:17px 5px;background-repeat:no-repeat;padding:0px 0px 0px 30px;-webkit-transition:width 0.4s ease-in-out;transition:width 0.4s ease-in-out;}
.serch:focus{width:100%;border:1px solid #ebedf3!important;background-position:5px 5px;outline:0;}
.table-striped tbody tr:nth-of-type(odd){background-color:rgb(235, 237, 243);}
html{--scrollbarBG:#eef0f8;--thumbBG:#b6d5f9;}
body::-webkit-scrollbar{width:15px;}
body{scrollbar-width:thin;scrollbar-color:var(--thumbBG) var(--scrollbarBG);}
body::-webkit-scrollbar-track{background:var(--scrollbarBG);}
body::-webkit-scrollbar-thumb{background-color:var(--thumbBG);border-radius:1px;border:3px solid var(--scrollbarBG);}
#example_wrapper::-webkit-scrollbar{width:15px;}
#example_wrapper{scrollbar-width:thin;scrollbar-color:var(--thumbBG) var(--scrollbarBG);}
#example_wrapper::-webkit-scrollbar-track{background:var(--scrollbarBG);}
#example_wrapper::-webkit-scrollbar-thumb{background-color:var(--thumbBG);border-radius:6px;border:3px solid var(--scrollbarBG);}
.dataTables_wrapper{padding:1px!important;}
*,*::before,*::after{-webkit-box-sizing:border-box;box-sizing:border-box;}
.dataTables_wrapper .dataTable{width:100%!important;border-collapse:initial!important;border-spacing:0!important;border-radius:0.42rem;}
.table-bordered{border:1px solid #EBEDF3;}
.table{width:100%;margin-bottom:1rem;color:#3F4254;background-color:transparent;}
.dataTables_wrapper .dataTable th,.dataTables_wrapper .dataTable td{font-weight:400;font-size:1rem;vertical-align:middle;color:#3F4254;-webkit-transition:color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;transition:color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;transition:color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;transition:color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, -webkit-box-shadow 0.15s ease;outline:none!important;padding:0.25rem 0rem;}
.content-wrapper{background-color:#f2f3f8;}
.dataTables_wrapper .dataTables_paginate .paginate_button{padding:0px;margin-left:0px;}
.dataTables_wrapper .dataTables_filter,.dataTables_wrapper .dataTables_info,.dataTables_wrapper .dataTables_paginate{color:#000;}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover{border:1px solid #fff;}
.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#000000;background-color:#fff;border:1px solid #dee2e6;}
/*! CSS Used from: http://127.0.0.1:8000/css/jquery.msgbox.css */
.jMsgbox-overlay{background-color:#343a4087;}
.jMsgbox-wrap{box-shadow:0 3px 7px #333;border-radius:6px;-webkit-border-radius:6px;-moz-border-radius:6px;border:1px solid #999;}
.jMsgbox-title{color:#333;height:50px!important;padding-left:15px;font-size:24px;border-bottom:1px solid #eee;font-weight:bold;background-color:#fff;}
.jMsgbox-controls{right:6px;top:3px;}
.jMsgbox-controls a{width:20px;height:20px;margin:10px 2px;background-image:url(http://127.0.0.1:8000/img/controls.png);background-repeat:no-repeat;}
.jMsgbox-close{background-position:-63px -25px;}
.jMsgbox-close:hover{background-position:-63px -1px;}
.jMsgbox-max{background-position:-42px -25px;}
.jMsgbox-max:hover{background-position:-42px -1px;}
.jMsgbox-content{background-color:#fff;}
.jMsgbox-loaded{padding:15px;}
.jMsgbox-resize{background-position:-85px -30px;background-repeat:no-repeat;background-color:transparent;background-image:url(http://127.0.0.1:8000/img/controls.png);width:10px;height:10px;}
.jMsgbox-resize:hover{background-position:-85px -6px;}
/*! CSS Used keyframes */
@-webkit-keyframes shake{0%{-webkit-transform:translate(2px,1px) rotate(0);transform:translate(2px,1px) rotate(0);}10%{-webkit-transform:translate(-1px,-2px) rotate(-2deg);transform:translate(-1px,-2px) rotate(-2deg);}20%{-webkit-transform:translate(-3px,0) rotate(3deg);transform:translate(-3px,0) rotate(3deg);}30%{-webkit-transform:translate(0,2px) rotate(0);transform:translate(0,2px) rotate(0);}40%{-webkit-transform:translate(1px,-1px) rotate(1deg);transform:translate(1px,-1px) rotate(1deg);}50%{-webkit-transform:translate(-1px,2px) rotate(-1deg);transform:translate(-1px,2px) rotate(-1deg);}60%{-webkit-transform:translate(-3px,1px) rotate(0);transform:translate(-3px,1px) rotate(0);}70%{-webkit-transform:translate(2px,1px) rotate(-2deg);transform:translate(2px,1px) rotate(-2deg);}80%{-webkit-transform:translate(-1px,-1px) rotate(4deg);transform:translate(-1px,-1px) rotate(4deg);}90%{-webkit-transform:translate(2px,2px) rotate(0);transform:translate(2px,2px) rotate(0);}100%{-webkit-transform:translate(1px,-2px) rotate(-1deg);transform:translate(1px,-2px) rotate(-1deg);}}
@keyframes shake{0%{-webkit-transform:translate(2px,1px) rotate(0);transform:translate(2px,1px) rotate(0);}10%{-webkit-transform:translate(-1px,-2px) rotate(-2deg);transform:translate(-1px,-2px) rotate(-2deg);}20%{-webkit-transform:translate(-3px,0) rotate(3deg);transform:translate(-3px,0) rotate(3deg);}30%{-webkit-transform:translate(0,2px) rotate(0);transform:translate(0,2px) rotate(0);}40%{-webkit-transform:translate(1px,-1px) rotate(1deg);transform:translate(1px,-1px) rotate(1deg);}50%{-webkit-transform:translate(-1px,2px) rotate(-1deg);transform:translate(-1px,2px) rotate(-1deg);}60%{-webkit-transform:translate(-3px,1px) rotate(0);transform:translate(-3px,1px) rotate(0);}70%{-webkit-transform:translate(2px,1px) rotate(-2deg);transform:translate(2px,1px) rotate(-2deg);}80%{-webkit-transform:translate(-1px,-1px) rotate(4deg);transform:translate(-1px,-1px) rotate(4deg);}90%{-webkit-transform:translate(2px,2px) rotate(0);transform:translate(2px,2px) rotate(0);}100%{-webkit-transform:translate(1px,-2px) rotate(-1deg);transform:translate(1px,-2px) rotate(-1deg);}}
@-webkit-keyframes os-resize-observer-dummy-animation{0%{z-index:0;}to{z-index:-1;}}
@keyframes os-resize-observer-dummy-animation{0%{z-index:0;}to{z-index:-1;}}
/*! CSS Used fontfaces */
@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:block;src:url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.eot);src:url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.eot#iefix) format("embedded-opentype"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.woff2) format("woff2"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.woff) format("woff"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.ttf) format("truetype"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-regular-400.svg#fontawesome) format("svg");}
@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:block;src:url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.eot);src:url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.eot#iefix) format("embedded-opentype"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.woff2) format("woff2"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.woff) format("woff"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.ttf) format("truetype"),url(http://127.0.0.1:8000/plugins/fontawesome-free/webfonts/fa-solid-900.svg#fontawesome) format("svg");}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7qsDJT9g.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7jsDJT9g.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7rsDJT9g.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7ksDJT9g.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7osDJT9g.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7psDJT9g.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Source Sans Pro';font-style:italic;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDI.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmhduz8A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwkxduz8A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmxduz8A.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlBduz8A.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmBduz8A.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmRduz8A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:300;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lqDY.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lqDY.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lqDY.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lqDY.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lqDY.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lqDY.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7l.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmhduz8A.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwkxduz8A.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmxduz8A.woff2) format('woff2');unicode-range:U+1F00-1FFF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlBduz8A.woff2) format('woff2');unicode-range:U+0370-03FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmBduz8A.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmRduz8A.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}
@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;font-display:fallback;src:url(https://fonts.gstatic.com/s/sourcesanspro/v14/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdu.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}
    </style>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" as="style"  onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"></noscript>

  <!-- Ionicons -->
  <link rel="preload" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" as="style"  onload="this.rel='stylesheet'">  
<noscript>  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> </noscript>
  <!-- Font Awesome -->
  <link rel="preload" href="plugins/fontawesome-free/css/all.min.css" as="style"  onload="this.rel='stylesheet'">
 <noscript>    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"></noscript>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="preload" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"></noscript>
  <!-- iCheck -->
  <link rel="preload" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"></noscript>
  <!-- JQVMap -->
  <link rel="preload" href="plugins/jqvmap/jqvmap.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript> <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"></noscript>
  <!-- Theme style -->
  <link rel="preload" href="dist/css/adminlte.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="dist/css/adminlte.min.css"></noscript>
  <!-- overlayScrollbars -->
  <link rel="preload" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"></noscript>
  <!-- Daterange picker -->
  <link rel="preload" href="plugins/daterangepicker/daterangepicker.css" as="style"  onload="this.rel='stylesheet'">
  <noscript> <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"></noscript>
  <!-- summernote -->
  <link rel="preload" href="plugins/summernote/summernote-bs4.min.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css"></noscript>

  <!-- -----------------------table style-------------------- -->
      <link rel="preload" href="css/all.css" as="style"  onload="this.rel='stylesheet'">
      <noscript>      <link href="css/all.css" rel="stylesheet" type="text/css" /></noscript>
      <!--    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" /> -->

<!-- ----------------------- <link href="css/3css.css" rel="stylesheet" type="text/css" /> ----------------------------------------------- -->
    


<link rel="preload" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" as="style"  onload="this.rel='stylesheet'">
<noscript><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css"></noscript>
<link rel="preload" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" as="style"  onload="this.rel='stylesheet'">
<noscript><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"></noscript>
<link rel="preload" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" as="style"  onload="this.rel='stylesheet'">
<noscript><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"></noscript>
<!-- ------------------------------------------------------------------------------------------------------------- -->

<!--       <link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
      <link href="css/plugins.bundle.css" rel="stylesheet" type="text/css" /> -->
      <script src="plugins/jquery/jquery.min.js"></script>


 <!-- ------------------    ----------------------- -->
  <!-- <script src="js/master-table.js"></script> -->
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>  
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/keytable/2.6.1/js/dataTables.keyTable.min.js"></script> 
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>                                              <script src="js/custom.js"></script>
  <!-- ------------------------------------------- -->

  <link rel="preload" href="css/custom.css" as="style"  onload="this.rel='stylesheet'">
  <noscript>  <link rel="stylesheet" href="css/custom.css"></noscript>
   <!-- -------------------popup window--------------------------> 
<link rel="preload" href="css/jquery.msgbox.css" type="text/css" as="style"  onload="this.rel='stylesheet'">  
<noscript><link href="css/jquery.msgbox.css" rel="stylesheet" type="text/css">   </noscript>  

<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/jquery.msgbox.js"></script>
<img src="img/success.png" style="display: none;">
<img src="img/controls.png" style="display: none;">



  <!-- -----------------------table style-------------------- -->




   <!-- -------------------popup window--------------------------> 


</noscript>