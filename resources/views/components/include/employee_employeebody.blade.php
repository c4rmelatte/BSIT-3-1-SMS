

<style>
    .div{
        margin-left:145px
    }

    .color{
        background: #F1CA57; 
        border:none;
        padding: 10px 18px;
        width: 130px;
        border-radius:.7rem;
        transition: all ease .3ms;
        color:white;
    }

    .color:hover{
        transition: all ease .3ms;
        background:#C9A643;
    }
    
</style>

<div class="div container d-flex justify-content-center flex-column align-items-center">

<div class="d-flex flex-colmun align-items-center w-100 justify-content-between mt-3 mb-5">
    <h3>College of Engineering and Computer Technology</h3>
    <button class="px-3 color fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> ADD</button> 
</div>


@include('components.include.employee_employeecard')
@include('components.include.employee_create_modal')
   
</div>

