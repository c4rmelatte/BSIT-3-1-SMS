<style>

.card-container {
    height: auto;
    padding-left: 10px;
    padding-right: 10px;    
    margin-left: 150px;
    overflow: hidden; /* Prevent internal scrollbars */
}

.card {
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    margin-top:40px;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
    width: 100%;
}

.card:hover {
    transform: scale(1.03);
}

.card-img-wrapper {
    overflow: hidden;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    position: relative;
    width: 100%;
    height: 200px;
}

.card-img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    max-height: 100%;
    transition: transform 0.3s;
}

.card-img-wrapper:hover .card-img {
    transform: scale(1.05);
}
.card-body {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    color: #ffffff;
    background-color: rgba(0, 0, 0, 0.6); 
    background-size: auto;
    
}


.card-department {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
}

.card-title {
    font-size: 2rem;
    font-weight: 800;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    margin: 0;
}

.card-text {
    font-size: 16px;
    line-height: 1.4;
    font-style: italic;
    margin-top: 5px;
}

.button-container {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 10px;
    background-color: #fffffF;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.btn-action {
    padding: 6px 10px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    border: 1px solid transparent;
}

.btn-edit {
    background-color: #ffc107;
    color: #ffffff;
    height:40px;
    width: 70px;
    margin-top:8px;
}

.btn-delete {
    background-color: #dc3545;
    color: #ffffff;
    height:40px;
    width: 70px;
    margin-top:8px;
}

.btn-action:hover {
    opacity: 0.9;
}
</style>

<!-- Building Cards -->
<div class="container card-container" style="margin-top: 120px;">
    <div class="row justify-content-start"> <!-- Use justify-content-center to center align cards -->


        @foreach($buildings as $building)
            <div class="col-md-4 mb-4"> <!-- Adjust the column size for responsive layout -->
                <div class="card">
                    <div class="card-img-wrapper">
                        <img src="{{ $building->image }}" class="card-img" alt="{{ $building->name }}">
                        <div class="card-body"> <!-- Move card-body here to overlay -->
                            <p class="card-department">{{ $building->department->name }} Department</p>
                            <h5 class="card-title">{{ $building->name }}</h5>
                            <p class="card-text">{{ $building->description }}</p>
                        </div>
                    </div>
                        <div class="button-container">
                            <a href="{{ route('buildings.edit', $building->id) }}" class="btn-action btn-edit">Edit
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('buildings.destroy', $building->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-delete" onclick="event.stopPropagation();">Delete
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>
