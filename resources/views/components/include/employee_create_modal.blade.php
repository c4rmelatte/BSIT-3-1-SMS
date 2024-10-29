<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog  modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content p-4" style="border-radius: 10px; background-color:#F5F5F5">
      <div class="modal-header border-0">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new employee:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <div class="modal-body">
        <form>
          <div style="background-color: #D9D9D9; padding: 15px; border-radius: 10px">
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <div class="d-flex gap-2 ">
                <input type="text" class="form-control" placeholder="First name">
                <input type="text" class="form-control" placeholder="Middle name">
                <input type="text" class="form-control" placeholder="Last name">
                <input type="text" class="form-control" placeholder="Prefix">
              </div>
            </div>  
            
            <div class="mb-3">
              <label for="role" class="form-label">Role:</label>
              <select class="form-select" id="role">
                <option selected disabled> Select role</option>
                <option> Faculty </option>
                <option> Staff </option>
              </select>
            </div> 

            <div class="mb-3">
              <label for="role" class="form-label">Position:</label>
              <select class="form-select" id="role">
                <option selected disabled> Select Position</option>
                <option> Dean </option>
                <option> Professor </option>
                <option> Program Head </option>
              </select>
            </div> 

            <div class="mb-3">
              <label for="role" class="form-label">Department:</label>
              <select class="form-select" id="role">
                <option selected disabled> Select Deparment</option>
                <option> College of Engineering and Computer Technology </option>
                <option> College of Business and Accountancy </option>
                <option> Senior Highschool Department </option>
              </select>
            </div>
            
            
            <div class="mb-3">
              <label for="accountNo" class="form-label">Account Number:</label>
                <input type="number" class="form-control" id="accountNo" placeholder="0000 1111 2222 3333">
              </div>
            </div>  
            
        </form>
      </div>


      <div class="modal-footer border-0 justify-content-center">
        <button type="button" class="btn text-white px-5" style="border-radius: 25px; background-color: #F1CA57;">CREATE</button>
      </div>
    </div>
  </div>
</div>