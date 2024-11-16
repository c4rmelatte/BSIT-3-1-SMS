<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    .payroll-container {
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        padding: 20px;
        background-color: #D9D9D9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 900px;
        margin: auto;
    }

    .payroll-section {
        width: 45%;
    }

    .payroll-section h2 {
        margin-top: 0;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .payroll-section label {
        font-weight: bold;
        margin-top: 5px;
        display: block;
    }

    .payroll-section input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .button-container {
        text-align: right;
    }

    .create-button {
        background-color: #ffcc00;
        color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        margin-top: 20px;
    }

    .create-button:hover {
        background-color: #ff9900;
    }


</style>
</head>
<body>


    <!-- <button class="" onclick="window.print()">Print</button> -->

    <!-- <div class="name-line">
        <input type="text" id="" name="lastName" placeholder="Last Name" readonly>
        <input type="text" id="" name="firstName" placeholder="First Name" readonly>
        <input type="text" id="" name="middleInitial" placeholder="M.I." maxlength="1" readonly>
        <input type="text" id="id" name="id" placeholder="ID" readonly>
    </div> -->
    <form action="{{ route('insert.payslip') }}" method="POST">
        @csrf
        <div class="payroll-container">
            <div class="payroll-section">
                <h2>Employee Details</h2>
                <!-- <label for="employeeName">Employee Name:</label><br>
                <input type="text" id="employeeName" name="employeeName" required><br><br> -->
                
                <label id="employeeIDLabel" for="employeeID">{{ session('alert') }}</label><br>
                <input type="text" id="employeeID" name="employeeID" value="{{ old('employeeID') }}" required><br><br>
                
                <label for="department">Department:</label><br>
                <input type="text" id="department" name="department" value="{{ old('department') }}" required><br><br>
                
                <label for="position">Position:</label><br>
                <input type="text" id="position" name="position" value="{{ old('position') }}" required><br><br>
                
                <label for="payPeriod">Pay Period:</label><br>
                <input type="month" id="payPeriod" name="payPeriod" value="{{ old('payPeriod') }}" required><br><br>
                
                <label for="payDate">Pay Date:</label><br>
                <input type="date" id="payDate" name="payDate" value="{{ old('payDate') }}" required><br><br>

                <h2>Earnings</h2>
                <label for="baseSalary">Base Salary:</label><br>
                <input type="number" id="baseSalary" name="baseSalary" value="{{ old('baseSalary') }}" required><br><br>
                
                <label for="additionalHours">Additional Hours:</label><br>
                <input type="number" id="additionalHours"  name="additionalHours" value="{{ old('additionalHours') }}"><br><br>
                
                <label for="bonus">Bonus:</label><br>
                <input type="number" id="bonus" name="bonus" value="{{ old('bonus') }}"><br><br>
                
                <!-- <label for="totalEarnings">Total Earnings:</label><br>
                <input type="number" id="totalEarnings" name="totalEarnings" readonly><br><br> -->
            </div>
            <div class="payroll-section">
                <h2>Deductions</h2>
                <label for="federalTax">Federal Tax:</label><br>
                <input type="number" id="federalTax" name="federalTax" value="{{ old('federalTax') }}" required><br><br>
                
                <label for="healthInsurance">Health Insurance:</label><br>
                <input type="number" id="healthInsurance" name="healthInsurance" value="{{ old('healthInsurance') }}"><br><br>
                
                <label for="retirementContribution">Retirement Contribution:</label><br>
                <input type="number" id="retirementContribution" name="retirementContribution" value="{{ old('retirementContribution') }}"><br><br>
                
                <!-- <label for="absentDeductions">Absent Deductions:</label><br>
                <input type="number" id="absentDeductions" name="absentDeductions"><br><br> -->
                
                <!-- <label for="totalDeductions">Total Deductions:</label><br>
                <input type="number" id="totalDeductions" name="totalDeductions" readonly><br><br>

                <label for="netPay">Net Pay:</label><br>
                <input type="number" id="netPay" name="netPay" readonly><br><br> -->

                <h2>Payment Information</h2>
                <!-- <label for="paymentMethod">Payment Method:</label><br>
                <input type="text" id="paymentMethod" name="paymentMethod" value="Direct Deposit" readonly><br><br> -->
                
                <label for="accountDigits">Account Last 4 Digits:</label><br>
                <input type="text" id="accountDigits" name="accountDigits" value="{{ old('accountDigits') }}" required pattern="\d{4}"><br><br>
                
                <!-- <label for="paymentDate">Date:</label><br>
                <input type="date" id="paymentDate" na  me="paymentDate" required><br><br> -->

                <div class="button-container">
                    <button type="submit" class="create-button" id="create">CREATE</button>
                </div>

            </div>

        </div>
    </form>
    <script>
        let alertMessage = "{{ session('alert') }}"; // Session alert value
        
        // Check if alertMessage is not empty
        if (!alertMessage) {
            alertMessage = "Employee ID:"; // Default value if no session alert
        }

        // Update label text with alertMessage
        document.querySelector("#employeeIDLabel").innerText = alertMessage;
    </script>


</body>