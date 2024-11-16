<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
        }

        .course {
            font-size: 20px;
            font-weight: 600;
            color: #6b837b;
            padding: 20px;
            text-align: left;
            margin-bottom: 10px;
            
        }

        /* Card styles */
        .card {
            background-color: #a7d4c2; /* Light green background for odd cards */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adjustments for the text inside the card */
        .card p {
            margin: 0;
            color: white;
            font-style: italic;
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Style for alternative card color */
        .card:nth-child(even) {
            background-color: white;
        }

        .card:nth-child(even) span {
            color: black;
        }

    </style>

</head>
<body>

    <div class="course">
        <span id="departmentDisplay">{{ $studentBlock->student_id }}</span><br>
        <span id="courseYearSecDisplay">{{ $studentBlock->course_year_block }}</span>
    </div>

    @foreach ($studentSubjects as $studentSubject)

        <div class="card" onclick="document.getElementById('{{ $studentSubject->subject_id }}').submit()">
            <form action="{{ route('show.student.attendance.page') }}" method="get" id="{{ $studentSubject->subject_id }}">
            <input type="hidden" name="studentID" value="{{ $studentBlock->student_id }}">
            <input type="hidden" name="subjectID" value="{{ $studentSubject->subject_id }}">
            <span id="subjectSched">{{ $studentSubject->subject_code }}</span>
            </form>
        </div>

    @endforeach

    <script>
    
    </script>
</body>