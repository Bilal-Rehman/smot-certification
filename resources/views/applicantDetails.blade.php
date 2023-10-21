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
    <div class="container" style="margin-top: 100px ">
        <div class="container home mt-5 align-items-center">
            <div>
                <p><strong>ID:</strong> {{ $applicant->id }}</p>
                <p><strong>Applicant Name:</strong> {{ $applicant->applicantName }}</p>
                <p><strong>Father's Name:</strong> {{ $applicant->fatherName }}</p>
                <p><strong>Date of Birth:</strong> {{ $applicant->dateofBirth }}</p>
                <p><strong>CNIC:</strong> {{ $applicant->cnic }}</p>
                <p><strong>Domicile:</strong> {{ $applicant->domicile }}</p>
                <p><strong>Gender:</strong> {{ $applicant->gender }}</p>
                <p><strong>Cell Number:</strong> {{ $applicant->cellNumber }}</p>
                <p><strong>Residential Address:</strong> {{ $applicant->residentialAddress }}</p>
                <p><strong>Permanent Address:</strong> {{ $applicant->permanentAddress }}</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Machine Type</th>
                    <th>Production Management (40)</th>
                    <th>Quality Management (40)</th>
                    <th>Basic Knowledege (20)</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Lock Stitch</b></td>
                    <td>24</td>
                    <td>19.23</td>
                    <td>16</td>
                    <td>59.23</td>
                    <td>Level 1</td>
                    <td><input type="text" placeholder="Remarks"></td>
                </tr>
                <tr>
                    <td><b>Overlock</b></td>
                    <td>25.5</td>
                    <td>32.31</td>
                    <td>10</td>
                    <td>67.81</td>
                    <td>Level 2</td>
                    <td><input type="text" placeholder="Remarks"></td>
                </tr>
                <tr>
                    <td><b>Flat Lock</b></td>
                    <td>36.5</td>
                    <td>33.85</td>
                    <td>20</td>
                    <td>90.36</td>
                    <td>Level 5</td>
                    <td><input type="text" placeholder="Remarks"></td>
                </tr>
        </table>
        <div class="m-3 text-end">
            <button class="btn btn-primary" onclick="downloadApplicantData({{ $applicant->id }})">Download as
                Excel</button>
        </div>

    </div>
    <script>
        function downloadApplicantData(selectedApplicantId) {
            if (selectedApplicantId) {
                const filteredData = {!! json_encode([$applicant]) !!};

                const worksheet = XLSX.utils.json_to_sheet(filteredData);
                const workbook = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(workbook, worksheet, 'ApplicantData');
                const excelBuffer = XLSX.write(workbook, {
                    bookType: 'xlsx',
                    type: 'array'
                });

                saveAsExcelFile(excelBuffer, 'Applicant_Data_' + selectedApplicantId);
            } else {
                alert("Please select an applicant first.");
            }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

</body>

</html>
