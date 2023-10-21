<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Machine Type</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container mb-5">
        <nav class="navbar bg-light fixed-top" style="box-shadow: 0 0 30px rgb(0 0 0 / 20%);">
            <div class="container d-flex justify-content-center">
                <h1 class="">Applicant Details</h1>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="text-end">
            <button class="btn btn-primary mt-5 align-end" onclick="downloadAllData()">Download All Data</button>
        </div>
        <div class="container home mt-5 align-items-center">
            <table class="table table-bordered table-light table-resposive" data-aos="flip-left"
                style="box-shadow: 0 0 30px rgb(0 0 0 / 12%);">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Applicant Id</th>
                        <th scope="col">Phase Id</th>
                        <th scope="col">Acticity Id</th>
                        <th scope="col">Description Id</th>
                        <th scope="col">Points</th>
                        <th class="col-2" scope="col"></th>
                        <th class="col-2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allUserResponse as $row)
                        <tr>
                            <td>{{ $row['id'] }}</td>
                            <td>{{ $row['applicantId'] }}</td>
                            <td>{{ $row['phaseId'] }}</td>
                            <td>{{ $row['activityId'] }}</td>
                            <td>{{ $row['descriptionId'] }}</td>
                            <td>{{ $row['point'] }}</td>
                            <td>

                                <form action="applicantDetails" method="GET" id="form">
                                    @csrf
                                    <input type="text" class="form-control" id="id" name="id"
                                        value="{{ $row['id'] }}" hidden>
                                    <input type="text" class="form-control" id="applicantId" name="applicantId"
                                        value="{{ $row['email'] }}" hidden>
                                    <input type="text" class="form-control" id="phaseId" name="phaseId"
                                        value="{{ $row['name'] }}" hidden>
                                    <input type="text" class="form-control" id="activityId" name="activityId"
                                        value="{{ $row['phone'] }}" hidden>
                                    <input type="text" class="form-control" id="descriptionId" name="descriptionId"
                                        value="{{ $row['date'] }}" hidden>
                                    <input type="number" class="form-control" id="points" name="points"
                                        value="{{ $row['no_people'] }}" hidden>

                                    <form action="applicantDetails" method="get">
                                        @csrf
                                        <input type="text" class="form-control" id="id" name="id"
                                            value="{{ $row['id'] }}" hidden>
                                        <button type="submit" class="btn btn-outline-warning" id="btn-edit"> View
                                            Details
                                            <i class="fa-solid fa-pencil"></i></button>
                                    </form>
                                </form>
                            </td>
                            <script>
                                $(document).ready(function() {
                                    $("#btn-edit").click(function(event) {
                                        event.preventDefault();
                                        $("#form").submit();
                                    });
                                });
                            </script>
                            <td>
                                <button class="btn btn-outline-primary" id="applicantId" data-bs-toggle="modal"
                                    data-bs-target="#myModal"
                                    onclick="downloadApplicantData({{ $row['applicantId'] }})"> DownLoad <i
                                        class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

    <script>
        function downloadAllData() {
            const userResponses = {!! json_encode($allUserResponse) !!};

            const worksheet = XLSX.utils.json_to_sheet(userResponses);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, 'UserResponses');
            const excelBuffer = XLSX.write(workbook, {
                bookType: 'xlsx',
                type: 'array'
            });

            saveAsExcelFile(excelBuffer, 'all_user_responses');
        }

        function saveAsExcelFile(buffer, filename) {
            const data = new Blob([buffer], {
                type: 'application/octet-stream'
            });
            const url = window.URL.createObjectURL(data);
            const link = document.createElement('a');
            link.href = url;
            link.setAttribute('download', `${filename}.xlsx`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>

</html>
