<style>
    .navbar {
        width: calc(100% - 0px);
        position: fixed;
        right: 0px;
        z-index: 1000;
        top: 0;
    }

    .profile-link {
        background-color: white;
        border: 1px solid rgb(159, 159, 159);
        border-radius: 0.8rem;
        transition: background-color 1s ease;
        padding: 10px 30px;
        display: flex;
        width: 320px;
        align-items: center;
    }

    .profile-link img {
        height: 60px;
        width: 60px;
    }

    .profile-link div {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-link p {
        margin: 0;
    }

    .list-group {
        position: absolute;      
        top: 206px;                
        z-index: 999; 
        width: 60%;            
    }

    .list-group-item {
        font-size: 1.25rem;
        padding: 15px;
    }

    .list-group-item.active {
        background-color: #37584F;
        color: white;
    }

    .table {
        margin-top: 220px;
        width: 100%; 
    }

    th a {
        color: #000000;
        text-decoration: none;
    }

    
    .btn-group {
        position: absolute; 
        top: 160px; 
        right: 850px; 
        z-index: 1050; 
        background-color: #37584F;
        border radius: 20;
    }

    .btn-group .btn {
        background-color: #37584F;
        margin-right: 2px;
    }

    .btn-group .btn:active {
    background-color: #4a6e63;  
    border-color: #ffffff;     
}

 
.btn-group .btn:hover {
    background-color: #2e4c43;  
    border-color: #2e4c43;      
}

.btn-group .btn:last-child {
    margin-right: 0;
}

h1 {
    position: absolute;
    margin-top: -90px;
}

</style>


    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="dashboard navbar-brand fs-2 fw-bold">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Profile Dropdown -->
                    <div class="dropdown ms-auto">
                        <a class="nav-link dropdown-toggle d-flex align-items-center profile-link shadow-lg" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/profile.png" alt="Profile" class="rounded-circle me-2">
                            <div>
                                <p class="text-black mb-0">John Doe</p>
                                <p class="text-black mb-0" style="font-size: 0.9rem;">Student</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Info</a></li>
                            <li><a class="dropdown-item" href="{{url('/')}}">Logout</a></li>

                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </nav>

        <div>
            <h1>Total Percentage: 98.23%</h1>
        </div>
        
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Activity</button>
        <button type="button" class="btn btn-secondary">Quiz</button>
        <button type="button" class="btn btn-secondary">Exam</button>
        </div>

        <div>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Score</th>
      <th scope="col">Total</th>
      <th scope="col">Percentage</th>

      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>30</td>
      <td>50</td>
      <td>80%</td>

    </tr>
  </tbody>
  </table>
   </div>
</div>
    