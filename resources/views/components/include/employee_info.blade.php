@extends('layout.layout')

@section('content')
    @include('components.include.employee_employee_bar')
    

<style>
    .italic{
        font-style:italic;
        font-weight: 400;
        color: #37584f
    }
    .bg{
        background:#97BD66;
        text-decoration: none;
        display: flex;
        align-items:center;
        justify-content:center;
        height: 60px;
        width:60px;
        border-radius: 100%;
        color: white;
    }
    .red{
        text-decoration: none;
        display: flex;
        align-items:center;
        justify-content:center;
        height: 60px;
        width:60px;
        border-radius: 100%;
        color: white;
        background: #bb2a2a; 
    }

    .info{
        height:400px;
        margin:20px;
        background-color:#DCDCDC;
    }


    .card {
        margin-left: 145px;
    }

    .color{
        background: #37584F; 
        border:none;
        padding: 10px 18px;
        width: 130px;
        border-radius:.7rem;
        transition: all ease .3ms;
        color:white;
    }

    .color:hover{
        transition: all ease .3ms;
        background:#599081;
    }
   
</style>

<div class="d-flex flex-colmun align-items-center w-100 justify-content-between mt-3 mb-5">
    <h3>College of Engineering and Computer Technology</h3>
    <a href ="{{url ('/employee-list')}}">
    <button class="px-3 color fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-arrow-left-circle"></i> BACK</button> 

    </a>
</div>

<div>
    <div class="card shadow-sm">
        <div class="container-fluid p-4 rounded-3 d-flex justify-content-between align-items-center">
            <div class="">
                <h4 class="ms-3 italic">Randy Sansait</h4>
                <p class="ms-3 italic">Professor</p>
            </div>
            <div class="d-flex gap-3">  
                <a href="#" class="bg" >
                    <i class="fa-solid fa-file-pen"></i>
                </a> 
                <a href="#" class="red" >
                    <i class="fa-solid fa-trash-can"></i>
                </a> 
            </div>

        </div>
        <div class="info p-3">
                <h3>informationnn</h3>
        </div> 
    </div>
<div>

@endsection
   
