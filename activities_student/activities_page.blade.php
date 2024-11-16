@extends('elements.layout')

@section('content')
@include('include.studentsidebar')

<style>
    .containerr {
        width: 70%;
        position: fixed;
        left: 340px;
        z-index: 1000;
        top: 100px;
        margin-top: 30px;
    }

    .rowc {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #90BDB1;
        color: white;
        font-size: 30px;
        height: 100px;
        align-items: center;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }

    .padding {
        padding-bottom: 40px;
        color: #37584F;
        font-weight: bold;
    }

    .btn {
        background-color: #37584F;
        color: white; 
        font-size: 30px;
        border: none;
        cursor: pointer;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        font-weight: bold;
        display: flex;
        align-items: center; 
        justify-content: center; 
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
    }
</style>

<div class="containerr">
    <h1 class="padding">View Activities</h1>
    <div class="container text-center">
        <div class="rowc">
            ITPC13 - SYSTEM ANALYSIS AND DESIGN
            <button type="button" class="btn">></button>
        </div>
        <div class="rowc">
            ITPE2 - IT PROFESSIONAL ELECTIVE 2
            <button type="button" class="btn" onclick="{{ route('view_scores') }}">></button>
        </div>
        <div class="rowc">
            ITPE1 - IT PROFESSIONAL ELECTIVE 1
            <button type="button" class="btn">></button>
        </div>
    </div>
</div>






@endsection