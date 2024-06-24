@extends('template.template')
@section('content')
    <div class="container-xl mt-4">
        <div class="users-header d-flex align-items-center mb-3">
            <div class="header-title p-2 flex-grow-1">
                <h1>Users</h1>
                <p>All the person handling the system.</p>
            </div>
            <div class="header-export pe-3">
                <a href="#">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                    <span>Export</span>
                </a>
            </div>
        </div>
        <div class="container p-4 mt-2 mb-5 jlcard-container">
            <div class="row row-cols-1 row-cols-lg-3 gy-3">
                <div class="col">
                    <div class="card text-bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">000</h5>
                            <p class="card-text">Admins.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">000</h5>
                            <p class="card-text">Staffs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-light mb-3">
                        <div class="card-body">
                            <h5 class="card-title">000</h5>
                            <p class="card-text">Others.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="users-table">
            <h1>All users(000)</h1>
            <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
                <div class="container-xl">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item border">
                                <a class="nav-link active" href="#" aria-current="page">View All</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="#">Admins</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="#">Staffs</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="#">Others</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" aria-label="Search" placeholder="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="table-responsive-lg">
                <table class="table table table-light table-hover mt-5 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col-1">#</th>
                            <th scope="col-1">First</th>
                            <th scope="col-1">Last</th>
                            <th scope="col-1">Handle</th>
                            <th scope="col-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
