<div>

    <!-- time and date -->
    <div id="time">00:00</div>
    <div id="date">Jan 10, 2024</div>
    
    <!-- input -->
    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form action="{{ route('check.id') }}" method="get">

        <input type="hidden" name="currentDateCheck" id="currentDateCheck">

        <input type="text" name="idInput" value="{{ session('idInput') }}" placeholder="Inser ID Number">
        <button type="submit" id="enterButton">ENTER</button>

    </form>

    <!-- id owner -->
    <form action="{{ route('input.time') }}" method="post">
        @csrf

        <input type="hidden" name="currentTime" id="currentTime">
        <input type="hidden" name="currentDate" id="currentDate">

        <input type="hidden" name="idInputHidden" value="{{ session('idInput') }}">

        <div id="employeeName" hidden>{{ session('name') }}</div>
        <button id="timeInButton" type="submit" hidden>{{ session('timeInOut') }}</button>
    
    </form>
    
    <!-- alert -->
    <div id="alert">{{ session('alert') }}</div>

    <!-- SCRIPT -->
    <script>
        function updateTime() {
            const now = new Date();
            
            // Get hours, minutes, and seconds in 24-hour format
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Format hours, minutes, and seconds with leading zeros
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            
            // Display time in 24-hour format
            document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;
            
            // Display the date in a readable format
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            document.getElementById('date').textContent = now.toLocaleDateString('en-US', options);
        }

        // Update the time immediately and set it to update every second
        updateTime(); // Call once to set the initial time
        setInterval(updateTime, 1000); // Update every second

        const employeeName = document.querySelector('#employeeName');
        const timeInButton = document.querySelector('#timeInButton');
        const enterButton = document.querySelector('#enterButton');
        const alert = document.querySelector('#alert');

        if (employeeName.innerText !== "") {
            employeeName.removeAttribute('hidden');
            timeInButton.removeAttribute('hidden');
        }
        else {
            employeeName.setAttribute('hidden', true);
            timeInButton.setAttribute('hidden', true);
        }

        timeInButton.addEventListener('click', function() {
            const now = new Date();
            
            // Format time as HH:MM:SS
            const formattedTime = now.toTimeString().slice(0, 8);
            document.getElementById('currentTime').value = formattedTime;

            // Format date as YYYY-MM-DD
            const formattedDate = now.toISOString().slice(0, 10);
            document.getElementById('currentDate').value = formattedDate;
        });

        enterButton.addEventListener('click', function() {
            const now = new Date();

            // Format date as YYYY-MM-DD
            const formattedDate = now.toISOString().slice(0, 10);
            document.getElementById('currentDateCheck').value = formattedDate;
        });

    </script>

    <!-- CSS -->
    <style>

    </style>

</div>