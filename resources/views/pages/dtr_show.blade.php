<div>

    <!-- info & print -->
    <div>Salary Period</div>
    @if($employee->isEmpty())
        <div>no employee dtr data.</div>
    @else
        <form id="dropdownForm" action="{{ route('show.dateDTR') }}" method="get">
            <select id="dropdown" name="selected_date" onchange="submitForm()">
                <option disabled selected>Select a date</option>
                @foreach($monthYears as $monthYear)

                    <option>{{ $monthYear }}</option>

                @endforeach
            </select>
            <input type="hidden" name="employeeID" value="{{ $id }}">
        </form>
    @endif
    <div>PRINT</div>

    <!-- table -->

    @if($employee->isEmpty())
        <p>no employee dtr data.</p>
    @else

        <table>
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>TIME IN</th>
                    <th>LATE</th>
                    <th>TIME OUT</th>
                    <th>UNDERTIME</th>
                    <th>OVERTIME</th>
                    <th>HOURS WORKED</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employee as $dtr)

                <tr>
                    <td>{{ $dtr->day }}</td>
                    <td>{{ $dtr->time_in }}</td>
                    <td>{{ $dtr->late }}</td>
                    <td>{{ $dtr->time_out }}</td>
                    <td>{{ $dtr->undertime }}</td>
                    <td>{{ $dtr->overtime }}</td>
                    <td>{{ $dtr->hours_worked }}</td>
                </tr>

            @endforeach
            </tbody>
            
        </table>
    
    @endif

    <!-- SCRIPT -->
    <script>

        const dropdown = document.querySelector("#dropdown");

        dropdown.value = '{{ $monthYearDisplay }}'
        
        function submitForm() {

            const selectedOption = dropdown.options[dropdown.selectedIndex];
            const selectedText = selectedOption.text;

            document.querySelector("#dropdownForm").submit();
        }

    </script>

</div>