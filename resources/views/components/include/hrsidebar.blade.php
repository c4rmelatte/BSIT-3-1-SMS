<style>
    .sidebar {
        width: 280px;
        background-color: #37584F;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .sidebar hr {
        border: none;
        height: 2px;
        background-color: #ffffff;
        margin: 20px 0;
        opacity: 0.5;
        width: 100%;
    }

    .sidebar a:not(.logo-link):hover {
        background-color: #273f39;
        padding-left: 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
        color: white;
    }

    .dashboard {
        padding: 40px;
    }

    .logo-link {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    /* New styles for the logo */
    .sidebar .logo {
        width: 200px; 
        height: auto;
        margin-bottom: 20px;
    }
</style>


    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{url ('/hr-dashboard')}}" class="logo-link">
            <img src="images/logo.png" alt="Logo" class="logo">
        </a>
        <hr>
        <a href="#" class="nav-link">ANNOUNCEMENT</a>
        <a href="{{url ('/employee-dashboard')}}" class="nav-link">EMPLOYEE</a>


    </div>