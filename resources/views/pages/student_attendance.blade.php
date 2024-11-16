<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
        }

        .subject {
            font-size: 20px;
            font-weight: 600;
            color: black;
            padding: 15px;
            text-align: left;
            width: 600px;
            border-radius: 10px;
            background-color: #90BDB1;
            margin-bottom: 10px;
        }

        .total {
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .total label {
            font-weight: 500;
            margin-right: 10px;
        }

        .total input {
            width: 100px;
            margin-right: 20px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f2f2f2;
        }

        thead th {
            background-color: #1F342E;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border: 1px solid #1F342E;
        }

        tbody td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
        }
        
        #termSelect {
            margin: 20px 0;
        }
    </style>

</head>
<body>

    <div class="subject">
        <span id="subject">{{ $subjectCode }}</span>
    </div>

    <div class="total">

        <label for="totalPresent">Total Present:</label>
        <input type="text" id="totalPresent" value="{{ $present ?? '' }}" readonly>

        <label for="totalAbsent">Total Absent:</label>
        <input type="text" id="totalAbsent" value="{{ $absent ?? '' }}" readonly>

        <div id="termSelect">
            <form id="myForm" action="{{ route('show.student.attendance') }}" method="GET">

                <input type="hidden" name="studentID" value="{{ $studentID }}">
                <input type="hidden" name="subjectID" value="{{ $subjectID }}">
                
                <label for="dropdown">Choose term:</label>
                <select id="dropdown" name="option" onchange="if(this.value) { this.form.submit(); }">
                    <option selected disabled>Select Term</option>
                    <option value="prelims" {{ isset($term) && $term == 'prelims' ? 'selected' : '' }}>Prelims</option>
                    <option value="midterms" {{ isset($term) && $term == 'midterms' ? 'selected' : '' }}>Midterms</option>
                    <option value="finals" {{ isset($term) && $term == 'finals' ? 'selected' : '' }}>Finals</option>
                </select>
            </form>            
        </div>

    </div>

    <table>
        <thead>
            <tr>
                <th>NO.</th>
                <th>DATE</th>
                <th>ATTENDANCE</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($attendanceDates))
                @foreach ($attendanceDates as $attendanceDate)

                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $attendanceDate->date }}</td>
                        <td>{!! $attendanceDate->checklist ? "&#9989;" : "&#10060;" !!}</td>
                    </tr>

                @endforeach
            @endif
        </tbody>
    </table>

    <script>

    </script>
</body>