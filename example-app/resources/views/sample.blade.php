<!doctype html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class=" d-flex vh-100">
    <div class="bg-light border-end border-primary col-2 h-100">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">サイドバー</span>
        </a>
        <ul>
            <li>リンク</li>
            <li>リンク</li>
            <li>リンク</li>
            <li>リンク</li>
            <li>リンク</li>
            <li>リンク</li>
        </ul>

    </div>
    <div class="container-fluid h-100">
        <div class="container-fluid vh-100">
            <p class="fs-6">Service > Distributions</p>
            <div class="d-flex flex-column h-100">

                <div>
                    <div class="d-flex  justify-content-sm-between">
                        <div>
                            <h2>Distributions(150)</h2>
                        </div>
                        <div>
                            <button class="btn btn-outline-secondary rounded-pill disabled">View details</button>
                            <button class="btn btn-outline-secondary rounded-pill disabled">Edit</button>
                            <button class="btn btn-outline-secondary rounded-pill disabled">Delete</button>
                            <button class="btn btn-primary rounded-pill">Launch DB instance</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-sm-between align-items-center">
                        <div class="col-sm-3 mx-lg-4 ">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded" placeholder="Search"
                                       aria-label="Search"
                                       aria-describedby="search-addon"/>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <button type="button" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
                                    </svg>
                                    <span class="visually-hidden">Button</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <div class="overflow-auto h-100">
                        <table class="table text-nowrap mb-0">
                            <thead>
                            <tr>
                                <th class="sticky-top bg-white z-1"><input class="form-check-input"
                                                                           type="checkbox" value=""
                                                                           id="flexCheckDefault"></th>
                                <th class="sticky-top bg-white z-1" scope="col">DistributionID</th>
                                <th class="sticky-top bg-white z-1" scope="col">State</th>
                                <th class="sticky-top bg-white z-1" scope="col">Domain name</th>
                                <th class="sticky-top bg-white z-1" scope="col">Delivery method</th>
                                <th class="sticky-top bg-white z-1" scope="col">SSL Certificate</th>
                                <th class="sticky-top bg-white z-1" scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>AIWUINOUVRL103</td>
                                <td class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                    Deactivated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>RTMP</td>
                                <td>Custom</td>
                                <td>Deployed</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BKASCRBKFWOO54</td>
                                <td class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                    Deactivated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Custom</td>
                                <td>Deployed</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                    Deactivated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                </th>
                                <td>BLUDPSDMUFA100</td>
                                <td class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
                                    </svg>
                                    Activated
                                </td>
                                <td>abcdef01234567899999999</td>
                                <td>Web</td>
                                <td>Default</td>
                                <td>Pending</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>


