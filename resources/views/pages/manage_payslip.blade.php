<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
  
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <style>
      body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        font-family: 'Poppins', sans-serif;
        background: #f2f3ed;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .container {
        background-color: #f0f0ed;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 900px;
        height: 300px;
        display: flex;
        justify-content: space-around;
      }
      

      .box {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }
      
      .box label {
        font-size: 14px;
        font-weight: 500;
        color: #555;
      }
      
      .empid, .date input {
        width: 450px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 14px;
      }

      .date {
        display: flex;
        gap: 5px;
      }

      .btn {
        width: 100px;
        padding: 8px 10px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .btn-find {
        background-color: #2f725f;
        color: #ffffff;

        
      }

      .btn-show {
        background-color: #2f725f;
        color: #ffffff;
        
        
      }

      .btn-create {
        background-color: #2f725f;
        color: #ffffff;
        
        
      }

      .btn-update {
        background-color: #2f725f;
        color: #ffffff;
        margin-bottom: 20px;
      }

      .btn-delete {
        background-color: #e72929;
        color: #ffffff;
      }

      .button-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
      }

    </style>
</head>
<body>
    
    <div class="container">
    <form id="findPayslipForm" action="{{ route('find.employee') }}" method="get">
    <div class="box">
        <div>{{ session('alert') }}</div>
        <label for="idName">EMP. ID</label>
        <input type="text" class="empid" id="id" name="id" value="{{ old('id', $idBacked ?? '') }}" placeholder="##-####-###">
        
        <label for="monthYear">DATE</label>
        <input type="month" class="empid" id="date" name="month" value="{{ old('month', $monthBacked ?? '') }}">
      </div>
    </form>
      <div class="button-group">
      <button class="btn btn-create" id="btnCreate" onclick="document.getElementById('createPayslipForm').submit()">+ CREATE</button>

        <button class="btn btn-find" id="btnFind" onclick="document.getElementById('findPayslipForm').submit()">FIND</button>
        <button class="btn btn-show" id="btnShow" onclick="document.getElementById('showPayslipForm').submit()" hidden>SHOW</button>
        
        <button class="btn btn-update" id="btnUpdate" onclick="document.getElementById('updatePayslipForm').submit()" hidden>UPDATE</button>
        <button  class="btn btn-delete" id="btnDelete" onclick="if(confirm('Are you sure you want to delete this?')) { document.getElementById('deletePayslipForm').submit() }" hidden>DELETE</button>
      </div>
    </div>

    <form id="createPayslipForm" action="{{ route('create.payslip') }}" method="get">  
        <!-- can pass in something -->
    </form>

    <form id="showPayslipForm" action="{{ route('show.payslip') }}" method="get">

        <input type="text" name="id" id="idShow" hidden>
        <input type="text" name="month" id="monthShow" hidden>

    </form>

    <form id="updatePayslipForm" action="{{ route('update.payslip') }}" method="get">

        <input type="text" name="id" id="idUpdate" hidden>
        <input type="text" name="month" id="monthUpdate" hidden>

    </form>

    <form id="deletePayslipForm" action="{{ route('delete.payslip') }}" method="post">
    @csrf
    @method('DELETE')

        <input type="text" name="id" id="idDelete" hidden>
        <input type="text" name="month" id="monthDelete" hidden>

    </form>



    <script>

        const idDate = "{{ session('id') }}";
        const monthData = "{{ session('month') }}";

        const idUpdate = document.querySelector("#idUpdate");
        const monthUpdate = document.querySelector("#monthUpdate");

        const idDelete = document.querySelector("#idDelete");
        const monthDelete = document.querySelector("#monthDelete");

        const idShow = document.querySelector("#idShow");
        const monthShow = document.querySelector("#monthShow");

        const btnUpdate = document.querySelector("#btnUpdate");
        const btnDelete = document.querySelector("#btnDelete");
        const btnShow = document.querySelector("#btnShow");

        if (idDate && monthData) {

            idUpdate.value = "{{ session('id') }}";
            monthUpdate.value = "{{ session('month') }}";

            idDelete.value = "{{ session('id') }}";
            monthDelete.value = "{{ session('month') }}";
            
            idShow.value = "{{ session('id') }}";
            monthShow.value = "{{ session('month') }}";

            btnUpdate.hidden = false;
            btnDelete.hidden = false;
            btnShow.hidden = false;

        }

    </script>

</body>
</html>